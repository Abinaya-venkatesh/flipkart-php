<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
   <link rel="stylesheet" href="product.css">
</head>
<body>
    <h1 style="font-style:italic;text-align:center;">Product List</h1>
    <a href="product_add.php" class="add-link">Add product</a><br><br>

    <table id="product-table">
        <thead>
            <tr><th>Product Id</th>
                <th>Product Name</th>
                <th>Category Name </th>
                <th> Product Price</th>
                <th> Product Image</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT products.*, category.category_name FROM products LEFT JOIN category ON products.category_id = category.category_id";

            $result = mysqli_query($conn,$sql);
            if ($result->num_rows > 0) {
                while ($row =mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row['product_id'];?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td><?php echo $row['product_price']; ?></td>
                        <td><img src="uploads/<?php echo $row['product_image']; ?>" style="max-width: 90px;"></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><a href="product_edit.php?id=<?php echo $row['product_id']?>">Edit</a></td>
                        <td><a href="product_query.php?id=<?php echo $row['product_id']?>&action=delete">Delete</a></td>
                    </tr>
            <?php
                }
            } else {
            ?>
                <tr><td colspan='4'>No products found.</td></tr>
            <?php
            }          
            ?>
        </tbody>
    </table>
</body>
</html>