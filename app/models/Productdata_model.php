<?php

class Productdata_model
{
    private $db;

    private $cate1 = 'Drinks';
    private $cate2 = 'Deserts';

    private $subcate1_1 = 'Coffee';
    private $subcate1_2 = 'Noncoffee';

    private $subcate2_1 = 'Ice Cream';
    private $subcate2_2 = 'Cake';
    private $subcate2_3 = 'Cupcake';
    private $subcate2_4 = 'Cookies';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProductData_Expensive(){
        $queryFiltering = "SELECT * FROM data_products ORDER BY CAST(price as FLOAT) DESC";
        $this->db->query($queryFiltering);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_Cheapest(){
        $queryFiltering = "SELECT * FROM data_products ORDER BY CAST(price as FLOAT) ASC";
        $this->db->query($queryFiltering);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_coffee()
    {
        $queryCoffee = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryCoffee);
        $this->db->bind('category', $this->cate1);
        $this->db->bind('subcategory', $this->subcate1_1);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_noncoffee()
    {
        $queryNoncoffee = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryNoncoffee);
        $this->db->bind('category', $this->cate1);
        $this->db->bind('subcategory', $this->subcate1_2);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_icecream()
    {
        $queryIcecream = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryIcecream);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_1);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_cake()
    {
        $queryCake = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryCake);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_2);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_cupcake()
    {
        $queryCupcake = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryCupcake);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_3);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProductData_cookies()
    {
        $queryCookies = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory) ORDER BY product_name ASC";
        $this->db->query($queryCookies);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_4);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function productCodeGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_products');
        $this->db->execute();
        $resultCode = $this->db->singleSet()['COUNT(id)'];
        $time = date('is');
        $date = date('dm');
        if ($resultCode < 9) {
            $availableCode =  "PRDCT" . "000" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 99) {
            $availableCode = "PRDCT" . "00" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 999) {
            $availableCode = "PRDCT" . "0" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 9999) {
            $availableCode = "PRDCT" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        }
    }

    public function imageCodeGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_products');
        $this->db->execute();
        $resultCode = $this->db->singleSet()['COUNT(id)'];
        $time = date('is');
        $date = date('dm');
        if ($resultCode < 9) {
            $availableCode =  "PRDCT" . ($resultCode + 1) . "000" . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 99) {
            $availableCode = "PRDCT" . ($resultCode + 1) .  "00" . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 999) {
            $availableCode = "PRDCT" . ($resultCode + 1) . "0" . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 9999) {
            $availableCode = "PRDCT" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        }
    }

    public function productImageUpload($folderName)
    {
        $idGenerate = $this->imageCodeGenerate();

        $namefile = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpname = $_FILES['image']['tmp_name'];

        if ($error === 4) {
            // echo "<script>alert('empty image')</script>";

            // $error_message_image_empty = true;
            // header("Location:" . BASEURL . "/admin/datapersonal");
            return 3;
        }

        $extentionImageValid = ['jpg', 'jpeg', 'png'];
        $extentionImage = explode('.', $namefile);
        $extentionImage = strtolower(end($extentionImage));
        if (!in_array($extentionImage, $extentionImageValid)) {
            // echo "<script>alert('not image')</script>";
            // $error_message_image_not = true;
            // header("Location:" . BASEURL . "/admin/datapersonal");
            return 4;
        }

        if ($filesize > 15000000) {
            // echo "<script>alert('oversize')</script>";
            // header("Location:" . BASEURL . "/admin/datapersonal");
            return 5;
        }

        $fileRename = $idGenerate . "." . $extentionImage;

        move_uploaded_file($tmpname, 'img/product_images/' . $folderName . "/" . $fileRename);

        return $fileRename;
    }

    public function addProduct($data)
    {
        //sedondary Data
        $product_code = $this->productCodeGenerate();

        if ($data['category'] == "Drinks") {
            $subcategory = $data['drink'];
            //folder directory for function productImageUpload
            $folderImage = str_replace(' ', '', strtolower($subcategory));
        } elseif ($data['category'] == "Deserts") {
            $subcategory = $data['desert'];
            //folder directory for function productImageUpload
            $folderImage = str_replace(' ', '', strtolower($subcategory));
        }

        $productimage = $this->productImageUpload($folderImage);
        if (!$productimage) {
            return 2;
        }

        //content
        for ($i = 1; $i <= $data['amount_content']; $i++) {
            $queryContent = "INSERT INTO product_contents SET product_code = :code, content = :content";
            $this->db->query($queryContent);
            $this->db->bind('code', $product_code);
            $this->db->bind('content', $data['content_' . $i]);
            $this->db->execute();
        }

        //rating
        $queryRating = "INSERT INTO product_rating SET product_code = :code, rating = :rating";
        $this->db->query($queryRating);
        $this->db->bind('code', $product_code);
        $this->db->bind('rating', '0');
        $this->db->execute();
        //type
        $queryType = "INSERT INTO product_type SET product_code = :code, category = :category, sub_category = :subcategory";
        $this->db->query($queryType);
        $this->db->bind('code', $product_code);
        $this->db->bind('category', $data['category']);
        $this->db->bind('subcategory', $subcategory);
        $this->db->execute();

        //primary_data
        $queryPrimary = "INSERT INTO data_products SET product_code = :code, product_name = :productname, image = :image, price = :price, total_sold = :totalsold";
        $this->db->query($queryPrimary);
        $this->db->bind('code', $product_code);
        $this->db->bind('productname', $data['product_name']);
        $this->db->bind('image', $productimage);
        $this->db->bind('price', $data['price']);
        $this->db->bind('totalsold', '0');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editProduct($data)
    {
        //sedondary Data
        $product_code = $data['product_code'];

        if ($data['category'] == "Drinks") {
            $subcategory = $data['drink'];
            //folder directory for function productImageUpload
            $folderImage = str_replace(' ', '', strtolower($subcategory));
        } elseif ($data['category'] == "Deserts") {
            $subcategory = $data['desert'];
            //folder directory for function productImageUpload
            $folderImage = str_replace(' ', '', strtolower($subcategory));
        }

        $productimage = $this->productImageUpload($folderImage);
        $chckimg = "image = '" . $productimage . "', ";
        if (!$productimage) {
            return 2;
        }
        
        if($productimage == 3){
            $chckimg = "";
        }

        
        //type
        $queryType = "UPDATE product_type SET category = :category, sub_category = :subcategory WHERE product_code = '$product_code'";
        $this->db->query($queryType);
        $this->db->bind('category', $data['category']);
        $this->db->bind('subcategory', $subcategory);
        $this->db->execute();
        //content
        $queryRemove = "DELETE FROM product_contents WHERE product_code = '$product_code'";
        $this->db->query($queryRemove);
        $this->db->execute();
        
        for ($i = 1; $i <= $data['amount_content']; $i++) {
            $queryContent = "INSERT INTO product_contents SET product_code = :code, content = :content";
            $this->db->query($queryContent);
            $this->db->bind('code', $product_code);
            $this->db->bind('content', $data['content_' . $i]);
            $this->db->execute();
        }

        //primary_data
        $queryPrimary = "UPDATE data_products SET product_name = :productname," . $chckimg . " price = :price WHERE product_code = '$product_code'";
        $this->db->query($queryPrimary);
        $this->db->bind('productname', $data['product_name']);
        $this->db->bind('price', $data['price']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduct($id){
        $queryPrimary = "DELETE FROM data_products WHERE product_code = '$id'";
        $this->db->query($queryPrimary);
        $this->db->execute();

        $productType = "DELETE FROM product_type WHERE product_code = '$id'";
        $this->db->query($productType);
        $this->db->execute();

        $productRating = "DELETE FROM product_rating WHERE product_code = '$id'";
        $this->db->query($productRating);
        $this->db->execute();

        $productContents = "DELETE FROM product_contents WHERE product_code = '$id'";
        $this->db->query($productContents);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function mostOrdered($optionLimit = false){
        $queryMostOrder = "SELECT *, COUNT(ordered_items) FROM transaction_order GROUP BY ordered_items HAVING COUNT(ordered_items) > 1 ORDER BY COUNT(ordered_items) DESC";
        if($optionLimit == true){
            $queryMostOrder = "SELECT *, COUNT(ordered_items) FROM transaction_order GROUP BY ordered_items HAVING COUNT(ordered_items)>1 ORDER BY COUNT(ordered_items) DESC LIMIT 0, 3";
        }

        $this->db->query($queryMostOrder);
        $this->db->execute();
        $result = $this->db->resultSet();

        $newArr = [];
        foreach ($result as $new) {
            $this->db->query("SELECT image FROM data_products WHERE product_code = '" . $new['product_code'] . "'");
            $this->db->execute();
            $img = $this->db->singleSet()['image'];

            $this->db->query("SELECT sub_category FROM product_type WHERE product_code = '" . $new['product_code'] . "'");
            $this->db->execute();
            $directory = $this->db->singleSet()['sub_category'];

            $collect = [
                'product_code' => $new['product_code'],
                'product_name' => $new['ordered_items'],
                'product_amount' => $new['amount'],
                'product_price' => $new['price'],
                'product_image' => $img,
                'product_directory' => str_replace(' ', '', strtolower($directory)),
                'total_order' => $new['COUNT(ordered_items)']
            ];

            array_push($newArr, $collect);
        }
        return $newArr;
    }
}
