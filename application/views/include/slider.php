   <section style="background-image: url(<?php echo base_url("resource/images/slider/delivery.jpg"); ?>); background-size: cover; z-index: 1;width: 100%;" >
    <div class="inner-overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
                    <img src="<?php echo base_url("resource/images/logo_stoke.png"); ?>" alt="asapdeliveries.com.bd" class="custom-logo">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin: 18px;">
                  <ul class="nav navbar-nav pull-right">
                    <li><a href="<?php echo site_url('home'); ?>/#home" >Home </a></li>
                    <li><a href="#AboutUs">About Us</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <span class="signin-button">
                      <a href="#" data-toggle="modal" data-target="#login">Login</a>
                    </span>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="color: #fff;margin-top: 70px;margin-bottom: 105px;">
            <div class="animated fadeInUp" data-animation-effect="fadeInUp" data-effect-delay="100">
             <img src="<?php echo base_url("resource/images/slider/h1-slider-img-1.png"); ?>" alt="">              
            </div>
            <br><br>
            <p style="letter-spacing: 3px;" class="animated fadeInUp" data-animation-effect="fadeInUp" data-effect-delay="200">MOVING WITH US</p>
            <h1 class="animated fadeInUp" data-animation-effect="fadeInUp" data-effect-delay="300" style=" white-space: normal; color: rgb(255, 255, 255); letter-spacing: -3px; visibility: inherit; transition: none; text-align: center; line-height: 70px; border-width: 0px; margin: 0px; padding: 0px; font-weight: 700; font-size: 60px; min-height: 0px; max-height: none; opacity: 1; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); text-align: center;" >
             Super-fast and fuss-free <br>
               delivery service 
            </h1>

            <img src="<?php echo base_url("resource/images/slider/h1-slide2-separator-light.png"); ?>" alt="" class="animated fadeInUp" data-animation-effect="fadeInUp" data-effect-delay="400">

             <br> <br> <br>
              <a href="#pricing" class="btn btn-lg btn-info animated fadeInUp" data-animation-effect="fadeInUp" data-effect-delay="500">Our Price</a> &nbsp;  &nbsp;  
              <!-- Button trigger modal -->
             <button type="button" class="btn btn-lg btn-primary2 animated fadeInUp" data-toggle="modal" data-target="#register" data-animation-effect="fadeInUp" data-effect-delay="600">Register Now</button>
              <!-- Modal -->
              <div class="modal fade bs-example-modal-lg" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #f37e69">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
                    </div>
                    <form id="registerForm" method="post" action="<?php echo site_url('home/register'); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate >
                    <div class="modal-body text-left" style="color: #000;">
                     <div class="row" style="padding: 20px;">
                       <div class="col-md-6 col-sm-6 col-xs-12" style="padding-right: 20px;">
                          <div class="item form-group">
                            <label for="business_name">Business Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Enter Your Business Name" tabindex="1" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="full_name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Your Full Name" tabindex="2" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="mobile">Phone or Mobile <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="01xxxxxxxxx, 01xxxxxxxxx" tabindex="3" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="regEmaild">E-mail Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="regEmail" name="email" placeholder="Enter Your E-mail Address" tabindex="4" required="required">
                           
                            <div id="email_atart"></div>
                          </div>

                          <div class="item form-group">
                            <label for="city_id">City <span class="text-danger">*</span></label>
                            <select name="city_id" id="city_id" class="form-control" tabindex="5" required="required">
                              <option selected="selected">Select Your City</option>
                              <?php foreach ($allCity as $city): ?>
                              <option value="<?php echo $city->id; ?>"> 
                                <?php echo $city->city_name; ?>
                              </option>
                            <?php endforeach; ?>                  
                            </select>
                          </div>
                          <div class="item form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="address" id="address" cols="15" rows="3" placeholder="Your Address" tabindex="6" required="required"></textarea>
                          </div>
                       </div> 
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="item form-group">
                            <label for="facebook_url">Facebook Page URL  <span class="text-danger">*</span></label>
                            <input type="url" class="form-control" id="facebook_url" name="facebook_url" placeholder="facebook.com/asapdeliveriesbd" tabindex="7" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="client_user_name">Login userName  <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client_user_name" name="client_user_name" placeholder="Login userName" tabindex="7" required="required">
                            <div id="Cuser_name"></div>
                          </div>
                          <div class="item form-group">
                            <label for="password">Password  <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password length 6, 8" tabindex="8" required="required" data-validate-length="6,8">
                          </div>
                          <div class="item form-group">
                            <label for="password2">Confirm Password</label>
                            <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="Confirm Password">
                          </div>
                          <div class="item form-group">
                            <label for="payment_method">Payment Method  <span class="text-danger">*</span></label>
                            <select class="form-control" id="payment_method" name="payment_method" tabindex="10" required="required">
                              <option value selected="selected"> How you want to get paid ?</option>
                              <option value="2">Bank</option>
                              <option value="3">bKash</option>
                            </select>
                          </div>                          
                          <div class="item form-group">
                            <label for="payment_details">Payment Details  <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="payment_details" id="payment_details" cols="15" rows="3" placeholder="Payment Detail " tabindex="11" required="required"></textarea>
                          </div>
                       </div>
                     </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                      <button id="send" type="submit" class="btn btn-primary" tabindex="12">Register</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- end modal -->
          </div>
        </div>
      </div>
    </div>
  </section>