<?php
class Vehicle {
    public $manufacturer = 'Volvo';
}

class Bus extends Vehicle {
}

class Car extends Vehicle {
}


$vehicle = new Vehicle("Oto", 120, 1200);
$bus = new Bus("Vic", 60, 52000);
$car = new Car("Mac", 80, 36000);


echo "The manufacturer of all Vehicles: " . $vehicle->manufacturer . "<br>";
echo "The manufacturer of Bus: " . $bus->manufacturer . "<br>";
echo "The manufacturer of Car: " . $car->manufacturer . "<br>";
?>