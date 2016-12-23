<?php
/**
 * Created by PhpStorm.
 * User: griffon
 * Date: 23.12.2016
 * Time: 1:18
 */
include "header.html";
$servername ='localhost';
$username='root';
$password='';
$dbname='13sever13';
$con= new mysqli($servername,$username,$password, $dbname);
if ($con->connect_error){
    die('error');
}
$sql="SELECT * FROM news WHERE catID=$_GET[id]";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        ?>
        <img src="<?php echo $row['img']; ?>" />
        <a href="post.php?p=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a>

        <?php
    }
}
?>