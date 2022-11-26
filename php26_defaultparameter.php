<?php


// default argument 
function display($name1,$name2,$name3="mango")
{

    echo $name1 ."<br/>", $name2 ."<br/>", $name3 ."<br/>";
}

display("apple","banana");
display("cherry","gauva","grapes");

?>