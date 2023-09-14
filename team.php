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
        <h1 class="display-3 text-uppercase text-white mb-3">The Team</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">The Team</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <!-- Team Start -->
    <div class="container-fluid py-5">
            <div class="container py-5">
                <!-- <h1 class="display-1 text-primary text-center">03</h1> -->
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