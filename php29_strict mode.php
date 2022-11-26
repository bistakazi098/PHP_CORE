<?php

// we have to declare street types on 
//only interger value have to be made
declare(strict_types=1);
function display(int $num1,int $num2)
{
   
    return $num1+$num2;
}
$value=display(23,45);
echo $value;
?>



