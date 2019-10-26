<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title> <?php echo $page_title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/css/custom.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/css/menuCss.css"); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url("resource/css/multiStepForm.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/hover/bootstrap-menu-hover.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/animate/animate.min.css"); ?>">
    <script src="<?php echo base_url("resource/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.min.js") ?>"></script>   
  </head>
  <body>   
  <?php //$this->load->view('include/topBar'); ?>
  <?php $this->load->view('include/navBar'); ?> 

  <section class="top-30" style="background-image: url(<?php echo base_url("resource/images/h1-parallax-2.png"); ?>);background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12 text-center col-lg-offset-4 col-md-offsert-4 col-sm-offset-2 well" >
          <img src="<?php echo base_url("resource/images/logo_stoke.png"); ?>" alt="asapdeliveries.com.bd" class="img-resonsive" style="width: 25%;">
            <br><br>
            <h4 class="modal-title text-center" id="myModalLabel" style="color: #f05034;">Welcome to ASAP Deliveries Portal</h4>
            <br><br>
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('login/clientAuth'); ?>">
                <div class="row">
                  <div class="col-sm-12 col-xs-12 text-center">           
                    <div class="form-group">
                      <div class="form-group has-feedback">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="far fa-user"></i></span>
                          <input type="text" class="form-control" id="client_user_name" name="client_user_name" placeholder="Client Name">
                        </div> 
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group has-feedback">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">              
                  <div class="col-sm-5 col-xs-12 text-center col-sm-offset-1">
                     <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" style="color: #f1644b;text-decoration: none;font-weight: bold;">Forgot Password ?</a> 
                  </div>
                  <div class="col-sm-5 col-xs-12 text-center">
                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary2"> <i class="fas fa-sign-in-alt"></i> Log in</button>               
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-12 col-xs-12 text-center">
                    <div class="log-social">         
                      <a title="" target="_blank" href="#"> <i class="fab fa-twitter log-twitter "></i> </a>
                      <a title="" target="_blank" href="#"><i class="fab fa-facebook-f facebook1"></i> </a>
                      <a title="" target="_blank" href="#"><i class="fab fa-skype skype1"></i> </a>
                      <a title="" target="_blank" href="#"><i class="fab fa-youtube youtube1"></i> </a>
                    </div>
                  </div>
                </div>            
              </form>
            
        </div>
      </div>
    </div>
  </section>
  <?php $this->load->view('newsletter'); ?>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/all_modal'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("resource/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("resource/hover/parent-item-clickable.js"); ?>"></script>
    <script>
      $('.carousel1').carousel({
        interval: 2000
      })

      $('.carousel').carousel({
        interval: 2000
      })
    </script>
  </body>
</html>