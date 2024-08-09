<?php
include 'config.php';
$admin = new Admin();

$bookid = $_GET['bookid'];

$stmt = $admin->ret("SELECT * FROM `booking` INNER JOIN `training` ON training.trng_id=booking.trng_id WHERE `book_id`='$bookid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt2 = $admin->ret("SELECT * FROM `certificate` WHERE `book_id`='$bookid'");
$num2=$stmt2->rowCount();
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="certificate.css">
</head>

<body class="d-flex justify-content-center">


<?php 
if($num2>0){ ?>




    <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>

            <div class="certificate-body" style="margin-top: 80px;">

                <h2 class="certificate-title"><strong>InitialCare</strong></h2>
                <h1>Certificate of Completion</h1>
                <p class="student-name"><?php echo $row['name'] ?></p>
                <div class="certificate-content">
                    <div class="about-certificate">

                        <p style="font-size: large;">
                            has completed training on <i><?php echo $row['trng_title'] ?></i> on <b><?php echo $row2['cert_date'] ?></b>
                        </p>
                    </div>

                </div>
                <div class="certificate-footer text-muted d-flex justify-content-center">
                    <div class="row">
                        <div class="col">
                            <?php
                            $stmt5 = $admin->ret("SELECT * FROM `assign_booking` INNER JOIN `trainer` ON trainer.tr_id=assign_booking.tr_id WHERE `book_id`='$bookid'");
                            $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <p style="font-size: large;">Trainer: <b><span style="font-size: 23px;"><?php echo $row5['tr_name'] ?></span></b></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } else { ?>
        <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>

            <div class="certificate-body" style="margin-top: 80px;">

                <h2 class="certificate-title"><strong>InitialCare</strong></h2>
                
                <div class="certificate-content">
                    <div class="about-certificate">

                        <h3>Your certifcate is not generated yet!!</h3>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <?php }
?>

</body>

</html>