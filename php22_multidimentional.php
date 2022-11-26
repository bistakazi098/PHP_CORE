<?php
// multidimentionl array 
$num =array(

    array("ram","shyam", "hari"),
    array("suman","madan","kris")
);
echo $num[0][2];
// multi d associative array 

$num2 =array(

    "suman"=> array("css"=>100,"java"=>56),
    "hari"=> array("css"=>78,"java"=>98),
);
echo $num2["suman"]["css"];

?>