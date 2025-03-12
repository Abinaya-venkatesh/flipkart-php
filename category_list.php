<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category list</title>
</head>
<link rel="stylesheet" href="product.css">
<body>

<h1>Category list</h1>
<a href="category_add.php" class="add-link">Add Category</a>
<table id="product-table">
    <thead>
        <th>Category Id</th>
        <th>Category Name</th>
        <th>SubCategory Name</th>
        <th colspan="2">Action</th>
    </thead>
    <?php 
    $sql = "SELECT c1.*, c2.category_name AS subcategory_name 
            FROM category c1
            LEFT JOIN category c2 ON c2.category_id = c1.subcategory_id";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['category_id']?></td>
                <td><?php echo $row['category_name']?></td>
                <td><?php echo $row['subcategory_name']?></td>
                <td><a href="category_edit.php?id=<?php echo $row['category_id']?>">Edit</a></td>
                <td><a href="category_query.php?id=<?php echo $row['category_id']?>&action=delete">Delete</a></td>
                
            </tr>
        </tbody>
    <?php } ?>
</table>
</body>
</html>
