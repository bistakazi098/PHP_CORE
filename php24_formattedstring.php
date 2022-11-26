<?php

// formatting string 

$num1 = 10;
$num2 = 20;
// %d is format specifier 
printf("i have %d apples and %d mangoes\n", $num1, $num2);


$num3 = "mangoes";
$num4 = "oranges";


printf("\n i have %d %s and %d %s.", $num1, $num3, $num2, $num4);


// position specifier \$
printf("\n i have %3\$d %4\$s and %1\$d %2\$s.", $num1, $num3, $num2, $num4);


// sign specifier 
printf("\n%+d",50);



// width specifier 
printf("\n%10s","hellow");
// 10 boxes are made

// padding character 
printf("\n%'*20s","hellow world");


// sprintf it works as printf but returns a value

$value= sprintf("\n%'*20s","hellow world");
echo $value;

// precision speecifier
printf("\n%'*10.2f",23.4567);