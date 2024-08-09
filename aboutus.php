<?php
include 'config.php';
$admin = new Admin();
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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->





    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>

                    <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>Center Aligned Paragraphs</title>
        <style>
            .center {
                text-align: center;
                font-size: medium;
            }
        </style>
    </head>

    <body>
        <div>
        <h2 style="text-align: center;">Welcome to Initial Care!</h2>
        </div>
        <div style="margin-left: 230px;">
            
            <div class="col-md-10">
                <p>

                    At Initial Care, we are passionate about equipping individuals with the knowledge and skills to save lives. Our mission is to make first aid training accessible and empowering for everyone.

                    With years of experience in the field of first aid, we understand the critical role that immediate response plays. Our team of certified instructors is dedicated to providing comprehensive and practical training to individuals from all walks of life.

                    We believe that everyone should have the ability to respond confidently and effectively in emergencies. Our courses are designed to be engaging, interactive, and tailored to meet the unique needs of our participants. Whether you are seeking basic first aid training or advanced life support techniques, we have a wide range of courses to suit your requirements.
                </p>

                <p> What sets us apart is our commitment to quality education and hands-on learning. We combine theoretical knowledge with practical exercises, allowing participants to gain confidence in applying their skills in real-life scenarios. Our state-of-the-art training facilities and up-to-date resources ensure that you receive the most current and evidence-based training available.
                    Our instructors are not only highly qualified but also passionate about sharing their expertise. They are experienced professionals who have worked in various medical and emergency response fields, bringing real-world experiences into the classroom. They are patient, supportive, and dedicated to helping you succeed in your journey to becoming a first aid responder.
                    Whether you are looking to enhance your professional skills, meet workplace requirements, or simply want to be prepared for emergencies in your daily life, we are here to support you. Join us at Initial Care and embark on a rewarding journey of acquiring life-saving knowledge that will make a difference when it matters most.
                    Stay prepared. Save lives.
                </p>

            </div>
        </div>
    </body>

    </html>


    <!-- About End -->







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