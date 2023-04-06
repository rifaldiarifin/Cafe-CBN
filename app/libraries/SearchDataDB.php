<?php

class SearchDataDB
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function singleSelectData($colmName, $tableName, $condition)
    {
        $this->db->query('SELECT ' . $colmName . ' FROM ' . $tableName . ' ' . $condition);
        return $this->db->singleSet();
    }

    public function multiSelectData($colmName, $tableName, $condition)
    {
        $this->db->query('SELECT ' . $colmName . ' FROM ' . $tableName . ' ' . $condition);
        return $this->db->resultSet();
    }

    public function selectByID($tableName, $inColm, $id)
    {
        $this->db->query('SELECT * FROM ' . $tableName . ' WHERE ' . $inColm . ' = :id');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function combineArray($colmName, $tableName, $condition)
    {
        $this->db->query('SELECT ' . $colmName . ' FROM ' . $tableName . ' ' . $condition);
        $this->db->execute();
        $arr = $this->db->resultSet();
        $mergeArr = [];
        foreach ($arr as $asArr) {
            array_push($mergeArr, $asArr[$colmName]);
        }
        return join(', ', $mergeArr);
    }

    public function countData($colmName, $tableName)
    {
        $this->db->query('SELECT COUNT(' . $colmName . ') FROM ' . $tableName);
        return $this->db->singleSet()['COUNT(' . $colmName . ')'];
    }

    public function checkAvailable($colmName, $tableName)
    {
        $this->db->query('SELECT COUNT(' . $colmName . ') FROM ' . $tableName);
        $result = $this->db->singleSet()['COUNT(' . $colmName . ')'];
        if ($result == 0) {
            return $result = 0;
        } elseif ($result > 0) {
            return $result;
        }
    }

    public function checkAvailableByCondition($colmName, $tableName, $condition)
    {
        $this->db->query('SELECT COUNT(' . $colmName . ') FROM ' . $tableName . ' ' . $condition);
        $result = $this->db->singleSet()['COUNT(' . $colmName . ')'];
        if ($result == 0) {
            return $result = 0;
        } elseif ($result > 0) {
            return $result;
        }
    }

    public function sumData($colmName, $tableName)
    {
        $this->db->query('SELECT SUM(' . $colmName . ') FROM ' . $tableName);
        $result = $this->db->singleSet()['SUM(' . $colmName . ')'];
        if ($result == 0) {
            return $result = 0;
        } elseif ($result > 0) {
            return $result;
        }
    }
    public function sumDataByCondition($colmName, $tableName, $condition)
    {
        $this->db->query('SELECT SUM(' . $colmName . ') FROM ' . $tableName . ' ' . $condition);
        $result = $this->db->singleSet()['SUM(' . $colmName . ')'];
        if ($result == 0) {
            return $result = 0;
        } elseif ($result > 0) {
            return $result;
        }
    }
}
