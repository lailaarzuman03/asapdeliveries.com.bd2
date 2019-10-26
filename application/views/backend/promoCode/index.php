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
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">            
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 class="success text-center">Promo Code Add</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <font style="font-size:15px;color:red;font-weight:bold;"><?php echo $mega; ?></font>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo site_url('Backend/promoCode/store'); ?>">
                    <div class="form-group">
                      <div class="row" align="left">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Merchant Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <select class="select2_single form-control" tabindex="-1" name="merchant_id" id="merchant_id">
                                <option></option>
                               <?php foreach ($allRegisterinfo as $v): ?>
                                <option value="<?php echo $v->id; ?>"><?php echo $v->business_name; ?></option>
                              <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" value="1" name="cod" id="cod">  <strong> &nbsp;&nbsp; COD</strong>
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                           
                          <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="DeliveryDate">End Date <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="DeliveryDate" name="end_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="End Date">
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                       <div class="row" align="right">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h2 align="center">Standard (24-48 hours || ৳ 60 / Parcel)</h2> 
                            <hr>
                            <div class="row" align="right">
                              <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard1">up to 500 gm    ৳60 / Parcel</label>
                              </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard1" name="standard1">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard2">500gm – 1kg    ৳70 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard2" name="standard2">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard3">1kg – 1.5kg    ৳85 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard3" name="standard3">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard4">1.5kg – 2kg    ৳100 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard4" name="standard4">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h2 align="center">Speedy (24 hours guaranteed || ৳ 70 / Parcel)</h2> 
                            <hr>
                            <div class="row" align="right">
                              <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy1">up to 500 gm    ৳70 / Parcel</label>
                              </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy1" name="speedy1">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy2">500gm – 1kg    ৳90 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy2" name="speedy2">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy3">1kg – 1.5kg    ৳105 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy3" name="speedy3">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy4">1.5kg – 2kg    ৳120 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy4" name="speedy4">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 20px;">
                          <h2 align="center">ASAP (12 hours || ৳ 130 / Parcel )</h2> 
                            <hr>
                            <div class="row" align="right">
                              <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap1">up to 500 gm    ৳130 / Parcel</label>
                              </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap1" name="asap1">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap2">500gm – 1kg    ৳150 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap2" name="asap2">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap3">1kg – 1.5kg    ৳180 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap3" name="asap3">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap4">1.5kg – 2kg    ৳200 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap4" name="asap4">
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 20px;">
                          <h2 align="center">Nationwide (conditional || ৳ 120 / Parcel )</h2> 
                            <hr>
                            <div class="row" align="right">
                              <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide1">up to 500 gm    ৳120 / Parcel</label>
                              </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide1" name="nationwide1">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide2">500gm – 1kg    ৳140 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide2" name="nationwide2">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide3">1kg – 1.5kg    ৳160 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide3" name="nationwide3">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide4">1.5kg – 2kg    ৳180 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide4" name="nationwide4">
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                      <br>                   
                        <div class="ln_solid"></div>                          
                        <div class="form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                  </form>
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

    <?php $this->load->view('backend/commonJs'); ?>
    <?php //$this->load->view('backend/othersScript'); ?>
    <?php $this->load->view('backend/dataTableJsFile'); ?>
     <!-- jQuery -->
    <script src="<?php echo base_url("resource/vendors/jquery/dist/jquery.min.js"); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url("resource/vendors/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("resource/vendors/fastclick/lib/fastclick.js"); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url("resource/vendors/nprogress/nprogress.js"); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url("resource/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("resource/vendors/iCheck/icheck.min.js"); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url("resource/vendors/moment/min/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("resource/vendors/bootstrap-daterangepicker/daterangepicker.js"); ?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url("resource/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"); ?>"></script>
    <script src="<?php echo base_url("resource/vendors/jquery.hotkeys/jquery.hotkeys.js"); ?>"></script>
    <script src="<?php echo base_url("resource/vendors/google-code-prettify/src/prettify.js"); ?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url("resource/vendors/jquery.tagsinput/src/jquery.tagsinput.js"); ?>"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url("resource/vendors/switchery/dist/switchery.min.js"); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url("resource/vendors/select2/dist/js/select2.full.min.js"); ?>"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url("resource/vendors/parsleyjs/dist/parsley.min.js"); ?>"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url("resource/vendors/autosize/dist/autosize.min.js"); ?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url("resource/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"); ?>"></script>
    <!-- starrr -->
    <script src="<?php echo base_url("resource/vendors/starrr/dist/starrr.js"); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url("resource/build/js/custom.min.js"); ?>"></script>

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#DeliveryDate').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a Merchant Name",
          allowClear: true
        });

        $(".select2_single2").select2({
          placeholder: "Select Parcel Type",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

   

    <!-- Parsley -->
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
          $('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form2').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
      $(document).ready(function() {
        autosize($('.resizable_textarea'));
      });
    </script>
    <!-- /Autosize -->   

    <!-- Starrr -->
    <script>
      $(document).ready(function() {
        $(".stars").starrr();

        $('.stars-existing').starrr({
          rating: 4
        });

        $('.stars').on('starrr:change', function (e, value) {
          $('.stars-count').html(value);
        });

        $('.stars-existing').on('starrr:change', function (e, value) {
          $('.stars-count-existing').html(value);
        });
      });
    </script>
    <!-- /Starrr -->
  </body>
</html>
