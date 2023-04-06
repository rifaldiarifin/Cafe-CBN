<?php

class Cashierdata_model
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

    public function numberShortGenerate($value, $precision = 2)
    {
        if ($value < 1000) {
            $n_format = $value;
        } elseif ($value < 1000000) {
            $n_format = number_format($value / 1000, 0) . 'K';
        } elseif ($value < 1000000000) {
            $n_format = number_format($value / 1000000, $precision) . 'M';
        } elseif ($value < 1000000000000) {
            $n_format = number_format($value / 1000000, $precision) . 'B';
        }
        return $n_format;
    }

    public function getAllProduct_Coffee()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate1);
        $this->db->bind('subcategory', $this->subcate1_1);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProduct_Noncoffee()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate1);
        $this->db->bind('subcategory', $this->subcate1_2);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProduct_Icecream()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_1);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProduct_Cake()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_2);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProduct_Cupcake()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_3);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllProduct_Cookies()
    {
        $queryProduct = "SELECT * FROM data_products WHERE product_code IN (SELECT product_code FROM product_type WHERE category = :category AND sub_category = :subcategory)";

        $this->db->query($queryProduct);
        $this->db->bind('category', $this->cate2);
        $this->db->bind('subcategory', $this->subcate2_4);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllHistoryTransactions($option = false, $option2 = false, $start, $limit)
    {
        $idsession = $_SESSION['accountsession']['personal_id'];
        $queryHistory = "SELECT * FROM data_transactions WHERE order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '$idsession') ORDER BY id DESC";
        if ($option2 == true) {
            $queryHistory = "SELECT * FROM data_transactions WHERE order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '$idsession') ORDER BY id DESC LIMIT $start, $limit";
        }
        if ($option === true) {
            $queryHistory = "SELECT * FROM data_transactions ORDER BY id DESC";
            if ($option2 == true) {
                $queryHistory = "SELECT * FROM data_transactions ORDER BY id DESC LIMIT $start, $limit";
            }
        }

        $this->db->query($queryHistory);
        $this->db->execute();
        $result = $this->db->resultSet();

        $arrPack = [];
        foreach ($result as $result2) {

            $code = $result2['order_code'];
            $this->db->query("SELECT * FROM transaction_order WHERE order_code = '$code'");
            $this->db->execute();
            $trns_order = $this->db->resultSet();

            $code = $result2['order_code'];
            $this->db->query("SELECT employee_id FROM transaction_empid WHERE order_code = '$code'");
            $this->db->execute();
            $empid = $this->db->singleSet()['employee_id'];

            $this->db->query("SELECT name FROM data_personal WHERE personal_id = '$empid'");
            $this->db->execute();
            $empname = $this->db->singleSet()['name'];


            $orderedArr = [];
            $amountArr = [];
            $priceArr = [];
            foreach ($trns_order as $asArr) {
                array_push($orderedArr, $asArr['ordered_items']);
                array_push($amountArr, $asArr['amount']);
                array_push($priceArr, "Rp " . $this->numberShortGenerate($asArr['price']));
            }

            $ordername = join(', ', $orderedArr);
            $amount = join(', ', $amountArr);
            $price = join(', ', $priceArr);


            $trnspack = [
                'employee_id' => $empid,
                'employee_name' => $empname,
                'no_order' => $result2['order_code'],
                'ordered_items' => $ordername,
                'amount' => $amount,
                'price' => $price,
                'date' => $result2['date'],
                'time' => $result2['time'],
                'total_bill' => "Rp " . number_format($result2['total_bill'], 0, ',', '.'),
                'status' => $result2['status']
            ];
            array_push($arrPack, $trnspack);
        }

        return $arrPack;
    }

    public function codeOrderGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_transactions');
        $this->db->execute();
        $resultCode = $this->db->singleSet()['COUNT(id)'];
        $time = date('is');
        $date = date('dm');
        if ($resultCode < 9) {
            $availableCode =  "TR" . "0000" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 99) {
            $availableCode = "TR" . "000" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 999) {
            $availableCode = "TR" . "00" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 9999) {
            $availableCode = "TR" . "0" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        } elseif ($resultCode < 99999) {
            $availableCode = "TR" . ($resultCode + 1) . $date . $time;
            return $availableCode;
        }
    }

    public function createTransaction($data)
    {
        $code_order = $this->codeOrderGenerate();
        $id_account = $_SESSION['accountsession']['personal_id'];
        $total_rows = $data['total_rows'];
        $total_bill = $data['total_bill'];
        $date = date("d - m - Y");
        $time = date("H : i");
        $status = 'unread';

        for ($x = 1; $x <= $total_rows; $x++) {
            $queryOrder = "INSERT INTO transaction_order SET order_code = :code, product_code = :productcode, ordered_items = :ordereditems, amount = :amount, price = :price";
            $this->db->query($queryOrder);
            $this->db->bind('code', $code_order);
            $this->db->bind('productcode', $data['prodcode_' . $x]);
            $this->db->bind('ordereditems', $data['order_' . $x]);
            $this->db->bind('amount', $data['amount_' . $x]);
            $this->db->bind('price', $data['price_' . $x]);
            $this->db->execute();

            $this->db->query("SELECT total_sold FROM data_products WHERE product_code = :prodcode");
            $this->db->bind('prodcode', $data['prodcode_' . $x]);
            $this->db->execute();
            $res = $this->db->singleSet()['total_sold'];
            
            $querySold = "UPDATE data_products SET total_sold = :total_sold WHERE product_code = :product_code";
            $this->db->query($querySold);
            $this->db->bind('total_sold', $res + $data['amount_' . $x]);
            $this->db->bind('product_code', $data['prodcode_' . $x]);
            $this->db->execute();
        }

        $queryEmp = "INSERT INTO transaction_empid SET order_code = :code, employee_id = :emp";
        $this->db->query($queryEmp);
        $this->db->bind('code', $code_order);
        $this->db->bind('emp', $id_account);
        $this->db->execute();



        $queryTrnsc = "INSERT INTO data_transactions SET order_code = :code, date = :date, time = :time, total_bill = :totalbill, status = :sts";
        $this->db->query($queryTrnsc);
        $this->db->bind('code', $code_order);
        $this->db->bind('date', $date);
        $this->db->bind('time', $time);
        $this->db->bind('totalbill', $total_bill);
        $this->db->bind('sts', $status);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function clearNotifUnread($id)
    {
        $queryClearUnread = "UPDATE data_transactions SET status = 'read' WHERE status = 'unread'";
        $this->db->query($queryClearUnread);
        $this->db->execute();
    }

    public function liveSearchTransaction($data)
    {
        $personalID = $data['personalid'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];

        $date = $day . ' - ' . $month . ' - ' . $year;


        // if ($day == 'empty') {
        //     $date = $month . " - " . $year;
        // } else if ($month == 'empty') {
        //     $date = $day . " - " . $year;
        // } else if ($year == 'empty') {
        //     $date = $day . " - " . $month;
        // } else if (($day !== 'empty') && ($month !== 'empty')) {
        //     $date =  $year;
        // } else if (($day !== 'empty') && ($year !== 'empty')) {
        //     $date = $month;
        // } else if (($month !== 'empty') && ($year !== 'empty')) {
        //     $date = $day;
        // } else if (($day !== 'empty') && ($month !== 'empty') & ($year !== 'empty')) {
        //     $date = $day . " - " . $month . " - " . $year;
        // }

        $querySearch = "SELECT * FROM data_transactions WHERE order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '$personalID') OR date LIKE '%$date%' ORDER BY id DESC";

        $this->db->query($querySearch);
        $this->db->execute();
        $result = $this->db->resultSet();

        $arrPack = [];
        foreach ($result as $result2) {

            $code = $result2['order_code'];
            $this->db->query("SELECT * FROM transaction_order WHERE order_code = '$code'");
            $this->db->execute();
            $trns_order = $this->db->resultSet();

            $code = $result2['order_code'];
            $this->db->query("SELECT employee_id FROM transaction_empid WHERE order_code = '$code'");
            $this->db->execute();
            $empid = $this->db->singleSet()['employee_id'];

            $this->db->query("SELECT name FROM data_personal WHERE personal_id = '$empid'");
            $this->db->execute();
            $empname = $this->db->singleSet()['name'];


            $orderedArr = [];
            $amountArr = [];
            $priceArr = [];
            foreach ($trns_order as $asArr) {
                array_push($orderedArr, $asArr['ordered_items']);
                array_push($amountArr, $asArr['amount']);
                array_push($priceArr, "Rp " . $this->numberShortGenerate($asArr['price']));
            }

            $ordername = join(', ', $orderedArr);
            $amount = join(', ', $amountArr);
            $price = join(', ', $priceArr);


            $trnspack = [
                'employee_id' => $empid,
                'employee_name' => $empname,
                'no_order' => $result2['order_code'],
                'ordered_items' => $ordername,
                'amount' => $amount,
                'price' => $price,
                'date' => $result2['date'],
                'time' => $result2['time'],
                'total_bill' => "Rp " . number_format($result2['total_bill'], 0, ',', '.'),
                'status' => $result2['status']
            ];
            array_push($arrPack, $trnspack);
        }

        return $arrPack;
    }
}
