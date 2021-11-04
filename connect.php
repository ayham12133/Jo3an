<?php


$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="project_db";

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    echo 'no connect';
}
else{
    echo 'good connect'; 
}
?>
