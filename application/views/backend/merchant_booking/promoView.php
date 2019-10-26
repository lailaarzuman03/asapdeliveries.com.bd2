<div class="col-md-5 col-xs-6">                        
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
      <div class="text-center" style="border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px; margin-bottom: 10px;">
        <h2 style="float: center;">Recipent Information</h2>                         
        <div class="clearfix"></div>
      </div>
      <br />
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_number">Recepient Number 
            <span class="text-danger">*</span> </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Recepient Number *" id="recepient_number" name="recepient_number" required="required">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_name">Recepient Name
            <span class="text-danger">*</span> 
          </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Recepient Name *" id="recepient_name" name="recepient_name" required="required">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_address">Recepient Address
            <span class="text-danger">*</span> 
          </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Recepient Address *" id="recepient_address" name="recepient_address" required="required">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select2_single form-control" tabindex="-1" name="city" id="city">
              <option></option>
              <?php foreach ($allCity as $city): ?>
                <option value="<?php echo $city->id; ?>"> 
                  <?php echo $city->city_name; ?>
                </option>
              <?php endforeach; ?> 
            </select>
          </div>
        </div> 
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_area">Recepient Area
            <span class="text-danger">*</span> 
          </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Recepient Area *" id="recepient_area" name="recepient_area" required="required">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_landmark">
            Recepient Landmark                             
          </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Recepient Landmark" id="recepient_landmark" name="recepient_landmark">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well text-center">
        <div class="text-center" style="border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px; margin-bottom: 10px;">
          <h2 style="float: center;">Cost Management</h2>                         
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4>Shipping Cost</h4>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4> 
                <input type="hidden" name="shipping_cost" id="ShippingCost" class="auto-sum">
                <div id="ShippingCost_view">0</div>
              </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4>COD</h4>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <?php if (!empty($promoInfo->cod) && $promoInfo->cod == 1) { ?>

            <input type="hidden" name="cod" id="codId2" class="auto-sum" value="0">
            <h4> <div id="COD1">0</div></h4>

            <?php } else { ?>
            <input type="hidden" name="cod" id="codId" class="auto-sum">
            <h4> <div id="COD">0</div></h4>
            <?php } ?>
          </div>
        </div>
        <hr style="margin: 0px;background-color:#363636;height: 1px;">

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4> <b>Total Cost(+)</b> </h4>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4> <b>
                <span id="amountTotal">0 </span>
                <input id="txt3" type="hidden" name="total_cost" value="">
               </b> 
             </h4>
          </div>
        </div>

      </div>
    </div>
  </div>
