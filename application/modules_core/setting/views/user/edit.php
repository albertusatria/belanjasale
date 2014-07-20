        
    <div class="contentpanel">
               
	  <div class="row">
	  
		  <div class="col-sm-12 edit-member" id="menukiri">   	          
	        <!-- Nav tabs -->
	        <ul class="nav nav-tabs nav-justified nav-profile">
	      <!--<li class="active" id="profil"><a href="#profileMember" data-toggle="tab">Profile</a></li>
		  	  <li class="" id="diskon"><a href="#discountedProduct" data-toggle="tab">Discounted Products</a></li>-->
	          <li class="active" id="account"><a href="#accountUser" data-toggle="tab">Account</a></li>
	          <li class="" id="profil"><a href="#profileUser" data-toggle="tab">Profile</a></li>
	          <li class="" id="password"><a href="#passwordUser" data-toggle="tab">Change Password</a></li>
	        </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content">
	          
	          <div class="tab-pane active" id="accountUser">
			  
	              <?php if ($message != null ) : ?>
			      <div class="alert alert-success">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                <strong>Well done!</strong> <?php echo $message; ?>
			        </div>
			      <?php endif ; ?>

			      <div id="pesanAccount" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>

			  	<div class="pane-content">
				  	<div class="pane-header-content">
				  		<a href="#">Account</a>
				  	</div>				  
				  	<div class="panel-body">
						<form id="regisAccount" action="" class="form-horizontal" novalidate="novalidate">
						
						<input type="hidden" id="addid" name="user_id" class="form-control" value="<?php echo @$r_user->user_id ?>" required="">

							<div class="form-group">
				              <label class="col-sm-2 control-label">User Name <span class="asterisk">*</span></label>
				              <div class="col-sm-5">
				                <input type="text" id="addusername" name="user_name" readonly="" class="form-control" value="<?php echo @$r_my_user->user_name ?>" required="">
				              </div>
				            </div>

			           		<div class="form-group">
				              <label class="col-sm-2 control-label">Email<span class="asterisk">*</span></label>
				              <div class="col-sm-5">
				                <input type="text" id="addemail" name="user_email" class="form-control" placeholder="Masukkan Email.." value="<?php echo @$r_my_user->user_email ?>" required="">
				              </div>
				            </div>

				             <div class="form-group">
				              <label class="col-sm-2 control-label">Role <span class="asterisk">*</span></label>
				              <div class="col-sm-3">
					            <select id="adduserole" name="user_role" class="form-control input-sm" required="">
                                	<option value=""> Pilih role </option>
				                <?php foreach ($rs_role as $role): ?>
				               	    <option value="<?php echo @$role['role_id'] ?>" <?php if (@$r_my_user->user_role == @$role['role_id']) : ?> selected <?php endif; ?>> <?php echo @$role['role_name'] ?> </option>
				                <?php endforeach; ?>
					            </select>
				              </div>
				            </div>

				            <div class="form-group">
				              <label class="col-sm-2 control-label">Status <span class="asterisk">*</span></label>
				              <div class="col-sm-2">
					            <select id="adduserst" name="user_st" class="form-control input-sm" required="">
                                <option value=""> Pilih Status </option>
				                <option value="unlock" <?php if (@$r_my_user->user_st == "unlock") : ?> selected <?php endif; ?>> UNLOCK </option>
				                <option value="lock" <?php if (@$r_my_user->user_st == "lock") : ?> selected <?php endif; ?>> LOCK </option>
					            </select>
				              </div>
				            </div>
				            
					      <div class="panel-footer">
					        <a class="btn btn-success" id="updateAccount">Update Account User</a>
					      </div>
						</form>
				  	</div>							  
		        </div>
	          </div>


	          <div class="tab-pane" id="profileUser">	            
				  	
			      <?php if ($message != null ) : ?>
			      <div class="alert alert-success">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                <strong>Well done!</strong> <?php echo $message; ?>
			        </div>
			      <?php endif ; ?>

			      <div id="pesanProfile" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>

				  	<div class="pane-content">
					  	<div class="pane-header-content">
					  		<a href="#">Profile</a>
					  	</div>				  
					  	<div class="panel-body">
							<form id="regisProfile" action="" class="form-horizontal" novalidate="novalidate">
						
								<input type="hidden" id="addid" name="user_id" class="form-control" readonly="" value="<?php echo @$r_user->user_id ?>" required="">

					            <div class="form-group">
					              <label class="col-sm-2 control-label">No. KTP <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="text" id="addktp" name="ktp" class="form-control" placeholder="Masukkan No. KTP.." value="<?php echo @$r_user->ktp ?>" required="">
					              </div>
					            </div>

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Full Name <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <input type="text" id="addname" name="user_full_name" class="form-control" placeholder="Masukkan nama lengkap member..." value="<?php echo @$r_user->user_full_name ?>" required="">
					              </div>
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Alamat <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <textarea rows="5" id="addalamat" name="user_address" class="form-control" placeholder="Masukkan alamat member..."  required=""><?php echo @$r_user->user_address ?></textarea>
					              </div>
					            </div>
													            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Tanggal Lahir <span class="asterisk">*</span></label>
					              <div class="col-sm-3">
					                <input type="text" id="datepicker-birthday" name="user_birthday" class="form-control num" placeholder="Masukkan tanggal lahir..." value="<?php echo date("d-m-Y",strtotime($r_user->user_birthday));?>" required="">
					              	<input type="hidden" name="hidden_bithday" id="addbirthday" value="<?php echo $r_user->user_birthday?>">
					              </div>
					            </div>
					
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Kontak/HP <span class="asterisk">*</span></label>				    
					              <div class="col-sm-4">
					                <input type="text" id="addhp" name="user_number" class="form-control num" placeholder="Masukkan nomer Kontak/HP... " value="<?php echo @$r_user->user_number ?>">
					              </div>              
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Tanggal Diangkat<span class="asterisk">*</span></label>
					              <div class="col-sm-3">
					                <input type="text" id="datepicker-mulai" name="tgl_diangkat" class="form-control num" placeholder="Masukkan tgl mulai kerja.." value="<?php if($r_user->tgl_diangkat!='0000-00-00'){echo date("d-m-Y",strtotime(@$r_user->tgl_diangkat));} ?>">
					              	<input type="hidden" name="hidden_mulai" id="adddiangkat" value="<?php echo $r_user->tgl_diangkat?>">
					              </div>
					            </div>

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Tanggal Berhenti</label>
					              <div class="col-sm-3">
					                <input type="text" id="datepicker-akhir" name="tgl_berhenti" class="form-control num" placeholder="Masukkan tgl keluar kerja.." value="<?php if($r_user->tgl_berhenti!='0000-00-00'){echo date("d-m-Y",strtotime(@$r_user->tgl_berhenti));} ?>">
					              	<input type="hidden" name="hidden_akhir" id="addberhenti" value="<?php echo $r_user->tgl_berhenti?>">
					              </div>
					            </div>

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Status <span class="asterisk">*</span></label>
					              <div class="col-sm-2">
						            <select id="addstatus" name="status" class="form-control input-sm" required="">
	                                <option value=""> Pilih Sales </option>
					                <option value="SALES" <?php if (@$r_user->status == "SALES") : ?> selected <?php endif; ?>> SALES </option>
					                <option value="GUDANG" <?php if (@$r_user->status == "GUDANG") : ?> selected <?php endif; ?>> GUDANG </option>
					                <option value="DIREKTUR" <?php if (@$r_user->status == "DIREKTUR") : ?> selected <?php endif; ?>> DIREKTUR </option>
						            </select>
					              </div>
					            </div>  

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Photo Picture</label>
					              <div class="col-sm-4">
					                <input type="file" id="addpicture" name="user_picture" class="form-control num" placeholder="Masukkan fotomu.." value="<?php echo @$r_user->user_picture ?>">
					              </div>
					            </div>

						      <div class="panel-footer">
						        <a class="btn btn-success" id="updateProfile">Update Profile User</a>
						      </div>
							  </form>
					  	</div>							  
				  	</div>
	          </div>
	 
	          <div class="tab-pane" id="passwordUser">

	          	  <?php if ($message != null ) : ?>
			      <div class="alert alert-success">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                <strong>Well done!</strong> <?php echo $message; ?>
			        </div>
			      <?php endif ; ?>

			      <div id="pesanPassword" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>

	          	<div class="pane-content">
				  	<div class="pane-header-content">
				  		<a href="#">Password</a>
				  	</div>				  
				  	<div class="panel-body">
						<form id="regisPassword" action="" class="form-horizontal" novalidate="novalidate">
 						  
 						  	<input type="hidden" id="addid" name="user_id" class="form-control" readonly="" value="<?php echo @$r_my_user->user_id ?>" required="">

 						  	<div class="form-group">
				              <label class="col-sm-2 control-label">Password <span class="asterisk">*</span></label>
				              <div class="col-sm-8">
				                <input type="text" id="addpassword" name="user_password" class="form-control" placeholder="Masukkan password baru.." value="" required="">
				              </div>
					       	</div>
				            
					      <div class="panel-footer">
					        <a class="btn btn-success" id="updatePassword">Update Password User</a>
					      </div>
						</form>
				  	</div>							  
		        </div>
	        </div><!-- tab-content -->
	        
	        <!-- end Nav tabs -->
        </div>	  
	  </div>        
    </div><!-- contentpanel -->
    
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

