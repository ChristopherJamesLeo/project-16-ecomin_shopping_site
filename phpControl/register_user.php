<?php
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    include "./confit.php";
    $sql = "INSERT INTO users (firstname,lastname,email,password) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}')";
    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/project-16-ecomin_shopping_site/user_dashboard.php");
    
    mysqli_close($conn);
?>