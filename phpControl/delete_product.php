<?php
    include "./confit.php";
    $id = $_REQUEST["id"];
    
    $sql = "DELETE FROM products WHERE id = {$id}";
    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
    mysqli_close( $conn );
    
?>