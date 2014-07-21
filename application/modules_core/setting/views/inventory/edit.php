        
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
	          <li class="active" id="pro"><a href="#profileMember" data-toggle="tab">Informasi Umum</a></li>
	          <li class="" id="hie"><a href="#hierarki" data-toggle="tab">Hierarki Produk</a></li>
	          <li class="" id="dis"><a href="#discountedProduct" data-toggle="tab">Riwayat Stok</a></li>
	        </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content">
	          <div class="tab-pane active" id="profileMember">
	          	<form id="editbarang" class="form-horizontal" novalidate="novalidate">	    

	          	    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id'] ?>">

				  	<div class="pane-header">
				  		<h5 class="text-primary"><?php echo "["; echo @$barang->barcode; echo "] "; echo $barang->nama_barang?></h5>
				  	</div>
				  	<div class="pane-content">
					  	<div class="pane-header-content">
					  		<a href="#">Informasi Barang</a>
					  	</div>				  
					  	<div class="panel-body">	         
			            <div class="form-group">
			              <label class="col-sm-3 control-label">Barang Parent</label>
			              <div class="col-sm-5">
				                <input name="barcode" id="parent_id" class="form-control" maxlength="16" type="hidden" value="<?php echo @$barang_parent->barcode; ?>" required/>
				                <input name="barcode" id="barcode-label" class="form-control" maxlength="16" type="text" value="<?php echo @$barang_parent->nama_barang; ?>" required disabled/>
			              </div>
			            </div>

			            <div class="form-group">
			              <label class="col-sm-3 control-label">Kode Barcode *</label>
			              <div class="col-sm-3">
			                <input name="barcode" id="barcode" class="form-control" maxlength="16" type="text" value="<?php echo @$barang->barcode; ?>" required disabled/>
			              </div>
			              <label id="barcode-validate" class="col-sm-3 control-label" style="text-align:left;display:none">Ini pesan</label>
			            </div>


			            <div class="form-group">
			              <label class="col-sm-3 control-label">Nama Barang *</label>
			              <div class="col-sm-7">
			                <input name="nama_barang" id="nama_barang" class="form-control" maxlength="100" type="text" value="<?php echo @$barang->nama_barang; ?>" required />
			              </div>
			            </div>

			           <div class="form-group">
			              <label class="col-sm-3 control-label">Buffer Stok</label>
			              <div class="col-sm-3">
			                <input name="buffer_stok" id="buffer_stok" class="form-control" maxlength="5" type="text" value="<?php echo @$barang->buffer_stok; ?>" required />
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			           <div class="form-group">
			              <label class="col-sm-3 control-label">Satuan *</label>
			              <div class="col-sm-3">
			                <input name="satuan" id="satuan" class="form-control" maxlength="20" type="text" value="<?php echo @$barang->satuan; ?>" required disabled/>
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			           <div class="form-group">
			              <label class="col-sm-3 control-label">Harga Jual *</label>
			              <div class="col-sm-3">
			                <input name="harga_jual" id="harga_jual" class="form-control" maxlength="25" type="text" value="<?php echo @$barang->harga_jual; ?>" required />
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			           <div class="form-group">
			              <label class="col-sm-3 control-label">Berat (gram)</label>
			              <div class="col-sm-3">
			                <input name="berat" id="berat" class="form-control" maxlength="25" type="text" value="<?php echo @$barang->berat; ?>" />
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			            <div class="form-group">
			              <label class="col-sm-3 control-label">Volume *</label>
			              <div class="col-sm-3">
			                <input name="volume" id="volume" class="form-control" maxlength="25" type="text" value="<?php echo @$barang->volume; ?>" required/>
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			            <!-- get parent -->
			           <div class="form-group">
			              <label class="col-sm-3 control-label">Konversi dari parent </label>
			              <div class="col-sm-3">
			                <input name="konversi" name="konversi" id="konversi" class="form-control" maxlength="3" type="text" value="<?php echo @$barang_parent->konversi; ?>" required disabled />
			                <span></span>
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>

			           <div class="form-group" id="rak">
			              <label class="col-sm-3 control-label">Kode Rak *</label>
			              <div class="col-sm-3">
			                <select class="form-control input-sm" name="kode_rak" id="kode_rak">
			                	<?php if (@$barang->barcode_parent == null || @$barang->barcode_parent == "") : ?>
				                    <option value="" selected >Palet</option>
				                <?php else : ?>
				                    <?php if (isset($raks)) : foreach ($raks as $rak) : ?>
				                        <option value="<?php echo $rak->kode_rak; ?>" 
				                        	<?php if(@$barang->kode_rak == $rak->kode_rak) : ?> selected <?php endif; ?> 
				                        	> <?php echo $rak->kode_rak; ?></option>
				                    <?php endforeach ; ?>
				                    <?php endif; ?>				                
				                <?php endif; ?>

			                </select>
			                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
			              </div>
			            </div>					
						      <div class="panel-footer">
						        <a href="#" class="btn btn-success" id="updateBarang">Simpan Perubahan</a>
						      </div>
							  </form>
					  	</div>							  
				  	</div>
				  </form>
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

	          <div class="tab-pane" id="hierarki">
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

  jQuery('#editbarang').on('click', '#updateBarang', function(){
      var valid = jQuery("#editbarang").valid();
      if (!valid) 
      {
        console.log('gagal');
      } 
      else 
      {
        //raknya harus terisi dulu

        //console.log('berhasil');
        // return false;
        var item   = {};
        var number = 1;
        item[number] = {};
        item[number]['barcode_parent'] = jQuery('#parent_id').val();
        item[number]['barcode'] = jQuery('#barcode').val();
        item[number]['nama_barang'] = jQuery('#nama_barang').val();
        item[number]['buffer_stok'] = jQuery('#buffer_stok').val();
        item[number]['harga_jual'] = jQuery('#harga_jual').val();
        item[number]['satuan'] = jQuery('#satuan').val();
        item[number]['berat'] = jQuery('#berat').val();
        item[number]['volume'] = jQuery('#volume').val();
        item[number]['konversi'] = jQuery('#konversi').val();
        item[number]['kode_rak'] = jQuery('#kode_rak').val();
        item[number]['petugas_id'] = jQuery('#user_id').val();

        // console.log(item[1]);
        // return false;

        $j.ajax({
            type: "POST",
            url: CI_ROOT+"setting/inventory/update_barcode",
            data: item,
             success: function(data)
             {
                //console.log(data);
                window.location.replace(CI_ROOT + 'setting/inventory');
             },
             error: function(data)
             {
                console.log('terjadi kesalahan sistem');
             }
        });   

      }
      
        
  }); //end of jQuery("#barcode").on('blur', function(){
    
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