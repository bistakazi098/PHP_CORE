
<!-- aceessing array with loop -->
<?php
$num["ram"] ="200";
$num["sam"] ="300";
$num["hari"] ="400";
$num["sudan"] ="600";


for($int=0;$int<=3;$int++)
{
    echo $num[$int];
}

$fees =array_keys($num);
echo $fees[0];

?>