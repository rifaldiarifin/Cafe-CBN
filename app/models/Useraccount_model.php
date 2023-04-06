<?php

class Useraccount_model
{
    private $currentTable = 'data_personal';
    private $status1 = 'Admin';
    private $status2 = 'Manager';
    private $status3 = 'Cashier';
    private $gender1 = 'Male';
    private $gender2 = 'Female';
    private $shiftDefault = 'Unknown';
    private $shiftNothing = '-';
    private $themeDefault = "currentSystem";
    private $colorDefault = "coffeeBeans";
    private $transitionDefault = "normal";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUserAccountData()
    {
        $this->db->query("SELECT * FROM " . $this->currentTable . " ORDER BY name ASC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllUserAdminData()
    {
        $this->db->query("SELECT * FROM " . $this->currentTable . " WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = '" . $this->status1 . "') ORDER BY name ASC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllUserManagerData()
    {
        $this->db->query("SELECT * FROM " . $this->currentTable . " WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = '" . $this->status2 . "') ORDER BY name ASC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllUserCashierData()
    {
        $this->db->query("SELECT * FROM " . $this->currentTable . " WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = '" . $this->status3 . "') ORDER BY name ASC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllActivity($option = false)
    {
        $queryActivity = "SELECT * FROM data_activity ORDER BY id DESC";
        if ($option == true) {
            $queryActivity = "SELECT * FROM data_activity ORDER BY id DESC LIMIT 0, 10";
        }
        $this->db->query($queryActivity);
        $this->db->execute();
        $result = $this->db->resultSet();

        $newArr = [];
        foreach ($result as $getPersonalID) {
            $this->db->query("SELECT name, image FROM data_personal WHERE personal_id = '" . $getPersonalID['personal_id'] . "'");
            $this->db->execute();
            $data_personal = $this->db->singleSet();

            $this->db->query("SELECT level FROM personal_level WHERE personal_id = '" . $getPersonalID['personal_id'] . "'");
            $this->db->execute();
            $level = $this->db->singleSet()['level'];

            $this->db->query("SELECT * FROM activity_list WHERE activity_id = '" . $getPersonalID['activity_id'] . "'");
            $this->db->execute();
            $activity = $this->db->singleSet();

            $mergeArr = [
                'activity_id' => $getPersonalID['activity_id'],
                'personal_id' => $getPersonalID['personal_id'],
                'personal_name' => $data_personal['name'],
                'title' => $activity['title'],
                'description' => $activity['description'],
                'date' => $activity['date'],
                'time' => $activity['time'],
                'level' => $level,
                'image' => $data_personal['image']
            ];
            array_push($newArr, $mergeArr);
        }
        return $newArr;
    }

    public function idImageGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_personal');
        $this->db->execute();
        $resultID = $this->db->singleSet()['COUNT(id)'];
        $date = date('dm');
        $time = date('His');
        if ($resultID < 9) {
            $availableID =  $resultID + 1 . "000" . $date . $time;
            return $availableID;
        } elseif ($resultID < 99) {
            $availableID =  $resultID + 1 . "00" . $date . $time;
            return $availableID;
        } elseif ($resultID < 999) {
            $availableID =  $resultID + 1 . "0" . $date . $time;
            return $availableID;
        } elseif ($resultID < 9999) {
            $availableID = $resultID + 1 . $date . $time;
            return $availableID;
        }
    }

    public function idActivityGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_activity');
        $this->db->execute();
        $resultID = $this->db->singleSet()['COUNT(id)'];
        $date = date('dmy');
        if ($resultID < 9) {
            $availableID = "ACT" . "0000" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 99) {
            $availableID = "ACT" . "000" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 999) {
            $availableID = "ACT" . "00" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 999) {
            $availableID = "ACT" . "0" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 9999) {
            $availableID = "ACT" . $resultID + 1 . $date;
            return $availableID;
        }
    }

    public function idAccountGenerate()
    {
        $this->db->query('SELECT COUNT(id) FROM data_personal');
        $this->db->execute();
        $resultID = $this->db->singleSet()['COUNT(id)'];
        $date = date('sdmy');
        if ($resultID < 9) {
            $availableID = "000" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 99) {
            $availableID = "00" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 999) {
            $availableID = "0" . $resultID + 1 . $date;
            return $availableID;
        } elseif ($resultID < 9999) {
            $availableID = $resultID + 1 . $date;
            return $availableID;
        }
    }

    public function uploadImage()
    {
        $idGenerate = $this->idImageGenerate();

        $namefile = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpname = $_FILES['image']['tmp_name'];

        if ($error == 4) {
            // echo "<script>alert('empty image')</script>";

            // $error_message_image_empty = true;
            // header("Location:" . BASEURL . "/admin/datapersonal");
            return "blank_user.png";
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

        if ($filesize > 2000000) {
            // echo "<script>alert('oversize')</script>";
            // header("Location:" . BASEURL . "/admin/datapersonal");
            return 5;
        }

        $fileRename = $idGenerate . "." . $extentionImage;

        move_uploaded_file($tmpname, 'img/avatar/' . $fileRename);

        return $fileRename;
    }

    public function addaccount($data)
    {
        $idGenerate = $this->idAccountGenerate();
        $image = $this->uploadImage();
        if (!$image) {
            return 2;
        }

        if ($image == 3) {
            $image == "blank_user.png";
        }

        $birth = [
            'year' => explode('-', $data['birth'])[0],
            'month' => explode('-', $data['birth'])[1],
            'day' => explode('-', $data['birth'])[2]
        ];

        //secondary personal
        if ($data['level'] == $this->status1) {
            $queryLevel = "INSERT INTO personal_level SET
                            personal_id = '$idGenerate', level = '$this->status1'";
        } elseif ($data['level'] == $this->status2) {
            $queryLevel = "INSERT INTO personal_level SET
                            personal_id = '$idGenerate', level = '$this->status2'";
        } elseif ($data['level'] == $this->status3) {
            $queryLevel = "INSERT INTO personal_level SET
                            personal_id = '$idGenerate', level = '$this->status3'";
        }

        if ($data['gender'] == $this->gender1) {
            $queryGender = "INSERT INTO personal_gender SET
                            personal_id = '$idGenerate', gender = '$this->gender1'";
        } elseif ($data['gender'] == $this->gender2) {
            $queryGender = "INSERT INTO personal_gender SET
                            personal_id = '$idGenerate', gender = '$this->gender2'";
        }

        if ($data['level'] == $this->status3) {
            $queryShift = "INSERT INTO personal_shift SET
                            personal_id = '$idGenerate', shift = '$this->shiftDefault'";
        } else {
            $queryShift = "INSERT INTO personal_shift SET
                            personal_id = '$idGenerate', shift = '$this->shiftNothing'";
        }

        $queryStatus = "INSERT INTO personal_status SET
                            personal_id = '$idGenerate', status = '0'";


        //execute secondary
        $this->db->query($queryLevel);
        $this->db->execute();
        $this->db->query($queryGender);
        $this->db->execute();
        $this->db->query($queryShift);
        $this->db->execute();
        $this->db->query($queryStatus);
        $this->db->execute();

        //primary personal
        $query = "INSERT INTO data_personal SET 
                                            personal_id = '$idGenerate',
                                            name = :name,
                                            username = :username,
                                            password = :password,
                                            email = :email,
                                            phone = :phone,
                                            address = :address,
                                            image = '$image',
                                            birth = :birth";


        //execute primary
        $this->db->query($query);

        //Bindvalue Data
        $this->db->bind('name', $data['name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('birth', $birth['day'] . " - " . $birth['month'] . " - " . $birth['year']);

        $this->db->execute();

        //prepare config data user
        $queryConfigTheme = "INSERT INTO config_theme SET personal_id = '$idGenerate', theme = :theme";
        $this->db->query($queryConfigTheme);
        $this->db->bind('theme', $this->themeDefault);
        $this->db->execute();

        $queryConfigColor = "INSERT INTO config_color SET personal_id = '$idGenerate', color = :color";
        $this->db->query($queryConfigColor);
        $this->db->bind('color', $this->colorDefault);
        $this->db->execute();

        $queryConfigTransition = "INSERT INTO config_transition SET personal_id = '$idGenerate', transition = :transition";
        $this->db->query($queryConfigTransition);
        $this->db->bind('transition', $this->transitionDefault);
        $this->db->execute();

        $queryConfigData = "INSERT INTO data_config SET personal_id = '$idGenerate'";
        $this->db->query($queryConfigData);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteAccount($id)
    {
        $queryid = "SELECT personal_id FROM data_personal WHERE id = '$id'";
        $this->db->query($queryid);

        $this->db->execute();
        $pid = $this->db->singleSet()['personal_id'];
        //------------------
        if ($pid == $_SESSION['accountsession']['personal_id']) {
            return 0;
        } else {
            $query = "DELETE FROM data_personal WHERE personal_id = '$pid'";
            $this->db->query($query);

            $this->db->execute();
            // --------------------------

            $queryLevel = "DELETE FROM personal_level WHERE personal_id = '$pid'";
            $this->db->query($queryLevel);

            $this->db->execute();
            // -------------------

            $queryGender = "DELETE FROM personal_gender WHERE personal_id = '$pid'";
            $this->db->query($queryGender);

            $this->db->execute();
            // -------------------

            $queryShift = "DELETE FROM personal_shift WHERE personal_id = '$pid'";
            $this->db->query($queryShift);

            $this->db->execute();
            // -------------------

            $queryStatus = "DELETE FROM personal_status WHERE personal_id = '$pid'";
            $this->db->query($queryStatus);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function editAccount($data)
    {
        $pid = $data['default_pid'];
        $image = $this->uploadImage();
        if (!$image) {
            return 2;
        }
        $chckimg = "image = '" . $image . "', ";
        
        
        $newbirth = "birth = '" . $data['new_birth'] . "', ";
        $newpass = "password = '" . md5($data['new_pass']) . "', ";

        if ($data['new_birth'] == '') {
            $newbirth = "";
        }
        if ($data['new_pass'] == '') {
            $newpass = "";
        }

        //secondary personal
        if ($data['new_level'] == $this->status1) {
            $queryLevel = "UPDATE personal_level SET level = '$this->status1' WHERE personal_id = '$pid'";
        } elseif ($data['new_level'] == $this->status2) {
            $queryLevel = "UPDATE personal_level SET level = '$this->status2' WHERE personal_id = '$pid'";
        } elseif ($data['new_level'] == $this->status3) {
            $queryLevel = "UPDATE personal_level SET level = '$this->status3' WHERE personal_id = '$pid'";
        }

        if ($data['new_gender'] == $this->gender1) {
            $queryGender = "UPDATE personal_gender SET gender = '$this->gender1' WHERE personal_id = '$pid'";
        } elseif ($data['new_gender'] == $this->gender2) {
            $queryGender = "UPDATE personal_gender SET gender = '$this->gender2' WHERE personal_id = '$pid'";
        }

        if ($image == 3) {
            $chckimg = "";
        }

        //execute secondary
        $this->db->query($queryLevel);
        $this->db->execute();
        $this->db->query($queryGender);
        $this->db->execute();

        //primary personal
        $query = "UPDATE data_personal SET 
                                            name = :name,
                                            username = :username,
                                            " . $newpass . "
                                            email = :email,
                                            " . $newbirth .  "
                                            phone = :phone,
                                            " . $chckimg . "
                                            address = :address WHERE personal_id = '$pid'";


        //execute primary
        $this->db->query($query);

        //Bindvalue Data
        $this->db->bind('name', $data['new_name']);
        $this->db->bind('username', $data['new_user']);
        $this->db->bind('email', $data['new_email']);
        $this->db->bind('phone', $data['new_phone']);
        $this->db->bind('address', $data['new_address']);

        $this->db->execute();

        return $this->db->rowCount();
    }



    public function updateActivity($title, $description)
    {
        $activityID = $this->idActivityGenerate();
        $queryActivitySecnd = "INSERT INTO activity_list SET activity_id = :activityid, title = :title, description = :description, date = :date, time = :time";
        $this->db->query($queryActivitySecnd);
        $this->db->bind('activityid', $activityID);
        $this->db->bind('title', $title);
        $this->db->bind('description', $description);
        $this->db->bind('date', date("d - m - Y"));
        $this->db->bind('time', date("H : i"));
        $this->db->execute();

        $queryActivityPrim = "INSERT INTO data_activity SET activity_id = :activityid, personal_id = :personalid";
        $this->db->query($queryActivityPrim);
        $this->db->bind('activityid', $activityID);
        $this->db->bind('personalid', $_SESSION['accountsession']['personal_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
