<?php
// $fees = array("ram","sam","hary");
$fees[0] ="ram";
$fees[1] ="sam";
$fees[3] ="hari";
// using foreach to print the value of each element
foreach($fees as $value)
{
    echo $value ."<br/>";
}
$fees = array("ram"=>1000,"sam"=>2000,"hari"=>3000);
foreach($fees as $value)
{

    echo $value ."<br/>";
}
?>