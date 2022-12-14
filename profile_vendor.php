<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Profile Vendor</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap v-5.2. css-1 js-1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
    <style>

    </style>
</head>
<body>
    <?php
        include "./header_navbar.php";
    ?>
    <div class="page-direction-main-container">
        <div class="page-direction-container flex justify-between items-center tracking-wider">
            <div class="page-direction-left">
                <h1 class="uppercase font-semibold">Profile</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./profile.php" class="font-semibold">profile</a>
            </div>
        </div>
    </div>
    <div class=" login-body-container personal-body-container flex flex-col justify-center">
        <div class="register-body-main-container personal-detail-body-main-container">
            <div class="row">
                <div class="col-12 log-in-form-container personal-detail-form-container">
                    <h1 class="font-bold uppercase logIn-title my-3">personal detail</h1>
                    <form action="./phpControl/register_update.php" method="GET" class="w-full log-in-form">
                        
                        <?php
                            $id = $_REQUEST["id"];
                            $sql = "SELECT * FROM vendors WHERE id = {$id}";
                            $result = mysqli_query( $conn , $sql);

                            if(mysqli_num_rows($result) > 0){
                                while( $row = mysqli_fetch_assoc($result)){
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row["id"] ;?>">
                        <div class="row my-4">
                            <div class="col-lg-6 form-group">
                                <label for="firstname" class="font-semibold mb-3">First Name</label>
                                <input type="text" name="fistname" id="firstname" class="form-control rounded-0 mb-3" placeholder="First Name" value = "<?php echo $row["firstname"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="lastname" class="font-semibold mb-3">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control rounded-0 mb-3" placeholder="Last Name" value = "<?php echo $row["lastname"] ;?>" >
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-6 form-group">
                                <label for="phonenumber" class="font-semibold mb-3">Phone Number</label>
                                <input type="text" name="phonenumber" id="phonenumber" class="form-control rounded-0 mb-3" placeholder="Phone Number" value = "<?php echo $row["contact_number1"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="email" class="font-semibold mb-3">Email</label>
                                <input type="email" name="email" id="email" class="form-control rounded-0 mb-3" placeholder="Email"  value = "<?php echo $row["email"] ;?>" >
                            </div>
                            <div class="form-group">
                                <label for="yourmessage" class="font-semibold mb-3">Write Your Message</label>
                                <textarea name="yourmessage" id="yourmessage" class="form-control rounded-0" cols="30" rows="10" placeholder="Enter Your Message" > <?php echo $row["message"] ;?> </textarea>
                            </div>
                            <h1 class="font-bold uppercase logIn-title mt-5 mb-3">Shipping Address</h1>
                            <div class="col-lg-6 form-group">
                                <label for="company-name" class="font-semibold mb-3">Flat / Plot</label>
                                <input type="text" name="companyname" id="company-name" class="form-control rounded-0 mb-3" placeholder="company name"  value = "<?php echo $row["companyname"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="address" class="font-semibold mb-3">Address *</label>
                                <input type="text" name="address" id="address" class="form-control rounded-0 mb-3" placeholder="Address"  value = "<?php echo $row["address"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="zip-code" class="font-semibold mb-3">Zip Code *</label>
                                <input type="text" name="zip-code" id="zip-code" class="form-control rounded-0 mb-3" placeholder="zip-code"  value = "<?php echo $row["zipcode"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="lastname" class="font-semibold mb-3">Country *</label>
                                <select name="country" id="country" class="form-select rounded-0"  value = "<?php echo $row["country"] ;?>" > 
                                    <option value="India">India</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Thailand">Thailand</option>
                                </select>   
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="city" class="font-semibold mb-3">City *</label>
                                <input type="text" name="city" id="city" class="form-control rounded-0 mb-3" placeholder="City"  value = "<?php echo $row["city"] ;?>" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="regionstate" class="font-semibold mb-3">Region/State *</label>
                                <input type="text" name="regionstate" id="regionstate" class="form-control rounded-0 mb-3" placeholder="Region/State "  value = "<?php echo $row["region"] ;?>" >
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="save setting" class="uppercase font-bold loginBtn">
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "./footer.php";
    ?>
    <!-- bootstrap v-5.2 js-1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="./assets/libs/jQuery/jquery-3.6.1.min.js"></script>
    <!-- ionic -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-bar-slide-show-btn").click(function(){
                $(".nav_bar_slide_container").animate({
                    "height" : "toggle" ,
                },300)
            })
            $('#wishlist_table').DataTable();
        })
    </script>
</body>