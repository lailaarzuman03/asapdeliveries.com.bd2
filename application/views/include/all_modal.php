
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <br>
        <div align="center">          
          <img src="<?php echo base_url("resource/images/logo_stoke.png") ?>" alt="asapdeliveries.com.bd" class="img-responsive text-center" style="width: 25%;">
        </div>
        
        <h4 class="modal-title text-center" id="myModalLabel" style="color: #f05034;"> 
          Welcome to ASAP Deliveries Portal
        </h4>
        <br><br>
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('login/clientAuth'); ?>">
            <div class="row">
              <div class="col-sm-8 col-xs-12 col-sm-offset-2 text-center">           
                <div class="form-group">
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="far fa-user"></i></span>
                      <input type="text" class="form-control" id="client_user_name" name="client_user_name" aria-describedby="inputGroupSuccess3Status" placeholder="User Name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" aria-describedby="inputGroupSuccess3Status" placeholder="Password">
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">              
              <div class="col-sm-5 col-xs-12 text-center col-sm-offset-1">
                 <a href="#register" data-toggle="modal" data-dismiss="modal" style="color: #007b09;text-decoration: none;font-weight: bold;">Create New Account</a> 
              </div>
              <div class="col-sm-5 col-xs-12 text-center">
                 <a href="#" data-toggle="modal" data-target="forgotPassword" data-dismiss="modal" style="color: #f1644b;text-decoration: none;font-weight: bold;">Forgot Password ?</a> 
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12 text-center"><br>
                &nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary2">&nbsp;&nbsp;&nbsp; <i class="fas fa-sign-in-alt"></i> Log in&nbsp;&nbsp;&nbsp;</button>
              </div>
            </div>
            <br>            
            </div>            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>