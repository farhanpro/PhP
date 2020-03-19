<?php
$name = "Farhan";

function showname(){
		global $name;
		echo $name;
}
showname();
?>