<?php

class Configaccount_model
{
    private $db;
    //session idaccount

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateTheme($theme)
    {
        $idsession = $_SESSION['accountsession']['personal_id'];

        $queryTheme = "UPDATE config_theme SET theme = :theme WHERE personal_id = :pid";

        $this->db->query($queryTheme);
        $this->db->bind('pid', $idsession);
        $this->db->bind('theme', $theme['configData']);
        $this->db->execute();
        return "Switch to " . $theme['configData'] . "mode";
    }

    public function updateColor($color)
    {
        $idsession = $_SESSION['accountsession']['personal_id'];

        $queryColor = "UPDATE config_color SET color = :color WHERE personal_id = :pid";

        $this->db->query($queryColor);
        $this->db->bind('pid', $idsession);
        $this->db->bind('color', $color['configData']);
        $this->db->execute();
        return "Changed to " . $color['configData'];
    }

    public function updateConfigData($data, $table, $colm)
    {
        $idsession = $_SESSION['accountsession']['personal_id'];

        $queryConfig = "UPDATE " . $table . " SET ".$colm." = :data WHERE personal_id = :pid";

        $this->db->query($queryConfig);
        $this->db->bind('pid', $idsession);
        $this->db->bind('data', $data['configData']);
        $this->db->execute();
        return "Changed to " . $data['configData'];
    }

    public function openProfile($data){
        $idsession = $_SESSION['accountsession']['personal_id'];
        $queryPass = "SELECT * FROM data_personal WHERE personal_id = '$idsession' AND password = :pass";
        $this->db->query($queryPass);
        $this->db->bind('pass', md5($data['id']));
        $this->db->execute();
        return $this->db->singleSet();

    }

    // public function setSidebar($data){
    //     if($_SESSION['configsession']['sidebar'] == true){
    //         $_SESSION['configsession']['sidebar'] = false;
    //         return false;
    //     } else if($_SESSION['configsession']['sidebar'] == false){
    //         $_SESSION['configsession']['sidebar'] = true;
    //         return true;
    //     }
    // }
}
