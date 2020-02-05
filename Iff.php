<?php
$Number_1 = 10;
$Number_2 = 20;
$Number_3 = 30;
 
 if(($Number_1 != $Number_2) && ($Number_1 != $Number_3))
 {
	 echo "All numbers are not the same";
 }
 if(($Number_1 < $Number_2) && ($Number_1 < $Number_3))
 {
	 echo "<br>Smallest numbers is $Number_1";
	 if(($Number_1 < $Number_2) && ($Number_1 < $Number_3))
 {
	 echo "<br>Largest number is $Number_3";
 }
 }
  
?>