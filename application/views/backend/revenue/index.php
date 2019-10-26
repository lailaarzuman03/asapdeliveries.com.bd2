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
                    <div class="table-responsive">
                      <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
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
                            <th>Payment Date</th>
                            <th>Invoice No</th>
                            <th align="right">Shipping Charge</th>
                            <th align="right">COD</th>
                            <th align="right">Total</th>
                          </tr>
                        </thead>
                        <tbody id="searchResultView">
                          <?php
                          $i = 1;
                          foreach($AllinvoiceInfo as $v):
                            $id = $v->id;
                           
                          ?>
                          <tr>
                            <td>
                             <?php echo $i++; ?>
                            </td>
                            <td><?php echo $v->payment_date; ?></td>
                            <td>
                              <a target="_blank" href="<?php echo site_url('Backend/Revenue/viewFunction/'.$v->id) ?>" style="color: #337ab7;font-weight: bold;">
                                <?php echo $v->invoice_no; ?>
                                </a>
                            </td>
                            <td align="right"><?php echo $v->total_shipping_cost; ?></td>
                            <td align="right"><?php echo $v->total_cod; ?></td>
                            <td align="right">                      
                               <?php echo $v->total_shipping_cost + $v->total_cod; ?>                             
                            </td>                            
                          </tr>
                         <?php  endforeach; ?>
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
    
    </div>
  </div>
</div>
    <?php $this->load->view('backend/commonJs'); ?>
    <?php $this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>
<script>
      jQuery(document).ready(function(){
        $("#search").click(function() {
          var from_date1 =  $("input[name*='from_date']").val();
          var to_date1 =  $("input[name*='to_date']").val();
          //alert(result);
          var formURL  = "<?php echo site_url('Backend/Revenue/search'); ?>";

          $.ajax({
            type: "POST",
            data: {from_date1 : from_date1, to_date1 : to_date1 },
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
          var formURL  = "<?php echo site_url('Backend/Revenue/viewFunction'); ?>";
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
      
    </script>
    
  </body>
</html>
