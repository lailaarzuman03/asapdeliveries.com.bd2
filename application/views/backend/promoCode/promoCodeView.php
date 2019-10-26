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
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Merchant Name</th>
                          <th>COD</th>
                          <th>Promo Start Date</th>
                          <th>Promo End Date</th>
                          <th><span style="font-size:14px;color:#26b99a; text-align:center;">Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                        foreach($allpromoList as $v):
                          $id = $v->id;
                        ?>
                        <tr>
                          <td>
                           <?php echo $i++; ?>
                          </td>
                          <td><?php echo $v->merchant_details->business_name; ?></td>
                          <td><?php echo $v->cod; ?></td>
                          <td><?php echo $v->upload_date; ?></td>
                          <td><?php echo $v->end_date; ?></td>
                          <td align="center">
                            <a href="#" data-toggle="modal" data-target="#register" class="btn btn-sm btn-info viewFunction" data-row-id="<?php echo $v->id ?>">
                              <i class="fa fa-eye"></i>
                            </a>  
                            <a href="<?php echo site_url('Backend/PromoCodeView/edit/'.$v->id); ?>" class="btn btn-sm btn-warning">
                              <i class="fa fa-pencil"></i>
                            </a>                        
                          </td>
                        </tr>
                       <?php endforeach; ?>
                      </tbody>
                    </table>
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
<div class="modal fade bs-example-modal-lg" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f37e69;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel"> Promo Information View</h4>
      </div>
      <div class="modal-body text-left viewHtml" style="color: #000;">
                      
          </div>
         </div> 
       </div>
      </div>
    </div>
  </div>
</div>
    <?php $this->load->view('backend/commonJs'); ?>
    <?php $this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#DeliveryDate').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4",
           format: "YYYY/MM/DD"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
    <script>
       // View modal ajax
         $(document).on("click", ".viewFunction", function(){
          var rowId   = $(this).attr('data-row-id');
          var formURL  = "<?php echo site_url('Backend/PromoCodeView/viewFunction'); ?>";
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
