<?php
$admin=new Admin();
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>InitialCare</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            
            <a href="articles.php" class="nav-item nav-link">Articles</a>
            <?php
            if (!isset($_SESSION['clid'])) { ?>
                <a href="login.php" class="nav-item nav-link">Q&A</a>
            <?php } else { ?>
                <a href="faq.php" class="nav-item nav-link">Q&A</a>
            <?php }
            ?>


            <a href="trainer.php" class="nav-item nav-link">Trainers</a>
            <a href="trainings.php" class="nav-item nav-link">Trainings</a>
            <?php
            if (!isset($_SESSION['clid'])) { ?>
<a href="login.php" class="nav-item nav-link">Status</a>
            <?php } else { ?>
                <a href="bookingstatus.php" class="nav-item nav-link">Status</a>
        
            
         <?php } ?>  
          
         <?php
            if (!isset($_SESSION['clid'])) { ?>
            <div class="dropdown show">
                <a class="nav-item nav-link" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="login.php">User Login</a>
                    <a class="dropdown-item" href="trainer/login.php">Trainer Login</a>

                </div>
            </div>
            
            <?php } else { ?>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
           <?php } ?>


        </div>
        <?php
            if (!isset($_SESSION['clid'])) { ?>

        <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        <?php } else { ?>
            <a href="appointment.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
            <?php } ?>
    </div>
</nav>