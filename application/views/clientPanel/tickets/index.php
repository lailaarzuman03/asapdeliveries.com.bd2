<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Tickets | ASAP Deliveries </title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url("resource/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("resource/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("resource/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url("resource/vendors/iCheck/skins/flat/green.css"); ?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url("resource/vendors/google-code-prettify/bin/prettify.min.css"); ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url("resource/vendors/select2/dist/css/select2.min.css"); ?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url("resource/vendors/switchery/dist/switchery.min.css"); ?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url("resource/vendors/starrr/dist/starrr.css"); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url("resource/vendors/bootstrap-daterangepicker/daterangepicker.css"); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("resource/build/css/custom.min.css"); ?>" rel="stylesheet">
    <style>
      .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-shadow: inset 0 6px 1px rgba(0,0,0,.1);
    }
    </style>
  </head>
  <body>
    <?php $this->load->view('clientPanel/top_navigation'); ?>
    <div class="container body" style="background-color: #fff;">
      <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="padding: 0px;margin: 0px;">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New: <small> Tickets</small></h2>
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
                    <?php if (!empty($mega)) { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong> <?php echo $mega; ?></strong>
                    </div><br>
                    <?php } ?>
                  <form class="form-horizontal form-label-left" method="post" action="<?php echo site_url('ClientPanel/Tickets/send'); ?>" enctype="multipart/form-data">
                    <div class="row" style="padding: 0px;margin: 0px;">
                      <div class="col-md-8 col-xs-6 col-md-offset-2">                        
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
                            <div class="text-center" style="border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px; margin-bottom: 10px;">
                              <h2 style="float: center;">Create Tickets</h2>                         
                              <div class="clearfix"></div>
                            </div>
                            <br />
                              <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recepient_number">Recepient Number 
                                  <span class="text-danger">*</span> </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                 <textarea name="problem_issue" id="problem_issue" cols="30" rows="10" placeholder="Enter Your Issue" class="form-control" required="required"></textarea>
                                </div>
                              </div>
                              <div class="ln_solid"></div>    
                              <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                  <button type="submit" class="btn btn-success" id="send">Send Issue</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </form>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th width="80%">Issue</th>
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

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <footer style="margin-left: 0px;">
          <div class="text-center">
           Globallytec © 2018 Globallytec.com. - All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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

    <!-- validator -->
    <script src="<?php echo base_url("resource/vendors/validator/validator.js"); ?>"></script>

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
          placeholder: "Select a City",
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
     <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->

     <script>
      $(document).ready(function() {
        $('#package_name').on('change', function() {
            //alert( this.value );
            var original = this.value;
            var result = original.substr(original.indexOf(" ") + 1);
             document.getElementById("ShippingCost").value = result;
             document.getElementById("ShippingCost_view").innerHTML = result; // for show
          })
           
         $('#inputSuccess2').keyup(function() {
              var dInput = this.value;            
              var codPersent2 = (1 / 100) * dInput;
              var codPersent = Math.ceil(codPersent2);            
              document.getElementById("codId").value = codPersent;
              document.getElementById("COD").innerHTML = codPersent;
             // console.log(codPersent);
          });
      });

    </script>
    <script>
      function sum() {
         var txtFirstNumberValue = document.getElementById('ShippingCost').value;
         var txtSecondNumberValue = document.getElementById('codId').value;
         var totalresult = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
         if (!isNaN(totalresult)) {
              document.getElementById("amountTotal").innerHTML = totalresult;
             document.getElementById('txt3').value = totalresult;
         }
      }
    </script>    
  </body>
</html>
