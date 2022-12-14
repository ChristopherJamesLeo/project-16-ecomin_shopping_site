<?php
    include "./confit.php";

    $productcode = $_REQUEST["productcode"];
    $title = $_REQUEST["title"];
    $type = $_REQUEST["type"];
    $price = $_REQUEST["price"];
    $size = $_REQUEST["size"];
    $stock = $_REQUEST["stock"];
    $description = $_REQUEST["description"];

    // echo $title . $price . $productcode . $size . $type . $stock . $description ;

    $sql = "INSERT INTO products (p_code,title,type,price,size,stock,description) VALUES ('{$productcode}','{$title}','{$type}','{$price}','{$size}','{$stock}','{$description}')";

    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
    mysqli_close($conn);
?>