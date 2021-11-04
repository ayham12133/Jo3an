<?php
session_start();

require_once("component1.php");
require_once("cartDb.php");

$database = new CreateDb("Productdb", "Producttb");
if(isset($_SESSION['Username'])){
echo "";
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("index.html");
              </script>';
}

if(isset($_POST['add'])){
    
    
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'burgers.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="burgersStyle.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        
            
      <!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        
         <div id="navBarContainer">
     <div class="logo">
           <img src="copy_731952017.png">
           </div>
           <ul id="navBar">
               <li id="homeBtn"><a class="nB" href="home.php">Home</a></li>
               <li id="menuBtn"><a class="nB" href="menu.php">Menu</a></li>
               <li id="aboutBtn"><a class="nB" href="#">About</a></li>
               <li class="cart"> <a href="cart.php"> <i class="fas fa-shopping-cart"></i><?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\">0</span>";
                        }

                        ?></a> </li>
               <li id="logoutBtn"><a class="nB" href="log_out.php">Log out</a>
               </li>
               
               
           </ul>
        </div>
        <div class="gallery">
            <?php
            $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component("", "",  $row['product_image'], $row['id']);
                    
                }
            
            ?>
            
            <div class="desc">
            
            <h4>Extrem beef burger</h4>
                <p><small>extrem sauce, onion, beef bacon, lettuce, tomato, emmental cheese</small></p>
                
                <p>Price:6.00$</p>
            </div>
            <div class="desc1">
            
            <h4>Crispy chicken burger</h4>
                <p><small>musterd mayo sauce, lettuce, tomato, emmental cheese</small></p>
                
                <p>Price:4.00$</p>
            </div>
            <div class="desc2">
            
            <h3>Vegan burger</h3>
                <p><small>our secret sauce, lettuce, tomato, zuccine, vegan batty</small></p>
                
                <p>Price:5.00$</p>
                
            </div>
        <div class="container">
        <div class="row text-center py-5">
            
            </div>
            </div>
        </div>
    
     
         
        
        
        
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
           
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
           <script src="main.js"></script>

    </body>
</html>