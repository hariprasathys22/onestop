<?php
  $Con = mysqli_connect('localhost', 'root','','ecommerce');

  if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $password = $_POST['password'];

  

  $Dup_email = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE email = '$email' ");
  $Dup_name = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE username = '$name' ");

  if(mysqli_num_rows($Dup_email)){

    echo "
      <script>
        alert('This email is already exists');
        window.location.href= 'register.php';
      
      </script>
    
    ";
  }
  
  if(mysqli_num_rows($Dup_name)){
    
    echo "
      <script>
        alert('This name is already exists');
        window.location.href= 'register.php';
      
      </script>
    
    ";
  }

    else{
      mysqli_query($Con,"INSERT INTO `tbluser`(`username`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')");

      echo "
      <script>
        alert('Register successfully');
        window.location.href= 'login.php';
      
      </script>
    
    ";
    }

  } 

?>