<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Blog</title>
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
                <h1 class="uppercase font-semibold">blog</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./blog.php" class="font-semibold">blog</a>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="row blog-sidebar-container">
            <div class="col-lg-3 col-md-6 mx-auto">
                <div class="blog-left-sidebar-recent-blog-container mb-3 p-3">
                    <h2 class="h5 font-semibold uppercase tracking-widest">Recent Blog</h2>
                    <div class="row p-1 mb-3">
                        <div class="col-6">
                            <img src="./assets/img/1 (blog).jpg" class="w-full" alt="">
                        </div>
                        <div class="col-6 flex flex-col justify-start items-start">
                            <span class="block font-semibold">25 Dec 2018</span>
                            <span class="block">0 hits</span>
                        </div>
                    </div>
                    <div class="row p-1 mb-3">
                        <div class="col-6">
                            <img src="./assets/img/1 (blog).jpg" class="w-full" alt="">
                        </div>
                        <div class="col-6 flex flex-col justify-start items-start">
                            <span class="block font-semibold">25 Dec 2018</span>
                            <span class="block">0 hits</span>
                        </div>
                    </div>
                    <div class="row p-1 mb-3">
                        <div class="col-6">
                            <img src="./assets/img/1 (blog).jpg" class="w-full" alt="">
                        </div>
                        <div class="col-6 flex flex-col justify-start items-start">
                            <span class="block font-semibold">25 Dec 2018</span>
                            <span class="block">0 hits</span>
                        </div>
                    </div>
                </div>
                <div class="blog-left-popular-blog-container p-3 mb-3">
                    <h2 class="h5 font-semibold uppercase tracking-widest">Popular Blog</h2>
                    <div class="row p-1 mb-3 blog-left-popular-blog-items">
                        <div class="col-5">
                            <div class="popular-date flex flex-col justify-center items-center">
                                <span class="block">03</span>
                                <span class="block">May</span>
                            </div>
                        </div>
                        <div class="col-7 flex flex-col justify-between items-start">
                            <span class="block font-semibold h6">Injected humour the like</span>
                            <span class="block">0 hits</span>
                        </div>
                        <div class="col-12">
                            <span class="font-light">it look like readable English. Many desktop publishing text.</span>
                        </div>
                    </div>
                    <div class="row p-1 mb-3 blog-left-popular-blog-items">
                        <div class="col-5">
                            <div class="popular-date flex flex-col justify-center items-center">
                                <span class="block">03</span>
                                <span class="block">May</span>
                            </div>
                        </div>
                        <div class="col-7 flex flex-col justify-between items-start">
                            <span class="block font-semibold h6">Injected humour the like</span>
                            <span class="block">0 hits</span>
                        </div>
                        <div class="col-12">
                            <span class="font-light">it look like readable English. Many desktop publishing text.</span>
                        </div>
                    </div>
                    <div class="row p-1 mb-3 blog-left-popular-blog-items">
                        <div class="col-5">
                            <div class="popular-date flex flex-col justify-center items-center">
                                <span class="block">03</span>
                                <span class="block">May</span>
                            </div>
                        </div>
                        <div class="col-7 flex flex-col justify-between items-start">
                            <span class="block font-semibold h6">Injected humour the like</span>
                            <span class="block">0 hits</span>
                        </div>
                        <div class="col-12">
                            <span class="font-light">it look like readable English. Many desktop publishing text.</span>
                        </div>
                    </div>                                        
                </div>
                
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="blog-right-sidebar-container mb-3">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <div class="blog-img-container">
                                <a href="#"><img src="./assets/img/3 (blog).jpg" class="w-full" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="blog-right-side-content-container">
                                <span class="medium block" style="color: var(--global-color);">25 JANUARY 2018</span>
                                <a href="#" class="font-semibold h5">
                                    You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.
                                </a>
                                <div class="text-muted blog-details-header my-2">
                                    <span class="border-r pe-3">Posted By : <span>Admin</span></span>
                                    <span class="border-r px-3"><ion-icon name="heart-circle-outline"></ion-icon> 5 Hits </span>
                                    <span class="px-3"><ion-icon name="mail-outline"></ion-icon> 10 Comment</span>
                                </div>
                                <p class="text-muted">
                                    Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-right-sidebar-container mb-3">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <div class="blog-img-container">
                                <a href="#"><img src="./assets/img/3 (blog).jpg" class="w-full" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="blog-right-side-content-container">
                                <span class="medium block" style="color: var(--global-color);">25 JANUARY 2018</span>
                                <a href="#" class="font-semibold h5">
                                    You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.
                                </a>
                                <div class="text-muted blog-details-header my-2">
                                    <span class="border-r pe-3">Posted By : <span>Admin</span></span>
                                    <span class="border-r px-3"><ion-icon name="heart-circle-outline"></ion-icon> 5 Hits </span>
                                    <span class="px-3"><ion-icon name="mail-outline"></ion-icon> 10 Comment</span>
                                </div>
                                <p class="text-muted">
                                    Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-right-sidebar-container mb-3">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <div class="blog-img-container">
                                <a href="#"><img src="./assets/img/3 (blog).jpg" class="w-full" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="blog-right-side-content-container">
                                <span class="medium block" style="color: var(--global-color);">25 JANUARY 2018</span>
                                <a href="#" class="font-semibold h5">
                                    You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.
                                </a>
                                <div class="text-muted blog-details-header my-2">
                                    <span class="border-r pe-3">Posted By : <span>Admin</span></span>
                                    <span class="border-r px-3"><ion-icon name="heart-circle-outline"></ion-icon> 5 Hits </span>
                                    <span class="px-3"><ion-icon name="mail-outline"></ion-icon> 10 Comment</span>
                                </div>
                                <p class="text-muted">
                                    Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                                </p>
                            </div>
                        </div>
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
        })
    </script>
</body>