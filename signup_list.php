<?php
    include "connection.php"; 
    session_start();

if(isset($_SESSION['name'])) {
    
    $name = $_SESSION['name'];
    echo "successfully signed up , $name!";
    
}     
?>
<br><br>
<a href="signin.php">sign in</a>