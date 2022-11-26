<?php
// by using key and value 
$num["ram"] ="200";
$num["sam"] ="300";
$num["hari"] ="400";
$num["sudan"] ="600";
echo $num["ram"] ."<br/>";


// by using array function

$num1= array("apple"=>100,"mango"=>400,"banana"=>700);
echo $num1["apple"];
unset($num["hari"]);
// unsed is used for deleting an array 

// we can copy an array with assignment operator
$student= $num;
echo $student["sudan"] . "<br/";

count($num);
?>