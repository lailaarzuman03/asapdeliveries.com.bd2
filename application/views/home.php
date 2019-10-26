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
    <link rel="stylesheet" href="<?php echo base_url("resource/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/hover/bootstrap-menu-hover.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("resource/animate/animate.min.css"); ?>">

	  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114920542-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114920542-1');
    </script>
    <!-- end -->
    <style>
      #one {
        animation-delay: 1s;
        animation-duration: 1s;
        animation-iteration-count: 1s;
      }

      #two {
        animation-delay: 2s;
      }

      #three {
        animation-delay: 3s;
      }

      #four {
        animation-delay:4s;
      }
      /* unvisited link */
      a:link {
          color: none;
          text-decoration: none;
          border:none;
      }

      /* visited link */
      a:visited {
          color: none;
          text-decoration: none;
          border:none;
      }

      /* mouse over link */
      a:hover {
          color: none;
          text-decoration: none;
          border:none;
      }

      /* selected link */
      a:active {
          color: none;
          text-decoration: none;
          border:none;
      }


/* alerts (when validation fails) */
.item .alert {
  float: left;
  margin: 0 10 0 20px;
  padding: 3px 10px;
  color: #FFF;
  border-radius: 3px 4px 4px 3px;
  background-color: #CE5454;
  max-width: 170px;
  white-space: pre;
  position: relative;
  left: -15px;
  opacity: 0;
  z-index: 1;
  transition: 0.15s ease-out; }

.item .alert::after {
  content: '';
  display: block;
  height: 0;
  width: 0;
  border-color: transparent #CE5454 transparent transparent;
  border-style: solid;
  border-width: 11px 7px;
  position: absolute;
  left: -13px;
  top: 1px; }

.item.bad .alert {
  left: 0;
  opacity: 1; }

    </style>
  </head>
  <body>   
	<?php $this->load->view('include/topBar'); ?>
	<?php $this->load->view('include/slider'); ?>
	<?php $this->load->view('aboutSection'); ?>
	<?php $this->load->view('services'); ?>
	<?php $this->load->view('works'); ?>
  <?php $this->load->view('pricing'); ?>
	<?php $this->load->view('clientSay'); ?>
	<?php $this->load->view('newsletter'); ?>
  <?php $this->load->view('include/footer'); ?>
	<?php $this->load->view('include/all_modal'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("resource/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("resource/hover/parent-item-clickable.js"); ?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url("resource/vendors/validator/validator.js"); ?>"></script>
    <script>
    	$('.carousel1').carousel({
        interval: 2000
      })

      $('.carousel').carousel({
			  interval: 2000
			})
    </script>
    <script>
      // Select all links with hashes
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });

    </script>
    <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "142945463010176", // Facebook page ID
            email: "info@asapdeliveries.com.bd", // Email
            call: "01675583010", // Call phone number
            company_logo_url: "//storage.whatshelp.io/widget/86/8640/864040d7714a93c9c585c1d13a10ac8f/28576081_152152938756095_7792442811943700803_n.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
 <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
    <script type="text/javascript">
      jQuery(document).ready(function(){
        $("#regEmail").blur(function() {
          var email_id=$("#regEmail").val();
          //alert(email_id);
          var formURL  = "<?php echo site_url('Home/email_match'); ?>";

          $.ajax({
            type: "POST",
            data: {email_id : email_id},
            dataType : "html",
            url: formURL,
            success  : function(result){
              document.getElementById("email_atart").innerHTML=result;
            }
           });
         });
       });

      jQuery(document).ready(function(){
        $("#client_user_name").blur(function() {
          var client_user_name=$("#client_user_name").val();
          //alert(email_id);
          var formURL  = "<?php echo site_url('Home/client_user_name'); ?>";

          $.ajax({
            type: "POST",
            data: {client_user_name : client_user_name},
            dataType : "html",
            url: formURL,
            success  : function(result){
              document.getElementById("Cuser_name").innerHTML=result;
            }
           });
         });
       });
  </script>
  </body>
</html>