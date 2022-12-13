<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/favicon/1.png" type="image/x-icon">
    <title>Blog Detail</title>
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
                <h1 class="uppercase font-semibold">blog detail</h1>
            </div>
            <div class="page-direction-right uppercase">
                <a href="./index.php">home</a> / <a href="./blog.php" class="font-semibold">blog detail</a>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="content-about-us-img-container  w-full">
            <img src="./assets/img/about-us.jpg" class="w-full rounded-sm" alt="">
        </div>
        <p class="my-3 font-semibold h4 my-3">ALSO THE LEAP INTO ELECTRONIC TYPESETTING, REMAINING ESSENTIALLY UNCHANGED.</p>
        <div class="text-muted blog-details-header mb-4">
            <span class="border-r px-3">25 January 2018 </span>
            <span class="border-r px-3">Posted By : <span>Admin</span></span>
            <span class="border-r px-3"><ion-icon name="heart-circle-outline"></ion-icon> 5 Hits </span>
            <span class="px-3"><ion-icon name="mail-outline"></ion-icon> 10 Comment</span>
        </div>
        <hr>
        <div class="content-para-container text-muted">
            <p class="my-4">
                Fusce scelerisque augue a viverra semper. Etiam nisi nibh, vestibulum quis augue id, imperdiet fringilla dolor. Nulla sed nisl vel nisi cursus finibus. Vivamus ut augue nec justo viverra laoreet. Nunc efficitur, arcu ac cursus gravida, lorem elit commodo urna, id viverra libero tellus non ipsum. Fusce molestie ultrices nibh feugiat pretium. Donec pulvinar arcu metus, et dapibus odio condimentum id. Quisque malesuada mauris sit amet dui feugiat, ut pretium mauris luctus. Ut aliquam, tellus nec molestie condimentum, tellus arcu dignissim quam, a gravida nunc nulla vel magna. Sed pulvinar tortor et euismod blandit. Proin accumsan orci ac nunc fermentum vehicula.
            </p>
            <p class="my-4">
                Cras quis neque urna. Pellentesque mollis, dui nec elementum elementum, ipsum quam suscipit ligula, sit amet lobortis dolor sem sed neque. Vivamus consequat est non sodales efficitur. Aliquam sodales eleifend sodales. Aliquam auctor ipsum quis nisl facilisis, at convallis mauris iaculis. Duis eleifend, magna ac convallis blandit, dui dui auctor leo, sed tincidunt nisi mauris ut nulla. Praesent porttitor dui ac turpis commodo porttitor. Integer ligula nisi, bibendum non sem at, porta condimentum dui.
            </p>
            <p class="my-4">
                Proin id eleifend diam, euismod dictum nibh. Ut ullamcorper in purus at tempor. Nullam mattis risus nec velit semper lobortis. Donec accumsan ligula fermentum, ultricies massa eget, cursus leo. Suspendisse placerat elit et lacus aliquam, ut elementum leo aliquet. Integer ornare, ipsum eu lacinia viverra, lectus ipsum scelerisque nisl, nec iaculis leo elit id arcu. Aliquam id ante elit. Donec commodo purus eget lacus pharetra, et egestas metus blandit. Quisque pellentesque porta urna, sed dictum enim viverra a.
            </p>
        </div>
        <div class="row blog-content-img-intro-container">
            <div class="col-lg-6 col-md-10 mx-auto mb-4">
                <div class="blog-content-img-intro">
                    <img src="./assets/img/1(blog-detail).jpg" alt="" class="w-full image-thumbnail">
                    <ul class="font-semibold my-4">
                        <li>1.Donec ut metus sit amet elit consectetur facilisis id vel turpis.</li>
                        <li>2.Aenean in mi eu elit mollis tincidunt.</li>
                        <li>3.Etiam blandit metus vitae purus lacinia ultricies.</li>
                        <li>4.Nunc quis nulla sagittis, faucibus neque a, tempus metus.</li>
                        <li>5.In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>6.Morbi molestie lacus blandit interdum sodales..</li>
                        <li>7.Curabitur eleifend velit molestie eleifend interdum.</li>
                        <li>8.Vestibulum fringilla tortor et lorem sagittis,</li>
                        <li>9.In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>10.Morbi molestie lacus blandit interdum sodales.</li>
                        <li>11.Curabitur eleifend velit molestie eleifend interdum.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 mx-auto">
                <div class="blog-content-img-intro">
                    <img src="./assets/img/2 (blog-detail).jpg" alt="" class="w-full image-thumbnail">
                    <div class="my-4 blog-content-img-intro-content text-muted">
                        <p>
                            Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque egestas consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc at urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis lectus. Pellentesque id dapibus justo. Nunc venenatis non odio sed luctus. Etiam sit amet elit massa.
                        </p>
                        <p class="my-3">
                            Phasellus quis lorem eros. Aliquam non tincidunt nibh. Nulla quis interdum neque. Mauris volutpat neque eu nunc ornare ullamcorper. Sed neque velit, lobortis eget tellus in, pellentesque ornare nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas rutrum nisi non nibh egestas lacinia. Cras ut tellus sit amet lacus consequat dictum nec id sapien. Ut pellentesque ac ex ut elementum. Morbi mollis volutpat neque eu volutpat.
                        </p>
                        <p>
                            Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis erat tempor quis. Vestibulum eu vestibulum ex. Maecenas luctus orci sed blandit fermentum. In vulputate eu metus a faucibus. Suspendisse feugiat condimentum congue.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="">
            <div class="review-items-container border-b py-3">
                <div class="row">
                    <div class="col-lg-1 col-sm-6 mx-auto mb-3 review-avator-container">
                        <img src="./assets/img/avtor/avtar-designer-1.jpg" class="rounded-full" alt="avtar-designer-1">
                    </div>
                    <div class="col-lg-11 col-sm-12 review-content-container">
                        <div class="reviewer-name flex">
                            <h1 class="uppercase font-bold me-5">MARK JECNO</h1>
                            <span>( 12 Jannuary 2018 At 1:30AM )</span>
                        </div>
                        <div class="reviewer-content mt-3">
                            <p class="text-muted">
                                Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis erat tempor quis. Vestibulum eu vestibulum ex.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-items-container border-b py-3">
                <div class="row">
                    <div class="col-lg-1 col-sm-6 mx-auto mb-3 review-avator-container">
                        <img src="./assets/img/avtor/avtar-designer-1.jpg" class="rounded-full" alt="avtar-designer-1">
                    </div>
                    <div class="col-lg-11 col-sm-12 review-content-container">
                        <div class="reviewer-name flex">
                            <h1 class="uppercase font-bold me-5">MARK JECNO</h1>
                            <span>( 12 Jannuary 2018 At 1:30AM )</span>
                        </div>
                        <div class="reviewer-content mt-3">
                            <p class="text-muted">
                                Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis erat tempor quis. Vestibulum eu vestibulum ex.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-items-container border-b py-3">
                <div class="row">
                    <div class="col-lg-1 col-sm-6 mx-auto mb-3 review-avator-container">
                        <img src="./assets/img/avtor/avtar-designer-1.jpg" class="rounded-full" alt="avtar-designer-1">
                    </div>
                    <div class="col-lg-11 col-sm-12 review-content-container">
                        <div class="reviewer-name flex">
                            <h1 class="uppercase font-bold me-5">MARK JECNO</h1>
                            <span>( 12 Jannuary 2018 At 1:30AM )</span>
                        </div>
                        <div class="reviewer-content mt-3">
                            <p class="text-muted">
                                Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis erat tempor quis. Vestibulum eu vestibulum ex.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-detail-leave-comment-container">
            <form action="">
                <div class="form-group my-4">
                    <label for="name" class=" font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg rounded-0" placeholder="Enter Your Name">
                </div>
                <div class="form-group my-4">
                    <label for="email" class=" font-bold mb-2">Name</label>
                    <input type="text" name="email" id="email" class="form-control form-control-lg rounded-0" placeholder="Email">
                </div>
                <div class="form-group my-4">
                    <label for="comment" class=" font-bold mb-2">Comment</label>
                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control rounded-0 resize-y" placeholder="Write Your Comment"></textarea>
                </div>
                <button type="submit" class="btn btn-lg uppercase rounded-0 font-bold">Post comment</button>
            </form>
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