<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSTORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="jk.css">
    <?php
        include 'header.php';
    
    ?>
</head>
<body>
    <div class="container-fluid ">
        <div class="col-md-12">
            <div class="row">
              
       

    <h1 class="head">OTHERS</h1>
    <?php
        include 'config.php';
        $Record = mysqli_query($con, "select * from tblproduct");
        while ($row = mysqli_fetch_array($Record)){
            $check_category  = $row['Pcategory'];
            if($check_category === 'Others' ){

        

            
                
        echo "
        
        <div class='col-md-6 col-lg-4 m-auto mb-3'> 
        <form action = 'insertcart.php' method='POST'>


    <div class='card m-auto' style='width: 15rem; backdrop-filter: blur(3px) saturate(146%);
    -webkit-backdrop-filter: blur(3px) saturate(146%);
    background-color: rgba(217, 192, 12, 0.45);
    border-radius:5px;
    border: 1px solid rgba(255, 255, 255, 0.125);'>
    <img src='../admin/product/$row[Pimage]' class='card-img-top rounded-top-3' >
    <div class='card-body text-center'>
        <h5 class='card-title text-white fs-4 fw-bold'>$row[Pname]</h5>
        <p class='card-text text-white fs-4 fw-bold'>Rs: $row[Pprice]</p>
        <input type='hidden' name = 'Pname' value = '$row[Pname]'>
        <input type='hidden' name = 'Pprice' value = '$row[Pprice]'>
        
        <input class='btn btn-success text-white fs-16px fw-bold w-50 rounded-pill' name = 'addCart'  type='submit' value='cart'>

        
    </div>
    </div>
    </form>
    </div>
    
    ";

}
}
    
?>
         
         </div>
        </div>
    </div>
    
</body>
</html>