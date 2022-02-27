<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <section class="register">
        <div class="sec1">
            <form action="insert.php" class="box" method='POST'>
                <h1>REGISTER</h1>
                <input type="text" name="name" placeholder="username" required="required">
                <input type="email" name="email" placeholder="user_email" required="required">
                <input type="text" name="number" placeholder="user_number" required="required">
                <input type="password" name="password" placeholder="user_password" required="required">
                <input type="submit" name="submit" placeholder="" value="REGISTER">
                <a href="login.php" style="text-decoration:none;"><h4 style="color:#fff; font-weight:300;">Already have an account.</h4></a>
                
            </form>
        </div>
    </section>
</body>
</html>