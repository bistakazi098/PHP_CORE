<!-- acessing associative array with loop
 -->
 <?php

$fees = array("ram"=>1000,"sam"=>2000,"hari"=>3000);
$keys = array_keys($fees);
for($int=0;$int<=count($keys);$int++)
{
    echo $fees[$keys[$int]]."<br/>";
}


?>