<?php
session_start();
if(isset($_POST['log'])){
    
    $username=$_POST["username"];
    $password=$_POST["pass"];
    
    require 'connect.php';
    
    $qu="select * from register where Username='$username' and Password='$password'";
    
    if(mysqli_num_rows(mysqli_query($con,$qu))>0){
        $_SESSION['Username']=$username;
        header("location:home.php");
    }else{
        echo '<script>alert("Error in username or password");
              window.location.assign("index.html");
              </script>';
    }
   
    
        }

?>

