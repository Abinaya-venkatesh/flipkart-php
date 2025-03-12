<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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
    <h2>Add Product</h2>
   
    <form action="product_query.php" method="post" enctype="multipart/form-data">
        Product Name: <input type="text" name="product_name" required><br><br>
        Category Name: 
        <select name="category" id="category" required>
            <option value="">Select Category</option>
           <?php 
           $sql = "select * from category";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
                ?>
                <option value="<?php echo $row['category_id']?>">
                <?php echo $row['category_name'];?>
            </option>
            <?php }
           ?>
        </select>
        <br><br>
        Product Price: <input type="number" name="product_price" required><br><br>
        
        Product Image: <input type="file" name="product_image" required><br><br>

        Description: <textarea name="description" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Add Product">
        
    </form>
</body>
</html>