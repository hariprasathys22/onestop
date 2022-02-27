<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <?php
   
    $id = $_GET['ID'];
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE id = $id");
    $data = mysqli_fetch_array($Record);

    ?>
<div class="main">
        <div class="register">
          <h2>Product Update</h2> 
          <form id="product" action="update1.php" method="POST" enctype="multipart/form-data">
             <label>Product Name:</label>
             <br>
             <input type="text" value = "<?php echo $data['Pname']?>" name="Pname" id="name" placeholder="Enter product name" required="required">
             <br><br>
             <label>Product price:</label>
             <br>
             <input type="text" value = "<?php echo $data['Pprice']?>" name="Pprice" id="name" placeholder="Enter product price" required="required">
             <br><br>
             <label>Add Product image:</label>
             <br>
             <input type="file" class="file" name="Pimage" id="name" placeholder="No file choosen" required="required"><br>
             <img style= "height:100px; width:100px;align-items:center;padding-top:5px;border-radius:20px;"src="<?php echo $data['Pimage']?>" alt="">
             <br><br>
             <label>Select Page Category:</label>
             <br>
             <div class="select-box">
             <select name="Pcategory" id="name" required="required">
                 <option value="category">Select Category</option>
                 <option value="Groceries">Groceries</option>
                 <option value="Snacks">Snacks</option>
                 <option value="Cleansing Agent">Cleansing Agent</option>
                 <option value="Others">Others</option>
             </select>
             </div>
             <input style="background: rgba( 0, 0, 0, 0.45 );color:#fff;margin-top:5px;border-radius:30px;padding-left:5px;"type="hidden" name="id" value="<?php echo $data['id']?>">
             <br><br>
             <input type="submit" value="Update" name="update" id="submit">
          </form>  
        </div>
    </div>

    
    
</body>
</html>



