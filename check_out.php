<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Check Out</title>
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
                <h1 class="uppercase font-semibold">Check Out</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./cart.php" class="font-semibold">Check Out</a>
            </div>
        </div>
    </div>
    <div class=" login-body-container flex flex-col justify-center">
        <div class="logIn-body-main-container check-out-main-container">
            <div class="row">
                <div class="col-lg-6 log-in-form-container check-out-form-container">
                    <h1 class="font-bold uppercase logIn-title my-3">Billing Details</h1>
                    <form action="" class="w-full log-in-form check-out-form">
                        <?php
                            $sql = "SELECT * FROM users WHERE id = 1";
                            $result = mysqli_query( $conn , $sql );
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="firstname" class="font-semibold mb-2">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control rounded-0" value = "<?php echo $row["firstname"] ?>">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="lastname" class="font-semibold mb-2">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control rounded-0" value = "<?php echo $row["lastname"] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="phonenumber" class="font-semibold mb-2">Phone Number</label>
                                <input type="text" name="phonenumber" id="phonenumber" class="form-control rounded-0" value = "<?php echo $row["contact_number"] ?>">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="email" class="font-semibold mb-2">Email Address </label>
                                <input type="email" name="email" id="email" class="form-control rounded-0 "value = "<?php echo $row["email"] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="country" class="font-semibold mb-2">Country</label>
                                <select name="country" id="country" class="form-select rounded-0">
                                    <option value="<?php echo $row["country"] ?>" selected disabled>Indian</option>
                                    <option value="Indian" >Indian</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Singapore">Singapore</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="font-semibold mb-2">Address </label>
                            <input type="text" name="address" id="address" class="form-control rounded-0" value="<?php echo $row["address"] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city" class="font-semibold mb-2">Town/City </label>
                            <input type="text" name="city" id="city" class="form-control rounded-0"  value="<?php echo $row["city"] ?>">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="country" class="font-semibold mb-2">State / Country </label>
                            <input type="text" name="country" id="country" class="form-control rounded-0" value="<?php echo $row["country"] ?>">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="postalCode" class="font-semibold mb-2">Postal Code</label>
                            <input type="text" name="zipcode" id="postalCode" class="form-control rounded-0"  value="<?php echo $row["zipcode"] ?>">
                        </div>   
                        <?php
                                }
                            }
                        ?>
                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" name="createAccount" id="createAccount" class="form-check-input">
                            <label for="createAccount text-muted">Create An Account ?</label>
                        </div>                                                                
                        <div class="form-group mt-3">
                            <input type="submit" value="login" class="uppercase font-bold loginBtn">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 log-in-new-customer-container check-out-payment">
                    <div class="register-direct-container chect-out-payment-container">

                        <form action="./phpControl/add_cart_out.php" method = "POST" enctype="multipart/form-data">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="border-b">
                                    <th class="">Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $orderSql = "SELECT * FROM cart";
                                $orderResult = mysqli_query( $conn , $orderSql );
                                    if(mysqli_num_rows($orderResult) > 0){
                                        
                                        while($orderRow = mysqli_fetch_assoc($orderResult)){
                                ?>
                                <tr class="">
                                    <td><?php echo $orderRow["title"] ?> × <span class="cart_quantity"><?php echo $orderRow["product_count"] ?></span> </td>
                                    <td class="d-none price"><?php echo $orderRow["price"] ?></td>
                                    <td>$ <span class="totalAmount"></span> </td>
                                </tr> 
                                <?php
                                        }
                                    }
                                ?>  
                            </tbody>
                            <tfoot>
                                <tr class="">
                                    <td class="font-semibold">Subtotal</td>
                                    <td >$ <span id="cart-out-total-amount-show">380</span></td>
                                </tr>    
                                <tr class="">
                                    <td class="font-semibold">Shipping</td>
                                    <td>
                                        <input type="checkbox" name="freeshipping" id="freeshipping" value = "free">
                                        <label for="freeshipping">Free Shipping</label>
                                    </td>
                                </tr> 
                                <tr class="border-b">
                                    <td class="font-semibold"></td>
                                    <td>
                                        <input type="checkbox" name="localpickup" id="localpickup" value = "local">
                                        <label for="localpickup">Local Pickup</label>
                                    </td>
                                </tr> 
                                <tr class="border-b">
                                    <td class="font-semibold">Total</td>
                                    <td>$<span id="cart-out-all-total-amount-show">380</span></td>
                                </tr>  
                            </tfoot>
                            <script>
                                let getPrice =Array.from(document.querySelectorAll(".price")) ;
                                let getQuantity = Array.from(document.querySelectorAll(".cart_quantity")) ;
                                let getTotalAmount =Array.from(document.querySelectorAll(".totalAmount")) ;
                                console.log(getPrice,getQuantity)
                                let showTotalPrice = document.getElementById("cart-out-total-amount-show");
                                let showAllTotalPrice = document.getElementById("cart-out-all-total-amount-show");
                                let totalAmount = 0;

                                    for(let i = 0 ; i < getPrice.length ; i++){
                                            let price = getPrice[i].innerText ;
                                            let quantity = getQuantity[i].innerText;
                                            let total = price * quantity;
                                            getTotalAmount[i].innerText = total;

                                            totalAmount += total;  
                                        }
                                showTotalPrice.innerText = totalAmount;
                                showAllTotalPrice.innerText = totalAmount;

                            </script>
                        </table>
                        <div class="payment-methods mt-3">
                            <div class="form-check">
                                <input type="radio" name="paymentMethod" id="" value="CheckPayments">
                                <Label>Check Payments</Label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="paymentMethod" id="" value="CashOnDelivery">
                                <Label>Cash On Delivery</Label>
                            </div>      
                            <div class="form-check">
                                <input type="radio" name="paymentMethod" id="" value="PayPal">
                                <Label>PayPal</Label>
                            </div>   
                            <img src="./assets/img/paypal.png" alt="paypal">                    
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="submit" class="uppercase font-bold loginBtn px-4 py-3" style= "background-color: var(--global-color); color: var(--global-color-white)">
                            <!-- <a href="./phpControl/add_cart_out.php?id=<?php //print_r($orderRow) ?>"></a> -->
                        </div>
                        </form>
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