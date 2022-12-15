<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Home</title>
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
    <section class="banner-slide-container">
        <div class="banner-slide">
            <div class="carousel-container relative">
                <ul class="carousel-indicator-container flex justify-content-center items-center absolute">
                    <li class="dot rounded-full active" data-bs-slide-indi = "0"></li>
                    <li class="dot rounded-full" data-bs-slide-indi = "1"></li>
                </ul>
                <div class="carousel-inner-container">
                    <div class="carousel-item-container">
                        <div class="row flex text-center banner-carousel-man">
                            <div class="col-xl-6">
                                <div class="banner-intro-left-container w-ful h-full flex flex-col justify-center items-center">
                                    <p class="tracking-widest text-stone-500 capitalize">Welcome to fashion</p>
                                    <h1 class="uppercase font-semibold">men fashion</h1>
                                    <a href="#everydayCasusal" class="uppercase font-semibold rounded-0 inline-block mt-3">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-container">
                        <div class="row flex text-center banner-carousel-man banner-carouser-women">
                            <div class="col-xl-6">
                                <div class="banner-intro-left-container w-ful h-full flex flex-col justify-center items-center">
                                    <p class="tracking-widest text-stone-500 capitalize">Welcome to fashion</p>
                                    <h1 class="uppercase font-semibold">women fashion</h1>
                                    <a href="#everydayCasusal" class="uppercase font-semibold rounded-0 inline-block mt-3">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="prev" class="carousel-control-prev-btn absolute rounded-full"><i class="fas fa-angle-left"></i></a>
                <a href="#" id="next" class="carousel-control-next-btn absolute rounded-full"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    <section class="">
        <div class="save-percent-container-cs ">
            <div class="save-percent-cs flex justify-between gap-x-16">
                <div class="save-percent-left-cs flex justify-content-end relative">
                    <div class="percent-bg-man absolute left-0 top-0 w-full h-full"></div>
                    <div class="save-content-cs flex flex-col justify-center items-center">
                        <span class="d-block uppercase">save 30%</span>
                        <h1 class="uppercase font-semibold">Men</h1>
                    </div>
                </div>
                <div class="save-percent-right-cs flex justify-content-end relative">
                    <div class="percent-bg-women absolute left-0 top-0 w-full h-full"></div>
                    <div class="save-content-cs flex flex-col justify-center items-center">
                        <span class="d-block uppercase">save 30%</span>
                        <h1 class="uppercase font-semibold">Women</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="producti-sections">
        <div class="flex flex-col justify-center items-center text-center">
            <div class="latest-drop-header-cs">
                <p>Special Offer</p>
                <h1 class="font-semibold relative">LATEST DROPS</h1>
                <p>Looking for the latest trends in clothing, shoes and accessories? Welcome to our 'Latest Drops' edit, bringing you all the latest styles from all your fave brands.</p>
            </div>
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
                        <a href="./product_page.php" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $latesImgUrl ?>" class="w-full h-full object-cover" alt="27" >
                                </div>
                                <div class="latest-item-img-hover-transition w-full absolute top-0 object-cover">
                                    <img src="<?php echo $latesImgUrl ?>" class="w-full h-full" alt="28">
                                </div>
                                <div class="latest-btn-group absolute ">
                                    <a href="#" class="cart-add order-img-btn"><ion-icon name="cart-outline" class="relative"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="heart-outline"></ion-icon></a>
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
    <section class="second-banner">
        <div class="second-banner-container">
            <div class="second-banner-content-container w-full h-full flex justify-content-start items-center ">
                <div class="second-banner-content text-center uppercase font-semibold">
                    <h1>2021</h1>
                    <h2>FASHION TRENDS</h2>
                    <h3>SPECIAL OFFER</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="everydayCasusal" class="producti-sections">
        <div class="flex flex-col justify-center items-start text-center">
            <div class="latest-drop-header-cs mx-auto">
                <p>Exclusive Products</p>
                <h1 class="font-semibold relative">EVERYDAY CASUAL</h1>
            </div>
            <div class="exclusive_products_title w-full flex justify-center items-center">
                <button type="button" id="work_casual-btn" class="exclusive-product-btn active exclusive-product-btn active uppercase" exc-show-btn = '0'>All</button>
                <button type="button" id="wfh_wear_btn" class="exclusive-product-btn uppercase " exc-show-btn = '1'>Man wear</button>
                <button type="button" id="confort_wear_btn" class="exclusive-product-btn uppercase " exc-show-btn = '2'>Women wear</button>
            </div>
            <div class="latest-drop-body everyday-casual-body grid place-items-center ">
                <div id="wfh_wear" class="latest-drop-show-items-container everyday-casual-items-container justify-center items-center">
                    <?php
                        $allSql = "SELECT * FROM products";
                        $allResult = mysqli_query( $conn , $allSql);
                        if(mysqli_num_rows($allResult) > 0){
                            while ($allRow = mysqli_fetch_assoc($allResult)){
                                $allImagePath = "./assets/product-images/". $allRow["image"];
                                ?>
                     <div class="latest-drop-show-items relative">
                        <a href="./product_page.php" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $allImagePath ;?>" class="w-full h-full object-cover" alt="27" >
                                </div>
                                <div class="latest-item-img-hover-transition w-full absolute top-0 object-cover">
                                    <img src="<?php echo $allImagePath ;?>" class="w-full h-full" alt="28">
                                </div>
                                <div class="latest-btn-group absolute ">
                                    <a href="#" class="cart-add order-img-btn"><ion-icon name="cart-outline" class="relative"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="heart-outline"></ion-icon></a>
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
                            <p class="product-name font-semibold"><?php echo $allRow["title"]; ?></p>
                            <p>$<?php echo $allRow["price"]; ?>.00</p>
                            <p class="colors"><span></span><span></span><span></span></p>
                        </div>
                        <div class="clone_img_container absolute left-0 top-0"></div>
                    </div>
                                <?php
                            }
                        }
                    ?>

                </div>
                <div id="work_casual" class="latest-drop-show-items-container everyday-casual-items-container justify-center items-center">
                    <?php
                        $menSql = "SELECT * FROM products WHERE type = 'men'";
                        $menResult = mysqli_query( $conn , $menSql);
                        if(mysqli_num_rows($menResult) > 0){
                            while ($menRow = mysqli_fetch_assoc($menResult)){
                                $menImagePath = "./assets/product-images/". $menRow["image"];
                                ?>
                     <div class="latest-drop-show-items relative">
                        <a href="./product_page.php" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $menImagePath ;?>" class="w-full h-full object-cover" alt="27" >
                                </div>
                                <div class="latest-item-img-hover-transition w-full absolute top-0 object-cover">
                                    <img src="<?php echo $menImagePath ;?>" class="w-full h-full" alt="28">
                                </div>
                                <div class="latest-btn-group absolute ">
                                    <a href="#" class="cart-add order-img-btn"><ion-icon name="cart-outline" class="relative"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="heart-outline"></ion-icon></a>
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
                            <p class="product-name font-semibold"><?php echo $menRow["title"]; ?></p>
                            <p>$<?php echo $menRow["price"]; ?>.00</p>
                            <p class="colors"><span></span><span></span><span></span></p>
                        </div>
                        <div class="clone_img_container absolute left-0 top-0"></div>
                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div id="confort_wear" class="latest-drop-show-items-container everyday-casual-items-container justify-center items-center">
                    <?php
                        $womenSql = "SELECT * FROM products WHERE type = 'women'";
                        $womenResult = mysqli_query( $conn , $womenSql);
                        if(mysqli_num_rows($womenResult) > 0){
                            while ($womenRow = mysqli_fetch_assoc($womenResult)){
                                $womenImagePath = "./assets/product-images/". $womenRow["image"];
                                ?>
                     <div class="latest-drop-show-items relative">
                        <a href="./product_page.php" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $womenImagePath ;?>" class="w-full h-full object-cover" alt="27" >
                                </div>
                                <div class="latest-item-img-hover-transition w-full absolute top-0 object-cover">
                                    <img src="<?php echo $womenImagePath ;?>" class="w-full h-full" alt="28">
                                </div>
                                <div class="latest-btn-group absolute ">
                                    <a href="#" class="cart-add order-img-btn"><ion-icon name="cart-outline" class="relative"></ion-icon></a>
                                    <a href="#" class=" order-img-btn"><ion-icon name="heart-outline"></ion-icon></a>
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
                            <p class="product-name font-semibold"><?php echo $womenRow["title"]; ?></p>
                            <p>$<?php echo $womenRow["price"]; ?>.00</p>
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
    <section class="service-content-section">
        <div class="service-content-container w-full h-full">
            <div class="service-contents-items-container flex jusct justify-center items-center border-t-2 border-b-2">
                <div class="service-contents-items flex justify-center items-center">
                    <div class="service-icon grid place-items-center ">
                        <span class="d-block"><i class="fas fa-truck"></i></span>
                    </div>
                    <div class="service-contents">
                        <span class="font-semibold d-block">Free Shipping</span>
                        <span class="block">Free Shipping World Wide</span>
                    </div>
                </div>
                <div class="service-contents-items flex justify-center items-center border-l-2 border-r-2">
                    <div class="service-icon grid place-items-center ">
                        <span class="d-block"><i class="fas fa-clock"></i></span>
                    </div>
                    <div class="service-contents">
                        <span class="font-semibold d-block">24 X 7 Service</span>
                        <span class="block">Online Service For New Customer</span>
                    </div>
                </div>
                <div class="service-contents-items flex justify-center items-center">
                    <div class="service-icon grid place-items-center ">
                        <span class="d-block"><i class="fas fa-bullhorn"></i></span>
                    </div>
                    <div class="service-contents">
                        <span class="font-semibold d-block">Festival Offer</span>
                        <span class="block">New Online Special Festival Offer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="producti-sections">
        <div class="flex flex-col justify-center items-center text-center">
            <div class="latest-drop-header-cs">
                <p>From The Blog</p>
                <h1 class="font-semibold relative">FASHION FOR YOU</h1>
            </div>
            <div class="fashion-for-you-main-container">
                <div class="fashion-for-you-container">
                    <div class="fashion-for-you-items">
                        <div class="fashion-img-container w-full">
                            <div class="fashion-img w-full h-full">
                                <img src="./assets/img/4.jpg" class="w-full h-full" alt="4">
                            </div>
                        </div>
                        <div class="fashion-for-you-content-container text-center">
                            <h2>25 January 2018</h2>
                            <a href="#" class="inline-block relative"><p>Fun Fashion Clothing and Ideas for Valentine’s Day</p></a>
                            <h4>by: John Dio , 2 Comment</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="whowearwhat">
        <div class="who_wear_what-container text-center">
            <div class="header-container mx-auto">
                <h1 class="font-bold">#WHOWEARWHAT</h1>
            </div>
            <div class="who_wear_show_main_container">
                <div class="who_wear_show_container">        
                    <div class="who_wear_show_img relative">
                        <a href="./product_page.php">
                            <img src="./assets/img/3.jpg" class="w-full h-full" alt="">
                            <div class="who_wear_instargram_layer absolute left-0 top-0 w-full h-full grid place-items-center">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="who_wear_show_logo_main_container w-full">
                <div class="who_wear_show_logo_container flex justify-evenly items-center">        
                    <div class="who_wear_show_logo_img relative">
                        <a href="./product_page.php">
                            <img src="./assets/img/1.png" class="w-full h-full" alt="">
                        </a>
                    </div>
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

    <!-- <script src="./js/home.js"></script> -->
    <script>
let carouselItems = document.querySelectorAll(".carousel-item-container");
let carouselIndi = document.querySelectorAll(".dot");
let getPrevBtn = document.getElementById("prev"),
    getNextBtn = document.getElementById("next");

let showidx = 1;

getPrevBtn.addEventListener("click", function(){
    console.log("hello btn");
    slideShow(showidx -=1);
})

getNextBtn.addEventListener("click",function(){
    console.log("hello btn");
    slideShow(showidx +=1);
})
slideShow(showidx);

function slideShow(idx){
    carouselItems.forEach(function(carouselItem){
        carouselItem.style.display = "none";
    })
    carouselIndi.forEach(function(dot){
        dot.classList.remove("active");
    })
    if(showidx > carouselItems.length ){
        showidx = 1;
    }else if(showidx < 1){
        showidx = carouselItems.length;
    }
    carouselItems[showidx-1].style.display = "block";
    carouselIndi[showidx-1].classList.add("active");
}

for (let i = 0; i < carouselIndi.length; i++) {
    carouselIndi[i].addEventListener("click",function(){
        let indi = this.getAttribute("data-bs-slide-indi");
        slideShow(showidx = indi );
    })
    
}

let getEverydayCasualItemsContainer = document.querySelectorAll(".everyday-casual-items-container");



function showEverydayCasualItem(idex){
    getEverydayCasualItemsContainer.forEach(function(containers){
        containers.style.display = "none";
    })
    
    getEverydayCasualItemsContainer[idex].style.display = "flex";
}

showEverydayCasualItem(0);

let everydayCasulaItemsBtns = document.querySelectorAll(".exclusive-product-btn");

function everyCasualLinkActive( ) {
    everydayCasulaItemsBtns.forEach((item)=>
    item.classList.remove("active"));
    this.classList.add("active");
    showEverydayCasualItem(idex = this.getAttribute("exc-show-btn"));
};
everydayCasulaItemsBtns.forEach( (item) =>item.addEventListener("click", everyCasualLinkActive));

let getfashionItems = document.querySelectorAll(".fashion-for-you-items");
let getfashionItem = document.querySelector(".fashion-for-you-items");
let getFashionContainer = document.querySelector(".fashion-for-you-container");
    // getFashionContainer.style.width = `${getfashionItem.offsetWidth*getfashionItems.length + 350 }px`;

    

let scrollXFun=(container,item,items,outWidth)=>{
    container.style.width = `${item.offsetWidth*items.length + outWidth }px`;
}
scrollXFun(getFashionContainer,getfashionItem,getfashionItems,350)
let getwho_wear_show_container = document.querySelector(".who_wear_show_container");
let getwho_wear_show_imgs = document.querySelectorAll(".who_wear_show_img");
let getwho_wear_show_img = document.querySelector(".who_wear_show_img");

    scrollXFun(getwho_wear_show_container,getwho_wear_show_img,getwho_wear_show_imgs,0);


let getChangeLightDarkBtn = document.getElementById("theme_light_dark");


// getChangeLightDarkBtn.addEventListener("click",function(){

// })


let getcartAdds = document.querySelectorAll(".cart-add");
let getBadgeCarts = document.querySelectorAll(".badge-carts");

getcartAdds.forEach(function(getcartAdd){
    getcartAdd.addEventListener("click",function(e){
        let getProductImg = e.target.parentElement.parentElement.parentElement.children[0];
        console.log(getProductImg)
    
        let cartPositionX = e.clientX;
        let cartPositionY = e.clientY;
        getProductImg.classList.add("latest-drop-show-items-ani")
        
        var cartCollection;
        if(localStorage.getItem("cartCollect")== null){
            cartCollection = [];
        }else {
            cartCollection = JSON.parse(localStorage.getItem("cartCollect"));
        }
        // console.log(this.classList[1])
        cartCollection.push(this.classList[1]);
        localStorage.setItem("cartCollect",JSON.stringify(cartCollection));
        getBadgeCarts.forEach(function(getBadgeCart){
            getBadgeCart.innerText= cartCollection.length;
        })
        
    })
})

$(document).ready(function(){
    $(".nav-bar-slide-show-btn").click(function(){
        $(".nav_bar_slide_container").animate({
            "height" : "toggle" ,
        },300)
    })
});
    </script>
</body>
</html>