<?php
session_start();
if(isset($_SESSION['Username'])){
echo '';
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("index.html");
              </script>';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="homeStyle.css">
    </head>
    
    <body>
       <div id="navBarContainer">
           <div class="logo">
           <img src="copy_731952017.png">
           </div>
           <ul id="navBar">
               <li id="homeBtn"><a href="home.php">Home</a></li>
               <li id="menuBtn"><a href="menu.php">Menu</a></li>
               <li id="aboutBtn"><a href="#">About</a></li>
               <li id="logoutBtn"><a href="log_out.php">Log out</a></li>
           </ul>
        </div> 
        
    </body>
</html>