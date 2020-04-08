<?php

require_once 'Bicycle.php';
require_once 'Car.php';

// #### bikes

$vtt = new Bicycle("blue");
$bmix = new Bicycle("black");
echo "Bikes<br>";
echo '<br>VTT: ' . $vtt->forward();
echo '<br>VTT: ' . $vtt->brake();
echo '<br>BMX: ' . $bmix->forward();
echo '<br>BMX: ' . $bmix->brake() . '<br>';


// ###### car

$ferrari = new Car("red", 2, "SP");
$ford = new Car("grey", 4, "electric");
echo "<p>Cars</p>";
echo '<p>Ferrari: ' . $ferrari->start().'</p>';
echo '<p>ferrari: ' . $ferrari->forward().'</p>';
echo '<p>ferrari: ' . $ferrari->forward() .  '</p>';
echo '<p>ferrari current speed: ' . $ferrari->getCurrentSpeed() .  '</p>';
echo '<p>###ferrari: ' . $ferrari->brake() .  '</p>';
echo '<p>ferrari number wheels: ' . $ferrari->getNbWheels() .  '</p>';
echo '<p>ferrari color: ' . $ferrari->getColor() .  '</p>';
echo '<p>ferrari number seats: ' . $ferrari->getNbSeats() .  '</p>';
echo '<p>ferrari energy: ' . $ferrari->getEnergy() .  '</p>';
echo '<p>ferrari energy level: ' . $ferrari->getEnergyLevel() .  '</p>';

echo '<br>ford: ' . $ford->start();
echo '<br>ford: ' . $ford->forward();
echo '<br>ford current speed: ' . $ford->getCurrentSpeed() ;
echo '<br>ford: ' . $ford->brake();
echo '<br>ford number wheels: ' . $ford->getNbWheels();
echo '<br>ford color: ' . $ford->getColor();
echo '<br>ford number seats: ' . $ford->getNbSeats();
echo '<br>ford energy: ' . $ford->getEnergy();
echo '<br>ford energy level: ' . $ford->getEnergyLevel();



