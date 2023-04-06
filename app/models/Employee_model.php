<?php

class Employee_model
{
    private $db;
    private $empStat = 'Cashier';
    private $shiftA = 'Shift A';
    private $shiftB = 'Shift B';
    private $shiftUn = 'Unknown';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEmployee(){
        $queryEmpAll = "SELECT * FROM data_personal WHERE personal_id IN (SELECT personal_id FROM personal_level WHERE level = :stat)";
        $this->db->query($queryEmpAll);
        $this->db->bind('stat', $this->empStat);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllUnknownSessionEmployee(){
        $queryEmpAll = "SELECT * FROM data_personal WHERE personal_id IN (SELECT personal_id FROM personal_shift WHERE shift = :shift)";
        $this->db->query($queryEmpAll);
        $this->db->bind('shift', $this->shiftUn);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllSessionEmployee(){
        $queryEmp = "SELECT * FROM data_personal WHERE personal_id IN (SELECT personal_id FROM personal_shift WHERE shift = :A OR shift = :B)";
        $this->db->query($queryEmp);
        $this->db->bind('A', $this->shiftA);
        $this->db->bind('B', $this->shiftB);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getEmployeeShiftA(){
        $queryEmp = "SELECT * FROM data_personal WHERE personal_id IN (SELECT personal_id FROM personal_shift WHERE shift = :A)";
        $this->db->query($queryEmp);
        $this->db->bind('A', $this->shiftA);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getEmployeeShiftB(){
        $queryEmp = "SELECT * FROM data_personal WHERE personal_id IN (SELECT personal_id FROM personal_shift WHERE shift = :B)";
        $this->db->query($queryEmp);
        $this->db->bind('B', $this->shiftB);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function setShiftSession($data){
        $queryEmpShift = "SELECT shift FROM personal_shift WHERE personal_id = :pid";
        $this->db->query($queryEmpShift);
        $this->db->bind('pid', $data);
        $this->db->execute();
        $shift = $this->db->singleSet()['shift'];

        if($shift == $this->shiftA){
            $querySetShift = "UPDATE personal_shift SET shift = :new_shift WHERE personal_id = '$data'";
            $this->db->query($querySetShift);
            $this->db->bind('new_shift', $this->shiftB);
        } elseif ($shift == $this->shiftB){
            $querySetShift = "UPDATE personal_shift SET shift = :new_shift WHERE personal_id = '$data'";
            $this->db->query($querySetShift);
            $this->db->bind('new_shift', $this->shiftA);
        } elseif ($shift == 'Unknown') {
            $querySetShift = "UPDATE personal_shift SET shift = :new_shift WHERE personal_id = '$data'";
            $this->db->query($querySetShift);
            $this->db->bind('new_shift', $this->shiftUn);
        }
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function setShiftA($id){
        $queryNewShift = "UPDATE personal_shift SET shift = :new_shift WHERE personal_id = '$id'";
        $this->db->query($queryNewShift);
        $this->db->bind('new_shift', $this->shiftA);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function setShiftB($id){
        $queryNewShift = "UPDATE personal_shift SET shift = :new_shift WHERE personal_id = '$id'";
        $this->db->query($queryNewShift);
        $this->db->bind('new_shift', $this->shiftB);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
