<?php
    $id = $_REQUEST["id"];
    echo $id;
    include "./confit.php";
    $sql = "DELETE FROM wishlists WHERE id = {$id}";
    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/project-16-ecomin_shopping_site/wishlist.php");
    mysqli_close( $conn );

?>