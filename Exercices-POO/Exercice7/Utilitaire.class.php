<?php

class Utilitaire{

    private static $totalOperations = 0;
    private $information;

    public function __construct($information)
    {
        $this->information = $information;
    }

    public function getInformation() {
        return $this->information;
    }

    public static function addition($a, $b) {
        self::$totalOperations += 1;
        return $a + $b;
    }

    public static function multiplication($a, $b) {
        self::$totalOperations += 1;
        return $a * $b;
    }

    public static function getTotalOperations(){
        return self::$totalOperations;
    }

}