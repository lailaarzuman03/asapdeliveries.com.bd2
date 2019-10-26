<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <?php $this->load->view('backend/views/commonCss'); ?>
    <?php $this->load->view('backend/views/dataTableCssFile'); ?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('backend/views/left_navigation'); ?>

        <!-- top navigation -->
        <?php $this->load->view('backend/views/top_navigation'); ?>

        <!-- /top navigation -->
        <form class="form" action="<?php echo site_url('contact_us/multipleDelete'); ?>" method="post" enctype="multipart/form-data">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <span align="left" style="font-size:20px;">Contact Info</span>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('dashboard'); ?>" align="left" style="font-size:14px;"> Home /</a>
                <a href="<?php echo site_url('contact_us/contact_info'); ?>"  align="left" style="font-size:14px;color:#26b99a;">Contact Info </a>
              </div>
              <div class="title_right">
                <ul class="nav navbar-right panel_toolbox">                  
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure ?')">
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </ul>
                <br>&nbsp;<br>&nbsp;
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 class="success">Contact Info</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <font style="font-size:15px;color:red;font-weight:bold;"><?php echo $mega; ?></font>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action table-responsive">
                    <thead>
                      <tr>
                        <th><input type="checkbox" id="check-all" class="flat"></th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Entry Date</th>
                        <th> <span style="font-size:14px;color:#26b99a; text-align:center;">Action</span> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach($allContactinfo as $v):
                        $id = $v->id;
                      ?>
                      <tr>
                        <td>
                          <input type="checkbox" class="flat" name="dataId[]" id="table_records" value="<?php echo $v->id; ?>" >
                        </td>
                        <td><?php echo $v->full_name; ?></td>
                        <td><?php echo $v->email; ?></td>
                        <td><?php echo $v->mobile; ?></td>
                        <td><?php echo $v->date; ?></td>
                        <td align="center">
                          <a href="#" data-toggle="modal" data-target="#view<?php echo $id; ?>" class="btn btn-sm btn-success">
                            <i class="fa fa-eye"></i>
                          </a>
                          <!-- view Modal -->
                          <div class="modal fade" id="view<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="well col-md-12 col-sm-12 col-xs-12 profile_details">
                                    <div class="profile_view">
                                      <div class="col-sm-12" align="left" style="font-size:14px;">
                                        <h3 class="brief"><i><?php echo $v->full_name; ?></i></h3>
                                        <div class="brief" align="left"><strong>Address: </strong> <?php echo $v->email; ?></div>
                                        <div class="brief" align="left"><strong>Mobile: </strong> <?php echo $v->mobile; ?></div>
                                        <div class="brief" align="left"><strong>Date: </strong> <?php echo $v->date; ?></div>
                                        <div class="col-xs-12">
                                          <p class="paddingTB">
                                          <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                              <strong>Subject : </strong>
                                            </div>
                                            <div class="col-md-7 col-sm-7"  align="left">
                                              <?php echo $v->msg_subject; ?>
                                            </div>
                                          </div>
                                          </p>
                                          <p class="paddingTB">
                                          <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                              <strong>Message: </strong>
                                            </div>
                                            <div class="col-md-7 col-sm-7" align="left">
                                               <?php echo $v->message; ?>
                                            </div>
                                          </div>
                                        </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--  -->
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /end view model -->
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
        <?php $this->load->view('backend/views/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
   
    <?php $this->load->view('backend/views/commonJs'); ?>
    <?php $this->load->view('backend/views/othersScript'); ?>
    <?php $this->load->view('backend/views/dataTableJsFile'); ?>
  </body>
</html>
