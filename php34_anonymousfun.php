<?php

// anonymous function also known as lambda function 


$a=function()
{
    echo"ananymous function";
};

// we can call it by using assigning to variable 
$a();


// passing ananymous function as argument 

function display($num1)
{
    return $num1;
}

display(function(){
return "hellowworld";
});


// retuning a ananymous function 
function display1($var){
    return function($aa) use($var)
    {
        return $var;
    };
}

display("hellow");
?>


