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
        <form class="form" action="#" method="post" enctype="multipart/form-data">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 class="success">Merchant Info</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <font style="font-size:15px;color:red;font-weight:bold;"><?php echo $mega; ?></font>
                  </ul>
                  <button type="submit" class="btn btn-sm btn-danger pull-right" onclick="return confirm('Are You Sure ?')">
                          <span class="glyphicon glyphicon-trash"></span>
                        </button>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action table-responsive">
                    <thead>
                      <tr>
                        <th><input type="checkbox" id="check-all" class="flat"></th>
                        <th>Business Name</th>
                        <th> Full Name </th>
                        <th>Email</th>
                        <th>Register Date</th>
                        <th> <span style="font-size:14px;color:#26b99a; text-align:center;">Action</span> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach($allRegisterinfo as $v):
                        $id = $v->id;
                      ?>
                      <tr>
                        <td>
                          <input type="checkbox" class="flat" name="dataId[]" id="table_records" value="<?php echo $v->id; ?>" >
                        </td>
                        <td><?php echo $v->business_name; ?></td>
                        <td><?php echo $v->full_name; ?></td>
                        <td><?php echo $v->email; ?></td>
                        <td><?php echo $v->register_date; ?></td>
                        <td align="center">
                          <a href="#" data-toggle="modal" data-target="#register" class="btn btn-sm btn-success viewFunction" data-row-id="<?php echo $id; ?>">
                            <i class="fa fa-eye"></i>
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
      </form>

        <!-- footer content -->
        <?php $this->load->view('backend/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
 <?php
    foreach($allRegisterinfo as $v):
      $id = $v->id;
  ?>
    <div class="modal fade bs-example-modal-lg" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f37e69;color: #fff;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="myModalLabel"> Registration Information View</h4>
            </div>
            <div class="modal-body text-left viewHtml" style="color: #000;">
                            
            </div>
           </div> 
         </div>
        </div>
        <!-- end view model -->
      </div>
    </div>
  </div>
   <?php endforeach; ?>
    <?php $this->load->view('backend/commonJs'); ?>
    <?php $this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>
    <script>
      // Edit modal ajax
         $(document).on("click", ".viewFunction", function(){
          var rowId   = $(this).attr('data-row-id');
          var formURL  = "<?php echo site_url('Backend/Register/viewFunction'); ?>";
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
