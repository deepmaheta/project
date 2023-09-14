<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DRIVE4WARD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <?php
    include("./common/style.php");

    ?>
    <!-- Favicon -->

</head>
<body>
    <!-- Topbar Start -->
    <?php
    include("./common/header.php");

    ?>
    <!-- Search End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center   justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">service a car</h4> -->
                            <h1 class="display-1 text-white mb-md-4">World class service for your car</h1>
                            <a href="service.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book for service</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/4.jpg" alt="Image" height="853px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4">Best service for your car at Your Location</h1>
                            <a href="service.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book for service</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">01</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Drive4ward</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>Hi There! Welcome to The Drive4ward. We're excited to here. Our team is ready to help you find the perfect car for your needs. Also we provide the best Service for your car. Book Your <a href="service.php"><b>Service</b></a> Now.</p>
                </div>
            </div>
            <div class="row mt-3" style="justify-content:center">
                <div class="col-lg-5 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Car Service Anytime</h4>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                    <p class="mb-4">This offer is applicable First Service Only</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="service.php">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <!-- <h1 class="display-1 text-primary text-center">04</h1> -->
                <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <img class="img-fluid ml-n4" src="img/testimonial-1.jpg" alt="">
                            <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                        </div>
                        <h4 class="text-uppercase mb-2">Client Name</h4>
                        <i class="mb-2">Profession</i>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                    <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <img class="img-fluid ml-n4" src="img/testimonial-2.jpg" alt="">
                            <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                        </div>
                        <h4 class="text-uppercase mb-2">Client Name</h4>
                        <i class="mb-2">Profession</i>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                    <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <img class="img-fluid ml-n4" src="img/testimonial-3.jpg" alt="">
                            <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                        </div>
                        <h4 class="text-uppercase mb-2">Client Name</h4>
                        <i class="mb-2">Profession</i>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                    <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <img class="img-fluid ml-n4" src="img/testimonial-4.jpg" alt="">
                            <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                        </div>
                        <h4 class="text-uppercase mb-2">Client Name</h4>
                        <i class="mb-2">Profession</i>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Vendor Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="owl-carousel vendor-carousel">
                    <?php
                    include_once('admin/include/config.php');
                    $qry = "SELECT * FROM category";
                    $res = mysqli_query($conn, $qry);
                    $row = mysqli_fetch_row($res);

                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <div class="bg-light p-4">
                            <a href=""><img src="<?php echo 'images/category/' . $row['categoryimage']; ?>" alt="image"></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Vendor End -->

        <!-- Footer Start -->
        <?php
        include("./common/footer.php");
        ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <?php
        include("./common/script.php");
        ?>
</body>
</html>