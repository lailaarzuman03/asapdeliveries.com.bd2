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
    <link rel="stylesheet" href="<?php echo base_url("resource/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/hover/bootstrap-menu-hover.css"); ?>">
	<script src="<?php echo base_url("resource/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.min.js") ?>"></script>
  </head>
  <body>   
	<?php $this->load->view('include/topBar'); ?>
	<?php $this->load->view('include/navBar'); ?>
    
    <section style="background-image: url(<?php echo base_url("resource/images/h1-parallax-2.png"); ?>);padding-top: 30px;" class="mkd-parallax-section-holder">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <h2>CONTACT US</h2>
            <p style="color: #fff;">IF you've any inquiry or a problem, we're ready TO hear FROM you.
              Send us an email here
              OR CALL us ON our customer service number- 09612 500 500

              You can also pay us a visit. Our address-
            </p>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </section>

	<?php $this->load->view('newsletter'); ?>
	<?php $this->load->view('include/footer'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("resource/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("resource/hover/parent-item-clickable.js"); ?>"></script>
    <script>
    	$('.carousel1').carousel({
			  interval: 2000
			})
    </script>
  </body>
</html>