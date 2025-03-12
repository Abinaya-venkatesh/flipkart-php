<?php
include "connection.php";

if(isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $category_name = $_POST['category'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = $_POST['old_image'];

    
    if($_FILES['new_image']['error'] === UPLOAD_ERR_OK){
        $target_dir = "uploads/";
        $target_file = $target_dir.basename($_FILES['new_image']['name']);
        if(move_uploaded_file($_FILES['new_image']['tmp_name'],$target_file)){
            $image = $_FILES['new_image']['name'];
        }
    }
    
   

    $sql = "UPDATE products SET product_name = '$product_name', category_id = '$category_name', product_price = '$product_price', product_image = '$image', description = '$description' WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header("location: product_list.php");
        
    } 
} 
?>
