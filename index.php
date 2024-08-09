<?php
include 'config.php';
$admin = new Admin();


$stmt5=$admin->ret("SELECT * FROM `trainer`");
$count=$stmt5->rowCount();

$stmt6=$admin->ret("SELECT * FROM `training`");
$tngcount=$stmt6->rowCount();

$stmt7=$admin->ret("SELECT * FROM `client`");
$clcount=$stmt7->rowCount();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->





    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Empower , Educate , Save : Your Path to First Aid Mastery!</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php echo $count ?></h2>
                            <p class="text-light mb-0">Expert Trainers</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php echo $tngcount ?></h2>
                            <p class="text-light mb-0">Trainings</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php echo $clcount ?></h2>
                            <p class="text-light mb-0">Total Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/cpr front3.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">CPR</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/lifegaurding2.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Life Gaurding</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/basic first aid3.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Basic First Aid</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/swimming safety.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Swimming + Water Safety</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/babysitting.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Baby Sitting & Child Care</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/AED.jpg" alt="" style="width: 800px;height:800px">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">AED</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/aboutus1.webp" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/basic first aid4.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <p>At Initial Care, we are passionate about equipping individuals with the knowledge and skills to save lives.Our team of certified instructors is dedicated to providing comprehensive and practical training to individuals from all walks of life.</p>
                    <p class="mb-4">What sets us apart is our commitment to quality education and hands-on learning.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Quality training</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified trainers</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Free of Charge</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="aboutus.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">Learning first aid is like unblocking a superpower within yourself. At initial care we provide the trainings that meets the OSHA first aid standard,as well as the latest CPR and first aid guidelines, and can be customized to meet the specific needs of your industry.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Trainers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->








    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Feedback</p>
                <h1>What Say Our Clients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                $stmt3 = $admin->ret("SELECT * FROM `feedback` INNER JOIN `client` ON client.cl_id=feedback.cl_id");
                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="testimonial-item text-center">
                       
                        <div class="testimonial-text rounded text-center p-4">
                            <p><?php echo $row3['feed'] ?></p>
                            <h5 class="mb-1"><?php echo $row3['cl_name'] ?></h5>
                           
                        </div>
                    </div>
                <?php }
                ?>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div style="padding: 50px 100px;">
        <div>
            <h3>Write down your feedback.</h3>
        </div>
        <div style="margin-top: 14px;">
            <form action="controller/feedback.php" method="POST">
                <textarea name="feed" id="" cols="10" rows="5" class="form-control" placeholder="Feedback....." required></textarea>
                <button class="btn btn-success" name="send" style="margin-top: 10px;">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>