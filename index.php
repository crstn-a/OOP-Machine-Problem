<?php
include 'BusFare.php';

$bus1 = new Bus("Red", 50, 1800);
echo $bus1->fare() ; 
echo "<br>";
echo $bus1->get_name();


?>