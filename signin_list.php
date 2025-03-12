
<?php
include "connection.php"; 
session_start();

if(isset($_SESSION['name'])) {
    
    $name = $_SESSION['name'];
    echo "Welcome back, $name!";
    header("Location: product_list.php"); 

    
} else {
   
    header("Location: signin.php"); 
    exit();
}
?>

<br><br>


<button><a href="signin.php">logout </a></button>



</a>

</body>
</html> 
