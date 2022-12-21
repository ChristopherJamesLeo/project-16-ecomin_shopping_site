<?php
    $id = $_REQUEST["id"];
    $firstname = $_REQUEST["fistname"];
    $lastname = $_REQUEST["lastname"];
    $contact_number = $_REQUEST["phonenumber"];
    $email = $_REQUEST["email"];
    // $password = $_REQUEST["password"];
    $yourmessage = $_REQUEST["yourmessage"];
    $address = $_REQUEST["address"];
    $zip_code = $_REQUEST["zip-code"];
    $country = $_REQUEST["country"];
    $city = $_REQUEST["city"];
    $region = $_REQUEST["regionstate"];

    $filename = $_FILES["filename"]["name"];
    $targetDir = "../assets/user-profile/";
    $targetDirPath = $targetDir.$filename;
    $file_temp = $_FILES["filename"]["tmp_name"];
    $fileType = pathinfo($filename,PATHINFO_EXTENSION);

    if(!empty($filename)){
        if(move_uploaded_file($file_temp ,$targetDirPath)){
            include "./confit.php";
            $sql = "UPDATE users SET firstname = '{$firstname}',lastname = '{$lastname}',email = '{$email}',logo_img = '{$filename}',address = '{$address}',contact_number = '{$contact_number}',zipcode = '{$zip_code}',country = '{$country}',city = '{$city}',region = '{$region}',message = '{$yourmessage}' WHERE id = {$id}";
        
            $result = mysqli_query($conn , $sql) or die ("Connection Fail");
        }
    }


    header("location:http://localhost/project-16-ecomin_shopping_site/user_dashboard.php");

    mysqli_close($conn);
    
?>