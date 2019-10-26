 <?php
  $i = 1;
  $totalCollectAmount = 0;
  foreach($AllinvoiceInfo as $v):
    $id = $v->id;
   $total = $v->total_shipping_cost + $v->total_cod;
    $totalCollectAmount+= $total;
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
    <td><?php echo $v->total_shipping_cost; ?></td>
    <td><?php echo $v->total_cod; ?></td>
    <td>                      
       <?php echo $total; ?>
    </td>                            
  </tr>
 <?php  endforeach; ?>
<tr class="info">
  <td colspan="5" align="right"> <strong> Total collected amount  </strong></td>
  <td> <strong> <?php echo $totalCollectAmount; ?> </strong></td>
</tr>