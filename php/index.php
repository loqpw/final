<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="../css/style.css">
  <title>he did not want to be scary</title>
</head>
<?php
$v = 'mal';
var_dump($v);
$x = 10.23;
echo "<br>asdasd $v <br>";
echo "<br>asdasd $x <br>";
var_dump($x);
$b=2;
$a=3;
function test(){
    $GLOBALS['b']=$GLOBALS['a']*$GLOBALS['b'];
    echo"<br>";
    $a=$GLOBALS['a']+$GLOBALS['b'];
    echo $a;
    echo "<br>";
    echo $GLOBALS['b'];
}
$c=strlen($v);
test();
echo"$c<br>";
echo (strlen($v));
$g=3;
if($g==strlen($v)){
    echo "<br>true";
}
if($g===strlen($v)){
    echo "<br>true";
}
$trr="www";
$asd="qwe";
echo "<br>$trr $asd<br>";
echo ($trr.=$asd);
echo "<br>";
$we="ffe";
echo ($asd.$we);
define("t","this is a constant");
echo ("<br>".t);
function test2(){
    echo "<br>".t;
}
test2();
?>