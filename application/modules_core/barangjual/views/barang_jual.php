        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
        </div>
      <?php endif ; ?>     
      
      <div class="panel panel-default" id="barangInventoryPlus">
        <div class="panel-heading">
        	<div class="menu-head">
				<div class="input-group col-sm-12">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <input type="text" placeholder="barcode input.." name="product_id" class="add-product form-control">
                </div>
                <label for="product_id" name="error-notfound-productid" class="error not-found">Product not found!</label>
                <label for="product_id" name="error-empty-productid" class="error cannot-empty">Field above cannot empty!</label>
        	</div>
			<div class="total-amount pull-right">
				<h4 class="text-warning">Grand Total</h4>
				<h1 class="text-warning">
	            	<span class="amount grandtotal-price">0</span>
					<input type="text" class="edit-amount grandtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
				</h1>
			</div>        	
        </div>
        <div class="panel-body pos">
            <div class="table-responsive">
				<table class="table mb30" id="basket-buy">
		            <thead>
		              <tr>
		                <th colspan="2">Product</th>
		                <th>ID</th>
		                <th>Qty</th>
		                <th>Store in</th>
		                <th>Product Type</th>		                
		                <th class="text-right">Price</th>
		                <th class="text-right">Subtotal</th>
		                <th></th>
		              </tr>
		            </thead>
		            <tbody>
		              <tr class="products">
		                <td>
			                <img src="<?php echo base_url()?>bracket/images/photos/media3.png" alt="">
		                </td>
		                <td><label for="product-name">Product Name #1</label></td>
		                <td>1232123123</td>
		                <td>
		                	<span for="qty" class="amount">1</span>
		                	<input data-i-zero="deny" type="text" value="1" class="edit-amount qty" />
		                </td>
		                <td>
		                	<span for="store-place" class="store-label">Pallate A2</span>
<!--
							<select class="form-control input-sm mb15 store-select">
			                  <option>Pallete A1</option>
			                  <option>Pallete A2</option>
			                  <option>Rak</option>
			                </select>
-->
		                </td>
		                <td>
		                	<span for="product-type" class="store-label">Bonus</span>
		                </td>		                		                
		                <td class="text-right">
		                	<span class="amount product-price">0</span>
		                	<input type="text" class="edit-amount price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>
		                <td class="text-right">
		                	<span class="amount subtotal-price">0</span>
							<input type="text" class="edit-amount subtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>		                		                
		                <td class="table-action">
		                  <a href="#" class="delete-row"><i class="fa fa-times"></i></a>
		                </td>
		              </tr>
		              <tr class="products">
		                <td>
			                <img src="<?php echo base_url()?>bracket/images/photos/media3.png" alt="">
		                </td>
		                <td><label for="product-name">Product Name #1</label></td>
		                <td>1132123123</td>
		                <td>
		                	<span for="qty" class="amount">1</span>
		                	<input data-l-zero="deny" type="text" value="1" class="edit-amount qty" />
		                </td>
		                <td>
		                	<span for="store-place" class="store-label">Pallate A1</span>
<!--
							<select class="form-control input-sm mb15 store-select">
			                  <option>Pallete A1</option>
			                  <option>Pallete A2</option>
			                  <option>Rak</option>
			                </select>
-->
		                </td>
		                <td>
		                	<span for="product-type" class="store-label">Bonus</span>
		                </td>		                     
		                <td class="text-right">
		                	<span class="amount product-price">0</span>
		                	<input type="text" class="edit-amount price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>
		                <td class="text-right">
		                	<span class="amount subtotal-price">0</span>
							<input type="text" class="edit-amount subtotal-price" value="0" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>		                		                
		                <td class="table-action">
		                  <a href="#" class="delete-row"><i class="fa fa-times"></i></a>
		                </td>
		              </tr>
		              
		            </tbody>
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	 
		<div class="panel-footer"><!-- panel-footer -->
		 <div class="row">
			<div class="col-sm-3 col-sm-offset-9">
			  <button class="btn btn-default">Cancel</button>&nbsp;		
			  <button class="btn btn-warning">Checkin</button>
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

	
    $j('#basket-buy').on('click','tbody tr td span.amount',function () {

    	$j(this).hide();
        var editAmount = $j(this).next();
		editAmount.show().focus();
	    $j(editAmount).focusout(function() {
			var valueAmount = $j(this).val();

			if(valueAmount == "")
				valueAmount = 0;

	        //format number after edit
	        if($j(this).hasClass('price'))
	        {
	        	$j(this).formatCurrency({region: 'id-ID'});
			}
	        $j(this).autoNumeric('init');
	        
	        $j(this).attr("value",$j(this).autoNumeric('get')).hide();
	        $j(this).prev().text(valueAmount).show();

			qty = Number($j(this).closest("tr").find("td input.qty").val());
			price = Number($j(this).closest("tr").find("td input.price").val());

			Subtotal = qty * price;
	        $j(this).closest("tr").find("td span.subtotal-price").text(Subtotal).formatCurrency({region: 'id-ID'});
	        $j(this).closest("tr").find("td input.subtotal-price").val(Subtotal);
			$j('#basket-buy tbody td .product-price').formatCurrency({region: 'id-ID'});
			
			findSubTotals2();
	    });
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
    
});
</script>
<script type="text/javascript">

function addProduct(id) {

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
	                '<td>'+
	                	'<span for="product-type" class="store-label">Bonus</span>'+
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
	$j('label.not-found').hide();
	$j('label.cannot-empty').hide();	
	$j('input.price').hide();
	$j('input.qty').hide();	
	$j('select.store-select').hide();	
	$j('input.subtotal-price').hide();		
	$j('input.grandtotal-price').hide();	

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
    });
	
}
</script>