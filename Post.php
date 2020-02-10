<?php

if(($_POST["Name"] == 'Farhan') &&($_POST["Password"] == 'farhaan549') || 
($_POST["Name"] == 'Harshal') &&($_POST["Password"] == 'farhaan549'))
{
	echo "Username and password is correct".'<br>';
	echo 'Username : '.$_POST["Name"].'<br>';
echo 'Password : '.$_POST["Password"].'<br>';
}
else
{
	echo "Username and password is incorrect".'<br>';
}

?>