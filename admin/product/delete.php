


<?php
    echo $id=$_GET['ID'];
    include 'Config.php';
    mysqli_query($con,"DELETE FROM `tblproduct` WHERE id=$id");
    header("location:index.php")

?>