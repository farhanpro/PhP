<html>
<body>

<?php
$x = 5; // global scope
 $y = 40;
function myTest() {
	global $x , $y; 
	$y = $x + $y;
} 
myTest();
echo $y;
?>

</body>
</html>
