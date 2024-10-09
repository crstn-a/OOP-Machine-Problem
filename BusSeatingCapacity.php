<?php
include 'Vehicle.php';

class Bus extends Vehicle {
    function seating_capacity($capacity = 50) {
        return $capacity;
    }
}
?>