<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mainClasses.css">
</head>
<body>
<?php
$servername ='localhost';
$username='root';
$password='';
$dbname='13sever13';
$con= new mysqli($servername,$username,$password, $dbname);
if ($con->connect_error){
    die('error');
}
$sql = "SELECT * FROM news WHERE id=$_GET[p]";
$res=$con->query($sql);
$row=$res->fetch_assoc();
?>
<div class="header">
    <h1><img src="img/title.png" height="50px" width="50px" align="center">SMITEinfo</h1>
    <h3><?php $row['title'] ?></h3>
    <p><?php $row['text'] ?></p>
</div>

</body>
</html>