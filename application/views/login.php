<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url('images/') ?>logo.ico">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>SI</b> PPDB <b>2022</b></a><br>
      <img height="150px" src="<?php echo base_url('images/logo1.png') ?>">
    </div><!-- /.login-logo -->
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg" style="text-align: center; font-size: 18px;"><b>S</b>istem <b>I</b>nformasi <b>PPDB</b> <br>

          Silahkan login</p>
        <!-- flash data message -->
        <?php echo $this->session->flashdata('pesan') ?>

        <form class="user" method="POST" action="<?php echo base_url('Auth'); ?>">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="look" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-eye-slash" id="togglePassword"></span>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a href="<?php echo base_url('Formulir') ?>" class="btn btn-primary btn-block">Pendaftaran</a>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <input type="submit" class="btn btn-success btn-block" value="Login">
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <div style="text-align:center; color:grey;"><br>&copy; &nbsp;Support by STMIK MARDIRA INDONESIA 2022 <br>
    <p style="text-align:center; color:grey; opacity: 70%;">Team Development Rizky & Falih</p>

  </div>
  <script>
    $(document).ready(function() {
      window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
          $(this).remove();
        });
      }, 4000);
    });
  </script>
  <!-- show/hide Password input -->
  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#look");

    togglePassword.addEventListener("click", function() {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });
  </script>

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

</body>

</html>