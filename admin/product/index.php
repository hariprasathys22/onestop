<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
   
</head>
<body>
    <div class="main">
        <div class="register">
          <h2>Product Details</h2> 
          <form id="product" action="insert.php" method="POST" enctype="multipart/form-data">
             <label>Product Name:</label>
             <br>
             <input type="text" name="Pname" id="name" placeholder="Enter product name" required="required">
             <br><br>
             <label>Product price:</label>
             <br>
             <input type="text" name="Pprice" id="name" placeholder="Enter product price" required="required">
             <br><br>
             <label>Add Product image:</label>
             <br>
             <input type="file" class="file" name="Pimage" id="name" placeholder="No file choosen" required="required">
             <br><br>
             <label>Select Page Category:</label>
             <br>
             <div class="select-box">
             <select name="Pcategory" id="name" required="required">
                 <option value="category">Select Category</option>
                 <option value="Groceries">Groceries</option>
                 <option value="Snacks">snacks</option>
                 <option value="Cleansing agent">cleansing agent</option>
                 <option value="Other">Others</option>
             </select>
             </div>
             <br><br>
             <input type="submit" value="Submit" name="submit" id="submit">
          </form>  
        </div>
    </div>
    <div class="gogeta ">
        <div class="rowd">
            <div class="col-md-8 m-auto ">
                

      
    <table class="table table-dark table-hover border my-5 ">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        

        <tbody>
            <?php
                include 'Config.php';
                $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");
                while($row = mysqli_fetch_array($Record))

                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[Pname]</td>
                <td>$row[Pprice]</td>
                <td><img src='$row[Pimage]' height= '90px' width= '90px'></td>
                <td>$row[Pcategory]</td>
                <td><a href='delete.php?ID=$row[id]' class = 'bg-danger btn btn-outline-white fs-16px fw-bold text-white'>DELETE</td>
                <td><a href='update.php?ID=$row[id]' class = 'bg-green btn btn-outline-white fs-16px fw-bold text-white' style='background:green;'>UPDATE</td>
                </tr>

                
                
                ";
                
            
            
            
            ?>
        </tbody>


    </table>
   
    </div>
        </div>
    </div>
   
    
</body>
</html>