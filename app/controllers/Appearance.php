<?php 

class Appearance extends Controller{
    public function updatetheme(){
        echo json_encode($this->model('Configaccount_model')->updateConfigData($_POST, "config_theme", "theme"));
    }

    public function updatecolor(){
        echo json_encode($this->model('Configaccount_model')->updateConfigData($_POST, "config_color", "color"));
    }

    public function updatetransition(){
        echo json_encode($this->model('Configaccount_model')->updateConfigData($_POST, "config_transition", "transition"));
    }
}