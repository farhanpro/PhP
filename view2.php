<?php
session_start();

$name = $SESSION["NAMEe"];
$age = $SESSION["AGEe"];
$weight = $SESSION["WEIGHTe"];

echo $name,'<br>';
echo $age,'<br>';
echo $weight,'<br>';
?> 