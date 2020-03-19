<?php
$num = $_POST['num'];
if($num)
(
    for($i=1; $i<=10; $i++)
    {
        $mul = $num * $i;
        echo "$num * $i = $mul<br>";
    }
)
else
(
    echo "Invalid Entry!";
)
?> 