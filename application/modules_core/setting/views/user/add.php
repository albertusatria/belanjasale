    <div class="pageheader">
      <h2><i class="fa fa-group"></i> Manage Portal</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">Pinaple SI</a></li>
          <li><a href="<?php echo base_url();?>setting/user">Manage User</a></li>
          <li class="active">Setup New User</li>
        </ol>
      </div>
    </div>

    <form id="sasPanel" class="form-horizontal form-bordered" method="POST" action="<?php echo base_url(); ?>setting/user/add_process" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
        
    <div class="contentpanel">

      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">Setup User Profile</h4>
          <p>Please give user profile information</p>
        </div>

        <div class="panel-body panel-body-nopadding">
          

            <div class="form-group">
              <label class="col-sm-3 control-label">Full Name *</label>
              <div class="col-sm-7">
                <input name="user_full_name" class="form-control" maxlength="100" type="text" value="<?php echo $this->session->flashdata('user_full_name'); ?>" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Address</label>
              <div class="col-sm-7">
                <input name="user_address" class="form-control" maxlength="255" type="text" value="<?php echo $this->session->flashdata('user_address'); ?>" />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Lahir <span class="asterisk">*</span></label>
              <div class="col-sm-3">
                <input type="text" id="datepicker-birthday" class="form-control num" placeholder="Masukkan tanggal lahir..." value="<?php //echo date("d-m-Y",strtotime(@$this->session->flashdata('user_birthday'))); ?>" required="">
                <input type="hidden" name="user_birthday" id="addbirthday" value="">
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Number</label>
              <div class="col-sm-7">
                <input name="user_contact" class="form-control" maxlength="12" type="text" value="<?php echo $this->session->flashdata('user_contact'); ?>" />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">No. KTP <span class="asterisk">*</span></label>
            <div class="col-sm-5">
              <input type="text" id="addktp" name="ktp" class="form-control" placeholder="Masukkan No. KTP.." value="<?php echo $this->session->flashdata('ktp'); ?>" required="">
            </div>
          </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Diangkat<span class="asterisk">*</span></label>
              <div class="col-sm-3">
                <input type="text" id="datepicker-mulai" class="form-control num" placeholder="Masukkan tgl mulai kerja.." value="<?php //echo date("d-m-Y",strtotime(@$this->session->flashdata('tgl_diangkat'))); ?>">
                <input type="hidden" name="tgl_diangkat" id="adddiangkat" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Berhenti</label>
              <div class="col-sm-3">
                <input type="text" id="datepicker-akhir" class="form-control num" placeholder="Masukkan tgl keluar kerja.." value="<?php //echo date("d-m-Y",strtotime(@$this->session->flashdata('tgl_berhenti'))); ?>">
                <input type="hidden" name="tgl_berhenti" id="addberhenti" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Status <span class="asterisk">*</span></label>
              <div class="col-sm-2">
              <select id="addstatus" name="status" class="form-control input-sm" required="">
                <option value=""> Pilih Sales </option>
                <option value="SALES" <?php if ($this->session->flashdata('status') == "SALES") : ?> selected <?php endif; ?>> SALES </option>
                <option value="GUDANG" <?php if ($this->session->flashdata('status') == "GUDANG") : ?> selected <?php endif; ?>> GUDANG </option>
                <option value="DIREKTUR" <?php if ($this->session->flashdata('status') == "DIREKTUR") : ?> selected <?php endif; ?>> DIREKTUR </option>
              </select>
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Picture</label>
              <div class="col-sm-7">
                 <input name="userfile" class="form-control"  class="span5" type="file" />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

          
        </div><!-- panel-body -->
                
    </div><!-- panel -->      
    </div><!-- panel -->      

    <div class="contentpanel">

      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">Setup User Account</h4>
          <p>Please give user account information</p>
        </div>
        <div class="panel-body panel-body-nopadding">
          
            <div class="form-group">
              <label class="col-sm-3 control-label">Role *</label>
              <div class="col-sm-5">
                <select class="form-control input-sm mb15" name="role_id" required>
                    <option value="">-- SELECT --</option>
                    <?php foreach ($rs_role as $data) : ?>
                        <option value="<?php echo $data['role_id']; ?>"><?php echo $data['role_name']; ?></option>
                    <?php endforeach ; ?>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-3 control-label">Username *</label>
              <div class="col-sm-7">
                <input name="user_name" class="form-control" maxlength="100" type="text" value="<?php echo $this->session->flashdata('user_name'); ?>" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Password *</label>
              <div class="col-sm-7">
                <input name="user_pass" class="form-control" maxlength="128" type="password" value="<?php echo $this->session->flashdata('user_pass'); ?>" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Email *</label>
              <div class="col-sm-7">
                <input name="user_email" class="form-control" maxlength="100" type="text" value="<?php echo $this->session->flashdata('user_email'); ?>" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Status *</label>
              <div class="col-sm-5">
                <select class="form-control input-sm mb15" name="user_st" required>
                    <option value="unlock">Unlock</option>
                    <option value="lock">Lock</option>
                </select>
              </div>
            </div>
          
        </div><!-- panel-body -->
        
        <div class="panel-footer">
             <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <button class="btn btn-primary">Submit</button>&nbsp;
                  <button class="btn btn-default">Cancel</button>
                </div>
             </div>
        </div><!-- panel-footer -->

        
      </div><!-- panel -->            
    </div><!-- contentpanel -->

          </form>
    
