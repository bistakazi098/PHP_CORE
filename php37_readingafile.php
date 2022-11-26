<?php

$handle= fopen("php_filehandling texxt.php/file.txt","r");

while($char=fgetc($handle))
{
    echo "\n";
    echo $char;
}
fclose($handle);
?>