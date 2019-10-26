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
                              <?php echo $invoice_info->payment_date; ?>
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
                            Invoice <?php echo $invoice_info->invoice_no; ?>
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
                            <?php if (!empty($bookingInfo1)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo1->tracking_id; ?></td>
                              <td><?php echo $bookingInfo1->recepient_name; ?></td>
                              <td><?php echo $bookingInfo1->recepient_number; ?></td>
                              <td><?php echo $bookingInfo1->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo1->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo1->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo1->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details->collected_amount - $bookingInfo1->total_cost; ?></td>
                            </tr>
                            <?php endif; if(!empty($bookingInfo2)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo2->tracking_id; ?></td>
                              <td><?php echo $bookingInfo2->recepient_name; ?></td>
                              <td><?php echo $bookingInfo2->recepient_number; ?></td>
                              <td><?php echo $bookingInfo2->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details2->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo2->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo2->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo2->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details2->collected_amount - $bookingInfo2->total_cost; ?></td>
                            </tr>
                            <?php endif; if (!empty($bookingInfo3)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo3->tracking_id; ?></td>
                              <td><?php echo $bookingInfo3->recepient_name; ?></td>
                              <td><?php echo $bookingInfo3->recepient_number; ?></td>
                              <td><?php echo $bookingInfo3->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details3->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo3->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo3->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo3->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details3->collected_amount - $bookingInfo3->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo4)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo4->tracking_id; ?></td>
                              <td><?php echo $bookingInfo4->recepient_name; ?></td>
                              <td><?php echo $bookingInfo4->recepient_number; ?></td>
                              <td><?php echo $bookingInfo4->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details4->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo4->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo4->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo4->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details4->collected_amount - $bookingInfo4->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo5)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo5->tracking_id; ?></td>
                              <td><?php echo $bookingInfo5->recepient_name; ?></td>
                              <td><?php echo $bookingInfo5->recepient_number; ?></td>
                              <td><?php echo $bookingInfo5->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details5->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo5->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo5->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo5->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details5->collected_amount - $bookingInfo5->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo6)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo6->tracking_id; ?></td>
                              <td><?php echo $bookingInfo6->recepient_name; ?></td>
                              <td><?php echo $bookingInfo6->recepient_number; ?></td>
                              <td><?php echo $bookingInfo6->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details6->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo6->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo6->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo6->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details6->collected_amount - $bookingInfo6->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo7)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo7->tracking_id; ?></td>
                              <td><?php echo $bookingInfo7->recepient_name; ?></td>
                              <td><?php echo $bookingInfo7->recepient_number; ?></td>
                              <td><?php echo $bookingInfo7->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details7->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo7->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo7->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo7->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details7->collected_amount - $bookingInfo7->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo8)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo8->tracking_id; ?></td>
                              <td><?php echo $bookingInfo8->recepient_name; ?></td>
                              <td><?php echo $bookingInfo8->recepient_number; ?></td>
                              <td><?php echo $bookingInfo8->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details8->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo8->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo8->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo8->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details8->collected_amount - $bookingInfo8->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo9)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo9->tracking_id; ?></td>
                              <td><?php echo $bookingInfo9->recepient_name; ?></td>
                              <td><?php echo $bookingInfo9->recepient_number; ?></td>
                              <td><?php echo $bookingInfo9->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details9->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo9->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo9->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo9->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details9->collected_amount - $bookingInfo9->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo10)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo10->tracking_id; ?></td>
                              <td><?php echo $bookingInfo10->recepient_name; ?></td>
                              <td><?php echo $bookingInfo10->recepient_number; ?></td>
                              <td><?php echo $bookingInfo10->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details10->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo10->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo10->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo10->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details10->collected_amount - $bookingInfo10->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo11)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo11->tracking_id; ?></td>
                              <td><?php echo $bookingInfo11->recepient_name; ?></td>
                              <td><?php echo $bookingInfo11->recepient_number; ?></td>
                              <td><?php echo $bookingInfo11->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details11->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo11->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo11->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo11->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details11->collected_amount - $bookingInfo11->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo12)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo12->tracking_id; ?></td>
                              <td><?php echo $bookingInfo12->recepient_name; ?></td>
                              <td><?php echo $bookingInfo12->recepient_number; ?></td>
                              <td><?php echo $bookingInfo12->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details12->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo12->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo12->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo12->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details12->collected_amount - $bookingInfo12->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo13)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo13->tracking_id; ?></td>
                              <td><?php echo $bookingInfo13->recepient_name; ?></td>
                              <td><?php echo $bookingInfo13->recepient_number; ?></td>
                              <td><?php echo $bookingInfo13->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details13->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo13->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo13->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo13->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details13->collected_amount - $bookingInfo13->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo14)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo14->tracking_id; ?></td>
                              <td><?php echo $bookingInfo14->recepient_name; ?></td>
                              <td><?php echo $bookingInfo14->recepient_number; ?></td>
                              <td><?php echo $bookingInfo14->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details14->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo14->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo14->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo14->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details14->collected_amount - $bookingInfo14->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo15)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo15->tracking_id; ?></td>
                              <td><?php echo $bookingInfo15->recepient_name; ?></td>
                              <td><?php echo $bookingInfo15->recepient_number; ?></td>
                              <td><?php echo $bookingInfo15->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details15->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo15->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo15->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo15->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details15->collected_amount - $bookingInfo15->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo16)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo16->tracking_id; ?></td>
                              <td><?php echo $bookingInfo16->recepient_name; ?></td>
                              <td><?php echo $bookingInfo16->recepient_number; ?></td>
                              <td><?php echo $bookingInfo16->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details16->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo16->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo16->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo16->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details16->collected_amount - $bookingInfo16->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo17)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo17->tracking_id; ?></td>
                              <td><?php echo $bookingInfo17->recepient_name; ?></td>
                              <td><?php echo $bookingInfo17->recepient_number; ?></td>
                              <td><?php echo $bookingInfo17->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details17->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo17->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo17->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo17->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details17->collected_amount - $bookingInfo17->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo18)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo18->tracking_id; ?></td>
                              <td><?php echo $bookingInfo18->recepient_name; ?></td>
                              <td><?php echo $bookingInfo18->recepient_number; ?></td>
                              <td><?php echo $bookingInfo18->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details18->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo18->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo18->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo18->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details18->collected_amount - $bookingInfo18->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo19)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo19->tracking_id; ?></td>
                              <td><?php echo $bookingInfo19->recepient_name; ?></td>
                              <td><?php echo $bookingInfo19->recepient_number; ?></td>
                              <td><?php echo $bookingInfo19->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details19->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo19->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo19->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo19->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details19->collected_amount - $bookingInfo19->total_cost; ?></td>
                            </tr>
                            <?php endif;  if (!empty($bookingInfo20)): ?>                         
                            <tr>
                              <td>1</td>
                              <td><?php echo $bookingInfo20->tracking_id; ?></td>
                              <td><?php echo $bookingInfo20->recepient_name; ?></td>
                              <td><?php echo $bookingInfo20->recepient_number; ?></td>
                              <td><?php echo $bookingInfo20->delivery_date; ?></td>
                              <td align="right"><?php echo $payment_details20->collected_amount; ?></td>
                              <td align="right"><?php echo $bookingInfo20->shipping_cost; ?></td>
                              <td align="right"><?php echo $bookingInfo20->cod; ?></td>
                              <td align="right"><?php echo $bookingInfo20->total_cost; ?></td>
                              <td align="right"><?php echo $payment_details20->collected_amount - $bookingInfo20->total_cost; ?></td>
                            </tr>
                            <?php endif; ?>
                          </table> 
                          <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          Bank Or BKash
                         
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4 pull-right">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>                                
                                <tr>
                                  <th align="center">Total Merchant Receivable:</th>
                                  <td align="right"> 
                                    <strong> <?php echo $invoice_info->total_merchant_receivable_amount; ?></strong> 
                                  </td>
                                </tr>
                                <tr>
                                  <th align="center">Total Shipping Cost:</th>
                                  <td align="right">
                                   <strong> <?php echo $invoice_info->total_shipping_cost; ?></strong>
                                   
                                 </td>
                                </tr>
                                <tr>
                                  <th align="center">Total COD:</th>
                                  <td align="right"> 
                                    <strong> <?php echo $invoice_info->total_cod; ?></strong>
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
