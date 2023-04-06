<?php

class Cashier extends Controller
{

    public function index()
    {
        $data['title'] = "Cashier";
        $data['sessionaccount'] = $_SESSION['accountsession']['personal_id'];
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['notifhistory'] = $this->library('SearchDataDB')->checkAvailableByCondition("status", "data_transactions", "WHERE status = 'unread' AND order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '" . $_SESSION['accountsession']['personal_id'] . "')");
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['Expensive'] = $this->model('Productdata_model')->getAllProductData_Expensive();
        $data['Cheapest'] = $this->model('Productdata_model')->getAllProductData_Cheapest();
        $data['Coffee'] = $this->model('Productdata_model')->getAllProductData_coffee();
        $data['Noncoffee'] = $this->model('Productdata_model')->getAllProductData_noncoffee();
        $data['Icecream'] = $this->model('Productdata_model')->getAllProductData_icecream();
        $data['Cake'] = $this->model('Productdata_model')->getAllProductData_cake();
        $data['Cupcake'] = $this->model('Productdata_model')->getAllProductData_cupcake();
        $data['Cookies'] = $this->model('Productdata_model')->getAllProductData_cookies();
        $data['HistoryTransaction'] = $this->model('Cashierdata_model')->getAllHistoryTransactions(false, false, 0, 0);
        $this->view('templates/interactheader', $data);
        $this->view('cashier/index', $data);
        $this->view('templates/interactfooter', $data);
    }

    public function createtransaction()
    {
        if ($this->model('Cashierdata_model')->createTransaction($_POST) > 0) {
            $this->model('Useraccount_model')->updateActivity("New transaction",  "Employee, # has made an order transaction with a total bill of Rp " . number_format($_POST['total_bill'], 2, ',', '.') . ".");
            FlashMessage::setFlash('Success', 'Order transaction successful, ' . date("d M Y") . ', <br>' . date("H : i") . '.', 'success');
            header("Location:" . BASEURL . "/cashier");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Somethinf error! :(', 'error');
            header("Location:" . BASEURL . "/cashier");
            exit;
        }
        // var_dump($_POST);
    }

    public function clearnotifunread()
    {
        $this->model('Cashierdata_model')->clearNotifUnread($_POST['id']);
    }

    public function openprofile()
    {
        echo json_encode($this->model('Configaccount_model')->openProfile($_POST));
    }

    public function livesearchmenu()
    {
        echo json_encode($this->model('SearchMenuCashier_model')->requestData($_POST));
    }

    public function signout()
    {
        if ($this->model('Usersignin_model')->signout() > 0) {
            $this->model('Useraccount_model')->updateActivity("Signout",  "# signed out of the device.");
            header("Location:" . BASEURL);
            exit;
        }
    }
}
