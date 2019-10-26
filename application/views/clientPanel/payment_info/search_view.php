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