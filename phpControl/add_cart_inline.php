<?php
    $id = $_REQUEST["id"];

    include "./confit.php";
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query( $conn , $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $p_id = $row['id'];
            $p_code = $row['p_code'];
            $title = $row['title'];
            // $type = $row['type'];
            $price = $row['price'];
            $size = $row['size'];
            $category = $row['category'];
            $stock = $row['stock'];
            $image = $row['image'];
            $description = $row['description'];

            $cartSql = "INSERT INTO cart (p_id,p_code,title,price,size,category,stock,image,description) VALUES ({$p_id},'{$p_code}','{$title}','{$price}','{$size}','{$category}','{$stock}','{$image}','{$description}')";
            $cartResult = mysqli_query( $conn , $cartSql);

            header("location:http://localhost/project-16-ecomin_shopping_site/index1.php");
            mysqli_close( $conn );
        }
    }

?>