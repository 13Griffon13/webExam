<?php
/**
 * Created by PhpStorm.
 * User: griffon
 * Date: 23.12.2016
 * Time: 4:00
 */
$servername ='localhost';
$username='root';
$password='';
$dbname='13sever13';
$con= new mysqli($servername,$username,$password, $dbname);
if ($con->connect_error){
    die('error');
}
$login= $_POST['login'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$sql="SELECT * FROM users ";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($row['login']==$login){
            echo 'false';
            exit;
        }
    }
}
require 'db_connect.php';
$db = new DB_CONNECT();
    $sql = "INSERT INTO `users` (`id`,`login`, `pasword` , `e-mail`) VALUES (NULL, '$login', '$pass', '$mail');";
    mysql_query($sql) or die(mysql_error());
    echo 'notexist';
?>