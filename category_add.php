<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title> Category Add</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 25px;
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
</head>
<body>
    <h1>Category Add</h1>

    <form action="category_query.php" method="POST">
        Category Name: <input type="text" name="category_name" required><br><br>
        <label for="category"> Sub Category:</label>
        <select name="subcategory_id">
            <option value="">Select Subcategory :</option> 
        <?php 
        $sql = "select * from category";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($query)){
            ?>
            <option value="<?php echo $row['category_id'];?>">
                <?php echo $row['category_name'];?>
            </option>
            <?php } ?>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Add Category">
    </form>
</body>
</html>
