<?php

if(isset($_POST['btn']))
{
    $username=$_POST["Username"];
    $email=$_POST["emails"]; 
    $password=$_POST["Password"];
    $conpass=$_POST["cPassword"];
    
    require 'connect.php';
    
    $select="select * from register where emails='$email'";
    $query=mysqli_query($con,$select); 
    
    
    if(mysqli_num_rows($query)>0){
        
        echo '<script>alert("email already exists please sign in");
              window.location.assign("log_in1.php");
              </script>';
    }

    else{
        
        $insert="insert into register(Username,emails,Password,cPassword)  values( '$username' , '$email' , '$password' , '$conpass' )";
        if($password==$conpass){
        $query2=mysqli_query($con , $insert);
    
        if($query2){
            
            
            
            echo '<script>alert("Successfully registered");window.location.assign("log_in1.php");
            </script>';
        }
    }else{
            echo '<script>alert("Your passwords do not match");window.location.assign("register.html");
            </script>';
        }

    
}
}




    ?>


