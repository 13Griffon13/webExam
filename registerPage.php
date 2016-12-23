<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mainClasses.css">
    <link rel="stylesheet" type="text/css" href="modal/modal.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
?>
<div class="header">
    <h1><img src="img/title.png" height="50px" width="50px" align="center">SMITEinfo</h1>
</div>
<div class="news">
            <input id="login" type="text" placeholder="Login">
            <br>
            <input id="pass" type="password" placeholder="password">
            <br>
            <input id="mail" type="text" placeholder="e-mail">
            <br>
            <a href="javascript: void(0);" id="reg">Register</a>
    <div id="myModal" class="modal">
        <div  class="modal-content">
            <span class="close">&times;</span>
            <p>Registration success</p>
            <a href="index.php">Home</a>
        </div>

    </div>
</div>
<script src="modal/modal.js" type="text/javascript"></script>
</body>
</html>