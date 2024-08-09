<?php
include 'config.php';
$admin = new Admin();

$clid = $_SESSION['clid'];
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

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }

    .qa-container {
      max-width: 1200px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .question {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .answer {
      margin-left: 20px;
      margin-bottom: 20px;
    }
  </style>
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





  <!-- About Start -->

  <div class="container-xxl py-5">
    <div style="display: flex;margin-left:90px">
      <form action="controller/question.php" method="POST">
        <div class="form-group">
          <h6 for="">Write down your question.</h6>
          <textarea name="question" id="questionInput" cols="" rows="" class="form-control" placeholder="Do you have any questions to ask...?" style="width: 800px;margin-bottom:20px" required></textarea>
          <button type="submit" name="send" class="btn btn-success">Submit</button>
          <span id="characterCount" style="float: right;">0</span>


        </div>
      </form>
    </div>

    <?php
    $count = 1;
    $stmt = $admin->ret("SELECT * FROM `question` INNER JOIN `client` ON client.cl_id=question.cl_id WHERE question.cl_id='$clid' ORDER BY `qa_id` DESC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $qid = $row['qa_id'];
    ?>
      <div class="container" style="margin-top: 20px;width:1200px">

        <div class="qa-container">
          <div>
            <div style="display: flex;gap:10px">
              <img src="img/about-1.jpg" class="rounded-circle" style="width: 40px;" alt="Avatar" />
              <div><b style="color: #0463FA;"><?php echo $row['cl_name'] ?></b></div>
              <div style="margin-left:700px">
                <?php echo $row['qa_date'] ?>
              </div>
            </div>
            <div class="answer" style="color: black;">Q<?php echo $count++ ?>. <span><?php echo $row['question'] ?></span></div>
          </div>
          <hr>

          <div style="overflow:scroll;height:170px">
          <?php
          $count = 1;
          $stmt2 = $admin->ret("SELECT * FROM `answer` WHERE `qa_id`='$qid'");
          $num2 = $stmt2->rowCount();
          if ($num2 > 0) {
            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
          ?>

              <div style="display: flex;gap:10px;">

                <div class="question">Answer<?php echo $count++ ?> :</div>
                <div>
                  <label for=""> <?php echo $row['qa_date'] ?></label>
                </div>
              </div>

              <div class="answer"><i class="fa fa-arrow-circle-right" style="color:green">&nbsp;</i><?php echo $row2['answer'] ?></div>
       

      <?php }
          } else { ?>
      <div class="answer">
        <h6>Not answered.....</h6>
      </div>
      </div>

    <?php }
    ?>
    <!-- Add more question and answer pairs here -->

      </div>

  </div>
<?php }
?>
</div>
<!-- About End -->







<!-- Footer Start -->
<?php
include 'footer.php';
?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<script>
  const textarea = document.getElementById('questionInput');
  const characterCount = document.getElementById('characterCount');
  const maxChars = 2000;

  textarea.addEventListener('input', function() {
    const text = textarea.value;
    const count = text.length;
    const remainingChars = maxChars - count;
    characterCount.textContent = remainingChars + ' characters remaining';

    if (remainingChars < 0) {
      textarea.value = text.slice(0, maxChars);
      characterCount.textContent = '0 characters remaining';
    }
  });
</script>


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