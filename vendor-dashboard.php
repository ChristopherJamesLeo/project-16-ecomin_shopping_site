<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Vendor Dashboard</title>
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
    <!-- summer note css1 js 1 -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
                <h1 class="uppercase font-semibold">Vendor Dashboard</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./vendor-deshboard.php" class="font-semibold">Vendor Dashboard</a>
            </div>
        </div>
    </div>
    <div class="deshboard-body-main-container">
        <div class="row deshboard-body-container">
            <div class="col-lg-3 col-md-4 deshboard-left-menu-container">
                <div class="profile-picture-container p-4 flex flex-col justify-center text-center">
                    <div class="profile-img-container">
                        <img src="./assets/img/vendor-picture.png" class="w-full h-full" alt="">
                    </div>
                    <div class="username companyname">
                        <h1 class="tracking-widest font-bold leading-released">Fashion Store</h1>
                    </div>
                    <div class="user-email">
                        <span>mark.enderess@mail.com</span>
                    </div>
                </div>
                <div class="deshboard-list-container">
                    <ul class="list-group">
                        <li class="list-item py-2 main-vendor-list active" show-deshboard = "0">Dashboard</li>
                        <li id="vandor-product" class="list-item py-2 main-vendor-list " show-deshboard = "1">Products
                            <ul id="product-list" class="list-group product-list">
                                <li class="list-group-item rounded-0 border-0" show-product-list = "0">All Product</li>
                                <li class="list-group-item rounded-0 border-0" show-product-list = "1">Men Product</li>
                                <li class="list-group-item rounded-0 border-0" show-product-list = "2">Women Product</li>
                                <li class="list-group-item rounded-0 border-0" show-product-list = "3">Add Product</li>
                            </ul>
                        </li>
                        <li class="list-item py-2  main-vendor-list " show-deshboard = "2">Orders</li>
                        <li class="list-item py-2  main-vendor-list " show-deshboard = "3">Profile</li>
                        <li class="list-item py-2  main-vendor-list " show-deshboard = "4"><a href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>  
            <div class="col-lg-9 col-md-8 deshboard-right-menu-container mt-3">
                <div class="deshboard-right-menus">
                    <div class="deshboard-right-menu account-info-container ven-dash-show-chat">
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
                        <div class="row vendor-chart-container">
                            <div class="col-lg-7 mb-5">
                                <div id="totalRevenue" class="w-full h-full totalRevenue">

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div id="overallSales" class="w-full h-full overallSales">

                                </div>
                            </div>
                        </div>
                        <div class="trendingAndOrder-container p-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto trendignAndOrder">
                                    <div class="trending">
                                        <h1 class="font-bold h4">Trending Products</h1>
                                        <table class="table table-hover w-full">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Image</th>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>
                                                        <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                                    </td>
                                                    <td>Neck Velvet Dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>
                                                        <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                                    </td>
                                                    <td>Neck Velvet Dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>
                                                        <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                                    </td>
                                                    <td>Neck Velvet Dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>                                                                                        
                                            </tbody>
                                            
                                        </table>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto trendignAndOrder">
                                    <div class="orderlist">
                                        <h1 class="font-bold h4">Recent Orders</h1>
                                        <table class="table table-hover w-full">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Order Id</th>
                                                    <th>Product Details</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td class="font-semibold">#21515</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="font-semibold">#21515</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="font-semibold">#21515</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deshboard-right-menu products-container">
                        <div class="products-container-menus add-prodouct-container">
                            <!-- <div class="sub-header text-end my-3">
                                <button class="btn uppercase font-bold btn-md rounded-0">Table</button>
                                <button class="btn uppercase font-bold btn-md ms-2 rounded-0">Grid</button>
                            </div> -->
                            <div class="header flex justify-between">
                                <h1 class="h3">All Products</h1>
                                <a href="#" class="block btn btn-md font-semibold rounded-0">Add New</a>
                            </div>

                            <div class="product-body">
                                <table class="table table-auto">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Sales</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="flex justify-center items-center">
                                                <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                            </td>
                                            <td>Neck Velvet Dress</td>
                                            <td>Women Clothes</td>
                                            <td class="font-semibold" style="color:var(--global-color);">$205</td>
                                            <td>1000</td>
                                            <td>2000</td>
                                            <td>
                                                <a href="#" class="edit text-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="delete text-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="products-container-menus mens-products-container">
                            <div class="header flex justify-between">
                                <h1 class="h3">Men Products</h1>
                                <a href="#" class="block btn btn-md font-semibold rounded-0">Add New</a>
                            </div>
                            <div class="product-body">
                                <table class="table table-auto">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Sales</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="flex justify-center items-center">
                                                <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                            </td>
                                            <td>Neck Velvet Dress</td>
                                            <td>Man Clothes</td>
                                            <td class="font-semibold" style="color:var(--global-color);">$205</td>
                                            <td>1000</td>
                                            <td>2000</td>
                                            <td>
                                                <a href="#" class="edit text-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="delete text-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="products-container-menus mens-products-container">
                            <div class="header flex justify-between">
                                <h1 class="h3">Women Products</h1>
                                <a href="#" class="block btn btn-md font-semibold rounded-0">Add New</a>
                            </div>
                            <div class="product-body">
                                <table class="table table-auto">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Sales</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="flex justify-center items-center">
                                                <img src="./assets/img/1(tranding_product).jpg" class="image-thumbnail" alt="">
                                            </td>
                                            <td>Neck Velvet Dress</td>
                                            <td>Women Clothes</td>
                                            <td class="font-semibold" style="color:var(--global-color);">$205</td>
                                            <td>1000</td>
                                            <td>2000</td>
                                            <td>
                                                <a href="#" class="edit text-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="delete text-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="products-container-menus mens-products-container">
                            <div class="header flex justify-between">
                                <h1 class="h3">Add Product</h1>
                                <!-- <a href="#" class="block btn btn-md font-semibold rounded-0">Add New</a> -->
                            </div>
                            <div class="product-body">
                                <form action="">
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="title" class="font-bold title">Title :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <input type="text" name="title" id="title" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Title">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="price" class="font-bold">Price :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <input type="text" name="price" id="price" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Price">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="productcode" class="font-bold">Product Code :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <input type="text" name="productcode" id="productcode" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Code">
                                        </div>
                                    </div> 
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="size" class="font-bold title">Select Size :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <select name="size" id="size" class="form-select rounded-0">
                                                <option value="" selected disabled>Size</option>
                                                <option value="sm">Small</option>
                                                <option value="md">Medium</option>
                                                <option value="lg">Large</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="type" class="font-bold title">Select Type :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <select name="type" id="type" class="form-select rounded-0">
                                                <option value="" selected disabled>Type</option>
                                                <option value="1">Men</option>
                                                <option value="0">Women</option>
                                            </select>
                                        </div>
                                    </div>                                     
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="productcode" class="font-bold">Total Product:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <div class="">
                                                <div class="btn-group border rounded-0">
                                                    <button type="button" class="btn quantity-minus rounded-0"><i class="fas fa-angle-left"></i></button>
                                                    <input type="number" name="" id="quentity-count"  class="text-center rounded-0 quentity-count" value= "">
                                                    <button type="button" class="btn quantity-add rounded-0"><i class="fas fa-angle-right"></i></button>
                                                </div>
                                            </div>

                                            <script>
                                                let getQuentity = document.querySelector("#quentity-count");
                                                let getquantityMinus = document.querySelector(".quantity-minus");
                                                let getquantityAdd = document.querySelector(".quantity-add");

                                                let currentCount = 4;
                                                // console.log(getQuentity);
                                                getquantityMinus.addEventListener("click",function(){
                                                    quentityCount(currentCount -=1);
                                                })

                                                getquantityAdd.addEventListener("click",function(){
                                                    quentityCount(currentCount += 1)
                                                })

                                                function quentityCount(count){
                                                    getQuentity.value = count;
                                                    if(count >=100) {
                                                        currentCount = 0;
                                                        // getquantityMinus.value = count;
                                                    }else if(count <= 0) {
                                                        currentCount = 100;
                                                        
                                                    }
                                                }
                                                quentityCount(currentCount);
                                            </script>
                                        </div>
                                    </div>  
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="size" class="font-bold title">Add Picture :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <input type="file" name="image" id="image" class="form-control form-control-md rounded-0 outline-1">
                                        </div>
                                    </div> 
                                    <div class="row my-3">
                                        <div class="col-lg-3 col-md-12 my-2">
                                            <label for="size" class="font-bold title">Add Description :</label>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control rounded-0 p-3"></textarea>
                                        </div>
                                    </div>  


                                    <a href="#" class="btn btn-md font-bold uppercase px-4 py-2 tracking-wider" style="background-color: var(--global-color); color: var(--global-color-white);">Add</a>  
                                    <button type="cancel" class="btn btn-md font-bold uppercase px-4 py-2 bg-stone-200 tracking-wider"> discard</button>                                                                  
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="deshboard-right-menu orders-container">
                            <div class="header flex justify-between">
                                <h1 class="h3">Orders</h1>
                                <a href="#" class="block btn btn-md font-semibold rounded-0">Add Product</a>
                            </div>
                            <div class="product-body">
                                <table class="table table-auto">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Order Id</th>
                                            <th>Product Detail</th>
                                            <th>Status</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="font-semibold">#125021</td>
                                            <td>Neck Velvet Dress</td>
                                            <td class="font-semibold">Shipped</td>
                                            <td>$205</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                    </div>   
                    <div class="deshboard-right-menu profile-container">
                        <div class="profile-heading flex justify-start items-center mb-3">
                            <h1 class="font-medium h5 me-3">Profile</h1>
                            <a href="#" class="h6">Edit</a>
                        </div>
                        <div class="row profile-body">
                            <div class="row">
                                <div class="col-6 category-list">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr class="">
                                                <td class="block me-5">Company Name</td>
                                                <td>Fashion Store</td>
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td>Mark.Jecno@Gmail.Com</td>
                                            </tr>
                                            <tr>
                                                <td>Country / Region</td>
                                                <td>Downers Grove, IL</td>
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
                                                <td>549 Sulphur Springs Road</td>
                                            </tr>
                                            <tr>
                                                <td>City/State</td>
                                                <td>Downers Grove, IL</td>
                                            </tr>
                                            <tr>
                                                <td>Zip</td>
                                                <td>60515</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <script>
                let vandorProduct = document.getElementById("vandor-product");
                let productListcontainer = document.querySelector("#product-list");
                let productLists = document.querySelectorAll("#product-list .list-group-item");
                let getProductListsContainers =Array.from(document.querySelectorAll(".products-container .products-container-menus")) ;

                
                
                productLists.forEach(function(productList){
                    productList.addEventListener("click",function(){
                        for(let i = 0 ; i < getProductListsContainers.length ; i++){
                            getProductListsContainers[i].style.display= "none";
                            getProductListsContainers[this.getAttribute("show-product-list")].style.display= "block";
                        }
                    })
                })

                let getDeshboardLists = document.querySelectorAll(".deshboard-left-menu-container .deshboard-list-container ul .main-vendor-list ");
                // console.log(getDeshboardLists);
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
    <!-- Apex Chart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- summer note -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-bar-slide-show-btn").click(function(){
                $(".nav_bar_slide_container").animate({
                    "height" : "toggle" ,
                },300)
            })
            $('#myorders,#mywishlist').DataTable();
            var totalRevenue = {
        chart: {
            type: 'line'
        },
        series: [{
            data: [{
                x: new Date('2018-02-11').getTime(),
                y: 16
            }, {
                x: new Date('2018-02-12').getTime(),
                y: 18
            },{
                x: new Date('2018-02-13').getTime(),
                y: 19
            },{
                x: new Date('2018-02-14').getTime(),
                y: 12
            },{
                x: new Date('2018-02-17').getTime(),
                y: 22
            },{
                x: new Date('2018-02-19').getTime(),
                y: 28
            },{
                x: new Date('2018-02-24').getTime(),
                y: 18
            },{
                x: new Date('2018-02-24').getTime(),
                y: 15
            },{
                x: new Date('2018-02-25').getTime(),
                y: 13
            },{
                x: new Date('2018-02-26').getTime(),
                y: 20
            },{
                x: new Date('2018-02-27').getTime(),
                y: 31
            }]
        }], 
        xaxis: {
        type: 'datetime'
            },
        fill: {
            type: 'gradient',
            gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 100]
          }
        }
    }
    var totalRevenuechart = new ApexCharts(document.querySelector("#totalRevenue"), totalRevenue);


    var overallSales = {
    chart: {
      type: 'donut'
    },
    series: [20,25,55],
    labels: ['Recent Order', 'Panding Payment', 'Recived Payment']
  }
  var overallSaleschart = new ApexCharts(document.querySelector("#overallSales"), overallSales);
            


  totalRevenuechart.render();
  overallSaleschart.render();

//   summer note
$('#description').summernote({
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']]
        ]
      });

$("#vandor-product").click(function(){

    $("#product-list").animate({
        height : "toggle",
    },500)
})
    
})

    </script>
</body>