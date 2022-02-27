
<?php
 $id=$_GET['ID'];
$con = mysqli_connect('localhost','root','hari','ecommerce');
mysqli_query($con,"DELETE FROM `tbluser` WHERE id = $id");
header("location:user.php");
?>