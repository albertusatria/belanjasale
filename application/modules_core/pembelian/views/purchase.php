        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
        </div>
      <?php endif ; ?>     
    
      <div class="panel panel-default" id="posBeli">
            <input type="hidden" id="userid" name="syalala" class="form-control" value="<?php echo $user['user_id'] ?>">

	        <div class="panel-heading">
	          <div class="panel-btns">
	            <a href="#" class="panel-close">×</a>
	            <a href="#" class="minimize">−</a>
	          </div>
	          <h4 class="panel-title">Input Detail Barang Masuk <code>[step : <?php echo $list_order->step ?>]</code></h4>
	          <p>#Order : <code><?php echo $list_order->order_id ?></code> , 
	          	Tgl Transaksi : <code><?php echo date('d-m-Y',strtotime($list_order->tgl_transaksi)) ?></code> , 
	          	Jenis : <code><?php if(isset($list_order->is_pembelian)) : echo 'PEMBELIAN'; else : echo 'LAINNYA'; endif; ?></code>,
	          	Remark : <code><?php echo $list_order->remarks ?></code>  <br>
	          	Petugas Order : <code><?php if(isset($list_order->petugas_order_name)) : echo $list_order->petugas_order_name; else : echo "-"; endif; ?></code> , 
	          	Tgl Order : <code><?php if(isset($list_order->tgl_order)) : echo date('d-m-Y h:i:s',strtotime($list_order->tgl_order)); else : echo "-"; endif; ?></code> <br>
	          	Petugas Input : <code><?php if(isset($list_order->petugas_input_name)) : echo $list_order->petugas_order_name; else : echo "-"; endif; ?></code> , 
	          	Tgl Input : <code><?php if(isset($list_order->tgl_input)) : echo date('d-m-Y h:i:s',strtotime($list_order->tgl_input)); else : echo "-"; endif; ?></code> <br>
	          	Petugas Verifikasi : <code><?php if(isset($list_order->petugas_verifikasi_name)) : echo $list_order->petugas_order_name; else : echo "-"; endif; ?></code> , 
	          	Tgl Verifikasi : <code><?php if(isset($list_order->tgl_verifikasi)) : echo date('d-m-Y h:i:s',strtotime($list_order->tgl_verifikasi)); else : echo "-"; endif; ?></code>
	          	</p>
	        </div>
        <div class="panel-heading">
        	<div class="menu-head">
				<div class="input-group input-group-lg col-sm-12">
				  <!-- barcode -->
                  <span class="input-group-addon" id="span_id"><i class="fa fa-barcode"></i></span>
                  <input type="text" placeholder="barcode input.." name="product_id" class="add-product form-control">
				  <!-- expired -->
                  <span class="input-group-addon" style="display:none;" id="span_expired"><i class="fa fa-calendar"></i></span>
                  <input type="text" placeholder="tanggal kadaluwarsa" name="expired_product" id="date" class="add-expired form-control" style="display:none;">
				  <!-- qty -->
                  <span class="input-group-addon" style="display:none;" id="span_qty"><i class="fa fa-shopping-cart"></i></span>
                  <input type="text" placeholder="jumlah barang.." name="qty_product" class="add-qty form-control" style="display:none;">
				  <!-- harga -->
                  <span class="input-group-addon" style="display:none;" id="span_hargabeli"><i class="fa fa-money"></i></span>
                  <input type="text" placeholder="harga beli.." name="price_product" class="add-hargabeli form-control" style="display:none;">
                </div>
                <label for="date" name="error-notfound-date" class="error date-wrong-format">Wrong format for Expired Date!</label>                                
                <label for="date" name="error-empty-date" class="error date-cannot-empty">Expired Date cannot empty!</label>                
                <label for="product_id" name="error-notfound-productid" class="error not-found">Product not found!</label>
                <label for="product_id" name="error-empty-productid" class="error cannot-empty">Field above cannot empty!</label>
        	</div>
        
			<div class="total-amount pull-right">
				<h4 class="text-warning">Grand Total</h4>
				<h1 class="text-warning">
	            	<span class="amount grandtotal-price">0</span>
					<input type="text" id="grandtotal" class="edit-amount grandtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
				</h1>
			</div> 	
        </div>
        <div class="panel-body pos">
            <div class="table-responsive">
				<table class="table mb30" id="basket-buy">
		            <thead>
		              <tr>
		                <th colspan="2">Produk</th>
		                <th>Tanggal Kadaluwarsa</th>
		                <th>Kuantitas</th>
		                <th>Disimpan di</th>		                
		                <th class="text-right">Harga Satuan</th>
		                <th class="text-right">Subtotal</th>
		                <th></th>
		              </tr>
		            </thead>
		            <tbody>

		            </tbody>
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	 
		<div class="panel-footer"><!-- panel-footer -->
		 <div class="row">
			<div class="col-sm-3 col-sm-offset-9">
			  <a class="btn btn-default">Cancel</a>&nbsp;		
			  <a class="btn btn-danger" id="prosesToVerification">Check-In</a>
			</div>
		 </div>
	  </div>             
      </div><!-- panel -->
        
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
<script src="<?php echo base_url();?>bracket/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
        var editMode = false;
