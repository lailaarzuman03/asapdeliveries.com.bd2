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
                    <h2>Tickets Info <small>Merchant </small></h2>
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
                    <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th width="20%">Merchant Name</th>
                            <th width="60%">Issue</th>
                            <th width="15%">Send Date</th>
                          </tr>
                        </thead>
                         
                          <?php
                          $i = 1;
                          foreach($AllIssusInfo as $v):
                            $id = $v->id;
                          ?>
                          <tr>
                            <td>
                             <?php echo $i++; ?>
                            </td>
                            <td><?php echo $v->merchant_details->business_name; ?></td>
                            <td><?php echo $v->problem_issue; ?></td>
                            <td align="center"><?php echo $v->send_date; ?></td>
                          </tr>
                         <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
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
    
  </body>
</html>
