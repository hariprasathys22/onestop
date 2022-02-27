<?php
  session_start();
  $con = mysqli_connect("localhost","root","hari","ecommerce");
  if(mysqli_connect_error()){
      echo"
      <script>
        alert('cannot connect ot database');
        window.location.href='viewCart.php';
      </script>
      
      ";
      exit();
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      if(isset($_POST['purchase']))
      {
       $query1="INSERT INTO `order_manager`(`full_name`, `phone_number`, `address`, `pay_mode`) VALUES ('$_POST[Uname]','$_POST[Phonenumber]','$_POST[address]','$_POST[pay_mode]')";
       if(mysqli_query($con,$query1))
       {
         
         $order_id=mysqli_insert_id($con);
         

            $query2="INSERT INTO `user_orders`(`order_id`, `Pname`, `Pprice`, `Pquantity`) VALUES (?,?,?,?)";
           $stmt=mysqli_prepare($con,$query2);
           if($stmt)
           {
                mysqli_stmt_bind_param($stmt,"issi",$order_id,$Pname,$Pprice,$Pquantity);
               foreach($_SESSION['cart'] as $key => $values){
                  $Pname=$values['Pname'];
                  $Pprice=$values['Pprice'];
                  $Pquantity=$values['Pquantity'];
                  mysqli_stmt_execute($stmt);
                  
               }
                
               unset($_SESSION['cart']);
                echo"
              <script>
                alert('Order placed');
                window.location.href='jk.php';
              </script>";


            }
            
            else{
             echo"
              <script>
                alert('SQL query Error');
                window.location.href='viewCart.php';
              </script>";
            }
           
       }
       
       else{
        echo"
      <script>
        alert('SQL Error');
        window.location.href='viewCart.php';
      </script>
      
      ";
       }
      }
  }
  ?>