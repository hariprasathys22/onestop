<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
   
</head>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a href="admin.php"class="navbar-brand text-white">One Stop</a>
    <span>
    
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
    <a href="#" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
    <section style="position:relative;margin-top:10%;">
    <?php
        $con = mysqli_connect('localhost','root','hari','ecommerce');
        $Record = mysqli_query($con,"SELECT * FROM `tbluser`");
        $row_count = mysqli_num_rows($Record);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">

    
    <table class="table table-bordered " style="position:relative; width:90%;left:5%;background: rgba( 0, 0, 0, 0.3 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 1.5px );
-webkit-backdrop-filter: blur( 1.5px );
border-radius:10px 10px 10px 10px;
border: 1px solid rgba( 0,0,0,0.1);">
        <thead class="text-center" style="color:#fff;background:linear-gradient(to right,#333333,#dd1818,#333333);">
            <th style="border-radius:10px 0px 0px 0px;">Id</th>
            <th >Name</th>
            <th>Email</th>
            <th>Number</th>
            <th style="border-radius:0px 10px 0px 0px;">Delete</th>
            


            
        </thead>

        <tbody style="text-align:center; color:#fff;border-radius:10px 10px 10px 10px;">

            <?php
            $i=0;
               while ($row= mysqli_fetch_array($Record)){
               echo "
               <tr style='border-radius:10px 10px 10px 10px;'>
                <td>";?><?php echo ++$i?><?php echo "</td>
                <td>$row[username]</td>
                <td>$row[email]</td>
                <td>$row[number]</td>
                <td><a href='delete.php? ID=$row[id]' class='btn btn-outline-danger' style='color:#fff;border:none;' ><i class='fas fa-trash-alt'></i></a></td>
            </tr>";
               }
            ?>
        </tbody>
    </table>
    </div>
    <div style="position:relative;margin-left:0%;margin-top:0%;padding:5px;width:10%;text-align:center;">
      <h3 style="positon:relative;color:#fff;font-weight:600;">Total</h3> 
      <h1 style="positon:relative;color:#fff;background:#1f7909;border-radius:20px;border: 1px solid rgba( 0,0,0,0.7 );"><?php echo $row_count?></h1> 
    </div>
    </div>
    </div>
    </section>
</body>
</html>
<?php

?>