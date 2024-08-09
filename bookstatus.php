<?php

include 'config.php';
$admin = new Admin();

$clid = $_SESSION['clid'];

$bookid = $_GET['bookid'];
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="waitpage.css">
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>

                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- <div class="row g-5"> -->


            <?php
            $stmt = $admin->ret("SELECT * FROM `booking` WHERE `book_id`='$bookid'");
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['book_status'] == 'pending') { ?>
                <div class="loading">
                    <p>Please wait</p>
                    <span><i></i><i></i></span>
                </div>


                <div class="vh-100 d-flex justify-content-center align-items-center" style="margin-top: -180px;margin-bottom:-100px">
                    <div class="col-md-4">
                        <div class="border border-3 border-success"></div>
                        <div class="card  bg-white shadow p-5">
                            <div class="mb-4 text-center">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg> -->
                            </div>
                            <div class="text-center">
                                <h1>Please wait!</h1>
                                <p>Until your appointment gets response.</p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($row['book_status'] == 'accepted') { ?>
                <div>
                    <h2 class="text-dark">Booking Status</h2>
                </div>
                <div>
                    <table class="table text-dark">
                        <thead>
                            <tr>
                                <th>
                                    Slno
                                </th>
                                <th>
                                    Booking Date
                                </th>
                                <th>
                                    Assigned Trainer
                                </th>
                                <th>
                                    Booking Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $stmt3 = $admin->ret("SELECT * FROM `booking` WHERE `cl_id`='$clid'");
                            while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                $bookid = $row3['book_id'];
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $count++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row3['book_date'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        $stmt4 = $admin->ret("SELECT * FROM `assign_booking` INNER JOIN `trainer` ON trainer.tr_id=assign_booking.tr_id WHERE `book_id`='$bookid'");
                                        $num4 = $stmt4->rowCount();
                                        $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                                        if ($num4 == 0) { ?>
                                        <h6 class="text-danger">Not assigned yet!!</h6>
                                        <?php } else 
    
 
                                        if ($row3['book_status'] == 'accepted') { ?>
                                            <h6 class="text-dark"><?php echo $row4['tr_name'] ?></h6>
                                        <?php } else if ($row3['book_status'] == 'rejected' || $row3['book_status'] == 'pending') { ?>
                                            <h6 class="text-light">--------</h6>
                                        <?php }
                                        ?>


                                    </td>
                                    <td>
                                        <?php
                                        if ($row3['book_status'] == 'accepted') { ?>
                                            <button class="btn btn-success">Accepted</button>
                                           <a href="viewcertificate.php?bookid=<?php echo $bookid ?>">view certificate</a>
                                        <?php } else if ($row3['book_status'] == 'rejected') { ?>
                                            <button class="btn btn-danger">Rejected</button>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>

                    </table>
                </div>
            <?php }

            ?>




            <!-- </div> -->
        </div>
    </div>
    <!-- Appointment End -->


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