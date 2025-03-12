<?php
include "connection.php";

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $sql = "SELECT * from products where product_id = $product_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
   
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }

        img {
            max-width: 100px;
            display: block;
            margin-bottom: 15px;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <h1>Edit Product</h1>
    <form action="productedit_query.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">

        <input type="hidden" name="old_image" value="<?php echo $row['product_image'];?>">

        Product Name: <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" ><br><br>

        Category Name: 
        
            <?php 
            $sql1 = "select * from category";
            $query1 = mysqli_query($conn,$sql1);
            ?>
            <select name="category" id="category">
            <?php while($row1 = mysqli_fetch_assoc($query1)){
                ?>
                
                <option value="<?php echo $row1['category_id']?>"<?php echo $row['category_id'] == $row1['category_id']? "selected":"" ?>>
             
             <?php echo $row1['category_name']; ?>
            </option>
           <?php }
            ?>
            
        </select>
        <br><br>

        Product Price: <input type="number" name="product_price" value="<?php echo $row['product_price']; ?>" ><br>

        Product Image: <input type="file" name="new_image"><br>

        <img src="uploads/<?php echo $row['product_image']; ?>" style="max-width: 100px;"><br>

        Description: <textarea name="description" ><?php echo $row['description']; ?></textarea><br>
        <br><br>
        <input type="submit" name="submit" value="Update Product">
    </form>
</body>
</html>
