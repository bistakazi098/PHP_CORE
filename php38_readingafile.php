<?php
// reading a whole file at once 
$data = file_get_contents("php_filehandling texxt.php/file.txt","r");
$impdata =str_replace("\n","<br/>",$data);
echo $data;
echo $impdata;
?>