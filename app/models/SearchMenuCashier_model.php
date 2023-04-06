<?php

class SearchMenuCashier_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function requestData($data)
    {
        $code = $data['id'];
        $querySearch ="SELECT * FROM data_products WHERE product_code LIKE :keyword OR 
                                                          product_name LIKE :keyword OR
                                                                 price LIKE :keyword";
        $this->db->query($querySearch);
        $this->db->bind('keyword', "%$code%");
        $this->db->execute();
        $result = $this->db->resultSet();
        
        
        $arrPack = [];
        foreach($result as $result2){
            
            $code = $result2['product_code'];
            $this->db->query("SELECT sub_category FROM product_type WHERE product_code = '$code'");
            $this->db->execute();
            $img = $this->db->singleSet()['sub_category'];

            $menupack = [
                'product_code' => $result2['product_code'],
                'product_name' => $result2['product_name'],
                'price' => $result2['price'],
                'directory' => str_replace(' ', '', strtolower($img)),
                'image' => $result2['image'],
            ];
            array_push($arrPack, $menupack);
        }

        return $arrPack;
    }
}
