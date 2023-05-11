<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 <title>Login &mdash; Prodplan</title>

 <!-- General CSS Files -->
 <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
 <!-- CSS Libraries -->

 <!-- Template CSS -->
 <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
 <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

</head>

<body>
 <div id="app">
  <section class="section">
   <div class="d-flex flex-wrap align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
     <div class="p-4 m-3">
      <img src="<?=base_url()?>/template/assets/img/unsplash/unipi.png" alt="logo" width="80"
       class="shadow-light rounded-circle mb-5 mt-2">
      <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">PRODLAP</span></h4>
      <p class="text-muted">Aplikasi ini guna memenuhi tugas PBO yang diberikan</p>

      <?php if(session()->getFlashdata('error')) :?>
      <div class="alert alert-danger alert-dismissible show fade">
       <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Error !</b>
        <?=session()->getFlashdata('error')?>
       </div>
      </div>
      <?php endif; ?>

      <form method="POST" action="<?=site_url('auth/loginProcess')?>" class="needs-validation" novalidate="">
       <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
        <div class="invalid-feedback">
         Please fill in your email
        </div>
       </div>

       <div class="form-group">
        <div class="d-block">
         <label for="password" class="control-label">Password</label>
        </div>
        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
        <div class="invalid-feedback">
         please fill in your password
        </div>
       </div>

       <div class="form-group">
        <div class="custom-control custom-checkbox">
         <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
         <label class="custom-control-label" for="remember-me">Remember Me</label>
        </div>
       </div>

       <div class="form-group text-right">
        <a href="" class="float-left mt-3">
         Forgot Password?
        </a>
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
         Login
        </button>
       </div>

      </form>
      <div class="text-center mt-5 text-small">
       Copyright &copy; Kelompok 4 Tugas PBO 💙 by Devagil Code
       <div class="mt-2">
        <a href="#">Privacy Policy</a>
        <div class="bullet"></div>
        <a href="#">Terms of Service</a>
       </div>
      </div>
     </div>
    </div>
    <div
     class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
     data-background="<?=base_url()?>/template/assets/img/unsplash/login-bg.jpg">
     <div class="absolute-bottom-left index-2">
      <div class="text-light p-5 pb-2">
       <div class="mb-5 pb-3">
        <h1 class="mb-2 display-4 font-weight-bold">Kelompok 4|PBO</h1>
        <h5 class="font-weight-normal text-muted-transparent">Universitas Insan Pembangunan Indonesia</h5>
       </div>
      </div>
     </div>
  </section>
 </div>

 <!-- General JS Scripts -->
 <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
 <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
 <!-- JS Libraies -->

 <!-- Template JS File -->

 <!-- Page Specific JS File -->
</body>

</html>