<?php
    $id = $_REQUEST["id"];
    $firstname = $_REQUEST["fistname"];
    $lastname = $_REQUEST["lastname"];
    $contact_number1 = $_REQUEST["phonenumber"];
    $email = $_REQUEST["email"];
    // $password = $_REQUEST["password"];
    $yourmessage = $_REQUEST["yourmessage"];
    $companyname = $_REQUEST["companyname"];
    $address = $_REQUEST["address"];
    $zip_code = $_REQUEST["zip-code"];
    $country = $_REQUEST["country"];
    $city = $_REQUEST["city"];
    $region = $_REQUEST["regionstate"];

    include "./confit.php";
    $sql = "UPDATE vendors SET firstname = '{$firstname}',lastname = '{$lastname}',email = '{$email}',companyname = '{$companyname}',address = '{$address}',contact_number1 = '{$contact_number1}',zipcode = '{$zip_code}',country = '{$country}',city = '{$city}',region = '{$region}',message = '{$yourmessage}' WHERE id = {$id}";

    $result = mysqli_query($conn , $sql) or die ("Connection Fail");

    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");

    mysqli_close($conn);
    
?>