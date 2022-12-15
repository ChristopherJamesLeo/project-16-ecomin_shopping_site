<?php
    include "./confit.php";
    $productId = $_REQUEST["id"];
    $productcode = $_REQUEST["productcode"];
    $title = $_REQUEST["title"];
    $type = $_REQUEST["type"];
    $price = $_REQUEST["price"];
    $size = $_REQUEST["size"];
    $stock = $_REQUEST["stock"];
    $description = $_REQUEST["description"];
    $filename = $_FILES["filename"]["name"];
    $filetmp = $_FILES["filename"]["tmp_name"];
    $pathDir = "../assets/product-images/";
    $targetPathDir = $pathDir.$filename;
    $fileType = pathinfo($targetPathDir,PATHINFO_EXTENSION);

    if(!empty($filename)){
        if(move_uploaded_file($filetmp,$targetPathDir)){
            $sql = "UPDATE products SET title = '{$title}', p_code = '{$productcode}', type = '{$type}' ,price = '{$price}', size = '{$size}', stock ='{$stock}', description ='{$description}',image = '{$filename}' WHERE id = {$productId}"; 
            $result = mysqli_query( $conn , $sql );
        }
    }
    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
    mysqli_close( $conn );
    
?>