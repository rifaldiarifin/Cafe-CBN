<?php

class Manager extends Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['recentTransaction'] = $this->model('Cashierdata_model')->getAllHistoryTransactions(true, true, 0, 15);
        $data['mostOrdered'] = $this->model('Productdata_model')->mostOrdered(true);
        $data['allActivity'] = $this->model('Useraccount_model')->getAllActivity(true);
        $this->view('templates/mainheader', $data);
        $this->view('manager/index', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function activity()
    {
        $data['title'] = "Activity";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['activityLog'] = $this->model('Useraccount_model')->getAllActivity();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $this->view('templates/mainheader', $data);
        $this->view('manager/activity_log/activity', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function employee()
    {
        $data['title'] = "Employee";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['empAllSession'] = $this->model('Employee_model')->getAllSessionEmployee();
        $data['empAllUnknown'] = $this->model('Employee_model')->getAllUnknownSessionEmployee();
        $data['empShiftA'] = $this->model('Employee_model')->getEmployeeShiftA();
        $data['empShiftB'] = $this->model('Employee_model')->getEmployeeShiftB();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['CheckAll'] = $this->library('SearchDataDB')->checkAvailableByCondition("personal_id", "personal_level", "WHERE level = 'Cashier'");
        $this->view('templates/mainheader', $data);
        $this->view('manager/employee/employee', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function employeeinfo($id)
    {
        $data['title'] = "Personal Info";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['SelectByID'] = $this->library('SearchDataDB')->selectByID("data_personal", "id", $id);
        $this->view('templates/mainheader', $data);
        $this->view('manager/employee/employeeinfo', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function productlist()
    {
        $data['title'] = "Product List";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['productcode'] = $this->model('Productdata_model')->productCodeGenerate();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['ValueGenerate'] = $this->library('ValueGenerate');

        $data['drinksCoffee'] = $this->model('Productdata_model')->getAllProductData_coffee();
        $data['drinksNoncoffee'] = $this->model('Productdata_model')->getAllProductData_noncoffee();
        $data['desertsIcecream'] = $this->model('Productdata_model')->getAllProductData_icecream();
        $data['desertsCake'] = $this->model('Productdata_model')->getAllProductData_cake();
        $data['desertsCupcake'] = $this->model('Productdata_model')->getAllProductData_cupcake();
        $data['desertsCookies'] = $this->model('Productdata_model')->getAllProductData_cookies();
        $this->view('templates/mainheader', $data);
        $this->view('manager/menu_list/productlist', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function productinfo($id)
    {
        $data['title'] = "Product info";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['productcode'] = $this->model('Productdata_model')->productCodeGenerate();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['SelectByID'] = $this->library('SearchDataDB')->selectByID("data_products", "product_code", $id);
        
        $this->view('templates/mainheader', $data);
        $this->view('manager/menu_list/productinfo', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function transaction()
    {
        $data['title'] = "Transaction";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['getAllCashier'] = $this->model('Useraccount_model')->getAllUserCashierData();
        $data['HistoryTransaction'] = $this->model('Cashierdata_model')->getAllHistoryTransactions(true, false, 0, 0);
        $this->view('templates/mainheader', $data);
        $this->view('manager/transaction/transaction', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function settings()
    {
        $data['title'] = "Settings";
        $data['sessionaccount'] = $_SESSION['accountsession']['personal_id'];
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $this->view('templates/mainheader', $data);
        $this->view('manager/settings', $data);
        $this->view('templates/mainfooter', $data);
    }
    
    public function addproduct()
    {
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        if ($this->model('Productdata_model')->addProduct($_POST) > 0) {
            $this->model('Useraccount_model')->updateActivity("Add Product",  "# have added a new product.");
            FlashMessage::setFlash("New Product", "New product added successfully", "success");
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        } else {
            FlashMessage::setFlash("Failed", "Failed to add new menu :(", "error");
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        }
    }

    public function editproduct()
    {
        if ($this->model('Productdata_model')->editProduct($_POST) > 0) {
            $this->model('Useraccount_model')->updateActivity("Edit Product",  "# have changed an info from the product.");
            FlashMessage::setFlash("Change Product", "Product info changed successfully", "success");
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        } else {
            FlashMessage::setFlash("Failed", "Failed to add new menu :(", "error");
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        }
    }

    public function deleteproduct($id){
        if($this->model('Productdata_model')->deleteProduct($id) > 0){
            $this->model('Useraccount_model')->updateActivity("Remove Product",  "# have delete one of the products.");
            FlashMessage::setFlash('Success', 'The product has been successfully removed', 'success');
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Something error :(', 'error');
            header("Location:" . BASEURL . "/manager/productlist");
            exit;
        }
    }

    public function newshiftA($id){
        if($this->model('Employee_model')->setShiftA($id) > 0){
            $this->model('Useraccount_model')->updateActivity("Confirm to A",  "# have confirmed new session employee to session A, with employee id " . $id . ".");
            FlashMessage::setFlash('Confirm to A', 'Confirm new session with Employee ID ' . $id , 'success');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Something Error!', 'error');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        }
    }

    public function newshiftB($id){
        if($this->model('Employee_model')->setShiftB($id) > 0){
            $this->model('Useraccount_model')->updateActivity("Confirm to B",  "# have confirmed new session employee to session B, with employee id " . $id . ".");
            FlashMessage::setFlash('Confirm to B', 'Confirm new session with Employee ID ' . $id , 'success');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Something Error!', 'error');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        }
    }

    public function setshiftA($id){
        if($this->model('Employee_model')->setShiftA($id) > 0){
            $this->model('Useraccount_model')->updateActivity("Set to A",  "# have changed employee shift session from B to session A, with employee id " . $id . ".");
            FlashMessage::setFlash('Set to A', 'Set Shift to A with Employee ID ' . $id , 'success');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Something Error!', 'error');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        }
    }

    public function setshiftB($id){
        if($this->model('Employee_model')->setShiftB($id) > 0){
            $this->model('Useraccount_model')->updateActivity("Set to B",  "# have changed employee shift session from A to session B, with employee id " . $id . ".");
            FlashMessage::setFlash('Set to B', 'Set Shift to B with Employee ID ' . $id , 'success');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'Something Error!', 'error');
            header("Location:" . BASEURL . "/manager/employee");
            exit;
        }
    }

    public function livesearchact(){
        echo json_encode($_POST);
    }

    public function livesearchtransaction(){
        echo json_encode($this->model('Cashierdata_model')->liveSearchTransaction($_POST));
    }

    public function openprofile(){
        echo json_encode($this->model('Configaccount_model')->openProfile($_POST));
    }

    public function signout()
    {
        if ($this->model('Usersignin_model')->signout() > 0) {
            $this->model('Useraccount_model')->updateActivity("Signout",  "# signed out of the device.");
            header("Location:" . BASEURL);
            exit;
        } else {
            FlashMessage::setFlash("Error", "Something error :(", "error");
            header("Location:" . BASEURL . "/manager/settings");
        }
    }
}
