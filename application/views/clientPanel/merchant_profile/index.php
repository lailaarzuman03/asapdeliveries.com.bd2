<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Merchant Profile | ASAP Deliveries </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("resource/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("resource/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("resource/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url("resource/vendors/iCheck/skins/flat/green.css"); ?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url("resource/vendors/google-code-prettify/bin/prettify.min.css"); ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url("resource/vendors/select2/dist/css/select2.min.css"); ?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url("resource/vendors/switchery/dist/switchery.min.css"); ?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url("resource/vendors/starrr/dist/starrr.css"); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url("resource/vendors/bootstrap-daterangepicker/daterangepicker.css"); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("resource/build/css/custom.min.css"); ?>" rel="stylesheet">
    <style>
      .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-shadow: inset 0 6px 1px rgba(0,0,0,.1);
    }
    </style>
  </head>

  <body>
    <?php $this->load->view('clientPanel/top_navigation'); ?>
    <div class="container body" style="background-color: #fff;">
      <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="padding: 0px;margin: 0px;">
              <div class="col-md-12 col-xs-12 well">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Merchant Profile <small>DETAILS</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="bg-success text-center" style="padding: 10px;"><?php echo $mega; ?></p> 
                    <form method="post" action="<?php echo site_url('merchant_profile/update'); ?>"  class="form-horizontal form-label-left" novalidate >
                      <input type="hidden" name="id" value="<?php echo $ClientDetails->id; ?>">
                     <div class="row" style="padding: 20px;">
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="item form-group">
                            <label for="business_name">Business Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control col-md-7 col-xs-12" id="business_name" name="business_name" placeholder="Enter Your Business Name" tabindex="1" value="<?php echo $ClientDetails->business_name; ?>" data-validate-length-range="6" data-validate-words="1" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="full_name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Your Full Name" tabindex="2" value="<?php echo $ClientDetails->full_name; ?>" data-validate-length-range="6" data-validate-words="2" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="mobile">Phone or Mobile <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="01xxxxxxxxx, 01xxxxxxxxx" tabindex="3" value="<?php echo $ClientDetails->mobile; ?>" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="email">E-mail Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your E-mail Address" tabindex="4" value="<?php echo $ClientDetails->email; ?>" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="city_id">City <span class="text-danger">*</span></label>
                            <select name="city_id" id="city_id" class="form-control" tabindex="5" required="required">
                              <option>Select Your City</option>
                              <?php foreach ($allCity as $city): ?>
                              <option value="<?php echo $city->id; ?>" <?php if($ClientDetails->city_id == $city->id) { ?>  selected="selected" <?php } ?> > 
                                <?php echo $city->city_name; ?>
                              </option>
                            <?php endforeach; ?>                           
                            </select>
                          </div>
                          <div class="item form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="address" id="address" cols="15" rows="3" placeholder="Your Address" tabindex="6" required="required"><?php echo $ClientDetails->address; ?></textarea>
                          </div>
                       </div> 
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="item form-group">
                            <label for="facebook_url">Facebook Page URL  <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="facebook.com/asapdeliveriesbd" tabindex="7" value="<?php echo $ClientDetails->facebook_url; ?>" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="client_user_name">Login userName  <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client_user_name" name="client_user_name" placeholder="Login userName" tabindex="7" value="<?php echo $ClientDetails->client_user_name; ?>" disabled="disabled" required="required">
                          </div>
                          <div class="item form-group">
                            <label for="password">Change Password  <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password length 6, 8" tabindex="8" required="required" data-validate-length="6,8">
                          </div>
                          <div class="item form-group">
                            <label for="password2">Confirm Password</label>
                            <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="Confirm Password">
                          </div>
                          <div class="item form-group">
                            <label for="payment_method">Payment Method  <span class="text-danger">*</span></label>
                            <select class="form-control" id="select" name="payment_method" tabindex="10">
                              <option value> How you want to get paid ?</option>                              
                              <option value="2" <?php if($ClientDetails->payment_method == 2) { ?>  selected="selected" <?php } ?>>Bank</option>
                              <option value="3" <?php if($ClientDetails->payment_method == 3) { ?>  selected="selected" <?php } ?>>bKash</option>
                            </select>
                          </div>                          
                          <div class="item form-group">
                            <label for="payment_details">Payment Details  <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="payment_details" id="payment_details" cols="15" rows="3" placeholder="Payment Detail " tabindex="11" required="required"><?php echo $ClientDetails->payment_details; ?></textarea>
                          </div>
                       </div>
                     </div>                   
                      <div class="row">
                        <div class="col-md-12 col-xs-12">                        
                            <div class="ln_solid"></div>                          
                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <a href="<?php echo site_url('CDashboard'); ?>" class="btn btn-primary">Cancel</a>
                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>
                        </div>
                      </div>
                    </form>
                     
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <footer style="margin-left: 0px;">
          <div class="text-center">
           Globallytec © 2018 Globallytec.com. - All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php $this->load->view('clientPanel/othersScript'); ?>
  </body>
</html>
