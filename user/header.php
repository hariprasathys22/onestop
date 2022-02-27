<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userpanel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php
    session_start();
    $count=0;
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
        }
    
    ?>
    <section class="sophia">
    <header>
    <a href="..\index.html" class="novius">Ezhil</a>
        <nav class="jin">
            <ul class="nav_links">
            <li><a href="jk.php"><i class="fas fa-home"></i>|HOME</a></li>
            <li><a href="viewCart.php"><i class="fas fa-shopping-cart"></i>|CART(<?php echo $count;?>)</a></li>

            
            <li><i class="fas fa-user"></i>|<?php 
            if(isset($_SESSION['user'])){
            echo $_SESSION['user'];
            echo "
            <li><a href='form/logout.php'><i class='fas fa-sign-in-alt'></i>|LOGOUT</a></li>
            
            ";
            }
            else{
                echo"
                <li><a href='form/login.php'><i class='fas fa-sign-in-alt'></i>|LOGIN</a></li>
                
                ";
            }
            ?></li> 
            
            

            </ul>

            
        </nav>
        </header>
        <div class="category">
            <ul class="category_links">
                <li><a href="jk.php">Groceries</a></li>
                <li><a href="billing.php">Snacks</a></li>
                <li><a href="pos.php">Cleansing Agent</a></li>
                <li><a href="thermometer.php">Other</a></li>
            </ul>
        </div>

       
    </section>
</body>
</html>