<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>bracket/js/jquery.autogrow-textarea.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap-fileupload.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>bracket/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/dropzone.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/colorpicker.js"></script>

<script src="<?php echo base_url();?>bracket/js/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
jQuery("#sasPanel").validate({
  messages: {
    user_full_name : "User full name is required.",
    role_id : "User Role is required.",    
    user_name : "User Username is required."
    user_pass : "User Password is required."
    user_email : "User Email is required."
    user_st : "User Status is required."
  },
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    }  
});
</script>


<script>
jQuery(document).ready(function(){
    
  jQuery('#datepicker-birthday').datepicker({ 
      dateFormat: 'dd-mm-yy',
      altField: '#addbirthday' ,
      altFormat: 'yy-mm-dd'
    });
  jQuery('#datepicker-mulai').datepicker({ 
      dateFormat: 'dd-mm-yy',
      altField: '#adddiangkat' ,
      altFormat: 'yy-mm-dd'
    });
  jQuery('#datepicker-akhir').datepicker({ 
        dateFormat: 'dd-mm-yy',
        altField: '#addberhenti' ,
        altFormat: 'yy-mm-dd'
  });

  // Chosen Select
  jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});
  
  // Tags Input
  jQuery('#tags').tagsInput({width:'auto'});
   
  // Textarea Autogrow
  jQuery('#autoResizeTA').autogrow();
  
  // Color Picker
  if(jQuery('#colorpicker').length > 0) {
     jQuery('#colorSelector').ColorPicker({
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
                jQuery('#colorpicker').val('#'+hex);
            }
     });
  }
  
  // Color Picker Flat Mode
    jQuery('#colorpickerholder').ColorPicker({
        flat: true,
        onChange: function (hsb, hex, rgb) {
            jQuery('#colorpicker3').val('#'+hex);
        }
    });
   
  // Date Picker
  jQuery('#datepicker').datepicker();
  
  jQuery('#datepicker-inline').datepicker();
  
  jQuery('#datepicker-multiple').datepicker({
    numberOfMonths: 3,
    showButtonPanel: true
  });
  
  // Spinner
  var spinner = jQuery('#spinner').spinner();
  spinner.spinner('value', 0);
  
  // Input Masks
  jQuery("#date").mask("99/99/9999");
  jQuery("#phone").mask("(999) 999-9999");
  jQuery("#ssn").mask("999-99-9999");
  
  // Time Picker
  jQuery('#timepicker').timepicker({defaultTIme: false});
  jQuery('#timepicker2').timepicker({showMeridian: false});
  jQuery('#timepicker3').timepicker({minuteStep: 15});

  
});
</script>


