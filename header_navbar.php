    <div class="control-page-container move_right z-50">
        <div class="btn-container">
            <button class="btns"><a href="./cart.php"><ion-icon name="cart-outline" class="relative"></ion-icon></a><span class="badge  badge-carts rounded-full"></span></button>
            <button id="left_right_btn" class="btns relative">RTL</button>
            <button id="theme_color" class="btns"><input type="color" name="page_theme" id="page_theme" class="page_theme" value="#ff4c3b"></button>
        </div>
    </div>
    <header class="">
        <div class="header-content-container-cs relative">
            <div class="container header-log-in-container">
                <div class="w-full flex justify-end items-center">
                    <a href="#">
                        <div class="header-heart-cs me-4">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                    <a href="#" class="block" >
                        <div class="myaccount-cs relative">
                            <i class="fas fa-user me-1"></i>
                            <span>My Account</span>
                            <div class="absolute right-0 top-full myaccount-hover-container">
                                <ul class="list-group font-bold rounded-0">
                                    <li class="list-group-item"><a href="./log_in.php">Log In</a></li>
                                    <li class="list-group-item"><a href="./user_register.php">Register</a></li>
                                </ul>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
            <nav class="container nav-bar flex justify-between items-center w-full ">
                <div class="logo">
                    <div class="logo-container w-full h-full">
                        <div class="logo-img">
                            <img src="./assets/img/logo.png" class="w-full" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="navbar-container flex justify-between items-center">
                    <ul class="navbar font-bold">
                        <li class="nav-item"><a href="./index.php" class="nav-link uppercase">Home</a></li>
                        <li class="nav-item relative"><a href="./product_page_nav.php" class="nav-link uppercase">products <i class="fas fa-angle-down inline-block mx-2"></i></a>
                            <ul class="list-group absolute rounded-0 right-0 top-full hover-nav-item-list-cs">
                                <li class="list-group-item uppercase"><a href="./product_page_nav.php">product</a></li>
                                <li class="list-group-item uppercase"><a href="./search_page.php">search product</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item relative"><a href="./cart.php" class="nav-link uppercase">cart <i class="fas fa-angle-down inline-block mx-2"></i></a>
                            <ul class="list-group absolute rounded-0 right-0 top-full hover-nav-item-list-cs">
                                <li class="list-group-item uppercase"><a href="./check_out.php">check out</a></li>
                                <li class="list-group-item uppercase"><a href="./wishlist.php">wishlist</a></li>
                                <li class="list-group-item uppercase"><a href="./invoice_1.php" target="_blank">invoice</a></li>
                            </ul>
                        </li>
                        <li class="nav-item relative"><a href="./review.php" class="nav-link uppercase">Review <i class="fas fa-angle-down inline-block mx-2"></i></a>
                            <ul class="list-group absolute rounded-0 right-0 top-full hover-nav-item-list-cs">
                                <li class="list-group-item uppercase"><a href="./about_us.php">about us</a></li>
                                <li class="list-group-item uppercase"><a href="./contact.php">contact</a></li>
                                <li class="list-group-item uppercase"><a href="./FAQ.php">faq</a></li>
                            </ul>
                        </li>
                        <li class="nav-item relative"><a href="./blog.php" class="nav-link uppercase">blog <i class="fas fa-angle-down inline-block mx-2"></i></a>
                            <ul class="list-group absolute rounded-0 right-0 top-full hover-nav-item-list-cs">
                                <li class="list-group-item uppercase"><a href="./blog_details.php">blog detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item relative"><a href="./user_dashboard.php" class="nav-link uppercase">dashboard <i class="fas fa-angle-down inline-block mx-2"></i></a>
                            <ul class="list-group absolute rounded-0 right-0 top-full hover-nav-item-list-cs">
                                <li class="list-group-item uppercase"><a href="./user_dashboard.php">user dashboard</a></li>
                                <li class="list-group-item uppercase"><a href="./vendor-dashboard.php">adm dashboard</a></li>
                            </ul>
                        </li>                        
                    </ul>
                    <div class="nav-bar-slide-show-container">
                        <button type="button" class="nav-bar-slide-show-btn"><ion-icon name="menu-outline"></ion-icon></button>
                    </div>
                    <div class="nav_bar_slide_container absolute top-full right-0">
                        <ul class="list-group rounded-0 font-bold text-capitalize">
                            <li class="list-group-item"><a href="./index.php" class="">Home</a>
                            </li>
                            <li class="list-group-item"><a href="./product_page.php">Products</a>
                                <ul id="product" class="list-group">
                                    <li class="list-group-item rounded-0 border-0"><a href="./product_page.php">product</a></li>
                                    <li class="list-group-item rounded-0 border-0"><a href="./search_page.php">search product</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="./cart.php">Cart</a>
                                <ul id="product" class="list-group">
                                    <li class="list-group-item rounded-0 border-0"><a href="./check_out.php">check out</a></li>
                                    <li class="list-group-item rounded-0 border-0"><a href="./wishlist.php">wishlist</a></li>
                                    <li class="list-group-item rounded-0 border-0"><a href="./invoice_1.php" >invoice</a></li>
                                </ul></li>
                            <li class="list-group-item"><a href="./blog.php">Blog</a>
                                <ul id="product" class="list-group">
                                    <li class="list-group-item rounded-0 border-0"><a href="./blog_details.php">blog detail</a></li>
                                </ul></li>
                            <li class="list-group-item"><a href="./user_dashboard.php">Dashboard</a>
                                <ul id="product" class="list-group">
                                    <li class="list-group-item rounded-0 border-0"><a href="./user_dashboard.php">user dashboard</a></li>
                                    <li class="list-group-item rounded-0 border-0"><a href="./vendor-dashboard.php">adm dashboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-tool-list flex">
                        <div class="nav_tool relative"><a href="#" class="nav-tool-link uppercase"><ion-icon name="search-outline"></ion-icon></a>
                            <div class="search-box-container absolute right-0 top-full">
                                <div class="form-group search-box">
                                    <input type="text" name="" id="search-items" class="form-control rounded-0">
                                    <div class="search-result-container w-ful">
                                        <div class="search-result-items flex justify-evenly items-center w-full">
                                            <div class="search-result-item-img">
                                                <img src="./assets/img/1(showList).jpg" class="w-full" alt="">

                                            </div>
                                            <div class="search-result-item-name">
                                                <span class="item-name">Item 1</span>
                                                <span class="item-price">item price</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav_tool relative"><a href="#" class="nav-tool-link uppercase"><ion-icon name="settings-outline"></ion-icon></a>
                        </div>
                        <div class="nav_tool nav_cart_list-show relative"><a href="#" class="nav-tool-link uppercase"><ion-icon name="cart-outline" class="relative"></ion-icon> <span  class="badge badge-carts rounded-full"></span></a>
                            <div class="show-carted-list absolute right-0 top-full">
                                <ul class="list-group rounded-0 carted-list ">
                                    <li class="list-group-item flex justify-between items-start show-carted-li">
                                        <div class="product-img">
                                            <img src="./assets/img/1(showList).jpg" class="w-full" alt="">
                                        </div>
                                        <div class="product-name">
                                            <span>man</span><br>
                                            <span>1 X $299</span>
                                        </div>
                                        <div class="prouct-delete-cart-btn">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </li>
                                    <li class="list-group-item flex justify-between items-start show-carted-li">
                                        <div class="product-img">
                                            <img src="./assets/img/1(showList).jpg" class="w-full" alt="">
                                        </div>
                                        <div class="product-name">
                                            <span>man</span><br>
                                            <span>1 X $299</span>
                                        </div>
                                        <div class="prouct-delete-cart-btn">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <script>
            let getThemeColorChangeBtn = document.getElementById("theme_color");
            let getThemeColorChange = document.getElementById("page_theme");

            getThemeColorChangeBtn.addEventListener("change",function(){
            let getColor = getThemeColorChange.value;
                document.body.style.setProperty("--global-color",`${getColor}`);
            })

            document.getElementById("left_right_btn").addEventListener("click",function(){
            document.querySelector(".control-page-container").classList.toggle("move_right");
            document.querySelector(".control-page-container").classList.toggle("move_left");
            })
        </script>
    </header>
    <?php
        $conn = mysqli_connect("localhost","root","","ecomin_site") or die ("Database Connection Fail");
    ?>