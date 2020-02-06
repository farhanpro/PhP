<?php

if(isset($_GET["Stud_Name"]) && isset($_GET["Stud_Age"]) && isset ($_Get["Stud_Weight"]))
{
	$Name =$_GET["Stud_Name"];
	$Age =$_GET["Stud_Age"];
	$Weight =$_GET["Stud_Weight"];
	
if(!empty($Name) && !empty($Age) && !empty($Weight))

	echo 'Name : ' .$_GET["Stud_Name"].'<br>'; 
	echo 'Age : ' .$_GET["Stud_Age"].'<br>';
	echo 'Weight : ' .$_GET["Stud_Weight"].'<br>';

}
?>