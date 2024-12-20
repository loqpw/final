<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="../css/s2.css">
  <!title>he did not want to be scary<!/title>
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
echo'<title>he did not want to be scary</title>';
echo "<br>";
echo '<table>
          <tr>
            <th></th>
            <td><b>col2</b></td>
            <th>col2</th>
        </tr>';
echo '</table>';
echo '<table width = "9" cellpadding = "8" cellspacing = "1" border="1">';
            echo "<tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Options</th>
                  </tr>";
                  echo "<tr>
                  <td>John</td>
                  <td>Doe</td>";
echo '<a href="../html/index.html"> go to html</a>';
function tEEst(){
static $a=9;
}
teest();
echo $a;
?>