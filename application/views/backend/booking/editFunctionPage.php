 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('Backend/Booking/payment_update'); ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $paymentDetails->id; ?>">
  <input type="hidden" name="booking_id" value="<?php echo $rowInfo->id; ?>">
  <input type="hidden" name="tracking_id" value="<?php echo $rowInfo->tracking_id; ?>">
  <input type="hidden" name="merchant_id" value="<?php echo $rowInfo->merchant_id; ?>">
   <table class="table table-bordered table-hover">
    <tbody>
      <tr>
        <td colspan="4" class="tect-center">
          <h2 align="center" style="color:#f1644b; ">  Order Payment Information Update</h2>
        </td>
      </tr>
      <tr class="info">
        <td class="text-left" width="20%">              
          <label for="percel_status">Tracking ID  </label>
        </td>
        <td class="text-left" width="30%">
          <?php echo $rowInfo->tracking_id; ?>          
        </td>
        <td class="text-left" width="20%">              
          <label for="payment_status">Business Name  </label>
        </td>
        <td class="text-left" width="30%">
          <?php echo $merchantDetails->business_name; ?>
        </td>
      </tr>
      <tr>
        <td class="text-left" width="20%">              
          <label for="percel_status">Persel Status:  </label>
        </td>
        <td class="text-left" width="30%">
          <select name="percel_status" id="percel_status" class="form-control">
            <option value="1" <?php if($paymentDetails->percel_status == '1'){ ?> selected="selected" <?php } ?> >Pending Order</option>
            <option value="2" <?php if($paymentDetails->percel_status == '2'){ ?> selected="selected" <?php } ?> >Running Order</option>
            <option value="3" <?php if($paymentDetails->percel_status == '3'){ ?> selected="selected" <?php } ?> >Return parcel</option>
            <option value="4" <?php if($paymentDetails->percel_status == '4'){ ?> selected="selected" <?php } ?> >Completed Order</option>
          </select>             
        </td>
        <td class="text-left" width="20%">              
          <label for="payment_status">Payment Status:  </label>
        </td>
        <td class="text-left" width="30%">
          <select name="payment_status" id="payment_status" class="form-control">
            <option value="1" <?php if($paymentDetails->payment_status == '1'){ ?> selected="selected" <?php } ?> >Unpaid</option>
            <option value="2" <?php if($paymentDetails->payment_status == '2'){ ?> selected="selected" <?php } ?> >Paid</option>
          </select>             
        </td>
      </tr>
      <tr>
        <td class="text-left" width="20%">              
          <label for="status">Collected Amount:  </label>
        </td>
        <td class="text-left" width="30%">
          <input type="text" name="collected_amount" id="collected_amount" class="form-control" placeholder="Collected Amount" value="<?php echo $paymentDetails->collected_amount; ?>">          
        </td>
        <td class="text-left" width="20%">              
          <label for="status"> Collected Date:  </label>
        </td>
        <td class="text-left" width="30%">                        
           <fieldset>
            <div class="control-group">
              <div class="controls">
                <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Collected Date" aria-describedby="inputSuccess2Status4" name="collected_date" value="<?php echo $paymentDetails->collected_date; ?>">
                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                  <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                </div>
              </div>
            </div>
          </fieldset>            
        </td>
      </tr>
      <tr>
        <td colspan="4" class="text-center">
         <a href="<?php echo site_url('Backend/booking'); ?>" class="btn btn-danger btn-sm">Close</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success btn-sm"> Update </button>
        </td>
      </tr>
   </tbody>
  </table>
</form>