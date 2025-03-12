<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['product_name'];
    $category_name = $_POST['category'];
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = "";
    if(isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] == UPLOAD_ERR_OK){
        $temp_name =$_FILES["product_image"]["tmp_name"];
        $product_image = $_FILES["product_image"]["name"];
        //echo "hi";exit;
        $upload_dir  = "uploads/";
        //echo "hi";exit;
        
        move_uploaded_file($temp_name,$upload_dir.$product_image);
        //echo "hi";exit;
    
        $sql = "INSERT INTO products (product_name, category_id, product_price, product_image, description) VALUES ('$product_name', $category_name, $product_price, '$product_image', '$description')";
        //echo $sql;exit;
        $query=mysqli_query($conn,$sql);
        if ($query) {
            header("location:product_list.php");    
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

if(isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
   
    $sql = "DELETE FROM products WHERE product_id = $id";
    $result = mysqli_query($conn, $sql);
    if(isset($result)){
        header("location:product_list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