<script src="<?php echo base_url()?>bracket/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.formatCurrency-1.4.0.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.formatCurrency.id-ID.js"></script>
<script src="<?php echo base_url();?>bracket/js/autoNumeric.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.numeric.js"></script>
<script src="<?php echo base_url();?>bracket/js/holder.js"></script>
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>

<script type="text/javascript">
var $j = jQuery.noConflict(); 

jQuery(document).ready(function() {

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

	//format numeric on edit
	$j('.edit-amount.price').blur(function() {
		$j(this).autoNumeric('init');
	})
	.keyup(function(e) {
	var e = window.event || e;
	var keyUnicode = e.charCode || e.keyCode;
	if (e !== undefined) {
		switch (keyUnicode) {
			case 16: break; // Shift
			case 17: break; // Ctrl
			case 18: break; // Alt
			case 27: this.value = ''; break; // Esc: clear entry
			case 35: break; // End
			case 36: break; // Home
			case 37: break; // cursor left
			case 38: break; // cursor up
			case 39: break; // cursor right
			case 40: break; // cursor down
			case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
			case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
			case 190: break; // .
			default: $j(this).autoNumeric('init');
		}
	}
	
	});
  	
      // Basic Form
	  jQuery("#regisAccount").validate({
	    highlight: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	    },
	    success: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-error');
	    }
	  }); 

	  jQuery("#regisProfile").validate({
	    highlight: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	    },
	    success: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-error');
	    }
	  });

	  jQuery("#regisPassword").validate({
	    highlight: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	    },
	    success: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-error');
	    }
	  });
