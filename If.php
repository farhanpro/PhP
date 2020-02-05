<?php
$number = 10;
$number_2 = 11;
$number_3 = 10.00;
if ($number == $number_2){
echo "numbers are equal";
}
if ($number != $number_2)
{
	echo "numbers are not equal";
}
if ($number < $number_2)
{
	echo "<br>number 2 is Greater than number one";
}
else if ($number > $number_2)
{
	echo "<br>number 2 is smaller than number one";
}

else if ($number === $number_3)
{
	Echo "<br> 	Number 3 is NOTequal to number 1";
}
else {
	echo "out of statment";
}

?>