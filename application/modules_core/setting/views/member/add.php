        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      	<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Oops!</strong>   <?php echo $message; ?>
        </div>
      <?php endif ; ?>     
               

	  <div class="row">
	  
		  <div class="col-sm-12 edit-member" id="menukiri">   	          
	        <!-- Nav tabs -->
	        <ul class="nav nav-tabs nav-justified nav-profile">
	          <li class="active" id="profil"><a href="#profileMember" data-toggle="tab">Profile</a></li>
	          <li class="" style="display:none;" id="diskon"><a href="#discountedProduct" data-toggle="tab">Discounted Products</a></li>
	        </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content">
	          <div class="tab-pane active" id="profileMember">	            
				  	<div class="pane-header">
				  		<h5 class="text-primary">Input Barang</h5>
				  	</div>
<!-- 
			      <div id="pesan" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>
 -->
				  	<div class="pane-content">
					  	<div class="pane-header-content">
					  		<a href="#">Profile</a>
					  	</div>				  
					  	<div class="panel-body">
							<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">
						
						     <input type="hidden" id="adduserid" name="user_id" id="user_id" value="1">						

					            <div class="form-group">
					              <label class="col-sm-2 control-label">ID <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="text" id="addid" name="id" class="form-control" placeholder="Masukkan ID Member, contoh KTP/SIM/Paspor" required="">
					              </div>
					            </div>		  
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Full Name <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <input type="text" id="addname" name="name" class="form-control" placeholder="Masukkan nama lengkap member..." required="">
					              </div>
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Alamat <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <textarea rows="5" id="addalamat" class="form-control" placeholder="Masukkan alamat member..." required=""></textarea>
					              </div>
					            </div>
					
								<div class="form-group">
					              <label class="col-sm-2 control-label">Daerah <span class="asterisk">*</span></label>
					              <div class="col-sm-2">
						            <select id="addprop" name="prop" class="form-control input-sm" required="">
					      			<option value="">Pilih Provinsi</option>
					                <?php foreach ($provinsis as $provinsi) : ?>
					                  <option value="<?php echo $provinsi->id ?>"> <?php echo $provinsi->nama?> </option>
					                <?php endforeach; ?>
					                </select>               
					                <label class="error" for="prop"></label>
					              </div>
					              <div class="col-sm-2">
					                <select id="addkota" name="kota" class="form-control input-sm" required="">
					                  <option value="">Pilih Kabupaten/Kota</option>
					                </select>
					                <label class="error" for="kota"></label>
					              </div>               
					              <div class="col-sm-2">
					                <select id="addkec" name="kec" class="form-control input-sm" required="">
					                  <option value="">Pilih Kecamatan</option>
					                </select>
					                <label class="error" for="kec"></label>
					              </div>    
					              <div class="col-sm-2">
					                <select id="addkel" name="kel" class="form-control input-sm" required="">
					                  <option value="">Pilih Kelurahan/Desa</option>
					                </select>
					                <label class="error" for="kel"></label>
					              </div>                        
					            </div>
					            
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Kode Pos <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="text" id="addkdpos" name="kode-pos" class="form-control num" placeholder="Type member zip..." required="">
					              </div>
					            </div>
					
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
					              <div class="col-sm-4">
					                <input type="text" id="addrmh" name="telephone" class="form-control num" placeholder="masukkan nomer telepon..." required="">
					              </div>
					              <div class="col-sm-4">
					                <input type="text" id="addhp" name="hp" class="form-control num" placeholder="atau masukkan nomer HP...">
					              </div>              
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Fax</label>
					              <div class="col-sm-5">
					                <input type="text" id="addfax" name="fax" class="form-control num" placeholder="Type member fax...">
					              </div>
					            </div>
					            
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="email" id="addemail" name="email" class="form-control" placeholder="Type member email..." required="">
					              </div>
					            </div>

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Sales <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
						            <select id="addsales" name="sales" class="form-control input-sm" required="">
                                    <option value=""> Pilih Sales </option>
					                <?php foreach ($saless as $sales) : ?>
					                  <option value="<?php echo $sales->user_id ?>" <?php if (@$member->sales_id == $sales->user_id) : ?> selected <?php endif; ?>
					                  	> <?php echo $sales->user_full_name?> </option>
					                <?php endforeach; ?>
						            </select>
					              </div>
					            </div>                        	

						      <div class="panel-footer">
						        <a href="#" class="btn btn-success" id="saveMember">Save New Member</a>
						      </div>
							  </form>
					  	</div>							  
				  	</div>
	          </div>
	          
	          <div class="tab-pane" id="discountedProduct">
			  	<div class="pane-header">
			  		<h5 class="text-primary">Raden Agoeng Bhimasta</h5>
			  	</div>

			      <div id="pesan2" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>


			  	<div class="pane-content">
				  	<div class="pane-header-content">
				  		<a href="#">Discounted Products</a>
				  	</div>				  			  	
			        <div class="panel-body discounted-products">
			            <div class="table-responsive">
							<table class="table mb30" id="basket-buy">
					            <thead>
					              <tr>
					                <th>ID</th>
					                <th>Minimal Quantity</th>
					                <th class="text-right">Discounted Price</th>
					                <th></th>
					              </tr>
					            </thead>
					            <tbody>
					              <tr class="products">
					                <td><label for="product-name">Product ID #1</label></td>
					                <td>
					                	<span for="qty" class="amount">1</span>
					                	<input data-i-zero="deny" type="text" value="1" class="edit-amount qty" />
					                </td>
					                <td class="text-right">
					                	<span class="amount price">0</span>
					                	<input type="text" class="edit-amount price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
					                </td>
					                <td class="table-action">
					                  <a href="#" class="delete-row"><i class="fa fa-times"></i></a>
					                </td>
					              </tr>
					            </tbody>
					          </table>            
			            </div><!-- table-responsive -->
			            
			        </div><!-- panel-body -->	 	
			  	</div>
	          </div>
	        </div><!-- tab-content -->
	        
	        <!-- end Nav tabs -->
        </div>	  
	  </div>        
    </div><!-- contentpanel -->
    
