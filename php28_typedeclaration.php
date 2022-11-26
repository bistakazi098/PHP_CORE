<!-- type declaration  -->

<?php

// scalartype declaration 
//coercive

function display(int $num1,int $num2)
{
   
    return $num1+$num2;
}


$value=display(23,45.22);
echo $value;
?>