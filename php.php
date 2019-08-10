<?php
$num1=intval($_GET['num1']);
$num2=intval($_GET['num2']);
$operation=$_GET['op'];
$a=$num1+$num2;
$b=$num1*$num2;
$c=$num1-$num2;
$d=$num1/$num2;
if($operation=='+')
	echo"<h1>Subtraction is $a </h1>";
else if($operation=='-')
	echo"<h1>Subtraction is $c </h1>";//'the subtract is:'.($num1-$num2);
else if($operation=='*')
	echo"<h1>Product is $b </h1>";    ////'the product is :'.($num1*$num2);
else if($operation=='/')
	echo"<h1>Division is $d </h1>";
else
	echo"<h1>enter valid symbol</h1>"
?>