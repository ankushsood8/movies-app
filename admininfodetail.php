<?php
$moviename=$_GET['moviename'];
$runtime=$_GET['runtime'];
$con=new mysqli("localhost","root","","amdin");
$result=$con->query("insert into admininfo(moviename,runtime) values('$moviename','$runtime')");
?>

<body>

<a href="firstpage.php"> 
<button class="btn btn-primary">Log Out</button>
</a>
</body>