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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 class="success text-center">Promo Code Edit</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <font style="font-size:15px;color:red;font-weight:bold;"><?php echo $mega; ?></font>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo site_url('Backend/promoCode/update'); ?>">
                    <input type="hidden" name="id" value="<?php echo $rowInfo->id; ?>">
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
                                <option value="<?php echo $v->id; ?>" <?php if($rowInfo->merchant_id == $v->id){ ?> selected="selected" <?php } ?> ><?php echo $v->business_name; ?></option>
                              <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" value="1" name="cod" id="cod"  <?php if($rowInfo->id == 1){ ?> checked="checked" <?php } ?> >  <strong> &nbsp;&nbsp; COD</strong>
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                           
                          <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="DeliveryDate">End Date <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="DeliveryDate" name="end_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="End Date" value="<?php echo date("m/d/Y", strtotime($rowInfo->end_date)); ?>">
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
                                <input type="text" class="form-control" placeholder="Price" id="standard1" name="standard1" value="<?php  echo substr(strstr("$rowInfo->standard1"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard2">500gm – 1kg    ৳70 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard2" name="standard2" value="<?php echo substr(strstr("$rowInfo->standard2"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard3">1kg – 1.5kg    ৳85 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard3" name="standard3" value="<?php  echo substr(strstr("$rowInfo->standard3"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="standard4">1.5kg – 2kg    ৳100 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="standard4" name="standard4" value="<?php  echo substr(strstr("$rowInfo->standard4"," "), 1); ?>">
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
                                <input type="text" class="form-control" placeholder="Price" id="speedy1" name="speedy1" value="<?php  echo substr(strstr("$rowInfo->speedy1"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy2">500gm – 1kg    ৳90 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy2" name="speedy2" value="<?php echo substr(strstr("$rowInfo->speedy2"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy3">1kg – 1.5kg    ৳105 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy3" name="speedy3" value="<?php echo substr(strstr("$rowInfo->speedy3"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="speedy4">1.5kg – 2kg    ৳120 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="speedy4" name="speedy4" value="<?php echo substr(strstr("$rowInfo->speedy4"," "), 1); ?>">
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
                                <input type="text" class="form-control" placeholder="Price" id="asap1" name="asap1" value="<?php echo substr(strstr("$rowInfo->asap1"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap2">500gm – 1kg    ৳150 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap2" name="asap2" value="<?php echo substr(strstr("$rowInfo->asap2"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap3">1kg – 1.5kg    ৳180 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap3" name="asap3" value="<?php echo substr(strstr("$rowInfo->asap3"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="asap4">1.5kg – 2kg    ৳200 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="asap4" name="asap4" value="<?php echo substr(strstr("$rowInfo->asap4"," "), 1); ?>">
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
                                <input type="text" class="form-control" placeholder="Price" id="nationwide1" name="nationwide1" value="<?php echo substr(strstr("$rowInfo->nationwide1"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide2">500gm – 1kg    ৳140 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide2" name="nationwide2" value="<?php echo substr(strstr("$rowInfo->nationwide2"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide3">1kg – 1.5kg    ৳160 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide3" name="nationwide3" value="<?php echo substr(strstr("$rowInfo->nationwide3"," "), 1); ?>">
                              </div>
                            </div>
                            <br>
                            <div class="row" align="right">
                               <div class="col-lg-7 col-md-8 col-sm-8 col-xs-10">
                                 <label class="control-label" for="nationwide4">1.5kg – 2kg    ৳180 / Parcel</label>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Price" id="nationwide4" name="nationwide4" value="<?php echo substr(strstr("$rowInfo->nationwide4"," "), 1); ?>">
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
                            <button type="submit" class="btn btn-success">Update</button>
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

    <!-- jQuery autocomplete -->
    <script>
      $(document).ready(function() {
        var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };

        var countriesArray = $.map(countries, function(value, key) {
          return {
            value: value,
            data: key
          };
        });

        // initialize autocomplete with custom appendTo
        $('#autocomplete-custom-append').autocomplete({
          lookup: countriesArray
        });
      });
    </script>
    <!-- /jQuery autocomplete -->

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
