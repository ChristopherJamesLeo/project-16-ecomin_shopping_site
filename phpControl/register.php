<?php
    $firstname = $_REQUEST["fistname"];
    $lastname = $_REQUEST["lastname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    include "./confit.php";
    $sql = "INSERT INTO vendors (firstname,lastname,email,password) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}')";

    $result = mysqli_query($conn , $sql) or die ("Connection Fail");
    
    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php" );

    mysqli_close($conn);
    
?>