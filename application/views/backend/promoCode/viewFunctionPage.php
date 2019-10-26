 
<?php //print_r($rowInfo); ?>
<div class="row" align="left">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="control-label col-md-4 col-sm-4 col-xs-12">Merchant Name<span class="text-danger">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <?php echo $merchantDetails->business_name; ?>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
     <div class="checkbox">
      <label>
        <input type="checkbox" class="flat" value="1" name="cod" id="cod" <?php if ($rowInfo->cod == '1') {  ?> checked="checked" <?php }  ?> >  <strong> &nbsp;&nbsp; COD </strong>
      </label>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                           
    <div class="form-group">
      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="DeliveryDate">End Date <span class="text-danger">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
       <?php echo $rowInfo->end_date; ?>
      </div>
    </div>
  </div>
  </div>

  <div class="row" align="right">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h2 align="center">Standard (24-48 hours || ৳ 60 / Parcel)</h2> 
        <hr>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="standard1">up to 500 gm    ৳60 / Parcel</label>
          </div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
           <?php echo substr(strstr("$rowInfo->standard1"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="standard2">500gm – 1kg    ৳70 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
             <?php echo substr(strstr("$rowInfo->standard2"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="standard3">1kg – 1.5kg    ৳85 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
             <?php echo substr(strstr("$rowInfo->standard3"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="standard4">1.5kg – 2kg    ৳100 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->standard4"," "), 1); ?>
          </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h2 align="center">Speedy (24 hours guaranteed || ৳ 70 / Parcel)</h2> 
        <hr>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="speedy1">up to 500 gm    ৳70 / Parcel</label>
          </div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
             <?php echo substr(strstr("$rowInfo->speedy1"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="speedy2">500gm – 1kg    ৳90 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->speedy2"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="speedy3">1kg – 1.5kg    ৳105 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
           <?php echo substr(strstr("$rowInfo->speedy3"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="speedy4">1.5kg – 2kg    ৳120 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->speedy4"," "), 1); ?>
          </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 20px;">
      <h2 align="center">ASAP (12 hours || ৳ 130 / Parcel )</h2> 
        <hr>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="asap1">up to 500 gm    ৳130 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->asap1"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="asap2">500gm – 1kg    ৳150 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
           <?php echo substr(strstr("$rowInfo->asap2"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="asap3">1kg – 1.5kg    ৳180 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->asap3"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="asap4">1.5kg – 2kg    ৳200 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->asap4"," "), 1); ?>
          </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 20px;">
      <h2 align="center">Nationwide (conditional || ৳ 120 / Parcel )</h2> 
        <hr>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="nationwide1">up to 500 gm    ৳120 / Parcel</label>
          </div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->nationwide1"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="nationwide2">500gm – 1kg    ৳140 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->nationwide2"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="nationwide3">1kg – 1.5kg    ৳160 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->nationwide3"," "), 1); ?>
          </div>
        </div>
        <br>
        <div class="row" align="right" style="border-bottom: 1px solid #eee;">
           <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
             <label class="control-label" for="nationwide4">1.5kg – 2kg    ৳180 / Parcel</label>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <?php echo substr(strstr("$rowInfo->nationwide4"," "), 1); ?>
          </div>
        </div>
    </div>
  </div>