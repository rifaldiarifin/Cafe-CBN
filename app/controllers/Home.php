<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Sign in";
        $this->view('templates/formheader', $data);
        $this->view('home/index');
        $this->view('templates/formfooter');
    }

    public function checkdata()
    {
        $mdl_checkdata = $this->model('Usersignin_model')->checkData($_POST);
        if ($mdl_checkdata == 1) {
            $this->model('Useraccount_model')->updateActivity("Signin",  "# signed in of the device.");
            header("Location:" . BASEURL . "/admin");
        } elseif ($mdl_checkdata == 2) {
            $this->model('Useraccount_model')->updateActivity("Signin",  "# signed in of the device.");
            header("Location:" . BASEURL . "/manager");
        } elseif ($mdl_checkdata == 3) {
            $this->model('Useraccount_model')->updateActivity("Signin",  "# signed in of the device.");
            header("Location:" . BASEURL . "/cashier");
        } else {
            FlashFormMessage::setFormFlash("Wrong Username or Password!", "warning");
            header("Location:" . BASEURL);
        }
    }
}
