<?php
include "connection.php";

if(isset($_POST['submit'])) {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $sub_id = $_POST['subcategory_id'];

    $sql = "UPDATE category SET category_name = '$category_name', subcategory_id = '$sub_id' WHERE category_id = $category_id";
    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header("location: category_list.php");
       
    } 
} 
?>
