<?php //print_r($rowInfo); ?>
<div class="row" align="left">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="2" class="text-center">Recipent Information</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left"><strong>Parcel Id: </strong> <br>
                <?php echo $rowInfo->tracking_id; ?>
              </td>
              <td class="text-left">
                <strong>Order Date: </strong>  <br>
                <?php echo $rowInfo->upload_date; ?>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-left"><strong>Business Name : </strong>
                <?php echo $merchantDetails->business_name; ?>
              </td>
            </tr>
            <tr>
              <td width="40%"><strong> Recepient Name</strong> </td>
              <td width="60%"> <?php echo $rowInfo->recepient_name; ?></td>
            </tr>
            <tr>
              <td><strong> Recepient Number </strong> </td>
              <td> <?php echo $rowInfo->recepient_number; ?></td>
            </tr>
            <tr>
              <td><strong> Recepient Address  </strong> </td>
              <td> <?php echo $rowInfo->recepient_address; ?></td>
            </tr>
            <tr>
              <td><strong> City  </strong> </td>
              <td><?php echo $cityDetails->city_name; ?></td>
            </tr>
            <tr>
              <td><strong> Recepient Area  </strong> </td>
              <td> <?php echo $rowInfo->recepient_area; ?> </td>
            </tr>
            <tr>
              <td><strong> Recepient Landmark  </strong> </td>
              <td> <?php echo $rowInfo->recepient_landmark; ?> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="2" class="text-center">Parcel Information</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left"><strong>Delivery Date :</strong> <br> <?php echo $rowInfo->delivery_date; ?></td>
              <td class="text-left"><strong>Delivery Time :</strong> <br> <?php echo $rowInfo->delivery_time; ?></td>
            </tr>
            <tr>              
              <td class="text-left" width="40%">
                <strong>Product ID: </strong>
                <?php echo $rowInfo->product_id; ?>
              </td>
              <td class="text-left" width="60%">
                <strong> Parcel Type : </strong> 
                <?php echo $rowInfo->parcel_type; ?>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-left">
                <strong>Package name : </strong>
                <?php echo $packageDetails->parcel_name; ?>
              </td>
            </tr>
            <tr>
              <td><strong> Product Price : </strong> <?php echo $rowInfo->product_price; ?> </td>
              <td> <strong> COD : </strong> <?php echo $rowInfo->cod; ?> </td>
            </tr>
            <tr>
              <td><strong> No of Items  </strong> </td>
              <td>  <?php echo $rowInfo->no_of_item; ?></td>
            </tr>
            <tr>
              <td><strong> Item Type </strong> </td>
              <td> <?php echo $rowInfo->item_type; ?></td>
            </tr>
            <tr>
              <td><strong> Instructions  </strong> </td>
              <td> <?php echo $rowInfo->instructions; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
   