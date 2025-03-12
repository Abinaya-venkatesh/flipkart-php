<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])){ 
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE Email = '$email' AND Password = '$password'";
        $query=mysqli_query($conn,$sql);
        
        $row = mysqli_fetch_assoc($query);
            if($email == $row['Email']&& $password == $row['Password']){
                $_SESSION['password'] = $row['Password'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['name'] = $row['Name'];
                header("location:signin_list.php");   
                
            }else{
                header("location:signin.php");
                
           }          
}
?>