<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo site_url('Backend/dashboard'); ?>" class="site_title">
        <img src="<?php echo base_url("resource/images/logo_stoke.png"); ?>" alt="" class="img-responsive" style="width:120px;top: 10px;" />
      </a>
    </div>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="<?php echo site_url('Backend/dashboard'); ?>"><i class="fa fa-home"></i> Home </a> </li>
          <li><a href="<?php echo site_url('Backend/register'); ?>"><i class="fa fa-users"></i>Merchant List</a></li>
          <li><a href="<?php echo site_url('Backend/promoCode'); ?>"><i class="fa fa-users"></i>Add Promo code </a></li>
          <li><a href="<?php echo site_url('Backend/promoCodeView'); ?>"><i class="fa fa-users"></i>View Promo List </a></li>
          <li>
            <a href="<?php echo site_url('Backend/MerchantBooking'); ?>">
              <i class="fa fa-users"></i> Merchant Booking
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('Backend/booking'); ?>">
              <i class="fa fa-users"></i> Booking Info
            </a>
          </li>
          <li><a href="<?php echo site_url('Backend/payment'); ?>"><i class="fa fa-users"></i> Payment </a></li>
          <li>
            <a href="<?php echo site_url('Backend/cashMemo'); ?>">
              <i class="fa fa-users"></i> Cash Memo 
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('Backend/Revenue'); ?>">
              <i class="fa fa-users"></i> Revenue 
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('Backend/Tickets'); ?>">
              <i class="fa fa-users"></i> Tickets 
            </a>
          </li>         
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>
