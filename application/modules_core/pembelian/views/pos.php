        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
        </div>
      <?php endif ; ?>     
      
      <div class="panel panel-default" id="posBeli">
        <div class="panel-heading">
        	<div class="menu-head-barcode">
				<div class="input-group col-sm9">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <input type="text" placeholder="barcode input.." class="form-control">
                </div>	  
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
		                <td>1132123123</td>
		                <td>
		                	<span for="qty" class="amount">1</span>
		                	<input data-i-zero="deny" type="text" value="1" class="edit-amount qty" />
		                </td>
		                <td class="text-right">
		                	<span class="amount product-price">20000</span>
		                	<input type="text" class="edit-amount price" value="20000" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>
		                <td class="text-right">
		                	<span class="amount subtotal-price">20000</span>
							<input type="text" class="edit-amount subtotal-price" value="20000" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
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
		                	<input data-i-zero="deny" type="text" value="1" class="edit-amount qty" />
		                </td>
		                <td class="text-right">
		                	<span class="amount product-price">20000</span>
		                	<input type="text" class="edit-amount price" value="20000" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
		                </td>
		                <td class="text-right">
		                	<span class="amount subtotal-price">20000</span>
							<input type="text" class="edit-amount subtotal-price" value="20000" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
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
			  <button class="btn btn-warning">Checkout</button>
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
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>
<script type="text/javascript">
  jQuery(document).ready(function() {
	var $j = jQuery.noConflict(); 
	findSubTotals();
	
	$j('input.price').hide();
	$j('input.qty').hide();	
	$j('input.subtotal-price').hide();		
	$j('input.grandtotal-price').hide();	

	//format price on init
	$j('.product-price').formatCurrency({region: 'id-ID'});

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

	
    $j('tbody tr td span.amount').click(function () {
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
	        
	        $j(this).attr("value",$j(this).autoNumeric('get')).hide();
	        $j(this).prev().text(valueAmount).show();
	        			
			findSubTotals();
	    });
    });
    
	function findSubTotals() {
        var Subtotal = 0; 
        var qty = 0; 
        var price = 0;
        var grandTotal = 0;
	    $j("tbody tr").each(function() {
			
			/* get Qty and EA Price */
			qty = Number($j("td input.qty").val());
			price = Number($j("td input.price").val());
			console.log(qty);
			console.log(price);
			/* count subtotal per row */
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

    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete this product from Cart?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        return false;
    });
});
</script>