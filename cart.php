<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Cart</title>
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

    <!-- summernote css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- datatable css1 js 1 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" >
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
                <h1 class="uppercase font-semibold">cart</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./cart.html" class="font-semibold">cart</a>
            </div>
        </div>
    </div>
    <div class=" wishlist-body-container flex flex-col justify-center">
        <div class="cart-expired-timer-container w-full ">
            <span>Your cart will be expired in <span id="cart-timer">15 : 00</span> minutes!</span>
            <span class="check-out"><a href="#" class="btn check-out-btn btn-sm rounded-0 font-bold check-out-btn">Check Out</a></span>
        </div>
        <script>
            let getCartTimer = document.getElementById("cart-timer");
            var minTimer = 14;
            var timer = 60;
            window.onload = function(){
                
                let cartTimerInterval  = setInterval(function(){
                    cartTimerFun();

                    getCartTimer.innerText = `${minTimer} : ${timer}`;
                    if(minTimer == 0){
                        clearInterval(cartTimerInterval);
                        getCartTimer.innerText = `Cart Time Out`;
                        document.getElementById("wishlist_table").style.display = "none";
                    }
                },1000)
                
            }
            function cartTimerFun(){
                timer--;
                if(timer === 0){
                    timer = 60;
                    minTimer -=1;
                }
                
            }
            
            
        </script>
        <table id="wishlist_table" class="table-fixed table table-striped table-hover table-boderless ">
            <thead>
                <tr class="font-bold uppercase text-center border-b">
                    <th class="text-center">image</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">action</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM cart ORDER BY id DESC";
                    $result = mysqli_query( $conn , $sql );
                    if(mysqli_num_rows($result) > 0){
                        while( $row = mysqli_fetch_assoc($result)){
                            $img_url = "./assets/product-images/".$row['image'];
                ?>
                <tr class="text-center">
                    <td class="flex justify-center items-center">
                        <img src="<?php echo $img_url ?>" class="wishlist-show-img" alt="">
                    </td>
                    <td class=""><span class=" font-light wishlist-productName"><?php echo $row['title'] ?></span></td>
                    <td class="font-bold wishlist-price" >$<span class="price" class=""><?php echo $row['price'] ?></span></td>
                    <td class="">
                        <input type="number" name="cart_quantity" id="cart_quantity" value="<?php echo $row['product_count'] ?>" class="cart_quantity form-control mx-auto mt-3">
                    </td>
                    <td><a href="./phpControl/delete_cart_inline.php?id=<?php echo $row['id'] ?>" class="wishlist-action cart-action"><ion-icon name="close-outline"></ion-icon></a></td>
                    <td  class="cart-total">$<span class="totalAmount"></span>.00</td>
                </tr>                
                <?php
                        }
                    }
                ?>

              
            </tbody>

            <tfoot>
                <tr>

                    <td colspan="4"></td>
                    <td class="text-end"><span class="font-bold cart-total-title">Total Price : </span></td>
                    <td class="text-center font-bold cart-total-amount">$<span id="cart-total-amount-show" class="font-bold cart-total-amount-show">6935.00</span>.00</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="#"  class="wishlist-continue-shopping uppercase font-bold">continer shopping </a></td>
                    <td colspan="4"></td>
                    <td class="text-center"><a href="#" class="wishlist-checkout uppercase font-bold">Check out</a></td>
                </tr>
            </tfoot>
            <script>
                let getPrice =Array.from(document.querySelectorAll(".price")) ;
                let getQuantity = Array.from(document.querySelectorAll(".cart_quantity")) ;
                let getTotalAmount =Array.from(document.querySelectorAll(".totalAmount")) ;
                let showTotalPrice = document.getElementById("cart-total-amount-show");
                let totalAmount = 0;
                for(let i = 0 ; i < getPrice.length ; i++){
                    let price = getPrice[i].innerText ;
                    let quantity = getQuantity[i].value;
                    let total = price * quantity;
                    getTotalAmount[i].innerText = total;

                    totalAmount += total;  
                }
                showTotalPrice.innerText = totalAmount;

            </script>
        </table>
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
    <!-- datatable css1 js1 -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
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
                    ['insert', ['link', 'picture', 'video']],
                ]
            });
            $(".nav-bar-slide-show-btn").click(function(){
                $(".nav_bar_slide_container").animate({
                    "height" : "toggle" ,
                },300)
            })
            $('#wishlist_table').DataTable();
        })
    </script>
</body>