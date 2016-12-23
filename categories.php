<?php
/**
 * Created by PhpStorm.
 * User: griffon
 * Date: 22.12.2016
 * Time: 23:20
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

$sql="SELECT * FROM categories ";
$result=$con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        ?>
        <img class="cImg" src="<?php echo $row['icon']; ?>" />
        <a href="Category.php?id=<?php echo $row['id'];?>" ><?php echo $row['name']; ?></a>

        <?php
    }
}

?>