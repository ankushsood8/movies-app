<?php
error_reporting(0);
$con=new mysqli("localhost","root","","amdin");
$result=$con->query("select * from admininfo");
while($r=$result->fetch_assoc()){
    ?>
    <a href="seatsleft.php"><?php
    $l= $r["moviename"];
    $p=$con->query("create table $l(row1 varchar(30))");
     echo $r["moviename"];
     echo "<br>";
?>
</a>
<?php
}
?>