<?php
include 'connection.php';
// session_start();

if(isset($_POST['submit'])){ 
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Mobile = $_POST['phone'];

    $sql = "INSERT INTO signup (Name, Email, Password, Mobile) VALUES ('$Name', '$Email','$Password','$Mobile')";
    $query = mysqli_query($conn, $sql);

    
    if ($query) {
       
     ?> 
     <?php
     header("Location: signin.php"); 


        
    } 
}
?>