</script>
<script type="text/javascript">
var $j = jQuery.noConflict(); 
jQuery(document).ready(function() {
  
  	var searchProductChosen = "";
	// Chosen Select
	$j(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});
	$j('#listProducts_chosen .chosen-drop').on('click','li',function () {
		searchProductChosen = $j(this).text();
	});
	
	$j('#listProducts_chosen .chosen-search input').keyup(function(e) {
		var e = window.event || e;
		var keyUnicode = e.charCode || e.keyCode;
		if (e !== undefined) {
			switch (keyUnicode) {
				case 13: addProduct(searchProductChosen); // Enter			
				default: $j(this).numeric();
			}
		}
	
	});	

	initBasket();
	$j('.add-product').blur(function() {
		$j(this).numeric();
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
			case 13: addProduct($j('.add-product').val()); // Enter			
			default: $j(this).numeric();
		}
	}
	
	});	

	$j('.add-expired').blur(function() {
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
			case 13: addExpired($j('.add-expired').val()); // Enter			
			default: $j(this).val();
		}
	}
	
	});	

	$j('.add-qty').blur(function() {
		$j(this).numeric();
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
			case 13: addQty($j('.add-qty').val()); // Enter			
			default: $j(this).numeric();
		}
	}
	
	});	

	$j('.add-hargabeli').blur(function() {
		$j(this).numeric();
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
			case 13: addHargabeli($j('.add-hargabeli').val()); // Enter			
			default: $j(this).numeric();
		}
	}
	
	});	
		
	findSubTotals();

	//format numeric on edit
	$j('.edit-amount').blur(function() {
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

    $j('#basket-buy').on('click','tbody tr td span.expired',function () {
    	if(editMode)
    	{
			$j(this).hide();
	        var editExp = $j(this).next();
			editExp.show().focus();		
			$j(editExp).focusout(function() {
			    var currVal = $j(this).val();
			    if(currVal == '')
			    {
					//$j('label.date-cannot-empty').show();
					return false;
			    }
			    
			    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; //Declare Regex
			    var dtArray = currVal.match(rxDatePattern); // is format OK?
			    
			    if (dtArray == null) 
			        return false;
			    
			    //Checks for dd/mm/yyyy format.
				dtDay = dtArray[1];
			    dtMonth= dtArray[3];
			    dtYear = dtArray[5];         
			    
			    if (dtMonth < 1 || dtMonth > 12) 
			    {
					//$j('label.date-wrong-format').show();
				    return false;
			    }
			    else if (dtDay < 1 || dtDay> 31) 
			    {
					//$j('label.date-wrong-format').show();
					return false;   
			    }
			    else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
			    {
					//$j('label.date-wrong-format').show();
					return false;
			    }
			    else if (dtMonth == 2) 
			    {
			        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
			        if (dtDay> 29 || (dtDay ==29 && !isleap)) 
			        {
						//$j('label.date-wrong-format').show();
						return false;
			        }
			    }
				$j(this).attr("value",currVal).hide();
				$j(this).prev().text(currVal).show();
			});	
		}
    });	

    $j('#basket-buy').on('click','tbody tr td span.amount',function () {
    	if(editMode)
    	{
			qty = Number($j(this).closest("tr").find("td input.qty").val());
			price = Number($j(this).closest("tr").find("td input.price").val());
			console.log('qty awal: '+qty);
			console.log('price awal : '+price);
	
	    	$j(this).hide();
	        var editAmount = $j(this).next();
			editAmount.show().focus();
		    $j(editAmount).focusout(function() {
				var valueAmount = $j(this).val();
				
				if(valueAmount == "")
					valueAmount = 0;
				
				//format number after edit
				//       if($j(this).hasClass('price'))
				//       {
				//       	//bila yang diedit price
				//       	$j(this).formatCurrency({region: 'id-ID'});
				// }
				//       $j(this).autoNumeric('init');
				
				console.log(valueAmount);
				
				// $j(this).attr("value",$j(this).autoNumeric('get')).hide();
				$j(this).attr("value",valueAmount).hide();
				$j(this).prev().text(valueAmount).show();
				
				qty = Number($j(this).closest("tr").find("td input.qty").val());
				price = Number($j(this).closest("tr").find("td input.price").val());
				
				console.log('nilai input price : ' + $j(this).closest("tr").find("td input.price").val())
				console.log('qty : '+qty);
				console.log('price : '+price);
				
				Subtotal = qty * price;
				$j(this).closest("tr").find("td span.subtotal-price").text(Subtotal).formatCurrency({region: 'id-ID'});
				$j(this).closest("tr").find("td input.subtotal-price").val(Subtotal);
				$j('#basket-buy tbody td .product-price').formatCurrency({region: 'id-ID'});
				
				findSubTotals2();
				});
		}
    });

/*
	$j('#basket-buy').on('click','tbody tr td span.store-label',function () {
    	$j(this).hide();
        var editStore = $j(this).next();
		editStore.show().focus();
		
		editStore.blur(function(){
			var newEditStore = $j(this).closest('td').find('.store-select option:selected').text();
	        $j(this).attr("value",newEditStore).hide();
	        $j(this).prev().text(newEditStore).show();						
		});

	});
*/
    // Delete row in a table
    $j('#basket-buy').on('click','.delete-row',function(){

      var c = confirm("Continue delete this product from Cart?");
      if(c)
        $j(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
		  var checkTR = $j("#basket-buy .products").length > 0;
		  if(checkTR)
		  {
			  findSubTotals2();  
		  }
		  else
		  {
	        $j("h1 span.grandtotal-price").text(0).formatCurrency({region: 'id-ID'});
	        $j(".grandtotal-price",this).val(0);					  
		  }
		  
        });
        return false;
    });


	$j("#prosesToVerification").on('click',function(){
		var x = document.getElementById("basket-buy").rows.length;
		if (x > 1) {
			//save to detail nota	

			  var items = {};
		      var num = 1;
		      items[num] = {};

             $j("tbody tr").each(function() {
              /* get Qty and EA Price */
                  console.log(num);
                  items[num] = {};
                  items[num]['order_id'] = '<?php echo $list_order->order_id ?>';
                  items[num]['barcode'] = $j(this).find("td span.barcode").text();
                  items[num]['qty'] = $j(this).find("td input.qty").val();
                  items[num]['harga_beli'] = $j(this).find("td input.price").val(); 
                  items[num]['exp_date'] = $j(this).find("td input.expired").val();
                  items[num]['sub_total'] = $j(this).find("td input.subtotal-price").val();
                  items[num]['kode_rak'] = $j(this).find("td span.rak").text();
                  console.log(JSON.stringify(items[num]));                           
                  num = num + 1;
               });
		      //update span
		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"pembelian/pembelian/save_detail_order",
		        data: items,
		         success: function(data)
		         {
		         	console.log('berhasil');
		            //simpan detail nota       			

					//ubah step jadi verifikasi, tambah input petugas, tgl input, jumlah	
			      	//simpan

				    var item = {};
				    var number = 1;
				    item[number] = {};
				    item[number]['order_id'] = '<?php echo $list_order->order_id ?>';
				    item[number]['step'] = 'verifikasi';
				    item[number]['petugas_input'] = jQuery('#userid').val();
				    item[number]['jumlah'] = jQuery('#grandtotal').val();

				      //update span
				      jQuery.ajax({
				        type: "POST",
				        url: CI_ROOT+"pembelian/pembelian/update_order",
				        data: item,
				         success: function(data)
				         {
				            console.log(data);
				            console.log('joss');
				            //redirect
			                window.location.replace(CI_ROOT + 'pembelian/order');
				         },
				         error: function (data)
				         {  
				            console.log('pait');
				         }

				        }); 


		         },
		         error: function (data)
		         {  
		            console.log('pait');
		         }

		        }); 
		}
	});
    
    $j('#basket-buy').on('click','tbody tr:last td span.amount',function () {
		if(editMode == false)
		{
		    alert('Mohon selesaikan proses input barang!');
		    $j('.menu-head').find('input.active').focus();
		    return false;			
		}
    });     
    
    $j('#basket-buy').on('click','tbody tr:last td span.expired',function () {
		if(editMode == false)
		{
		    alert('Mohon selesaikan proses input barang!');
		    $j('.menu-head').find('input.active').focus();
		    return false;			
		}
    }); 
    
    
});
</script>
<script type="text/javascript">

