<?php include 'koneksi.php'; session_start(); ?>
    <?php 
    if (isset($_POST['login'])) {
    

   $username = $_POST['username'];
   $password = $_POST['password'];

   $login = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
   $periksa = mysqli_num_rows($login);
   if ($periksa > 0) {
    $_SESSION['username'] = $username;
    header('location: index.php');      
    } else {
    echo "<script>alert('Username Atau Password Anda Salah');</script>";
    }  
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Fitur Pengecekan Pembiaayan</title>
  </head>
  <body>

  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 order-md-2">
          <img src="assets/images/IBA.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign To <strong>Mitrasoft</strong></h3>
                  <p class="mb-4">Fitur Pengecekan Informasi Pembiaayan</p>
                  <form action="" name="login" method="POST">
                </div>
                <div class="login">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" required>

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <button name="login" class="btn btn-pill text-white btn-block btn-primary">Login</button>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>