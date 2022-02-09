<?php

$name=$_GET['array'];
$name=$name.",";
$str="";
$con=new mysqli("localhost","root","","amdin");
for($i=0;$i<strlen($name);$i++){
    if($name[$i]==','){
       $result=$con->query("insert into movie1(row1) values($str)");
       $str="";
        continue;
    }
    else{
$str=$str.$name[$i];
    }


}
?>

