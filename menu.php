<?php
session_start();
if(isset($_SESSION['Username'])){
echo "";
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("index.php");
              </script>';
}
?>
<!DOCTYBE>
<html>
    <head>
        <link rel="stylesheet" href="menuStyle.css">
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
               <li id="logoutBtn"><a class="nB" href="log_out.php">Log out</a></li>
           </ul>
        </div>
        <div>
            <div class="gallery">
                <a href="burgers.php">
                    <img src="pexels-griffin-wooldridge-2657960.jpg">
                    <div class="desc">
                        <p>Burger Menu</p>
                    </div>
                </a>
            </div>
            <div class="gallery">
                <a href="#">
                    <img src="pexels-julie-aagaard-2097090.jpg">
                    <div class="desc">
                        <p>Salad Menu</p>
                    </div>
                </a>
            </div>
            <div class="gallery">
                <a href="#">
                    <img src="pexels-artem-beliaikin-914241.jpg">
                    <div class="desc">
                        <p>Drink Menu</p>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>