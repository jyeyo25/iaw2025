<?php
$a= 250;
$b= 500; 
$epsilon= 1000;
if (abs($a-$b) < $epsilon ){
	echo "true";
}
elseif (abs($a-$b) > $epsilon ){
	echo "false";
}
?>
