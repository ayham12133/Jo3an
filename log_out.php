<?php
session_start();
session_unset();
session_destroy();
header("location:log_in1.php");



?>

