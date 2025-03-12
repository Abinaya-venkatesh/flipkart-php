<?php
$servername="localhost";
$username="root";
$password="";
$dbname="flipkart";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connection_error();

    
}
?>