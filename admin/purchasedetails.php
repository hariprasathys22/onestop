<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchasedetails</title>
    <link rel="stylesheet" href="userdash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body style="background:linear-gradient(to right,#aa4b6b,#6b6b83,#3b8d99);">
<?php
session_start();
  if(!$_SESSION['admin']){
    
  }
  ?>

    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">Ezhil</a>
    <span>
    <i class="fas fa-user-shield"></i>
    <!--admin--><?php
      echo $_SESSION['admin'];
    ?>|
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
    <a href="#" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
  <div class="container mt-5">
      <div class="row">
          <div class="col-lg-12">
          <table class="table table-dark table-hover text-center">
            <thead>
                <tr>
                    <th>Order_Id</th>
                    <th>Customer Name</th>
                    <th>Phone_number</th>
                    <th>Address</th>
                    <th>PAYMODE</th>
                    <th>Orders</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $con = mysqli_connect("localhost","root","hari","ecommerce");
                   $query = "SELECT * FROM `order_manager`";
                   $user_result=mysqli_query($con,$query); 
                   while($user_fetch=mysqli_fetch_assoc($user_result)){
                       echo
                       "
                        <tr>
                            <td>$user_fetch[order_id]</td>
                            <td>$user_fetch[full_name]</td>
                            <td>$user_fetch[phone_number]</td>
                            <td>$user_fetch[address]</td>
                            <td>$user_fetch[pay_mode]</td>
                            <td>
                            <table class='table table-dark table-hover text-center'>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                            ";
                            $order_query="SELECT * FROM `user_orders` WHERE `order_id`='$user_fetch[order_id]'";
                            $order_result=mysqli_query($con,$order_query);
                            while($order_fetch=mysqli_fetch_assoc($order_result))
                            {
                                echo "
                                <tr>
                                    <td>$order_fetch[Pname]</td>
                                    <td>$order_fetch[Pprice]</td>
                                    <td>$order_fetch[Pquantity]</td>
                                
                                </tr>
                                
                                
                                ";
                            }
                            echo"
                                </tbody>
                                </table>
                            </td>
                         </tr>
                       ";
                       
                   }
                ?>
                </tbody>
            
            </table>
          </div>
      </div>
  </div>
</body>
</html>