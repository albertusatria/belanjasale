        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      	<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
        </div>
      <?php endif ; ?>     
               

	  <div class="row">
	  
		  <div class="col-sm-12 edit-member">   	          
	        <!-- Nav tabs -->
	        <ul class="nav nav-tabs nav-justified nav-profile">
	          <li class="active"><a href="#profileMember" data-toggle="tab">Profile</a></li>
	          <li class=""><a href="#discountedProduct" data-toggle="tab">Discounted Products</a></li>
	        </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content">
	          <div class="tab-pane active" id="profileMember">	            
				  	<div class="pane-header">
				  		<h5 class="text-primary">Raden Agoeng Bhimasta</h5>
				  	</div>
				  	<div class="pane-content">
					  	<div class="pane-header-content">
					  		<a href="#">Profile</a>
					  	</div>				  
					  	<div class="panel-body">
							<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">
						
						     <input type="hidden" id="adduserid" name="user_id" value="1">						
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
					                <select id="addprop" name="prop" class="form-control input-sm" required="" onchange="ajaxkota(this.value)">
					      					<option value="">Pilih Provinsi</option>
					                                  <option value="11"> Aceh </option>
					                                  <option value="12"> Sumatera Utara </option>
					                                  <option value="13"> Sumatera Barat </option>
					                                  <option value="14"> Riau </option>
					                                  <option value="15"> Jambi </option>
					                                  <option value="16"> Sumatera Selatan </option>
					                                  <option value="17"> Bengkulu </option>
					                                  <option value="18"> Lampung </option>
					                                  <option value="19"> Kepulauan Bangka Belitung </option>
					                                  <option value="21"> Kepulauan Riau </option>
					                                  <option value="31"> Dki Jakarta </option>
					                                  <option value="32"> Jawa Barat </option>
					                                  <option value="33"> Jawa Tengah </option>
					                                  <option value="34"> Di Yogyakarta </option>
					                                  <option value="35"> Jawa Timur </option>
					                                  <option value="36"> Banten </option>
					                                  <option value="51"> Bali </option>
					                                  <option value="52"> Nusa Tenggara Barat </option>
					                                  <option value="53"> Nusa Tenggara Timur </option>
					                                  <option value="61"> Kalimantan Barat </option>
					                                  <option value="62"> Kalimantan Tengah </option>
					                                  <option value="63"> Kalimantan Selatan </option>
					                                  <option value="64"> Kalimantan Timur </option>
					                                  <option value="65"> Kalimantan Utara </option>
					                                  <option value="71"> Sulawesi Utara </option>
					                                  <option value="72"> Sulawesi Tengah </option>
					                                  <option value="73"> Sulawesi Selatan </option>
					                                  <option value="74"> Sulawesi Tenggara </option>
					                                  <option value="75"> Gorontalo </option>
					                                  <option value="76"> Sulawesi Barat </option>
					                                  <option value="81"> Maluku </option>
					                                  <option value="82"> Maluku Utara </option>
					                                  <option value="91"> Papua Barat </option>
					                                  <option value="94"> Papua </option>
					                                </select>               
					                <label class="error" for="prop"></label>
					              </div>
					              <div class="col-sm-2">
					                <select id="addkota" name="kota" class="form-control input-sm" required="" onchange="ajaxkec(this.value)">
					                  <option value="">Pilih Kabupaten/Kota</option>
					                </select>
					                <label class="error" for="kota"></label>
					              </div>               
					              <div class="col-sm-2">
					                <select id="addkec" name="kec" class="form-control input-sm" required="" onchange="ajaxkel(this.value)">
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
					                <input type="text" id="addkdpos" name="kode-pos" class="form-control" placeholder="Type member zip..." required="">
					              </div>
					            </div>
					
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
					              <div class="col-sm-4">
					                <input type="text" id="addrmh" name="telephone" class="form-control" placeholder="masukkan nomer telepon..." required="">
					              </div>
					              <div class="col-sm-4">
					                <input type="text" id="addhp" name="hp" class="form-control" placeholder="atau masukkan nomer HP...">
					              </div>              
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Fax</label>
					              <div class="col-sm-5">
					                <input type="text" id="addfax" name="fax" class="form-control" placeholder="Type member fax...">
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
					      				<select id="addsales" class="form-control input-sm" required="">
		                                  <option value="3471049900110001"> Bebek </option>
		                                  <option value="3471049900110002"> Deo </option>
										</select>
					              </div>
					            </div>                        	

						      <div class="panel-footer">
						        <button class="btn btn-success" id="saveMember">Save New Member</button>
						      </div>
							  </form>
					  	</div>							  
				  	</div>
	          </div>
	          
	          <div class="tab-pane" id="discountedProduct">
			  	<div class="pane-header">
			  		<h5 class="text-primary">Raden Agoeng Bhimasta</h5>
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
    
});
</script>
<script type="text/javascript">
function initDiscountProducts(){	
	$j('input.price').hide();
	$j('input.qty').hide();		
	$j('input.qty').numeric();
	
	//format price on init
	$j('span.price').formatCurrency({region: 'id-ID'});		
}


</script>