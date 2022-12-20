<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Invoice 1</title>
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
    <!-- <link rel="stylesheet" href="./css/media.css"> -->
</head>

<body>
    <div class="invoice-main-container  grid place-items-center w-screen">
        <div class="invoice-container shadow-lg">
            <div class="invoice-header-img-container w-full">
                <div class="invoice-header-img w-full ">
                    <img src="./assets/img/27_invoice.jpg" class="w-full" alt="">
                </div>
            </div>

            <div class="invoice-body w-full">
                <div class="invoice-heading-container row justify-content-between">
            <?php
                include "./phpControl/confit.php";
                session_start();
                $usersql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";
                $userResult = mysqli_query( $conn , $usersql);
                if( mysqli_num_rows($userResult)){
                    while( $userRow = mysqli_fetch_assoc($userResult)){
            ?>
                    <div class="content-address col-lg-5 col-sm-12 font-semibold">
                        <?php echo $userRow["address"] ?><br>
                        ORADELL, New Jersey<br>
                        NJ, 07649
                    </div>
                    <div class="col-lg-5 col-sm-12 ">
                        <span id="issueDate" class="issueDate block">Issue Date: <span class="text-dark">5/10/22</span></span>
                        <span id="invoiceNO" class="invoiceNO block">Invoice No: <span class="text-dark">Dbl - 3</span></span>
                        <span id="Email" class="Email block">Email: <span class="text-dark">useremail@gmail.com</span></span>
                    </div>

            <?php
                    }
                }
            ?>
                    <script>
                        let date = new DATE().getDate();
                        console.log(date);
                    </script>

                </div>
                <div class="invoice_btn_contaier flex  justify-content-between">
                    <table class="w-full table-fixed">
                        <tr >
                            <td class="text-start">
                                <div class="Exp_PDF">
                                    <button type="button" class="exp_pdf_btn uppercase">EXPORT AS PDF</button>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="title">
                                    <h1>INVOICE</h1>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="print ">
                                    <button type="button" class="print_btn uppercase" onclick= printInvoice()>print</button>
                                </div>
                                <script>
                                    function printInvoice(){
                                        window.print();
                                    }
                                </script>
                            </td>
                        </tr>
                    </table>  
                </div>
                <div class="invoice-body-table">
                    <table class="table table-striped table-hover table-boderless table-auto text-center">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th>#</th>
                                <th>DESCRIPTION</th>
                                <th>PRICE</th>
                                <th>HRS.</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "./phpControl/confit.php";
                                $sql = "SELECT * FROM cart";
                                $result = mysqli_query( $conn , $sql );
                                if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr class="text-center">
                                <td class="role-no">1</td>
                                <td><?php echo $row["title"];  ?></td>
                                <td>$ <span class="price"><?php echo $row["price"];  ?></span></td>
                                <td><span class="cart_quantity"><?php echo $row["product_count"];  ?></span></td>
                                <th>$ <span class="totalAmount"></span></th>
                            </tr>
                            <?php
                                    }
                                }
                            ?>

                        </tbody>
                        <tfoot class="border-0">
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">Grand Total</td>
                                <td class="text-center">$ <span id="cart-total-amount-show">1933</span></td>
                            </tr>
                        </tfoot>
                    </table>
            <script>
                let getPrice =Array.from(document.querySelectorAll(".price")) ;
                let getQuantity = Array.from(document.querySelectorAll(".cart_quantity")) ;
                let getTotalAmount =Array.from(document.querySelectorAll(".totalAmount")) ;
                let showTotalPrice = document.getElementById("cart-total-amount-show");
                let role_no = Array.from(document.querySelectorAll(".role-no"))
                let totalAmount = 0;
                for(let i = 0 ; i < getPrice.length ; i++){
                    let price = getPrice[i].innerText ;
                    let quantity = getQuantity[i].innerText;
                    let total = price * quantity;
                    getTotalAmount[i].innerText = total;
                    totalAmount += total;  
                    role_no[i].innerText = i+1 ;

                }
                showTotalPrice.innerText = totalAmount;

            </script>
                </div>
                <div class="invoice-footer">
                    <div class="invoice-footer-img">
                        <img src="./assets/img/shape.png" alt="shape">
                    </div>
                    <div class="invoice-footer-content-container flex justify-between items-center">
                        <div class="invoice-footer-content-items flex justify-start items-center">
                            <div class="invoice-footer-icon">
                                <i class="fas fa-map"></i>
                            </div>
                            <div class="invoice-footer-content">
                                <p>Multikart Demo Store
                                    USA, 362351</p>
                            </div>
                        </div>
                        <div class="invoice-footer-content-items flex justify-start items-center">
                            <div class="invoice-footer-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="invoice-footer-content">
                                <p>+1-202-555-0144 <br>
                                    +1-202-555-0117</p>
                            </div>
                        </div>
                        <div class="invoice-footer-content-items flex justify-start items-center">
                            <div class="invoice-footer-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="invoice-footer-content">
                                <p>Support@Multikart.Com <br>
                                    Demo@Multikart.Com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap v-5.2 js-1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="./assets/libs/jQuery/jquery-3.6.1.min.js"></script>
    <!-- ionic -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>