<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Product-page</title>
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
    <!-- summernote css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include "./header_navbar.php";
    ?>
    <div class="page-direction-main-container">
        <div class="page-direction-container flex justify-between items-center tracking-wider">
            <div class="page-direction-left">
                <h1 class="uppercase font-semibold">product</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./product_page.php" class="font-semibold">product</a>
            </div>
        </div>
    </div>
    <?php
        
        $getId = $_REQUEST['id'];

        $sql = "SELECT * FROM products WHERE id={$getId}";
        
        $result = mysqli_query( $conn , $sql );
        
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $imgUrl = "./assets/product-images/".$row["image"];
    ?>

    <div class="product-page-body-container">
        <div class="product-page-body flex justify-between items-start">
            <div class="product-page-left-body col-lg-6 col-md-12 p-1">
                <div class="row show-product-img-frame">
                    <div class="show-product-img-frame col-12">
                    <form action="">
                            <input type="hidden" name="id" value="id">
                            <input type="submit" value="" class="" style="background: url('<?php echo $imgUrl ?>');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </form>
                    </div> 
                    <div class="show-all-product-img-container col-12">
                        <div class="row p-1">
                            <?php
                            $showSql = "SELECT * FROM products";
                            $showResult = mysqli_query( $conn , $showSql);
                                if(mysqli_num_rows($showResult) > 0){
                                    while( $showRow = mysqli_fetch_assoc($showResult)){
                                        $allProductImagUrl = "./assets/product-images/".$showRow["image"];

                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-10 show-all-product-img">  
                                    <form action="./product_page.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $showRow["id"] ?>">
                                        <input type="submit" name="showProduct" value="" style="background: url('<?php echo $allProductImagUrl ?>');background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    </form>
                                </div>
                            <?php
                                    }
                                }
                            ?>

                        </div>
                    </div>

                </div>

            </div>
        <div class="product-page-right-body col-lg-6 col-md-12 p-3">
                    <form action="./phpControl/add_cart_product_page.php" method = "POST" enctype="multipart/form-data" >
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                            <div class="product-page-right-top-container flex justify-start mb-2">
                                <div class="product-right-top-left me-3">
                                    <img src="./assets/img/bg-img/fire.gif" class="inline-block me-2" alt="fire" >
                                    <p class="inline-block">37 orders in last 24 hours</p>
                                </div>
                                <div class="product-right-top-left me-3">
                                    <img src="./assets/img/bg-img/person.gif" class="inline-block me-2" alt="person" >
                                    <p class="inline-block">44 active view this</p>
                                </div>
                            </div>
                            <div class="product-title-container product-right-margin-adjust">
                                <h1 class="uppercase font-semibold"><?php echo $row["title"]  ?></h1>
                            </div>
                            <div class="product-rating-container product-right-margin-adjust">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span class="font-semibold">120 ratings</span>
                            </div>
                            <div class="seller_fashion-container product-right-margin-adjust">
                                <p class="inline-block text-white font-semibold">#1 Best seller</p>
                                <p class="inline-block">In Fashion</p>
                            </div>
                            <div class="product-price-container product-right-margin-adjust">
                                <span class="">$<?php echo $row["price"];  ?></span><span class="line-through mx-2"></span><span>55% off</span>
                            </div>
                            <div class="product-color-select-container product-right-margin-adjust">
                                    <ul class="flex m-0 p-0">
                                        <li class="color-list-1 active relative"></li>
                                        <li class="color-list-2 mx-2 relative"></li>
                                        <li class="color-list-3 relative"></li>
                                    </ul>
                                
                                <script type="text/javascript">
                                    let getChooseLiTags = document.querySelectorAll('.product-page-right-body .product-color-select-container ul li');
                                    function colorLiActive (){
                                        getChooseLiTags.forEach((items)=>{
                                            items.classList.remove("active");
                                        })
                                        this.classList.add("active");
                                    }
                                    getChooseLiTags.forEach(function(getChooseLiTag){
                                        getChooseLiTag.addEventListener("click", colorLiActive)
                                    });
                                </script>
                            </div>
                            <br>
                            <hr>
                            <div class="size-select-container product-right-margin-adjust flex justify-between">
                                <div class="select-size">
                                    <p class="font-semibold ">Select Size</p>
                                    <ul class="flex m-0 p-0">
                                        <li class="size-list-1 sizeListActive grid place-items-center relative"><?php echo $row["size"];  ?></li>
                                    </ul>
                                    <script>
                                        let getSelectSizes = document.querySelectorAll(".product-page-right-body .size-select-container .select-size ul li");
                                        function sizeListActiv(){
                                            getSelectSizes.forEach((items)=>{
                                            items.classList.remove("sizeListActive");
                                            })
                                            this.classList.add("sizeListActive");
                                        };
                                        getSelectSizes.forEach(function(getSelectSize){
                                            getSelectSize.addEventListener("click",sizeListActiv);
                                        });
                                        
                                    </script>
                                </div>
                                <div class="font-semibold"><a href="#" id="sizechatBtn">Size Chart</a></div>
                                <div class="sizeChatModal fixed  w-screen h-screen left-0 top-0 place-items-center">
                                    <div class="sizeChatModalImgContainer">
                                        <div class="size_chat_heading flex justify-between">
                                            <h2>Sheer Straight Kurta</h2>
                                            <span class="block size_chat_model_close_btn"><i class="fas fa-times"></i></span>
                                        </div>
                                        <img src="./assets/img/size-chart.jpg" class="" alt="">
                                    </div>
                                </div>
                                <script>
                                    let getSizeChatModelOpenBtn = document.getElementById("sizechatBtn");
                                    let getsizeChatModel = document.querySelector(".sizeChatModal");
                                    let getSizeChatModelClose = document.querySelector(".size_chat_model_close_btn");
            
                                    getSizeChatModelOpenBtn.addEventListener("click",function(){
                                        getSizeChatModelOpenBtn.style.display = "none";
                                        getsizeChatModel.style.display = "grid";
                                    })
                                    getSizeChatModelClose.addEventListener("click",function(){
                                        getsizeChatModel.style.display = "none";
                                        getSizeChatModelOpenBtn.style.display = "block";
                                    })
                                    window.onclick = function(e){
                                        if(e.target.classList.contains("sizeChatModal")){
                                            getsizeChatModel.style.display = "none";
                                            getSizeChatModelOpenBtn.style.display = "block";
                                        }
                                    }
                                </script>
                            </div>
                            <div class="quantity-container product-right-margin-adjust">
                                <h2 class="font-semibold mb-2">Quantity</h2>
                                <div class="quantiy-box">
                                    <div class="btn-group border rounded-0">
                                        <button type="button" class="btn quantity-minus rounded-0"><i class="fas fa-angle-left"></i></button>
                                        <input type="number" name="product_count" id=""  class="apperence-none rounded-0 quentity-count" value= "">
                                        <button type="button" class="btn quantity-plus rounded-0"><i class="fas fa-angle-right"></i></button>
                                    </div>
                                    <script>
                                        let getQuentityMinusBtn = document.querySelector(".quantity-minus");
                                        let getQuentityPlusBtn = document.querySelector(".quantity-plus");
                                        let getQuentyCount = document.querySelector(".quentity-count");
            
                                        var quenty = 1;
                                        
                                        function quentityFun (count){
                                            getQuentyCount.value = count;
                                        }
                                        quentityFun(quenty);
                                        getQuentityMinusBtn.addEventListener("click", function(){
                                            
                                            if (quenty <= 0){
                                                quenty = 10;
                                                quentityFun(quenty);
                                            }else {
                                                --quenty;
                                                quentityFun(quenty);
                                            }
                                            
                                        })
                                        getQuentityPlusBtn.addEventListener("click",function(){
                                            if (quenty >= 10){
                                                quenty = 0;
                                                quentityFun(quenty);
                                            }else {
                                                ++quenty;
                                                quentityFun(quenty);
                                            }
                                        })
            
                                    </script>
                                </div>
                            </div>
                            <div class="addCartAndWishList-container product-right-margin-adjust">
                                <!-- <button type="submit" id="addToCartBtn" class="uppercase font-bold cursor-pointer relative"><i class="fas fa-shopping-cart inline-block me-2"></i>add to cart</button> -->
                                <button type="submit" id="addToCartBtn" class="uppercase font-bold cursor-pointer relative" ><i class="fas fa-shopping-cart inline-block me-2"></i>Add To Cart</button>
                                <a href="./index.php" id="wishListBtn" class="block uppercase font-bold cursor-pointer relative"><i class="fas fa-ribbon inline-block me-2"></i>home</a> 
        
                            </div>
                    </form>     
                          

    <?php
            }
        }
    ?>
                <div class="product-page-right-top-container product-right-margin-adjust flex justify-start mb-2">
                    <div class="product-right-top-left me-3">
                        <img src="./assets/img/truck.png" class="inline-block me-2" alt="fire" >
                        <p class="inline-block">Free shipping for orders above $500 USD</p>
                    </div>
                </div>
                <br>
                <hr>
                <div class="saleEndContainer product-right-margin-adjust">
                    <h1 class="font-semibold">Sales End In</h1>
                    <span class="salesEnd inline-block mt-2 font-semibold tracking-wider">Expirded</span>
                </div>
                <br>
                <hr>
                <div class="shoppingInfoContainer product-right-margin-adjust">
                    <h1 class="font-semibold">Shipping Info</h1>
                    <span class="font-medium block my-1">100% Original Products</span>
                    <span class="font-medium block my-1">Free Delivery on order above Rs. 799</span>
                    <span class="font-medium block my-1">Pay on delivery is available   </span>
                    <span class="font-medium block my-1">Easy 30 days returns and exchanges</span>
                </div>
                <br>
                <hr>
                <div class="shareItContainer product-right-margin-adjust">
                    <h1 class="font-semibold">Share It</h1>
                    <a href="#" class="shareItIcons"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="shareItIcons"><i class="fab fa-google-plus-g"></i></i></a>
                    <a href="#" class="shareItIcons"><i class="fab fa-twitter"></i></i></a>
                    <a href="#" class="shareItIcons"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="shareItIcons"><i class="fas fa-rss"></i></a>
                </div>
                <div class="payment-continer product-right-margin-adjust">
                    <h1 class="font-semibold">100% Secure Payment</h1>
                    <div class="payment-info-img-container mt-2">
                        <a href="#"><img src="./assets/img/payment.png" alt=""></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="product-content-main-body-container">
            <div class="product-content-body-container">
                <div class="product-content-title-container flex justify-start">
                    <div id="product-details" class="active product-content-titles cursor-pointer" show-detai-list-idx = "0">
                        <h1 class="uppercase font-semibold">DETAILS</h1>
                    </div>
                    <div id="product-speciafic" class="product-content-titles cursor-pointer" show-detai-list-idx = "1">
                        <h1 class="uppercase font-semibold">Speciafication</h1>
                    </div>
                    <div id="product-video" class="product-content-titles cursor-pointer" show-detai-list-idx = "2">
                        <h1 class="uppercase font-semibold">Video</h1>
                    </div>
                    <div id="product-review" class="product-content-titles cursor-pointer" show-detai-list-idx = "3">
                        <h1 class="uppercase font-semibold">Write Review</h1>
                    </div>
                    <hr>

                    <script>
                        let getproductContentTitles = document.querySelectorAll(".product-content-titles");
                        function getProductContentTitleActive (){
                            getproductContentTitles.forEach((items)=>{
                                items.classList.remove("active");
                            })
                            this.classList.add("active");
                        }
                        getproductContentTitles.forEach(function(getproductContentTitle){
                            getproductContentTitle.addEventListener("click",getProductContentTitleActive)
                        })
                        function showProductContent(idx){

                        }
                    </script>
                </div>
                <div class="prduct-content-container">
                    <div class="product-each-content-container product-detail-content-container">
                        <p>The Model is wearing a white blouse from our stylist's collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black cursive language which looks great on a white color.</p>
                        <span class="font-semibold tracking-widest">Fabric:</span>
                        <p>
                            Art silk is manufactured by synthetic fibres like rayon. It's light in weight and is soft on the skin for comfort in summers.Art silk is manufactured by synthetic fibres like rayon. It's light in weight and is soft on the skin for comfort in summers.
                        </p>
                        <span class="font-semibold tracking-widest">Size & Fit:</span>
                        <p>
                            The model (height 5'8") is wearing a size S
                        </p>
                        <span class="font-semibold tracking-widest">Material & Care</span>
                        <p>
                            Top fabric: pure cotton <br>
                            Bottom fabric: pure cotton <br>
                            Hand-wash
                        </p>
                    </div>
                    <div class="product-each-content-container product-specific-content-container">
                        <p>
                            The Model is wearing a white blouse from our stylist's collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black cursive language which looks great on a white color.
                        </p>
                        <table>
                            <tr>
                                <td class="font-semibold">Sleeve Length</td>
                                <td ><span>Sleevless</span> </td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Neck</td>
                                <td><span>Round Neck</span></td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Occasion</td>
                                <td><span>Sports</span></td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Fabric</td>
                                <td><span>Polyester</span></td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Fit</td>
                                <td><span>Regular Fit</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="product-each-content-container product-video-content-container">
                        <div class="product-video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" title="'Wind' | Fashion Video / Photoshoot Teaser" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="product-each-content-container product-review-content-container">
                        <div class="product-review-content-form-container">
                            <form action="">
                                <div class="form-group my-2">
                                    <label for="name" class="font-semibold">Name</label>
                                    <input type="text" name="nameRev" id="name" class="form-control rounded-0" placeholder="Name">
                                </div>
                                <div class="form-group my-2">
                                    <label for="emailRev" class="font-semibold">Email</label>
                                    <input type="email" name="emailRev" id="emailRev" class="form-control rounded-0" placeholder="Email">
                                </div>
                                <div class="form-group my-2">
                                    <label for="reviewTitle" class="font-semibold">Review Title</label>
                                    <input type="text" name="reviewTitle" id="reviewTitle" class="form-control rounded-0" placeholder="Enter Your Review Subjects">
                                </div>
                                <div class="form-group my-2">
                                    <label for="reviewPara" class="font-semibold">Review Title</label>
                                    <textarea name="reviewPara" id="reviewPara" class="form-control rounded-0" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group my-2">
                                    <button type="submit" class="uppercase submitReviewBtn">Submit your review</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    let getProductEachContentContainers = document.querySelectorAll(".product-each-content-container");
                    var showProductContentContainer = 0;
                    function showProductContentFun(showContentIdx){
                        getProductEachContentContainers.forEach(function(getProductEachContentContainer){
                        getProductEachContentContainer.style.display = "none";
                        })
                        getProductEachContentContainers[showContentIdx].style.display = "block";
                    }
                    showProductContentFun(showProductContentContainer);

                    let getProductDetails = document.getElementById("product-details")
                    getProductDetails.addEventListener("click",function(){
                        showProductContentFun(getProductDetails.getAttribute("show-detai-list-idx"));
                    })

                    let getProductSpeciafic = document.getElementById("product-speciafic");
                    getProductSpeciafic.addEventListener("click",function(){
                        showProductContentFun( getProductSpeciafic.getAttribute("show-detai-list-idx"));
                    })

                    let getProductVideo = document.getElementById("product-video");
                    getProductVideo.addEventListener("click",function(){
                        showProductContentFun( getProductVideo.getAttribute("show-detai-list-idx"));
                    })

                    let getProductReview = document.getElementById("product-review");
                    getProductReview.addEventListener("click",function(){
                        showProductContentFun( getProductReview.getAttribute("show-detai-list-idx"));
                    })
                </script>
            </div>
        </div>
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
                        <a href="./product_main_page_input.php?id=<?php echo $latestRow['id']; ?>" class="w-full product-photo-container">
                            <div class="latest-item-img-container w-full relative ">
                                <div class="latest-item-img w-full h-full">
                                    <img src="<?php echo $latesImgUrl ?>" class="w-full h-full" alt="27" >
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
    <?php
        include "./footer.php";
    ?>
    <!-- bootstrap v-5.2 js-1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="./assets/libs/jQuery/jquery-3.6.1.min.js"></script>
    <!-- summernote css1 js1 -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- ionic -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- <script src="./js/home.js"></script> -->
    <script>
        $(document).ready(function(){
            // console
            $('#reviewPara').summernote({
                placeholder: 'Write Your Testimonial Here',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture']],
                ]
            });
            $(".nav-bar-slide-show-btn").click(function(){
                $(".nav_bar_slide_container").animate({
                    "height" : "toggle" ,
                },300)
            })
        })
    </script>
</body>