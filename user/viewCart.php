<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="viewCart.css">
    <?php
        include 'header.php';
    ?>
</head>
<body>
<section>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded-4" style="width:50%;background:rgba(83, 85, 85, 0.5);padding:5px;border-radius:50px;margin-left:320px;color:#fff;">
            <h1>MY CART</h1>
        </div>
        <div class="col-lg-8">
            <table class="table my-5" style="background:rgba(83, 85, 85, 0.5);color:#fff;">
                <thead class="text-center">
                    <tr>
                    <th scope="col">SERIAL_NO</th>
                    <th scope="col">ITEM NAME</th>
                    <th scope="col">ITEM PRICE</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">REMOVE</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    
                    if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        $sr=$key+1;
                        
                    echo"
                        <tr>
                            <td>$sr</td>
                            <td>$value[Pname]</td>
                            <td>$value[Pprice]<input type='hidden' class='iprice' value='$value[Pprice]'></td>
                            <td>
                                <form action='insertcart.php' method='POST'>
                                    <input class='text-center border rounded-3 bg-transparent iquantity' style='color:#fff;' onchange='this.form.submit();' name='Pquantity' type='number' value='$value[Pquantity]' min='1' max='10'>
                                    
                                    <input type='hidden' name='Pname' value='$value[Pname]'>
                                </form>
                            </td>
                            <td ><i class='fas fa-rupee-sign itotal'></i></td>
                            <td>
                            <form action='insertcart.php' method='POST'>
                                <button name='remove' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                <input type='hidden' name='Pname' value='$value[Pname]'>
                            </form>
                            </td>
                        
                        </tr>
                    ";
                    }
                }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <div class="col-lg-3 my-5" style="">
            <div class="border rounded-4" style="background-color: rgba(226, 224, 236, 0.6);border-radius:30px; color:#000;padding:20px;">
                <h4 ><b>TOTAL:</b></h4>
                <h6 style="text-align:left;background:rgba(83, 85, 85, 0.5);width:43%;padding:5px;border-radius:30px;color:rgba(225, 229, 234, 1);"><i class="fas fa-rupee-sign" id="gtotal"></i></h6>
                <?php
                   if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
                   {

                   
                ?>
            <form action="purchase.php" method="POST">
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="Uname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="Phonenumber" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Cash On Delivery
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pay_mode" value="CARD" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                     Credit/Debit Card
                    </label>
                </div><br>
                    <button class="btn btn-primary btn-block" name="purchase" style="margin-left:50px;">PURCHASE</button>
            </form>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
            

        }
        gtotal.innerText=gt;
    }
    subTotal();
</script>
</body>
</html>