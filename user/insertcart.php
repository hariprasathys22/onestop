<?php
  session_start();

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    
  
  
  
  
  
  
    if(isset($_POST['addCart']))
    {
      if(isset($_SESSION['cart']))
      {
        $check_product = array_column( $_SESSION['cart'],'Pname');
        if(in_array($_POST['Pname'],$check_product))
        {
          echo "
            <script>
              alert('product already added');
              window.location.href = 'jk.php';
            </script>
          
          ";
        }
        else
        {
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('Pname' => $_POST['Pname'],'Pprice' => $_POST['Pprice'],'Pquantity'=>1);
        echo"
          <script>
          alert('product  added');
          window.location.href = 'jk.php';
          </script>                 
                                        
          ";
      }
    }

        else{
           
          $_SESSION['cart'][0] = array('Pname' => $_POST['Pname'],'Pprice' => $_POST['Pprice'],'Pquantity'=>1);
         echo"
          <script>
          alert('product  added');
          window.location.href = 'viewCart.php';
          </script>                 
                                        
          ";
        
        }
      
      

    }

    if(isset($_POST['remove']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['Pname']==$_POST['Pname'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "
        <script>
          alert ('Item Removed');
          window.location.href='viewCart.php';
        </script>
        ";
        }
      }
    }
    if(isset($_POST['Pquantity']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['Pname']==$_POST['Pname'])
        {
        $_SESSION['cart'][$key]['Pquantity']=$_POST['Pquantity'];
       
        echo "
        <script>
          
         window.location.href='viewCart.php';
        </script>
        ";
        }
      }
    }
   
}
  
?> 