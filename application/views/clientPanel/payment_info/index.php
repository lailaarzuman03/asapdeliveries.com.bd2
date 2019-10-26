<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Booking | ASAP Deliveries </title>

     <?php $this->load->view('backend/commonCss'); ?>
    <?php $this->load->view('backend/dataTableCssFile'); ?>
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
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New: <small> Bulk Orders</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <?php if (!empty($mega)) { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong> <?php echo $mega; ?></strong>
                    </div><br>
                    <?php } ?>                    
                    <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                          <tr align="center">
                            <td colspan="13" align="center" class="text-center">
                              <label for="single_cal3" class="col-md-1 col-md-offset-2" style="margin-top: 5px;">From Date</label>                              
                              <input type="text" name="from_date" id="single_cal3" class="date-picker form-control col-md-4" placeholder="From Date" aria-describedby="inputSuccess2Status4">
                              
                              <label for="single_cal4" class="col-md-1" style="margin-top: 5px;">To Date</label> 
                              <input type="text" name="to_date" id="single_cal4" class="date-picker form-control col-md-4" placeholder="To Date" aria-describedby="inputSuccess2Status4">
                             
                              <button type="button" name="search" id="search" class="col-md-1 btn btn-primary btn-sm" style="margin-left: 15px;height: 35px;">Find</button>
                            </td>
                          </tr>
                          <tr>
                            <th>#</th>
                            <th>Order Date</th>
                            <th>Tracking ID</th>
                            <th>Recepient Name</th>
                            <th>Recepient Address</th>
                            <th>Recepient Number </th>
                            <th>Parcel Status</th>
                            <th>Payment Status</th>
                            <th>Product Price</th>
                            <th>Collected Amount </th>
                            <th>Shipping Cost</th>
                            <th>COD</th>
                            <th>Comments</th>
                          </tr>
                        </thead>
                        <tbody id="searchResultView">
                         
                          <?php
                          $i = 1;
                          foreach($AllBookingInfo as $v):
                            $id = $v->id;
                            if($v->payment_details->percel_status == "4" || $v->payment_details->percel_status == "3"){
                                if ($v->payment_details->payment_status == "2") {
                          ?>
                          <tr>
                            <td>
                             <?php echo $i++; ?>
                            </td>
                            <td><?php echo $v->upload_date; ?></td>
                            <td><?php echo $v->tracking_id; ?></td>
                            <td><?php echo $v->recepient_name; ?></td>
                            <td><?php echo $v->recepient_address; ?></td>
                            <td><?php echo $v->recepient_number; ?></td>
                            <td>
                               <?php if($v->payment_details->percel_status == "1") { ?>
                                <button class="btn btn-warning btn-sm" type="button"> Pending </button> 
                                <?php } ?> 
                                <?php if($v->payment_details->percel_status == "2") { ?>
                                <button class="btn btn-primary btn-sm" type="button"> Running </button> 
                                <?php } ?>
                                <?php if($v->payment_details->percel_status == "3") { ?>
                                <button class="btn btn-danger btn-sm" type="button"> Return </button> 
                                <?php } if($v->payment_details->percel_status == "4") { ?>
                                <button class="btn btn-success btn-sm" type="button"> Completed </button> 
                                <?php } ?>
                              </td>
                            <td>
                               <?php if($v->payment_details->payment_status == "1") { ?>
                              <button class="btn btn-danger btn-sm" type="button"> Unpaid </button> 
                              <?php } ?> 
                              <?php if($v->payment_details->payment_status == "2") { ?>
                              <button class="btn btn-success btn-sm" type="button"> Paid </button> 
                              <?php } ?>
                            </td>
                            <td><?php echo $v->product_price; ?></td>
                            <td><?php echo $v->product_price; ?></td>
                            <td><?php echo $v->shipping_cost; ?></td>
                            <td><?php echo $v->cod; ?></td>
                            <td><?php echo $v->instructions; ?></td>
                          </tr>
                         <?php } } endforeach; ?>
                        </tbody>
                      </table>
                    </div>
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

      <?php $this->load->view('backend/commonJs'); ?>
    <?php $this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>
    <script>
      jQuery(document).ready(function(){
        $("#search").click(function() {
          var from_date =  $("input[name*='from_date']").val();
          var to_date =  $("input[name*='to_date']").val();
          //alert(to_date);
          var formURL  = "<?php echo site_url('clientPanel/Payment_info/search'); ?>";

          $.ajax({
            type: "POST",
            data: {from_date : from_date, to_date : to_date},
            dataType : "html",
            url: formURL,
            success  : function(result){
              document.getElementById("searchResultView").innerHTML=result;
            }
           });
         });
       });
    </script>
    <script>
      $(document).ready(function() {
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
  </body>
</html>
