        
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
		                <th colspan="2">Nama Produk</th>
		                <th>Tanggal Kadaluwarsa</th>
		                <th>Kuantitas</th>
		                <th>Disimpan di</th>		                
		                <th class="text-right">Harga Satuan</th>
		                <th class="text-right">Subtotal</th>
		                <th></th>
		              </tr>
		            </thead>
		            <tbody>

	            	<?php $i = 0; ?>
	            	<?php $max = count($order_detail); ?>
	            	<?php if($max != 0) : while ($i < $max) : ?>

			        '<tr class="products">
			            <td>
			            	<img src="<?php echo base_url()?>bracket/images/photos/media3.png" alt="">
			            </td>
			            <td>
			            	<span class="product barcode"><?php echo $order_detail[$i]->barcode ?></span><br>
							<strong><label for="product-name"><?php echo $order_detail[$i]->nama_barang ?></label></strong>
						</td>
						<td>
							<span class="product expired"><?php echo date('d/m/y',strtotime($order_detail[$i]->exp_date)) ?></span><br>
							<input type="text" class="product expired" value="<?php echo date('d/m/y',strtotime($order_detail[$i]->exp_date)) ?>">
						</td>
			            <td>
			            	<span for="qty" class="amount qty"><?php echo $order_detail[$i]->qty ?></span>
			            	<input data-l-zero="deny" type="text" value="<?php echo $order_detail[$i]->qty ?>" class="edit-amount qty" />
			            </td>
		                <td>
		                	<span for="store-place" class="store-label rak"><?php echo $order_detail[$i]->kode_rak ?></span>
		                </td>
						<td class="text-right">
			            	<span class="amount product-price"><?php echo $order_detail[$i]->harga_beli ?></span>
			            	<input type="text" class="edit-amount price" value="<?php echo $order_detail[$i]->harga_beli ?>" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
			            </td>
			            <td class="text-right">
			            	<span class="amount subtotal-price"><?php echo $order_detail[$i]->sub_total ?></span>
							<input type="text" class="edit-amount subtotal-price" value="<?php echo $order_detail[$i]->sub_total ?>" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
			            </td>
			            <td class="table-action">
			              <!-- <a href="#" class="delete-row"><i class="fa fa-times"></i></a> -->
			            </td>
					</tr>

	            	<?php $i++; ?>
	            	<?php endwhile; ?>
		            <?php else : ?>
			              <tr class="products">
				                <td colspan="4"><label for="product-name" class="text text-danger">Belum ada pengaturan diskon untuk member ini</label></td>
				           </tr>

		            <?php endif ?>


		            </tbody>	
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	 
		<div class="panel-footer"><!-- panel-footer -->
		 <div class="row">
			<div class="col-sm-3 col-sm-offset-9">
			  <a class="btn btn-default">Cancel</a>&nbsp;		
			  <a class="btn btn-danger" id="verify">Verifikasi!</a>
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
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
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
	findSubTotals();


	  //   $j('#basket-buy').on('click','tbody tr td span.amount',function () {

			// qty = Number($j(this).closest("tr").find("td input.qty").val());
			// price = Number($j(this).closest("tr").find("td input.price").val());
			// console.log('qty awal: '+qty);
			// console.log('price awal : '+price);

	  //   	$j(this).hide();
	  //       var editAmount = $j(this).next();
			// editAmount.show().focus();
		 //    $j(editAmount).focusout(function() {
			// 	var valueAmount = $j(this).val();

			// 	if(valueAmount == "")
			// 		valueAmount = 0;
				
			// 	// console.log(valueAmount);

		 //        // $j(this).attr("value",$j(this).autoNumeric('get')).hide();
		 //        $j(this).attr("value",valueAmount).hide();
		 //        $j(this).prev().text(valueAmount).show();

			// 	qty = Number($j(this).closest("tr").find("td input.qty").val());
			// 	price = Number($j(this).closest("tr").find("td input.price").val());

			// 	// console.log('nilai input price : ' + $j(this).closest("tr").find("td input.price").val())
			// 	// console.log('qty : '+qty);
			// 	// console.log('price : '+price);

			// 	Subtotal = qty * price;
		 //        $j(this).closest("tr").find("td span.subtotal-price").text(Subtotal).formatCurrency({region: 'id-ID'});
		 //        $j(this).closest("tr").find("td input.subtotal-price").val(Subtotal);
			// 	$j('#basket-buy tbody td .product-price').formatCurrency({region: 'id-ID'});
				
			// 	findSubTotals2();
		 //    });
	  //   });

    // Delete row in a table
    // $j('#basket-buy').on('click','.delete-row',function(){

    //   var c = confirm("Continue delete this product from Cart?");
    //   if(c)
    //     $j(this).closest('tr').fadeOut(function(){
    //       jQuery(this).remove();
		  // var checkTR = $j("#basket-buy .products").length > 0;
		  // if(checkTR)
		  // {
			 //  findSubTotals2();  
		  // }
		  // else
		  // {
	   //      $j("h1 span.grandtotal-price").text(0).formatCurrency({region: 'id-ID'});
	   //      $j(".grandtotal-price",this).val(0);					  
		  // }
		  
    //     });
    //     return false;
    // });

	$j("#verify").on('click',function(){
		console.log('simpan ke gudang');

		//tambah stok ke gudang
		    var item = {};
		    var num = 1;
		    item[num] = {};
		    item[num]['order_id'] = '<?php echo $list_order->order_id ?>';

		      //update span
		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"pembelian/pembelian/tambah_stok_proses",
		        data: item,
		         success: function(data)
		         {
					//update step = terverifikasi bla-bla-bla
				    console.log('masuk tambah_stok_proses');
				    console.log(data);
				    var number = 1;
				    item[number] = {};
				    item[number]['order_id'] = '<?php echo $list_order->order_id ?>';
				    item[number]['step'] = 'terverifikasi';
				    item[number]['petugas_verifikasi'] = jQuery('#userid').val();

				      //update span
				      jQuery.ajax({
				        type: "POST",
				        url: CI_ROOT+"pembelian/pembelian/update_order",
				        data: item,
				         success: function(data)
				         {
				         	console.log('masuk update_order');
				            console.log(data);
				            //redirect
			                window.location.replace(CI_ROOT + 'pembelian/verifikasi');
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


	});
    
});
</script>
<script type="text/javascript">

function initBasket(){
	$j('label.not-found').hide();
	$j('label.cannot-empty').hide();	
	$j('input.price').hide();
	$j('input.qty').hide();	
	$j('select.store-select').hide();	
	$j('input.subtotal-price').hide();		
	$j('input.grandtotal-price').hide();	
	$j('input.expired').hide();	

	//format price on init
	$j('span.subtotal-price').formatCurrency({region: 'id-ID'});		
	$j('span.product-price').formatCurrency({region: 'id-ID'});		
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