<?php
// recurssive function 

function recur($a)
{
if($a<=10)
{
    echo $a;
    recur($a+1);
}


}
recur(1) or die("enter a valid number");//die function is used to give message

?>