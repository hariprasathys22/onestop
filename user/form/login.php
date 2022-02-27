<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="register">
        <div class="sec1">
            <form action="login1.php" class="box" method='POST'>
                <h1>LOGIN</h1>
                <input type="text" name="name" placeholder="username" required="required">
                
                <input type="password" name="password" placeholder="user_password" required="required">
                <input type="submit" name="submit" placeholder="" value="LOGIN">
                <a href="register.php" style="text-decoration:none;"><h4 style="color:#fff; font-weight:300;">New user</h4></a>
                
            </form>
        </div>
    </section>
</body>
</html>