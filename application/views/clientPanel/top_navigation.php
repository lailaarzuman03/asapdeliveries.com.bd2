<div class="top_nav">  
  <div class="nav_menu">
    <nav>      
      <ul class="nav navbar-nav navbar-left">
        <li role="presentation">
          <a class="navbar-brand" href="<?php echo site_url('CDashboard'); ?>" style="background-color: transparent;">     
            <img src="<?php echo base_url("resource/images/logo_stoke_2.png"); ?>" alt="asapdeliveries.com.bd" class="custom-logo" style="width:17%;">
          </a>
        </li>
         <!-- 17% -->
        <li role="presentation">
          <a href="#">
          <i class="fa fa-home" aria-hidden="true"></i>
            Home
          </a>
        </li>
        <li role="presentation">
          <a href="<?php echo site_url('booking'); ?>">
           <i class="glyphicon glyphicon-book" aria-hidden="true"></i>
            Booking
          </a>
        </li>
        <li role="presentation">
          <a href="<?php echo site_url('new_report'); ?>">            
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            Booking Report
          </a>
        </li>
        <li role="presentation">
          <a href="<?php echo site_url('payment_info'); ?>"> 
           <i class="fa fa-money" aria-hidden="true"></i>
            Payment Info
          </a>
        </li>
        <li role="presentation">
          <a href="<?php echo site_url('tickets') ?>">
           <i class="fa fa-ticket" aria-hidden="true"></i>
           Tickets
          </a>
        </li>
        <li class="pull-right" style="position: relative;right: 0px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php echo $ClientDetails->business_name; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo site_url('merchant_profile'); ?>"> Profile</a></li>           
            <li><a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