function addProduct(id) {
  editMode = false;
  var item = {};
  var num = 1;
  item[num] = {};
  item[num]['barcode'] = id;
  console.log(id);
  //ajax cari barang
  jQuery.ajax({
    type: "POST",
    url: CI_ROOT+"setting/inventory/get_detail_barang",
    data: item,
     success: function(data)
     {
     	//jika kosong
		if(id =="")
		{
			$j('label.not-found').hide();	
			$j('label.cannot-empty').show();
			$j('.add-product').closest('div').addClass('has-error');	
			return false;
		}
		
		//jika tidak ketemu
		if(data.length > 0)
		{
			var id; var nama; var rak;
            for (index = 0; index < data.length; ++index) {
                id = data[index]['barcode'];
                nama = data[index]['nama_barang'];
                if (data[index]['kode_rak'] == "") {
                	rak = 'Palet';
                } else {
                	rak = data[index]['kode_rak'];
                }
            } 
			console.log(id + nama + rak);
			//hidden semua span
			$j('label[name=product_id]').hide();			
			$j('.add-product').closest('div').removeClass('has-error');
			$j('label.not-found').hide();	
			$j('label.cannot-empty').hide();

			//tambah baris
			$j('#basket-buy > tbody:first').append(
			        '<tr class="products">'+
			            '<td>'+
			            	'<img src="<?php echo base_url()?>bracket/images/photos/media3.png" alt="">'+
			            '</td>'+
			            '<td>'+
			            	'<span class="product barcode">'+id+'</span><br>'+
							'<strong><label for="product-name">'+nama+'</label></strong>'+
						'</td>'+
						'<td>'+
							'<span class="product expired">dd/mm/yyyy</span>'+
							'<input type="text" class="product expired" value="dd/mm/yyyy">'+
						'</td>'+
			            '<td>'+
			            	'<span for="qty" class="amount qty">1</span>'+
			            	'<input data-l-zero="deny" type="text" value="1" class="edit-amount qty" />'+
			            '</td>'+
		                '<td>'+
		                	'<span for="store-place" class="store-label rak">'+rak+'</span>'+
		                '</td>'+
						'<td class="text-right">'+
			            	'<span class="amount product-price">0</span>'+
			            	'<input type="text" class="edit-amount price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>'+
			            '</td>'+
			            '<td class="text-right">'+
			            	'<span class="amount subtotal-price">0</span>'+
							'<input type="text" class="edit-amount subtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>'+
			            '</td>'+
			            '<td class="table-action">'+
			              '<a href="#" class="delete-row"><i class="fa fa-times"></i></a>'+
			            '</td>'+
					'</tr>'
			);
	
			initBasket();

			//hidden product
			jQuery(".add-product").hide();
			jQuery("#span_id").hide();
			//show tanggal
			jQuery('.menu-head').children('input').removeClass('active');
			jQuery(".add-expired").addClass('active').show();
			jQuery("#span_expired").show();

			$j('.add-expired').val('');
			$j('.add-expired').focus();

		}
		else {
			console.log('tidak ketemu');
			$j('label.cannot-empty').hide();
			$j('label.not-found').show();
			$j('.add-product').closest('div').addClass('has-error');
		}
		return false;
     	//tambah field
     	console.log(data);

     },
     error: function (data)
     {
     	console.log(data);
     }
  	});  	

	//tambah baris
	return false;

	var checkUnit = id.substr(0, 2);
	var store = "";

	if(id =="")
	{
		
		$j('label.not-found').hide();	
		$j('label.cannot-empty').show();
		$j('.add-product').closest('div').addClass('has-error');	
		return false;
	}
	
	if(id == "0000")
	{
		$j('label.cannot-empty').hide();
		$j('label.not-found').show();
		$j('.add-product').closest('div').addClass('has-error');
	}
	else
	{
		if(checkUnit == "01")
		{
			store = "Rak";
		}
		else if(checkUnit == "11")
		{
			store = "Pallete A1";
		}
		else if(checkUnit == "12")
		{
			store = "Pallete A2";
		}
		else{
			store = "Pallete B";
		}
		$j('label[name=product_id]').hide();			
		$j('.add-product').closest('div').removeClass('has-error');
		$j('#basket-buy > tbody:first').append(
		        '<tr class="products">'+
		            '<td>'+
		            	'<img src="<?php echo base_url()?>bracket/images/photos/media3.png" alt="">'+
		            '</td>'+
		            '<td>'+
						'<label for="product-name">Product Name #1</label>'+
					'</td>'+
					'<td>'+id+'</td>'+
		            '<td>'+
		            	'<span for="qty" class="amount">1</span>'+
		            	'<input data-l-zero="deny" type="text" value="1" class="edit-amount qty" />'+
		            '</td>'+
	                '<td>'+
	                	'<span for="store-place" class="store-label">'+store+'</span>'+
	                '</td>'+
					'<td class="text-right">'+
		            	'<span class="amount product-price">0</span>'+
		            	'<input type="text" class="edit-amount price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>'+
		            '</td>'+
		            '<td class="text-right">'+
		            	'<span class="amount subtotal-price">0</span>'+
						'<input type="text" class="edit-amount subtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>'+
		            '</td>'+
		            '<td class="table-action">'+
		              '<a href="#" class="delete-row"><i class="fa fa-times"></i></a>'+
		            '</td>'+
				'</tr>'
		);
	

		$j('.add-product').val('');
		initBasket();
		findSubTotals2();
	}
	
	return false;
}

