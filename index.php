<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
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
                    <p>Hi There! Welcome to Drive4ward. We're excited to here. Our team is ready to help you find the perfect car for your needs. Also we provide the best Service for your car. Book Your <a href="service.php"> Service </a> Now.</p>
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


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">02</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-cogs text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Auto Repairing</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-spray-can text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Auto Painting</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-pump-soap text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Auto Cleaning</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                    <p class="mb-4">This offer is applicable for sunday only</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="service.php">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <!-- Rent A Car End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="display-1 text-primary text-center">03</h1>
                <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
                <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                    <div class="team-item">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="position-relative py-4">
                            <h4 class="text-uppercase">Deep Maheta</h4>
                            <p class="m-0">Owner</p>
                            <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="position-relative py-4">
                            <h4 class="text-uppercase">Dev Joshipura</h4>
                            <p class="m-0">Partner</p>
                            <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="position-relative py-4">
                            <h4 class="text-uppercase">Milan Bharadva</h4>
                            <p class="m-0">Partner</p>
                            <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="position-relative py-4">
                            <h4 class="text-uppercase">Naman Vadhiya</h4>
                            <p class="m-0">Partner</p>
                            <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Banner Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row mx-0">
                    <div class="col-lg-12 px-0">
                        <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                            <div class="text-left">
                                <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                                <p class="mb-4">Want new car click here to see.</p>
                                <a class="btn btn-primary py-2 px-4" href="detail.php">View Cars</a>
                            </div>
                            <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="display-1 text-primary text-center">04</h1>
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


        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-1 text-primary text-center">05</h1>
                <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
                <div class="row">
                    <div class="col-lg-7 mb-2">
                        <div class="contact-form bg-light mb-4" style="padding: 30px;">
                            <form>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control p-4" placeholder="Your Name" required="required">
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Subject" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-1">
                        <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Head Office</h5>
                                    <p>Mavdi main road, rajkot</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Branch Office</h5>
                                    <p>krishna park , rajkot</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Customer Service</h5>
                                    <p>info@drive4ward.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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