<?php
class Vehicle {
    private $name;
    private $speed;
    private $mileage;

    function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    function set_name($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    function get_name() {
        return $this->name;
        return $this->speed;
        return $this->mileage;
    }
}
?>