<div class="col-md-6 col-xs-6 well col-md-offset-1">
  <div class="text-center" style="border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px; margin-bottom: 10px;">
    <h2 style="float: center;">Parcel Information</h2>                         
    <div class="clearfix"></div>
  </div>
  <br />
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">Product ID </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" class="form-control" placeholder="Have any particular product Id?" id="product_id" name="product_id">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parcel_type">Parcel Type
        <span class="text-danger">*</span> 
      </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <select class="select2_single2 form-control" tabindex="-1" name="parcel_type" id="parcel_type">
          <option></option>
          <option value="Box">Box</option>
          <option value="Document">Document</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_method">Payment method 
      </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" class="form-control" readonly="readonly" placeholder="Cash On Delivery" id="payment_method" name="payment_method" value="Cash On Delivery">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Package name <span class="text-danger">*</span> 
      </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
         <?php //print_r($promoInfo); ?>
        <select class="select2_group form-control" name="package_name" id="package_name" onchange="sum()" required="required">
           <option value="Standard 0">&nbsp;</option>
          <optgroup label="Standard (24-48 hours || ৳ 60 / Parcel) ">
             <?php if(!empty($promoInfo->standard1) && $promoInfo->standard1 !== "Standard "){ ?>
              <option value="<?php echo $promoInfo->standard1; ?>">up to 500 gm   
                ৳<?php echo substr(strstr("$promoInfo->standard1"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
              <option value="Standard 60">up to 500 gm   &nbsp; &nbsp; ৳60 / Parcel</option>
              <?php } if(!empty($promoInfo->standard2) && $promoInfo->standard2 !== "Standard "){ ?>
              <option value="<?php echo $promoInfo->standard2; ?>">
               500gm – 1kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->standard2"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Standard 70">500gm – 1kg  &nbsp; &nbsp;  ৳70 / Parcel</option>
              <?php } if(!empty($promoInfo->standard3) && $promoInfo->standard3 !== "Standard "){ ?>
              <option value="<?php echo $promoInfo->standard3; ?>">
               1kg – 1.5kg &nbsp; &nbsp; ৳<?php echo substr(strstr("$promoInfo->standard3"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
              <option value="Standard 85">1kg – 1.5kg  &nbsp; &nbsp;  ৳85 / Parcel</option>
              <?php } if(!empty($promoInfo->standard4) && $promoInfo->standard4 !== "Standard "){ ?>
              <option value="<?php echo $promoInfo->standard4; ?>">
               1.5kg – 2kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->standard4"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Standard 100">1.5kg – 2kg &nbsp; &nbsp; ৳100 / Parcel</option>
              <?php } ?>
          </optgroup>
           <optgroup label="Speedy (24 hours guaranteed || ৳ 70 / Parcel)">
             <?php if(!empty($promoInfo->speedy1) && $promoInfo->speedy1 !== "Speedy "){ ?>
              <option value="<?php echo $promoInfo->speedy1; ?>">up to 500 gm   
                ৳<?php echo substr(strstr("$promoInfo->speedy1"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Speedy 70">up to 500 gm   &nbsp; &nbsp;  ৳70 / Parcel</option>
              <?php } if(!empty($promoInfo->speedy2) && $promoInfo->speedy2 !== "Speedy "){ ?>
              <option value="<?php echo $promoInfo->speedy2; ?>">
               500gm – 1kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->speedy2"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
                <option value="Speedy 90">500gm – 1kg   &nbsp; &nbsp;  ৳90 / Parcel</option>
              <?php } if(!empty($promoInfo->speedy3) && $promoInfo->speedy3 !== "Speedy "){ ?>
              <option value="<?php echo $promoInfo->speedy3; ?>">
               1kg – 1.5kg &nbsp; &nbsp; ৳<?php echo substr(strstr("$promoInfo->speedy3"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
              <option value="Speedy 105">1kg – 1.5kg   &nbsp; &nbsp;  ৳105 / Parcel</option>
              <?php } if(!empty($promoInfo->speedy4) && $promoInfo->speedy4 !== "Speedy "){ ?>
              <option value="<?php echo $promoInfo->speedy4; ?>">
               1.5kg – 2kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->speedy4"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Speedy 120">1.5kg – 2kg  &nbsp; &nbsp;   ৳120 / Parcel</option>
              <?php } ?>                                  
          </optgroup>
          <optgroup label="ASAP (12 hours || ৳ 130 / Parcel )">
             <?php if(!empty($promoInfo->asap1) && $promoInfo->asap1 !== "ASAP "){ ?>
              <option value="<?php echo $promoInfo->asap1; ?>">up to 500 gm   
                ৳<?php echo substr(strstr("$promoInfo->asap1"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="ASAP 130">up to 500 gm   &nbsp; &nbsp;  ৳130 / Parcel</option>
              <?php } if(!empty($promoInfo->asap2) && $promoInfo->asap2 !== "ASAP "){ ?>
              <option value="<?php echo $promoInfo->asap2; ?>">
               500gm – 1kg &nbsp; &nbsp;  ৳<?php  echo substr(strstr("$promoInfo->asap2"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="ASAP 150">500gm – 1kg   &nbsp; &nbsp;  ৳150 / Parcel</option>
              <?php } if(!empty($promoInfo->asap3) && $promoInfo->asap3 !== "ASAP "){ ?>
              <option value="<?php echo $promoInfo->asap3; ?>">
               1kg – 1.5kg &nbsp; &nbsp; ৳<?php  echo substr(strstr("$promoInfo->asap3"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
             <option value="ASAP 180">1kg – 1.5kg   &nbsp; &nbsp;  ৳180 / Parcel</option>
              <?php } if(!empty($promoInfo->asap4) && $promoInfo->asap4 !== "ASAP "){ ?>
              <option value="<?php echo $promoInfo->asap4; ?>">
               1.5kg – 2kg &nbsp; &nbsp;  ৳<?php  echo substr(strstr("$promoInfo->asap4"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="ASAP 200">1.5kg – 2kg   &nbsp; &nbsp;  ৳200 / Parcel</option>
              <?php } ?>
          </optgroup>                               
          <optgroup label="Nationwide (conditional || ৳ 120 / Parcel)">
            <?php if(!empty($promoInfo->nationwide1) && $promoInfo->nationwide1 !== "Nationwide "){ ?>
              <option value="<?php echo $promoInfo->nationwide1; ?>">up to 500 gm   
                ৳<?php echo substr(strstr("$promoInfo->nationwide1"," "), 1);  ?> / Parcel
              </option>
              <?php } else { ?>
                <option value="Nationwide 120">up to 500 gm   &nbsp; &nbsp;  ৳120 / Parcel</option>
              <?php } if(!empty($promoInfo->nationwide2) && $promoInfo->nationwide2 !== "Nationwide "){ ?>
              <option value="<?php echo $promoInfo->nationwide2; ?>">
               500gm – 1kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->nationwide2"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Nationwide 140">500gm – 1kg    &nbsp; &nbsp; ৳140 / Parcel</option>
              <?php } if(!empty($promoInfo->nationwide3) && $promoInfo->nationwide3 !== "Nationwide "){ ?>
              <option value="<?php echo $promoInfo->nationwide3; ?>">
               1kg – 1.5kg &nbsp; &nbsp; ৳<?php echo substr(strstr("$promoInfo->nationwide3"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
             <option value="Nationwide 160">1kg – 1.5kg   &nbsp; &nbsp;  ৳160 / Parcel</option>
              <?php } if(!empty($promoInfo->nationwide4) && $promoInfo->nationwide4 !== "Nationwide "){ ?>
              <option value="<?php echo $promoInfo->nationwide4; ?>">
               1.5kg – 2kg &nbsp; &nbsp;  ৳<?php echo substr(strstr("$promoInfo->nationwide4"," "), 1); ?> / Parcel
              </option>
              <?php } else { ?>
               <option value="Nationwide 180">1.5kg – 2kg   &nbsp; &nbsp;  ৳180 / Parcel</option>
              <?php } ?>
          </optgroup>
        </select>
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">Product Price <span class="text-danger">*</span> </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="product_price" placeholder="Product Price" onkeyup="sum()" onkeydown="sum()" onblur="sum()" required="required">
        <span class="form-control-feedback left" aria-hidden="true"> TK</span>
        <span class="text-danger">Including Service Charge</span>
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Date <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="DeliveryDate" name="delivery_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Delivery Date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Time</label>
      <div class="col-md-2 col-sm-2 col-xs-6" style="padding: 0px;margin: 0px;">
        <div class="radio">
          <label>
            <input type="radio" class="flat" checked name="delivery_time" value="Any"> Any
          </label>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6" style="padding: 0px;margin: 0px;">
        <div class="radio">
          <label>
            <input type="radio" class="flat" name="delivery_time" value="10:00AM - 2:00PM"> 10:00AM - 2:00PM
          </label>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6" style="padding: 0px;margin: 0px;">
        <div class="radio">
          <label>
            <input type="radio" class="flat" name="delivery_time" value=" 2:00PM - 6:00PM"> 2:00PM - 6:00PM
          </label>
        </div>
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputSuccess2">No of Items 
        <span class="text-danger">*</span>
      </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="no_of_item" placeholder="No of Items" required="required">
        <span class="form-control-feedback left" aria-hidden="true"> Item</span>
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_type">Item Type <span class="text-danger">*</span> </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" class="form-control" id="item_type" name="item_type" placeholder="Item Type" required="required">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Instructions <span class="text-danger">*</span> </label>
      <div class="col-md-9 col-sm-9 col-xs-12">
       <textarea name="instructions" id="instructions" cols="30" rows="3" placeholder="Instructions *" class="form-control" required="required"></textarea>
      </div>
    </div>
</div>