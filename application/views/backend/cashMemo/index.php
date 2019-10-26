<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <?php $this->load->view('backend/commonCss'); ?>
    <?php $this->load->view('backend/dataTableCssFile'); ?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('backend/left_navigation'); ?>

        <!-- top navigation -->
        <?php $this->load->view('backend/top_navigation'); ?>

        <!-- /top navigation -->
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
          <?php //print_r($allpromoList); ?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Promo Info <small>Merchant </small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                     <font style="font-size:15px;color:red;font-weight:bold;"><?php echo $mega; ?></font>
                    </p>
                    <div class="editHtml"></div>
                    <div >
                      <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                          <tr>
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            <th>Order Date</th>
                            <th>Tracking ID</th>
                            <th>Merchant Name</th>
                            <th>Parcel Status</th>
                            <th>Payment Status</th>
                            <th>Product Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach($AllBookingInfo as $v):
                            $id = $v->id;
                            if($v->payment_details->percel_status == '4' && $v->payment_details->payment_status == '2'){
                          ?>
                          <tr>
                            <td>
                             <input type="checkbox" class="flat" name="pcateId[]" id="table_records" value="<?php echo $v->id; ?>" >
                            </td>
                            <td><?php echo $v->upload_date; ?></td>
                            <td><?php echo $v->tracking_id; ?></td>
                            <td><?php echo $v->merchant_details->business_name; ?></td>
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
                            <td>
                              <a href="#" data-toggle="modal" data-target="#bookingView" class="btn btn-sm btn-info viewFunction" data-row-id="<?php echo $v->id ?>">
                                <i class="fa fa-eye"></i>
                              </a>
                              &nbsp; || &nbsp; 
                              <a href="#" class="btn btn-sm btn-warning editFunction" data-row-id="<?php echo $v->id; ?>">
                                <i class="fa fa-pencil-square-o"></i>
                              </a>
                            </td>
                          </tr>
                         <?php } endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end table -->
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <?php $this->load->view('backend/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- View Function -->
      <div class="modal fade bs-example-modal-lg" id="bookingView" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f37e69;color: #fff;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="myModalLabel"> Booking Information View</h4>
            </div>
            <div class="modal-body text-left viewHtml" style="color: #000;">
                      
          </div>
         </div> 
       </div>
      </div>
      <!-- end view function -->
       <?php
          $i = 1;
          foreach($AllBookingInfo as $v):
            $id = $v->id;
          ?>
      <!-- Edit Function -->
     
    <?php endforeach; ?>
      <!-- end Edit function -->
    </div>
  </div>
</div>
    <?php $this->load->view('backend/commonJs'); ?>
    <?php $this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>

   <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_3"
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
    <script>
       // View modal ajax
         $(document).on("click", ".viewFunction", function(){
          var rowId   = $(this).attr('data-row-id');
          var formURL  = "<?php echo site_url('Backend/Booking/viewFunction'); ?>";
         // alert(rowId);
          $.ajax(
          {
            url : formURL,
            type: "POST",
            data : {rowId : rowId},
            dataType : "html",
            success:function(data){
              $(".viewHtml").html(data);        
              
            }

          });
      });
      // Edit modal ajax
         $(document).on("click", ".editFunction", function(){
          var rowId   = $(this).attr('data-row-id');
          var formURL  = "<?php echo site_url('Backend/Booking/editFunction'); ?>";
         // alert(rowId);
          $.ajax(
          {
            url : formURL,
            type: "POST",
            data : {rowId : rowId},
            dataType : "html",
            success:function(data){
              $(".editHtml").html(data);        
              
            }

          });
      });
    </script>
  </body>
</html>