<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

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
  	initDiscountProducts();
  	initProfileField();

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
  	
    $j('#discountedProduct').on('click','tbody tr td span.amount',function () {
    	$j(this).hide();
        var editAmount = $j(this).next();
		editAmount.show().focus();
	    $j(editAmount).focusout(function() {
			var valueAmount = $j(this).val();

			if(valueAmount == "")
				valueAmount = 0;
				
			editAmount.attr("value",valueAmount).hide();
	        $j(this).prev().text(valueAmount).show();

	    });
    });
    
  // Basic Form
  jQuery("#regisMember").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  }); 
  
	jQuery("input[name=hp]").rules( "add", {
	  minlength: 10,
	  maxlength: 13,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});  
	
	jQuery("input[name=telephone]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});		
	
	jQuery("input[name=fax]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});	
      
    jQuery('#addMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#addMember input[name=telephone]').removeAttr("required");
    	}
    });
    
    jQuery('#editMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#editMember input[name=telephone]').removeAttr("required");	
    	}
    });  

	function initDiscountProducts(){	
		$j('input.price').hide();
		$j('input.qty').hide();		
		$j('input.qty').numeric();
		
		//format price on init
		$j('span.price').formatCurrency({region: 'id-ID'});		
	}

	function initProfileField(){	
		$j('input.num').numeric();
	}

	jQuery('#addprop').on('change', function() {
	    // ajaxku = buatajax();
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_prov'] = jQuery('#addprop').val();

	    // console.log(id);
	    // console.log(item[1]['id_prov']);

	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_kota",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkota').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkota').append('<option value="'+id+'">'+nama+'</option>');
	            } 
	            jQuery('#addkec').find("option").remove();
	            jQuery('#addkec').append('<option value="">- Kecamatan - </option>');
	            jQuery('#addkel').find("option").remove();
	            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');

	         },
	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#addkota').on('change', function() {
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_kabupaten'] = jQuery('#addkota').val();
	    // console.log(id);
	    // console.log(item[1]['id_kabupaten']);
	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_kecamatan",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkec').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkec').append('<option value="'+id+'">'+nama+'</option>');
	            } 
	            jQuery('#addkel').find("option").remove();
	            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');
	         },

	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#addkec').on('change', function() {
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_kecamatan'] = jQuery('#addkec').val();
	    // console.log(id);
	    // console.log(item[1]['id_kecamatan']);
	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_desa",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkel').find("option").remove();	            
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkel').append('<option value="'+id+'">'+nama+'</option>');
	            }
	            jQuery('#addkel').append('<option value=""></option>'); 
	         },
	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#saveMember').on('click',function(){
		var valid = jQuery('#regisMember').valid();
		if (!valid) 
		{
			console.log('gagal');
		}
		else 
		{
			console.log('berhasil');
			//simpan
			//tab berikutnya
			//disabled
		    var item = {};
		    var number = 1;
		    item[number] = {};
		    item[number]['id'] = jQuery('#addid').val();
		    item[number]['nama'] = jQuery('#addname').val();
		    item[number]['alamat'] = jQuery('#addalamat').val();
		    item[number]['prov'] = jQuery('#addprop').val();
		    item[number]['kota'] = jQuery('#addkota').val();
		    item[number]['kec'] = jQuery('#addkec').val();
		    item[number]['kel'] = jQuery('#addkel').val();
		    item[number]['kdpos'] = jQuery('#addkdpos').val();
		    item[number]['telp_rmh'] = jQuery('#addrmh').val();
		    item[number]['telp_hp'] = jQuery('#addhp').val();
		    item[number]['fax'] = jQuery('#addfax').val();
		    item[number]['email'] = jQuery('#addemail').val();
		    item[number]['salesid'] = jQuery('#addsales').val();
		    item[number]['petugas_id'] = jQuery('#adduserid').val();

		    console.log(item[1]);
		    //return false;

		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"setting/member/add_member",
		        data: item,
		        success: function(data)
		        {
		         	// console.log(data);
	                // window.location.replace(CI_ROOT + 'setting/member');
	                window.location.replace(CI_ROOT + 'setting/member/detail/' + jQuery('#addid').val());
		        },
		        error: function (data)
		        {
		         	console.log('error');
		        }
		      });   			
		}
	});  

});
</script>