<?php
include("connection.php");

if (isset($_POST['query'])) {
   
    $input = $conn->real_escape_string($_POST['query']);
    
   $sql = $conn->prepare("SELECT * FROM products left join category on category.category_id = products.category_id WHERE product_name LIKE CONCAT('%', ?, '%') " );
   $sql->bind_param("s", $input);
   $sql->execute();
    $result =$sql->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            echo "<div class='product-item'>";
            echo "<img src='uploads/" . $row['product_image'] . "' alt='" . $row['product_name'] . "'>";
            echo "<p>" . $row['product_name'] . "<br><span style='color: blue; font-weight: bold;'>" . $row['category_name'] . "</span></p>";
            echo "</div>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
   $sql->close();
}
$conn->close();
?>