function initBasket(){
	$j('label.error').hide();
	$j('input.price').hide();
	$j('input.qty').hide();	
	$j('select.store-select').hide();	
	$j('input.subtotal-price').hide();		
	$j('input.grandtotal-price').hide();	
	$j('input.expired').hide();	
	$j("#date").mask("99/99/9999");
	$j("input.expired").mask("99/99/9999");
	
	//format price on init
	$j('span.subtotal-price').formatCurrency({region: 'id-ID'});		
	$j('span.product-price').formatCurrency({region: 'id-ID'});		
}

function addExpired(exp) {
    var currVal = exp;
    if(currVal == '')
    {
		$j('label.date-cannot-empty').show();
		return false;
    }
    
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; //Declare Regex
    var dtArray = currVal.match(rxDatePattern); // is format OK?
    
    if (dtArray == null) 
        return false;
    
    //Checks for dd/mm/yyyy format.
	dtDay = dtArray[1];
    dtMonth= dtArray[3];
    dtYear = dtArray[5];         
    
    if (dtMonth < 1 || dtMonth > 12) 
    {
		$j('label.date-wrong-format').show();
	    return false;
    }
    else if (dtDay < 1 || dtDay> 31) 
    {
		$j('label.date-wrong-format').show();
		 return false;   
    }
    else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
    {
		$j('label.date-wrong-format').show();
		return false;
    }
    else if (dtMonth == 2) 
    {
        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
        if (dtDay> 29 || (dtDay ==29 && !isleap)) 
        {
			$j('label.date-wrong-format').show();
			return false;
        }
    }
	$j('label.date-cannot-empty').hide();
	$j('label.date-wrong-format').hide();


	jQuery('#basket-buy tr:last').find('td span.expired').text(exp);
	jQuery('#basket-buy tr:last').find('td input.expired').val(exp);
	//hidden tanggal
	jQuery(".add-expired").hide();
	jQuery("#span_expired").hide();
	//show qty
	jQuery('.menu-head').find('input').removeClass('active');
	jQuery(".add-qty").addClass('active').show();
	jQuery("#span_qty").show();

	$j('.add-qty').val(1);
	$j('.add-qty').focus();
}


