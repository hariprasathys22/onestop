<?php
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $product_name=$_POST['Pname'];
            $product_price=$_POST['Pprice'];
            $product_image=$_FILES['Pimage'];
            $image_loc = $_FILES['Pimage']['tmp_name'];
            $image_name = $_FILES['Pimage']['name'];
            $img_des = "Uploadimage/".$image_name;
    
            move_uploaded_file($image_loc, $img_des);
            $product_category = $_POST['Pcategory'];

            include 'Config.php';
            mysqli_query($con,"UPDATE `tblproduct` SET `Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$img_des',`Pcategory`='$product_category' WHERE id = $id");
            header("location:index.php");
            
        }
        
    ?>