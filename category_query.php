<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $sub_id = $_POST['subcategory_id'];
    $sql = "INSERT INTO category (category_name,subcategory_id) VALUES ('$category_name','$sub_id')";

    if (mysqli_query($conn, $sql)) {
        header('location:category_list.php');
    } else {
        echo 'error'; 
    }
} 
if(isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
   
    $sql = "DELETE FROM category WHERE category_id = $id";
    $result = mysqli_query($conn, $sql);
    if(isset($result)){
        header("location:category_list.php");  
    } 
}
?>