function addQty(qty) {
	jQuery('#basket-buy tr:last').find('td span.qty').text(qty);
	jQuery('#basket-buy tr:last').find('td input.qty').val(qty);
	//hidden qty
	jQuery(".add-qty").hide();
	jQuery("#span_qty").hide();
	//show qty
	jQuery(".add-hargabeli").show();
	jQuery("#span_hargabeli").show();

	jQuery('.menu-head').find('input').removeClass('active');
	jQuery(".add-hargabeli").addClass('active').show();
	$j('.add-hargabeli').val(1);
	$j('.add-hargabeli').focus();
}

function addHargabeli(harga) {
	jQuery('#basket-buy tr:last').find('td span.product-price').text(harga);
	jQuery('#basket-buy tr:last').find('td input.price').val(harga);

	var price = jQuery('#basket-buy tr:last').find('td input.price');
	// console.log(price.val());
 	//    if(price.hasClass('price'))
 	//    {
 	//    	price.formatCurrency({region: 'id-ID'});
	// }	
 	//    price.autoNumeric('init');
	// console.log(price.val());
        
	qty = Number(jQuery('#basket-buy tr:last').find("td input.qty").val());
	Subtotal = qty * Number(harga);

	console.log('qty : '+qty);
	console.log('price : '+harga);


    jQuery('#basket-buy tr:last').find("td span.subtotal-price").text(Subtotal).formatCurrency({region: 'id-ID'});
    jQuery('#basket-buy tr:last').find("td input.subtotal-price").val(Subtotal);
	$j('#basket-buy tbody td .product-price').formatCurrency({region: 'id-ID'});			
	findSubTotals2();

	//hidden qty
	jQuery(".add-hargabeli").hide();
	jQuery("#span_hargabeli").hide();
	//show qty
	jQuery(".add-product").show();
	jQuery("#span_id").show();

	jQuery('.menu-head').find('input').removeClass('active');
	editMode = true;
	$j('.add-product').val("");
	$j('.add-product').focus();
}

