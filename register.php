<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>


<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">User Registration</h3>
<form action="controller/register.php" method="POST">
            <div class="form-outline mb-4">
              <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
              <label class="form-label" for="typeEmailX-2">User Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="tel" name="phone" id="phone" class="form-control form-control-lg" pattern="[0-9]{10}" title="Please Enter Valid Number" required/>
              <label class="form-label" for="typeEmailX-2">Phone Number</label>
            </div>
            <div class="form-outline mb-4">
              <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="repassword" id="repassword" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
              <label class="form-label" for="typePasswordX-2">Confirm Password</label>
            </div>

           

            <button name="register" class="btn btn-primary btn-lg btn-block" id="btnregister" type="submit">Register</button>
            </form>
            <hr class="my-4">
<label for="">Already a user? <a href="login.php">Login</a></label>
           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
</body>
</html>