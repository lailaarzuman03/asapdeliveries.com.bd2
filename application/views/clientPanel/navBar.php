<nav class="navbar navbar-default" style="background-color:#f05034;">
  <div class="container" style="padding: 10px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('home'); ?>" target="_blank" style="margin-top: 7px;">
    	  <img src="<?php echo base_url("resource/images/asap2.png") ?>" alt="asapdeliveries.com.bd" class="img-resonsive">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-left: 35px;margin-top: 15px;">
        <li><a href="<?php echo site_url('CDashboard') ?>" >Home </a></li>
        <li><a href="#">Report</a></li>
        <li><a href="<?php echo site_url('booking'); ?>">Booking</a></li>
        <li><a href="#">Payment Details</a></li>
        <li><a href="#">Tickets</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>

      <ul class="nav navbar-nav pull-right" style="margin-top: 15px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wear N Cheer <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My Package & Promo</a></li>
            <li><a href="#">Account Details</a></li>
            <li><a href="#">Password Reset</a></li>
          </ul>
        </li>
        <li><a href="#" >Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>