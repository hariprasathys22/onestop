<?php

$name = $_POST['name'];
$password = $_POST['password'];

$Con = mysqli_connect('localhost', 'root','','ecommerce');

$result = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE username = '$name' AND  password ='$password'");
session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user'] = $name ; 
    echo"
    <script>
    alert('Login Successfully');
    window.location.href = '../jk.php';
    </script>
    
    ";
}
else{
    echo"
    <script>
    alert('Invalid username or password');
    window.location.href='login.php';
    </script>
    
    
    ";
}


?>