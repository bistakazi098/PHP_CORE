<?php
$handle= fopen("php_filehandling texxt.php/file.txt","r");
while(!feof($handle))
{
$data = fgets($handle);
echo $data;
}
fclose($handle);
?>