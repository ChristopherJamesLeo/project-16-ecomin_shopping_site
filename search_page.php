<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Search</title>
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
                <h1 class="uppercase font-semibold">Search</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./product_page.php" class="font-semibold">Search</a>
            </div>
        </div>
    </div>
    <div class=" login-body-container flex flex-col justify-center">
        
        <div class="">
            <div class="row justify-center">
                <div class="col-lg-6 text-center">
                    <form action="" class="w-full">
                        <div class="row my-4">
                            <input type="text" name="search" id="search" class="col-8 search-page-input" placeholder="Search Products ...">
                            <button class="col-4 btn uppercase font-semibold rounded-0 tracking-wider search-page-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <section class="producti-sections">
        <div class="flex flex-col justify-center items-center text-center">
            <div class="latest-drop-body grid place-items-center ">
            <div class="latest-drop-show-items-container flex justify-center items-center">
                    <?php
                        $latestSql = "SELECT * FROM products";
                        $latestResult = mysqli_query( $conn , $latestSql);
                        if( mysqli_num_rows($latestResult) > 0 ){
                            while( $latestRow = mysqli_fetch_assoc($latestResult)){
                                $latesImgUrl = "./assets/product-images/". $latestRow["image"];
                                ?>
                    <div class="latest-drop-show-items relative">
                        <a href="./product_main_page_input.php?id=<?php echo $latestRow['id']; ?>" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $latesImgUrl ?>" class="w-full h-full" alt="27" >
                                </div>
                                <div class="latest-item-img-hover-transition w-full absolute top-0 object-cover">
                                    <img src="<?php echo $latesImgUrl ?>" class="w-full h-full" alt="28">
                                </div>
                                <div class="latest-btn-group absolute ">
                                    <a href="./phpControl/add_cart_inline.php?id=<?php echo $latestRow["id"] ?>" class="cart-add order-img-btn"><ion-icon name="cart-outline" class="relative"></ion-icon></a>
                                    <a href="./phpControl/add_wishlist_inline.php?id=<?php echo $latestRow["id"] ?>" class=" order-img-btn"><ion-icon name="heart-outline"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="search-outline"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="reload-outline"></ion-icon></a>
                                </div>
                                <div class="new-product-logo badge rounded-full absolute ">
                                    NEW
                                </div>

                            </div>
                        </a>
                        <div class="items-content-container text-start">
                            <p><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span></p>
                            <p class="product-name font-semibold"><?php echo $latestRow["title"]; ?></p>
                            <p>$<?php echo $latestRow["price"]; ?>.00</p>
                            <p class="colors"><span></span><span></span><span></span></p>
                        </div>
                        <div class="clone_img_container absolute left-0 top-0"></div>
                    </div>
                                <?php
                            }
                        }
                    ?>

                    
                </div>
            </div>

        </div>
    </section>
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