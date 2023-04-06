<?php

class Admin extends Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['useraccount'] = $this->model('Useraccount_model')->getAllUserAccountData();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['CheckAdmin'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Admin')");
        $data['CheckManager'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Manager')");
        $data['CheckCashier'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Cashier')");
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $this->view('templates/mainheader', $data);
        $this->view('admin/index', $data);
        $this->view('templates/mainfooter');
    }

    public function datapersonal()
    {
        $data['title'] = "Data Personal";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['useraccount'] = $this->model('Useraccount_model')->getAllUserAccountData();
        $data['useradmin'] = $this->model('Useraccount_model')->getAllUserAdminData();
        $data['usermanager'] = $this->model('Useraccount_model')->getAllUserManagerData();
        $data['usercashier'] = $this->model('Useraccount_model')->getAllUserCashierData();
        $data['idGenerate'] = $this->model('Useraccount_model')->idAccountGenerate();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $data['CheckAll'] = $this->library('SearchDataDB')->checkAvailable("id", "data_personal");
        $data['CountData'] = $this->library('SearchDataDB')->countData("id", "data_personal");
        $data['CheckAdmin'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Admin')");
        $data['CheckManager'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Manager')");
        $data['CheckCashier'] = $this->library('SearchDataDB')->checkAvailableByCondition("id", "data_personal", "WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = 'Cashier')");
        $this->view('templates/mainheader', $data);
        $this->view('admin/data_personal/datapersonal', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function personalinfo($id)
    {
        $data['title'] = "Personal Info";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['SingleSelectData'] = $this->library('SearchDataDB');
        $data['SelectByID'] = $this->library('SearchDataDB')->selectByID("data_personal", "id", $id);
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $this->view('templates/mainheader', $data);
        $this->view('admin/data_personal/personalinfo', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function activity()
    {
        $data['title'] = "Activity";
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $data['activityLog'] = $this->model('Useraccount_model')->getAllActivity();
        $data['SearchDataDB'] = $this->library('SearchDataDB');
        $this->view('templates/mainheader', $data);
        $this->view('admin/activity_log/activity', $data);
        $this->view('templates/mainfooter', $data);
    }

    public function settings()
    {
        $data['title'] = "Settings";
        $data['sessionaccount'] = $_SESSION['accountsession']['personal_id'];
        $data['sessionData'] = $this->model('Usersignin_model')->sessionData();
        $this->view('templates/mainheader', $data);
        $this->view('admin/settings', $data);
        $this->view('templates/mainfooter', $data);
    }

    //function method

    public function addaccount()
    {
        if ($this->model('Useraccount_model')->addaccount($_POST) > 0) {
            $this->model('Useraccount_model')->updateActivity("New account",  "# have added a new account.");
            FlashMessage::setFlash('Success', 'Account added successfully', 'success');
            header("Location:" . BASEURL . "/admin/datapersonal");
            exit;
        }
    }

    public function editaccount()
    {
        if ($this->model('Useraccount_model')->editAccount($_POST) > 0) {
            $this->model('Useraccount_model')->updateActivity("Edit account",  "# have changed data from one of the accounts");
            FlashMessage::setFlash('Success', 'Account changed successfully', 'success');
            header("Location:" . BASEURL . "/admin/datapersonal");
            exit;
        }
    }

    public function deleteaccount($id)
    {
        if ($this->model('Useraccount_model')->deleteAccount($id) > 0) {
            $this->model('Useraccount_model')->updateActivity("Delete account",  "# has deleted one's account");
            FlashMessage::setFlash('Success', 'Account successfully deleted', 'success');
            header("Location:" . BASEURL . "/admin/datapersonal");
            exit;
        } else {
            FlashMessage::setFlash('Error!', 'This account is currently signed on this device.', 'error');
            header("Location:" . BASEURL . "/admin/datapersonal");
            exit;
        }
    }

    public function openprofile()
    {
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
            header("Location:" . BASEURL . "/admin/settings");
        }
    }
}
