<?php

namespace App\Helper;

class HelperClass{
    public function filterQuery($query){
        $var = preg_replace("/[^a-zA-Z0-9]/", "", $query);
        $numbers = preg_replace('/[^0-9]/', '', $var);
        $letters = preg_replace('/[^a-zA-Z]/', '', $var);
        $result = $letters . ' ' . $numbers;

        return strtolower($result);
    }
    public function getFirstChars($query){
        $value = $this->filterQuery($query);
        return substr($value, 0, 3);
    }
}