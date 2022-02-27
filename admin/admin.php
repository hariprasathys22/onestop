<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="AdminSyle.css">
</head>
<?php
  session_start();
  if(!$_SESSION['admin']){
    header("location: form/login.php");
  }

?>
<body>
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
<div class="Dash">
    <h2>Dashboard</h2>
    <div class="button">
      <div class="post">
        <div class="dom">
          <a href="inert.php" class="yoo"><i class="far fa-plus-square text-white fw-bold"></i></a>
          <p>add post</p>
        </div>
      </div>
      <div class="post">
        <div class="dom">
          <a href="#" class="yoo"><i class="fas fa-user text-white fw-bold"></i></a>
          <p>Dealer</p>
        </div>
      </div>
      <div class="post">
        <div class="dom">
          <a href="userdash.php" class="yoo"><i class="fas fa-users text-white fw-bold"></i></a>
          <p>Users</p>
        </div>
      </div>

    </div>
</div>
</body>
</html>