<?php
    $con = mysqli_connect('localhost','root','hari','ecommerce');

    $A_name = $_POST['username'];
    $A_password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$A_name' AND  password = '$A_password'");

    session_start();

    if(mysqli_num_rows($result)){

        $_SESSION['admin'] = $A_name;

        echo"

        <script>
            alert('Login successfully');
            window.location.href='../admin.php';
        
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