<?php
    $id = $_REQUEST["id"];
    include "./confit.php";
    session_start();
    if(!isset($_SESSION["user_id"])){
        header("location:http://localhost/project-16-ecomin_shopping_site/log_in.php");
    }else{
        $sql = "SELECT * FROM products WHERE id = {$id}";
        $result = mysqli_query( $conn , $sql);
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $user_id = $_SESSION["user_id"];
                $p_id = $row['id'];
                $p_code = $row['p_code'];
                $title = $row['title'];
                $price = $row['price'];
                $size = $row['size'];
                $category = $row['category'];
                $stock = $row['stock'];
                $image = $row['image'];
                $description = $row['description'];
                $cartSql = "INSERT INTO wishlists (user_id,p_id,p_code,title,price,size,category,stock,image,description) VALUES ('{$user_id}',{$p_id},'{$p_code}','{$title}','{$price}','{$size}','{$category}','{$stock}','{$image}','{$description}')";
                $cartResult = mysqli_query( $conn , $cartSql);
    
                header("location:http://localhost/project-16-ecomin_shopping_site/wishlist.php");
                mysqli_close( $conn );
            }
        }
    }
    

?>