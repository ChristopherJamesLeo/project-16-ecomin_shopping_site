<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Log In</title>
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
        // include "./header_navbar.php";
    ?>
    <div class="page-direction-main-container">
        <div class="page-direction-container flex justify-between items-center tracking-wider">
            <div class="page-direction-left">
                <h1 class="uppercase font-semibold">Customer's login</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./log_in.php" class="font-semibold">login</a>
            </div>
        </div>
    </div>
    <div class=" login-body-container flex flex-col justify-center">
        <div class="logIn-body-main-container">
            <div class="row">
                <div class="col-lg-6 log-in-form-container">
                    <h1 class="font-bold uppercase logIn-title my-3">login</h1>
                    <form action="<?php $_SERVER["PHP_SELF"]  ;?>" method="POST" class="w-full log-in-form">
                        <div class="form-group mb-3">
                            <label for="login-email" class="font-semibold my-2">User Id</label>
                            <input type="text" name="userId" id="userId" class="form-control rounded-0" placeholder="User Id" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="login-email" class="font-semibold my-2">Email</label>
                            <input type="email" name="logInemail" id="logInemail" class="form-control rounded-0" placeholder="Email" value="">
                        </div>
                        <div class="form-group my-3">
                            <label for="login-password" class="font-semibold my-2">Password</label>
                            <input type="password" name="logInPassword" id="login-password" class="form-control rounded-0" placeholder="Password" value="">
                        </div>
                        <div class="form-group mt-3">
                        <input type="submit" name="login" value="login" class="uppercase font-bold px-4 py-3 loginBtn">
                            <a href="./log_in.php" class="inline-block uppercase font-bold mx-1 px-3 py-3" style="color: var(--global-color-white); background-color: var(--global-color);">User Log In</a>
                        </div>
                    </form>
                    <?php
                    if(isset($_REQUEST["login"])){
                        $v_id = $_REQUEST["userId"];
                        $email = $_REQUEST["logInemail"];
                        $password = $_REQUEST["logInPassword"];
                        
                        include "./phpControl/confit.php";
                        if($sql = "SELECT * FROM vendors WHERE v_id = '{$v_id}' AND email = '{$email}' AND password = '{$password}'"){
                            
                           $result = mysqli_query($conn , $sql);
                           
                            if(mysqli_num_rows($result) > 0){
                                while( $row = mysqli_fetch_assoc($result)){
                                    // print_r($row);
                                    session_start();
                                    $_SESSION["vendor_id"] = $row["id"];
                                    $_SESSION["v_id"] = $row["v_id"];
                                    $_SESSION["user_email"]= $row["email"];
                                    $_SESSION["password"] =  $row["password"];
                                    header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
                                }
                            }
                        } else {
                            echo "<div class= 'alert alert-danger'>Your User Id or Email or Password are not match</div>";
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-6 log-in-new-customer-container">
                    <h1 class="font-bold uppercase register-title my-3">New Customer</h1>
                    <div class="register-direct-container">
                        <h2 class="uppercase font-bold">create an account</h2>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                        <a href="./user_register.php" class="inline-block uppercase font-bold me-1">Create User account</a>
                        <a href="./vendor_register.php" class="inline-block uppercase font-bold">Create Vendor account</a>
                    </div>
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