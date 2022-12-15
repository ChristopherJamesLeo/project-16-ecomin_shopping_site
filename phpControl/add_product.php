<?php
    include "./confit.php";

    $productcode = $_REQUEST["productcode"];
    $title = $_REQUEST["title"];
    $type = $_REQUEST["type"];
    $price = $_REQUEST["price"];
    $size = $_REQUEST["size"];
    $stock = $_REQUEST["stock"];
    
    $description = $_REQUEST["description"];
    $filename = $_FILES["filename"]["name"];
    $pathDir = '../assets/product-images/';
    $targetPathDir = $pathDir . $filename;
    $fileType = pathinfo($targetPathDir , PATHINFO_EXTENSION);
    $filetmp = $_FILES["filename"]["tmp_name"];
    

    if(!empty($filename)){
        if(move_uploaded_file($filetmp , $targetPathDir)){
            $sql = "INSERT INTO products (p_code,title,type,price,size,stock,image,description) VALUES ('{$productcode}','{$title}','{$type}','{$price}','{$size}','{$stock}','{$filename}','{$description}')";
            $result = mysqli_query( $conn , $sql);
        }else{
            echo "fail upload image";
        }
    }else{  
        echo "empty image";
    }


    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
    mysqli_close($conn);
?>