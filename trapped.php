<?php

$triggered = $_GET["triggered"];
$file = "triggerstatus.txt";

//echo $triggered;

if($triggered=="true"){
file_put_contents($file, "true");
}

else if($triggered=="false"){
file_put_contents($file, "false");
}

?>
