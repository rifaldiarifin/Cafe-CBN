<?php

class ValueGenerate
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function numberShortGenerate($value, $precision = 2)
    {
        if ($value < 1000){
            $n_format = $value;
        } elseif ($value < 1000000) {
            $n_format = number_format($value / 1000 , 1) . 'K';
        } elseif ($value < 1000000000) {
            $n_format = number_format($value / 1000000, $precision) . 'M';
        } elseif ($value < 1000000000000) {
            $n_format = number_format($value / 1000000, $precision) . 'B';
        }
        return $n_format;
    }
}