function findSubTotals() {

    var Subtotal = 0; 
    var qty = 0; 
    var price = 0;
    var grandTotal = 0;


    $j("tbody tr").each(function() {
		/* get Qty and EA Price */
		qty = Number($j(this).closest("tr").find("td input.qty").val());
		price = Number($j(this).closest("tr").find("td input.price").val());
		 // count subtotal per row 
        Subtotal = qty * price;
        $j(this).find("td span.subtotal-price").text(Subtotal).formatCurrency({region: 'id-ID'});
        $j(this).find("td input.subtotal-price").val(Subtotal);

        $j("td input.subtotal-price",this).each(function() {
           grandTotal += Number($j(this).val());
        }); 
        
        $j("h1 span.grandtotal-price").text(grandTotal).formatCurrency({region: 'id-ID'});
        $j(".grandtotal-price",this).val(grandTotal);		
    });
}

function findSubTotals2() {

    var Subtotal = 0; 
    var qty = 0; 
    var price = 0;
    var grandTotal = 0;

    $j("tbody tr").each(function() {

        $j("td input.subtotal-price",this).each(function() {
           grandTotal += Number($j(this).val());
        }); 

        $j("h1 span.grandtotal-price").text(grandTotal).formatCurrency({region: 'id-ID'});
        $j(".grandtotal-price",this).val(grandTotal);	

        $j('#grandtotal').val(grandTotal);
        console.log($j('#grandtotal').val());
    });
	
}

</script>