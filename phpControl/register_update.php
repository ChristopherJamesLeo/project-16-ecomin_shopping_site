<?php
    $id = $_REQUEST["id"];
    $firstname = $_REQUEST["fistname"];
    $lastname = $_REQUEST["lastname"];
    $contact_number1 = $_REQUEST["phonenumber"];
    $email = $_REQUEST["email"];
    $v_id = $_REQUEST["v_id"];
    $yourmessage = $_REQUEST["yourmessage"];
    $companyname = $_REQUEST["companyname"];
    $address = $_REQUEST["address"];
    $zip_code = $_REQUEST["zip-code"];
    $country = $_REQUEST["country"];
    $city = $_REQUEST["city"];
    $region = $_REQUEST["regionstate"];

    $image = $_FILES["filename"]["name"];


    echo $image;
    // die();    
    $targetDir = "../assets/vendor-profile/";
    $targetDirPath = $targetDir.$image;
    $file_temp = $_FILES["filename"]["tmp_name"];
    $file_type = pathinfo($targetDirPath , PATHINFO_EXTENSION)  ;
    
    if(!empty($image)){
        if(move_uploaded_file($file_temp , $targetDirPath)){
            include "./confit.php";
            $sql = "UPDATE vendors SET firstname = '{$firstname}',lastname = '{$lastname}',email = '{$email}',v_id = '{$v_id}',companyname = '{$companyname}',logo_img = '{$image}',address = '{$address}',contact_number1 = '{$contact_number1}',zipcode = '{$zip_code}',country = '{$country}',city = '{$city}',region = '{$region}',message = '{$yourmessage}' WHERE id = {$id}";
        
            $result = mysqli_query($conn , $sql) or die ("Connection Fail");
        }else {
            echo " Upload Image";
        }
    }else{
        echo "Enter Your Profile Picture";
    }

    echo "upload Done";


    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");

    mysqli_close($conn);
    
?>