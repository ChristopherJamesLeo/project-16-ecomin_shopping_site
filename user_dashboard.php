<?php   
        session_start();
        if(!isset($_SESSION["user_id"])){
            header("location:http://localhost/project-16-ecomin_shopping_site/log_in.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>User Dashboard</title>
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
    <!-- data table css1 js 1 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                <h1 class="uppercase font-semibold">Dashboard</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./user_dashboard.php" class="font-semibold">Dashboard</a>
            </div>
        </div>
    </div>
    <div class="deshboard-body-main-container">
        <div class="row deshboard-body-container">
            <div class="col-lg-3 col-md-4 deshboard-left-menu-container">
                <div class="profile-picture-container p-4 flex flex-col justify-center text-center">
                <?php
                    // echo $_SESSION['u_id'];
                    $sql = "SELECT * FROM users WHERE id = {$_SESSION['u_id']}";
                    $result = mysqli_query($conn , $sql);             
                    if(mysqli_num_rows($result) > 0) {
                        while( $row = mysqli_fetch_assoc($result)){
                            // print_r($row);
                            $sqlVendor = "SELECT * FROM vendors WHERE id = {$row['vendor_id']} ";
                            $resultvendor = mysqli_query($conn , $sqlVendor);
                            while($rowVendor = mysqli_fetch_assoc($resultvendor)){
                                                    
                ?>
                    <div class="profile-img-container">
                        <img src="./assets/img/avtor/avtar.jpg" class="w-full h-full" alt="">
                    </div>
                    <div class="username">
                        <h1 class="tracking-widest font-bold"><?php echo $row["firstname"]." ".$row["lastname"] ?></h1>
                    </div>
                    <div class="user-email">
                        <span><?php echo $row["email"] ?></span>
                    </div>
                </div>
                <div class="deshboard-list-container">
                    <ul class="list-group">
                        <li class="list-item py-2 active" show-deshboard = "0">Account Info</li>
                        <li class="list-item py-2" show-deshboard = "1">Address Book</li>
                        <li class="list-item py-2" show-deshboard = "2">My Orders</li>
                        <li class="list-item py-2" show-deshboard = "3">My Wishlist</li>
                        <li class="list-item py-2" show-deshboard = "4">Profile</li>
                        <li class="list-item py-2" show-deshboard = "5"><a href="./phpControl/log_out.php">Log Out</a></li>
                    </ul>
                </div>
            </div>  
            <div class="col-lg-9 col-md-8 deshboard-right-menu-container">
                <div class="deshboard-right-menus">
                    <div class="deshboard-right-menu account-info-container">
                        <h1 class="account-info-heading mb-3 font-semibold">Hello, MARK JECNO !</h1>
                        <p class="account-info-para text-muted">
                            From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.
                        </p>
                        <div class="row flex overview-container py-3">
                            <div class="col-sm-12 col-md-6 col-lg-4 my-2 overview flex justify-center items-center">
                                <div class="overview-item  flex justify-center items-center">
                                    <img src="./assets/img/sale.png" alt="sale">
                                    <div class="ms-3 show-detail">
                                        <span class="block">25</span>
                                        <span class="tracking-wider block">Total Order</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4  my-2 overview flex justify-center items-center">
                                <div class="overview-item  flex justify-center items-center">
                                    <img src="./assets/img/homework.png" alt="sale">
                                    <div class="ms-3 show-detail">
                                        <span class="block">5</span>
                                        <span class="tracking-wider block">Pending Orders</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 my-2 overview flex justify-center items-center">
                                <div class="overview-item  flex justify-center items-center">
                                    <img src="./assets/img/order.png" alt="sale">
                                    <div class="ms-3 show-detail">
                                        <span class="block">50</span>
                                        <span class="tracking-wider block">Wishlist</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-information">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-12 my-3 contact-infromaiton">
                                    <div class="heading_edit flex justify-between items-center">
                                        <span class="block">Contact Information</span>
                                        <span class="block"><a href="./profile_user.php?id= <?php echo $row['id'] ?>">Edit</a></span>
                                    </div>
                                    <div class="contact-information-detail">
                                        <div class="my-1"><?php echo $row["firstname"]." ".$row["lastname"] ?></div>
                                        <div class="my-1"><?php echo $row["email"] ?></div>
                                        <div class="my-1"><a href="./profile_user.php?id= <?php echo $row['id'] ?>">Change Password</a></div>
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-8 col-sm-12 my-3 contact-infromaiton">
                                    <div class="heading_edit flex justify-between items-center">
                                        <span class="block">Newsletters</span>
                                        <span class="block"><a href="#">Edit</a></span>
                                    </div>
                                    <div class="contact-information-detail">
                                        <div class="my-1">You are currently not subscribed to any newsletter.</div>
                                        <!-- <div class="my-1">Mark Jecno</div>
                                        <div class="my-1">mark-jecno@gmail.com</div>
                                        <div class="my-1"><a href="#">Change Password</a></div> -->
                                    </div>
                                </div>
                                <div class="col-12 my-3 contact-infromaiton">
                                    <div class="heading_edit flex justify-between items-center">
                                        <span class="block">Address Book</span>
                                        <span class="block"><a href="./profile_user.php?id= <?php echo $row['id'] ?>">Manage Addresses</a></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8 col-lg-6 contact-information-detail contact-billing-address">
                                            <div class="my-1">Default Billing Address</div>
                                            <div class="my-1">You have not set a default billing address.</div>
                                            <div class="my-1"><a href="./profile_user.php?id= <?php echo $row['id'] ?>">Edit Address</a></div>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-6  contact-information-detail contact-shipping-address">
                                            <div class="my-1">Default Shipping Address</div>
                                            <div class="my-1">You have not set a default shipping address.</div>
                                            <div class="my-1"><a href="./profile_user.php?id= <?php echo $row['id'] ?>">Edit Address</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deshboard-right-menu address-book-container">
                        <div class="address-book-heading flex justify-between mb-3">
                            <h1 class="font-bold h4">Address Book</h1>
                            <a href="#" class="block relative font-semibold btn rounded-0">+ Add New</a>
                        </div>
                        <div class="row address-book-body">
                            <div class="col-lg-4 col-md-6 address-contents-container me-3">
                                <div class="address-contentes-heading flex justify-between items-center">
                                    <h1 class="font-semibold">Address Book</h1>
                                    <div class="py-1 px-2 text-light btn rounded-0">Home</div>
                                </div>
                                <div class="address-content-body my-3">
                                    <p>
                                    <?php echo $row["address"] ?>
                                    </p>
                                    <p class="py-3">Mobile: <?php echo $row["contact_number"] ?></p>
                                </div>
                                <hr>
                                <div class="address-content-footer flex justify-between mt-3">
                                    <a href="./profile_user.php?id= <?php echo $row['id'] ?>" class="btn font-bold rounded-0">Edit</a>
                                    <a href="#" class="btn font-bold rounded-0">Remove</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 address-contents-container">
                                <div class="address-contentes-heading flex justify-between items-center">
                                    <h1 class="font-semibold">Address Book</h1>
                                    <div class="py-1 px-2 text-light btn rounded-0">Home</div>
                                </div>
                                <div class="address-content-body my-3">
                                    <p>
                                    <?php echo $row["address"] ?>
                                    </p>
                                    <p class="py-3">Mobile: <?php echo $row["contact_number"] ?></p>
                                </div>
                                <hr>
                                <div class="address-content-footer flex justify-between mt-3">
                                    <a href="./profile_user.php?id= <?php echo $row['id'] ?>" class="btn font-bold rounded-0">Edit</a>
                                    <a href="#" class="btn font-bold rounded-0">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deshboard-right-menu my-orders-container">
                        <div class="my-order-heading flex justify-between mb-3">
                            <h1 class="font-bold h4">My Orders</h1>
                        </div>
                        <div class="row my-order-body">
                            <table id="myorders" class="table table-hover table-auto">
                                <thead>
                                    <tr>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Product Code</th>
                                        <th class="text-center">Product Details</th>
                                        <th class="text-center">Count</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $myorderSql= "SELECT * FROM cart WHERE user_id = {$_SESSION['u_id']} ORDER BY id DESC";
                                    $myorderResult = mysqli_query( $conn , $myorderSql);
                                        if(mysqli_num_rows($myorderResult) > 0){
                                            while( $myorderRow = mysqli_fetch_assoc($myorderResult)){
                                                $orderImgUrl = "./assets/product-images/".$myorderRow["image"];
                                    ?>
                                    <tr>
                                        <td class="text-center grid place-items-center">
                                            <img src="<?php echo $orderImgUrl  ?>" class="my-order-table-image" alt="">
                                        </td>
                                        <td class="text-center">#<?php echo $myorderRow["p_code"]; ?></td>
                                        <td class="text-center"><?php echo $myorderRow["title"] ;?></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-success"><?php echo $myorderRow["product_count"]; ?></span></td>
                                        <td class="text-center">$<?php echo $myorderRow["price"]; ?></td>
                                        <td class="text-center text-warning"><?php echo $myorderRow["size"] ;?></td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="deshboard-right-menu my-wishlist-container">
                        <div class="my-wishlist-heading flex justify-between mb-3">
                            <h1 class="font-bold h4">My Wishlist</h1>
                        </div>
                        <div class="row my-wishlist-body">
                            <table id="mywishlist" class="table table-hover table-auto">
                                <thead>
                                    <tr>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Product Id</th>
                                        <th class="text-center">Product Details</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $mywishSql= "SELECT * FROM wishlists WHERE user_id = {$_SESSION['u_id']} ORDER BY id DESC";
                                    $mywishResult = mysqli_query( $conn , $mywishSql);
                                        if(mysqli_num_rows($mywishResult) > 0){
                                            while( $mywishRow = mysqli_fetch_assoc($mywishResult)){
                                                $wishImgUrl = "./assets/product-images/".$mywishRow["image"];
                                    ?>
                                    <tr>
                                        <td class="text-center grid place-items-center">
                                            <img src="<?php echo $wishImgUrl ; ?>" class="my-wishlist-table-image" alt="">
                                        </td>
                                        <td class="text-center"><?php echo $mywishRow["p_code"] ;?></td>
                                        <!-- <td class="text-center"><?php echo $mywishRow["title"] ;?></td> -->
                                        <td class="text-center"><?php echo $mywishRow["title"] ;?></td>
                                        <td class="text-center">$<?php echo $mywishRow["price"]; ?></td>
                                        <td class="text-center text-warning"><a href="./phpControl/add_cart_inline.php?id=<?php echo $mywishRow["p_id"] ?>" class="btn rounded-0">Mover To Cart</a></td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="deshboard-right-menu profile-container">
                        <div class="profile-heading flex justify-start items-center mb-3">
                            <h1 class="font-medium h5 me-3">Profile</h1>
                            <a href="./profile_user.php?id= <?php echo $row['id'] ?>" class="h6">Edit</a>
                        </div>
                        <div class="row profile-body">
                            <div class="row">
                                <div class="col-6 category-list">
                                    <table class="table-auto w-full">
                                    <tbody>

                                            <tr class="">
                                                <td class="block me-5">Company Name</td>
                                                <td><?php echo $rowVendor["companyname"] ?></td>
                                            </tr>
                                            <tr class="">
                                                <td class="block me-5">Your Company Id</td>
                                                <td>v-00<?php echo $rowVendor["id"] ?></td>
                                            </tr>
                                            <tr class="">
                                                <td class="block me-5">Your Id</td>
                                                <td>u-00<?php echo $row["id"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td><?php echo $row["email"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Country / Region</td>
                                                <td><?php echo $row["country"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Year Established</td>
                                                <td>2018</td>
                                            </tr>
                                            <tr>
                                                <td>Total Employees</td>
                                                <td>101 - 200 People</td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td>Clothing</td>
                                            </tr>
                                            <tr>
                                                <td>Street Address</td>
                                                <td><?php echo $row["address"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>City/State</td>
                                                <td><?php echo $row["city"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Zip</td>
                                                <td><?php echo $row["zipcode"] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="profile-heading flex justify-start items-center my-3">
                            <h1 class="font-medium h5 me-3">Login Details</h1>
                            <a href="./profile_user.php?id= <?php echo $row['id'] ?>" class="h6">Edit</a>
                        </div>
                        <div class="row profile-body">
                            <div class="row">
                                <div class="col-9 category-list">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr>
                                                <td class="block">Email Address</td>
                                                 <td><?php echo $row["email"] ?><!--<a href="#" class="inline-block ms-3">Edit</a>--></td> 
                                            </tr>
                                            <tr>
                                                <td>Phone No.</td>
                                                <td><?php echo $row["contact_number"] ?> <!-- <a href="#" class="inline-block ms-3">Edit</a> --></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                 <td><?php echo $row["password"] ?> <!--<a href="#" class="inline-block ms-3">Edit</a> --></td>
                                            </tr>
                                            <?php
                                                    }
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let getDeshboardLists = document.querySelectorAll(".deshboard-left-menu-container .deshboard-list-container ul li");
                let getDeshboardPages = document.querySelectorAll(".deshboard-right-menus .deshboard-right-menu");
                getDeshboardPages.forEach(function(getDeshboardPage){
                    getDeshboardPage.style.display = "none";
                })
                getDeshboardPages[0].style.display = "block";
                function listActive(){
                    getDeshboardLists.forEach(function(items){
                    items.classList.remove("active");
                    
                })
                this.classList.add("active");
                getDeshboardPages.forEach(function(getDeshboardPage){
                    getDeshboardPage.style.display = "none";
                })
                getDeshboardPages[this.getAttribute("show-deshboard")].style.display = "block";
                };

                getDeshboardLists.forEach(function(getDeshboardList){
                    getDeshboardList.addEventListener("click",listActive)
                })
            </script>
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
    <!-- Data Table  -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-bar-slide-show-btn").click(function(){
                $(".nav_bar_slide_container").animate({
                    "height" : "toggle" ,
                },300)
            })
            $('#myorders').DataTable();
        })
    </script>
</body>