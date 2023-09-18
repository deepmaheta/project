<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DRIVE4WARD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <?php
    include("./common/style.php");
    ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php
    include("./common/header.php");
    ?>
    <!-- Search End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <?php
    if (isset($_SESSION['serviceaddstatus']) && $_SESSION['serviceaddstatus']) {
    ?>
        <div style="display: flex; justify-content: center;">
            <h1>your service request is accepted!</h1>
        </div>
    <?php
        $_SESSION['serviceaddstatus'] = false;
    }
    ?>
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
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
    <section>
        <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->

            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong">
                <div class="p-5 bg-image" style="background-image: url('img/bg.jpg'), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
            background-repeat:no-repeat;
            height: auto; 
            background-position:center;
            background-blend-mode: overlay;
            width: auto; ">
                    <div class="card-body py-5 px-md-5">

                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="fw-bold mb-5" style="color: white;" font="size:70px" ;>Book Your Service Now</h2>
                                <form method="post" action="service_process.php">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" required name="firstnm" id="form3Example1" class="form-control" placeholder="First name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" required name="lastnm" id="form3Example2" class="form-control" placeholder="Last Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">

                                                <input type="date" name="date" id="form3Example2" class="form-control" required placeholder="Contact Number" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="time" name="time" id="form3Example2" class="form-control" required placeholder="Contact Number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="email" required name="email" id="form3Example1" class="form-control" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="number" required id="form3Example2" class="form-control" placeholder="Contact Number" />
                                            </div>
                                            <div class="form-outline">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea name="address" required id="form3Example4" class="form-control" placeholder="Address"></textarea>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="modelcar" required id="form3Example3" class="form-control " placeholder="Ex : Range Rover SVR" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <select name="servicetype" required id="servicedropdown" class="form-control">
                                            <option value="" disabled selected>Select service type</option>
                                            <option value="Full Service">Full Service</option>
                                            <option value="Parts service">Parts service</option>
                                            <option value="wiring service">wiring service</option>
                                            <option value="Auto Repairing">Auto Repairing</option>
                                            <option value="Auto Painting">Auto Painting</option>
                                            <option value="Auto Cleaning">Auto Cleaning</option>
                                        </select>
                                        <!-- <label class="form-label" for="servicedropdown">Service type</label> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Book Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Design Block -->
    </section>



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