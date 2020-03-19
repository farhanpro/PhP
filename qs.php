<?php
function add($num,$num2){
$result = $num + $num2;
echo $result,'<br>';
return $result;
}

$one = add(100,200);
$two =add(200,400);
echo $one * $two;
?>
