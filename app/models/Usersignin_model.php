<?php

class Usersignin_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkData($data)
    {
        $user = $data['user'];
        $pass = md5($data['pass']);


        $sts1 = "Admin";
        $sts2 = "Manager";
        $sts3 = "Cashier";

        $query1 = "SELECT * FROM data_personal WHERE username = :user AND password = :pass";

        $this->db->query($query1);
        $this->db->bind('user', $user);
        $this->db->bind('pass', $pass);
        $this->db->execute();
        $resultcheck = $this->db->singleSet();
        if ($resultcheck > 0) {
            
            $pid = $resultcheck['personal_id'];
            $querySetStatus = "UPDATE personal_status SET status = '1' WHERE personal_id = :sid";

            $this->db->query($querySetStatus);
            $this->db->bind('sid', $pid);
            $this->db->execute();

            $this->db->query("SELECT level FROM personal_level WHERE personal_id = :pid");
            $this->db->bind('pid', $pid);
            $this->db->execute();
            $resultlevel = $this->db->singleSet()['level'];

            if ($resultlevel == $sts1) {
                $_SESSION['accountsession'] = [
                    'personal_id' => $resultcheck['personal_id'],
                    'level' => $sts1
                ];
                return 1;
            } elseif ($resultlevel == $sts2) {
                $_SESSION['accountsession'] = [
                    'personal_id' => $resultcheck['personal_id'],
                    'level' => $sts2
                ];
                return 2;
            } elseif ($resultlevel == $sts3) {
                $_SESSION['accountsession'] = [
                    'personal_id' => $resultcheck['personal_id'],
                    'level' => $sts3
                ];
                return 3;
            }
        } else {
            return 0;
        }
    }

    public function sessionData()
    {
        //session idaccount
        $id_account = $_SESSION['accountsession']['personal_id'];

        //collect account data
        $querySessionPrim = "SELECT * FROM data_personal WHERE personal_id = '$id_account'";
        $this->db->query($querySessionPrim);

        $this->db->execute();
        $primary_data = $this->db->singleSet();

        $querySessionSecnLVL = "SELECT level FROM personal_level WHERE personal_id = '$id_account'";
        $this->db->query($querySessionSecnLVL);

        $this->db->execute();
        $secondary_data_level = $this->db->singleSet();

        $querySessionSecnGEND = "SELECT gender FROM personal_gender WHERE personal_id = '$id_account'";
        $this->db->query($querySessionSecnGEND);

        $this->db->execute();
        $secondary_data_gender = $this->db->singleSet();

        $querySessionSecnSHIF = "SELECT shift FROM personal_shift WHERE personal_id = '$id_account'";
        $this->db->query($querySessionSecnSHIF);

        $this->db->execute();
        $secondary_data_shift = $this->db->singleSet();
        
        //collect config data
        $querySessionConfColor = "SELECT color FROM config_color WHERE personal_id = '$id_account'";
        $this->db->query($querySessionConfColor);

        $this->db->execute();
        $config_data_color = $this->db->singleSet();

        $querySessionConfTheme = "SELECT theme FROM config_theme WHERE personal_id = '$id_account'";
        $this->db->query($querySessionConfTheme);

        $this->db->execute();
        $config_data_theme = $this->db->singleSet();
        
        $querySessionConfTransition = "SELECT transition FROM config_transition WHERE personal_id = '$id_account'";
        $this->db->query($querySessionConfTransition);

        $this->db->execute();
        $config_data_transition = $this->db->singleSet();


        $sessionData = [
            'primary_data' => $primary_data,
            'secondary_data' => [
                'level' => $secondary_data_level['level'],
                'gender' => $secondary_data_gender['gender'],
                'shift' => $secondary_data_shift['shift']
            ],
            'config_data' => [
                'color' => $config_data_color['color'],
                'theme' => $config_data_theme['theme'],
                'transition' => $config_data_transition['transition']
            ]
        ];

        return $sessionData;
    }

    public function signout()
    {
        $id_session = $_SESSION['accountsession']['personal_id'];

        $queryUpdateStatus = "UPDATE personal_status SET status = '0' WHERE personal_id = :idsession";
        $this->db->query($queryUpdateStatus);
        $this->db->bind('idsession', $id_session);
        $this->db->execute();
        $check = $this->db->rowCount();
        if($check > 0){
            session_destroy();
            return 1;
        }
    }
}
