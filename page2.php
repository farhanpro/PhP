<?php

require 'header.php';
require_once('header.php');

$name = "FArhan";

function name()
{
	global $name;
	echo $name.'<br>';
}

name();
name();
?>	