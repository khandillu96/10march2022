<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


//string
$str="i am dilshad";
var_dump($str);
echo "<br><br>";
//echo $str."<br><br>";



//number
$num=1234.12;  //either integer or float
var_dump($num)."<br>";
echo "<br><br>";



//boolean;
$bol=true;
var_dump($bol);
echo "<br><br>";
//A Boolean represents two possible states: TRUE or FALSE.




//interger
$integer=100;
var_dump($integer)."<br>";
echo "<br><br>";



//float
$float=10.21;
var_dump($float)."<br>";
echo "<br><br>";



//null value;
$x="hello";
$x=null;
var_dump($x);
echo "<br><br>";




//array;
$cararry=array("volvoo","bmw",12);
var_dump($cararry)."<br>";
echo "<br><br><br><Br><Br>";



//object
class Car{
    var $modal=" this is---! <h1>object</h1>";
    function Cars() {
       
        echo $this->modal;
    }
}
// create an object
$herbie = new Car();
$herbie->cars()."<br><br>";





?>
</body>
</html>