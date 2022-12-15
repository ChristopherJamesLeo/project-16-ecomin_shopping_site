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
                     <?php
                        $sql = "SELECT * FROM vendors WHERE id = 2 ";
                        $result = mysqli_query($conn , $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                ?>

                    <div class="username companyname">
                        <h1 class="tracking-widest font-bold leading-released"><?php echo $row["companyname"] ?></h1>
                    </div>
                    <div class="user-email">
                        <span><?php echo $row["email"];?></span>
                    </div>
                    <?php
                            }}
                        ?>
                </div>
                <div class="deshboard-list-container">
                    <ul class="list-group">
                        <li class="list-item py-2 main-vendor-list " show-deshboard = "0">Dashboard</li>
                        <li id="vandor-product" class="list-item py-2 main-vendor-list active" show-deshboard = "1">Products</li>
                    </ul>
                </div>
            </div>  
            <div class="col-lg-9 col-md-8 deshboard-right-menu-container mt-3">
                <div class="deshboard-right-menus">
                    <div class="deshboard-right-menu products-container">
                        <div class="products-container-menus mens-products-container">
                            <div class="header flex justify-between">
                                <h1 class="h3">Edit & Delete Product</h1>
                                <!-- <a href="#" class="block btn btn-md font-semibold rounded-0">Add New</a> -->
                            </div>
                            <div class="product-body">

                                <form action="./phpControl/edit_product.php" method = "POST" enctype="multipart/form-data">
                                    <?php
                                        $id = $_REQUEST["id"];
                                        $productSql = "SELECT * FROM products WHERE id = {$id}";
                                        $productResult = mysqli_query( $conn , $productSql);

                                            if(mysqli_num_rows($productResult) > 0){
                                                while($productRow = mysqli_fetch_assoc($productResult)){
                                        ?>
                                                <input type="hidden" name="id" value=" <?php echo $productRow["id"] ?>">
                                                <div class="row my-3">
                                                    <div class="col-lg-3 col-md-12 my-2">
                                                        <label for="title" class="font-bold title">Title :</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12">
                                                        <input type="text" name="title" id="title" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Title" value="<?php echo $productRow["title"] ?>">
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-lg-3 col-md-12 my-2">
                                                        <label for="price" class="font-bold">Price :</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12">
                                                        <input type="text" name="price" id="price" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Price" value="<?php echo $productRow["price"] ?>">
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-lg-3 col-md-12 my-2">
                                                        <label for="productcode" class="font-bold">Product Code :</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12">
                                                        <input type="text" name="productcode" id="productcode" class="form-control form-control-md rounded-0 outline-1"placeholder="Product Code" value="<?php echo $productRow["p_code"] ?>">
                                                    </div>
                                                </div> 
                                                <div class="row my-3">
                                                    <div class="col-lg-3 col-md-12 my-2">
                                                        <label for="size" class="font-bold title">Select Size :</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12">
                                                        <select name="size" id="size" class="form-select rounded-0">
                                                            <option value="" selected disabled><?php echo $productRow["size"] ?></option>
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
                                                        <select name="type" id="type" class="form-select rounded-0" value="<?php echo $productRow["type"] ?>">
                                                            <option value="" selected disabled><?php echo $productRow["type"] ?></option>
                                                            <option value="men">Men</option>
                                                            <option value="women">Women</option>
                                                            <option value="accessories">Accessories</option>
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
                                                                <input type="number" name="stock" id="quentity-count"  class="text-center rounded-0 quentity-count" value="<?php echo $productRow["stock"] ?>">
                                                                <button type="button" class="btn quantity-add rounded-0"><i class="fas fa-angle-right"></i></button>
                                                            </div>
                                                        </div>
            
                                                        <script>
                                                            let getQuentity = document.querySelector("#quentity-count");
                                                            let getquantityMinus = document.querySelector(".quantity-minus");
                                                            let getquantityAdd = document.querySelector(".quantity-add");
            
                                                            let currentCount = <?php echo $productRow["stock"] ?>;
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
                                                        <input type="file" name="filename" id="image" class="form-control form-control-md rounded-0 outline-1" value=""><p class="font-bold"><?php echo $productRow["image"] ?></p>
                                                    </div>
                                                </div> 
                                                <div class="row my-3">
                                                    <div class="col-lg-3 col-md-12 my-2">
                                                        <label for="size" class="font-bold title">Add Description :</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12">
                                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control rounded-0 p-3"><?php echo $productRow["description"] ?></textarea>
                                                    </div>
                                                </div> 
                                                <?php
                                        //     }
                                        // }
                                    ?>
 


                                    <button type="submit" class="btn btn-md font-bold uppercase px-4 py-2 tracking-wider" style="background-color: var(--global-color); color: var(--global-color-white);"> Edit </button> 
                                                                  
                                </form>
                                <!-- <a href="../phpControl/edit_product.php?id=" class="btn btn-md font-bold uppercase px-4 py-2 tracking-wider" style="background-color: var(--global-color); color: var(--global-color-white);">Edit</a>   -->
                                <div class="my-3">
                                <a href="#" class="btn btn-md font-bold uppercase px-4 py-2 tracking-wider bg-stone-200 col-2" >Back</a>  
                                <form action="./phpControl/delete_product.php" method="POST" enctype="multipart/form-data" >
                                    <input type="hidden" name="id" value= "<?php echo $productRow["id"] ?>">
                                    <button type="submit" class="btn btn-md font-bold uppercase px-4 py-2 tracking-wider my-3 col-3" style="background-color: var(--global-color); color: var(--global-color-white);"> DELETE </button> 
                                </form>
                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                                


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