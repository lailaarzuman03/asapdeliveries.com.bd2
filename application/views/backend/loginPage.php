<?php
    @session_start();
    if ($this->session->userData('ADMIN_NAME')) {
      redirect('dashboard');
    }
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BRTC SOFTWARE |Login Page </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("resource"); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("resource/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("resource"); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url("resource"); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("resource"); ?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo site_url('adminLogin'); ?>" method="post" enctype="multipart/form-data">
              <h1>Login Form</h1>
              <?php if (!empty($msg)): ?>
                <span style="font-size:14px;color:red;padding:5px;"><?php echo $msg; ?></span>
                <br>&nbsp;
              <?php endif; ?>
              <div>
                <input type="text" class="form-control" placeholder="User Name" name="adminname" id="adminname"  required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> VegasTechi</h1>
                  <p>©2017 All Rights Reserved. vegasTechi.com</p>
                </div>
              </div>
            </form>
          </section>
        </div>
				     <!--  -->
      </div>
    </div>
  </body>
</html>
