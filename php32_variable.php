<?php
// acessing global variable 
$num1=1;
function display()
{
    global $num1;
echo $num1;
}
display();

// static variable 

function display1()
{
    static $num2 =0;
    $num2++;
echo $num2;
}

display1();
display1();
display1();
display1();


// super global variable 

echo $GLOBALS['num1'];

if(5>2)
{
    function true()
    {
        echo"comdition function";
    }
    true();
}

// function variable
$f_variable= "display";
$f_variable();

?>