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
                      <h2>Cash Memo <small>Generate Cash Memo </small></h2>                     
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    <?php //print_r($merchant_details); ?>
                    <form id="form2" method="POST" action="<?php echo site_url('Backend/Payment/store'); ?>" class="form-inline" enctype="multipart/form-data">
             
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <i class="fa fa-globe"></i> Invoice
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12 pull-rigth ">                             
                             <small> <label for="payment_date" class="control-label col-md-5 col-sm-5 col-xs-12"> Payment Date:</label> 
                              </small>
                              <input id="DeliveryDate" name="payment_date" class="date-picker form-control col-md-6 col-xs-12" required="required" type="text" placeholder="Payment Date"> 
                              </div>
                            </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <br><br>
                    <div class="row invoice-info">

                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>
                            Invoice <?php echo $invoiceID1; ?>
                            <input type="hidden" name="invoice_no" id="invoice_no" value="<?php echo $invoiceID1; ?>">
                          </b>
                        </div>
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                              <strong>ASAP Deliveries</strong>
                              <br>Mobile: 01675583010
                              <br>Email: info@asapdeliveries.com.bd
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                            <input type="hidden" name="merchant_id" id="merchant_id" value="<?php echo $merchant_details->id; ?>">
                              <strong><?php echo $merchant_details->business_name; ?>  </strong>
                              <br><?php echo $merchant_details->full_name; ?>
                              <br><?php echo $merchant_details->address; ?>
                              <br>Mobile: <?php echo $merchant_details->mobile; ?>
                              <br>Email:<?php echo $merchant_details->email; ?>
                          </address>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                       <table class="table table-condensed table-bordered table-hover table-striped table-responsive" width="100%" cellpadding="0" cellspacing="0">                            
                            <tr class="info">
                              <td>id</td>
                              <td>Order number</td>
                              <td>Client name</td>
                              <td>Client number</td>
                              <td>Delivery date</td>
                              <td align="right">Collected Amount</td>
                              <td align="right">Shipping charge</td>
                              <td align="right">COD</td>
                              <td align="right">Total Cost</td>
                              <td align="right">Merchant receivable</td>          
                            </tr>
                            <?php
                             $i = '1'; 
                             $Totalsum = 0;
                             $Totalcollected = 0;
                             $TotalShiping = 0;
                             $TotalCod = 0;
                             foreach ($checkedWiseCashMemeo as $v):
                              $cod = $v->cod;
                              $total_cost = $v->total_cost;
                              if ($v->payment_details->collected_amount == "0") {
                                $cod = '0';
                                $total_cost = $v->total_cost-$v->cod;
                                $merchant_receivable = '0';
                                $TotalReturn = $v->shipping_cost;

                                } else{

                                $merchant_receivable = $v->payment_details->collected_amount - ($v->shipping_cost + $cod);
                                $Totalsum+= $merchant_receivable;
                               }

                               $Totalcollected+= $v->payment_details->collected_amount;
                               $TotalShiping+= $v->shipping_cost;
                               $TotalCod+= $cod;
                               $srNo = $i++;
                            ?>
                            <tr>
                              <td><?php echo $srNo; ?></td>
                              <input type="hidden" name="booking_id_<?php echo $srNo; ?>" id="booking_id_<?php echo $srNo; ?>" value="<?php echo $v->id; ?>">

                              <td><?php echo $v->tracking_id; ?></td>
                              <td><?php echo $v->recepient_name; ?></td>
                              <td><?php echo $v->recepient_number; ?></td>
                              <td><?php echo $v->delivery_date; ?></td>
                              <td align="right"><?php echo $v->payment_details->collected_amount; ?></td>
                              <td align="right"><?php echo $v->shipping_cost; ?></td>
                              <td align="right"><?php echo $cod; ?></td>
                              <td align="right"><?php echo $total_cost; ?></td>
                              <td align="right"><?php echo $merchant_receivable; ?></td>
                            </tr>
                            <?php endforeach; ?>
                          </table> 
                          <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          Bank Or BKash
                          <!-- <img src="images/visa.png" alt="Visa">
                          <img src="images/mastercard.png" alt="Mastercard">
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                          </p> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4 pull-right">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>                                
                                <tr>
                                  <th align="center">Total Merchant Receivable:</th>
                                  <td align="right"> 
                                    <strong> <?php echo $Totalsum; ?></strong>
                                    <input type="hidden" name="total_merchant_receivable_amount" id="total_merchant_receivable_amount" value="<?php echo $Totalsum; ?>">

                                  </td>
                                </tr>
                                <tr>
                                  <th align="center">Total Shipping Cost:</th>
                                  <td align="right">
                                   <strong> <?php echo $TotalShiping; ?></strong>
                                    <input type="hidden" name="total_shipping_cost" id="total_shipping_cost" value="<?php echo $TotalShiping; ?>">
                                 </td>
                                </tr>
                                <tr>
                                  <th align="center">Total COD:</th>
                                  <td align="right"> 
                                    <strong> <?php echo $TotalCod; ?></strong>
                                    <input type="hidden" name="total_cod" id="total_cod" value="<?php echo $TotalCod; ?>">

                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                        <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>                          
                        </div>
                      </div>
                     </form>
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
          var formURL  = "<?php echo site_url('backend/Booking/viewFunction'); ?>";
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
         $(document).on("click", ".GCMemoFunction", function(){
          var rowId   = $(this).attr('data-row-id');
          var formURL  = "<?php echo site_url('backend/Booking/editFunction'); ?>";
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
