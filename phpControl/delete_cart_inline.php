<?php
    $id = $_REQUEST["id"];
    echo $id;
    include "./confit.php";
    $sql = "DELETE FROM cart WHERE id = {$id}";
    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/project-16-ecomin_shopping_site/cart.php");
    mysqli_close( $conn );

?>