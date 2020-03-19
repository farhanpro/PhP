<?php
function add($num1,$num2)
{
	$result = $num1 + $num2;
	echo $num1 + $num2 ,'<br>';
	return  $result;
}

$add1 = add(100,400);
$add2 = add(400,600);
echo $add1 * $add2,'<br>';
?>
	