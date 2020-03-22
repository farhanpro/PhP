<?php

session_start();

$name=$_SESSION['NAME'];
$age=$_SESSION['AGE'];
$weight=$_SESSION['WEIGHT'];

echo $name,'<br>';
echo $age,'<br>';
echo $weight,'<br>';

?>

