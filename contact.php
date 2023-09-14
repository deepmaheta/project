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
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="contact_add.php" method="post">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="name" class="form-control p-4" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" name="email" class="form-control p-4" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control p-4" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" name="message" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-1">
                        <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 420px;">
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


    <?php
    include("./common/script.php");

?>
</body>

</html>