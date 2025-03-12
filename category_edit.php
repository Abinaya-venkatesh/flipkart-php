<?php
include "connection.php";

if(isset($_GET['id'])) {
    $category_id = $_GET['id'];
    
    $sql = "SELECT * FROM category WHERE category_id = $category_id";
    $query = mysqli_query($conn, $sql);
    $result= mysqli_fetch_assoc($query);
} 
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
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
    <h1>Edit Category</h1>
    <form action="categoryedit_query.php" method="POST">
        <input type="hidden" name="category_id" value="<?php echo $result['category_id']; ?>">
        Category Name: <input type="text" name="category_name" value="<?php echo $result['category_name']; ?>" required><br><br>
        <label for="subcategory_id">Subcategory:</label>
        <select name="subcategory_id"> 
            <?php 
            $sql = "SELECT * FROM category";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($query)){
                ?>
                <option value="<?php echo $row['category_id'];?>" <?php if($row['category_id'] == $result['subcategory_id']) echo 'selected'; ?>>
                    <?php echo $row['category_name'];?>
                </option>
                <?php 
            } 
            ?>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Update Category">
    </form>
</body>
</html>
