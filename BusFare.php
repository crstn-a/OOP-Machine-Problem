<?php
include 'Vehicle.php';

class Bus extends Vehicle {
    private $seating_capacity = 50;

    public function fare() {
        $default_fare = $this->seating_capacity * 100;
        $bus_maintenance_charge = $default_fare * 0.10;
        return $default_fare + $bus_maintenance_charge;
    }
}

?>