/*
	jQuery('#pesanAccount').on('click',function(){
		jQuery('#pesanAccount').attr( "aria-hidden", true );
	});
	jQuery('#pesanProfile').on('click',function(){
		jQuery('#pesanProfile').attr( "aria-hidden", true );
	});
	jQuery('#pesanPassword').on('click',function(){
		jQuery('#pesanPassword').attr( "aria-hidden", true );
	});
*/
	jQuery('#updateAccount').on('click',function(){
		var valid = jQuery('#regisAccount').valid();
		if (valid){
		    var item = {};
		    var number = 1;
		    item[number] = {};
		    item[number]['user_id'] = jQuery('#addid').val();
		    //item[number]['user_name'] = jQuery('#addusername').val();
   		    item[number]['user_email'] = jQuery('#addemail').val();
		    item[number]['user_st'] = jQuery('#adduserst').val();
		    item[number]['role_id'] = jQuery('#adduserole').val();
		   		    
		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"setting/user/update_account",
		        data: item,
		         success: function(data)
		         {
		         	//console.log(data);
		            jQuery('#pesanAccount').removeClass('alert-error').addClass('alert-success');            
		            jQuery('#pesanAccount').find('strong').text('Data berhasil diperbarui');              
		            jQuery('#pesanAccount').show();
		            jQuery("html, body").animate({ scrollTop: 0}, "slow");
		         },
		         error: function (data)
		         {
		            jQuery('#pesanAccount').removeClass('alert-success').addClass('alert-error');            
		            jQuery('#pesanAccount').find('strong').text('Terjadi kesalahan dalam proses penyimpanan data');              
		            jQuery('#pesanAccount').show();
		         }
		      });   			
		}
	});

	jQuery('#updateProfile').on('click',function(){
		var valid = jQuery('#regisProfile').valid();
		if (valid){
		    var item = {};
		    var number = 1;
		    item[number] = {};
		    item[number]['user_id'] = jQuery('#addid').val();
   		    item[number]['ktp'] = jQuery('#addktp').val();
		    item[number]['user_full_name'] = jQuery('#addname').val();
		    item[number]['user_address'] = jQuery('#addalamat').val();
		    item[number]['user_birthday'] = jQuery('#addbirthday').val();
		    item[number]['user_number'] = jQuery('#addhp').val();
		    item[number]['tgl_berhenti'] = jQuery('#addberhenti').val();
		    item[number]['tgl_diangkat'] = jQuery('#adddiangkat').val();
		    item[number]['status'] = jQuery('#addstatus').val();
   		    //item[number]['user_picture'] = jQuery('#addpicture').val();
		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"setting/user/update_profile",
		        data: item,
		         success: function(data)
		         {
		         	//console.log(data);
		            jQuery('#pesanProfile').removeClass('alert-error').addClass('alert-success');            
		            jQuery('#pesanProfile').find('strong').text('Data berhasil diperbarui');              
		            jQuery('#pesanProfile').show();
		            jQuery("html, body").animate({ scrollTop: 0}, "slow");
		         },
		         error: function (data)
		         {
		            jQuery('#pesanProfile').removeClass('alert-success').addClass('alert-error');            
		            jQuery('#pesanProfile').find('strong').text('Terjadi kesalahan dalam proses penyimpanan data');              
		            jQuery('#pesanProfile').show();
		         }
		      });   			
		}
	});

	jQuery('#updatePassword').on('click',function(){
		var valid = jQuery('#regisProfile').valid();
		if (valid){
		    var item = {};
		    var number = 1;
		    item[number] = {};
		    item[number]['user_id'] = jQuery('#addid').val();
   		    item[number]['user_pass'] = jQuery('#addpassword').val();
		   
		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"setting/user/update_password",
		        data: item,
		         success: function(data)
		         {
		         	//console.log(data);
		            jQuery('#pesanPassword').removeClass('alert-error').addClass('alert-success');            
		            jQuery('#pesanPassword').find('strong').text('Data berhasil diperbarui');              
		            jQuery('#pesanPassword').show();
		            jQuery("html, body").animate({ scrollTop: 0}, "slow");
		         },
		         error: function (data)
		         {
		            jQuery('#pesanPassword').removeClass('alert-success').addClass('alert-error');            
		            jQuery('#pesanPassword').find('strong').text('Terjadi kesalahan dalam proses penyimpanan data');              
		            jQuery('#pesanPassword').show();
		         }
		      });   			
		}
	}); 
});
</script>