	        
	    <div class="contentpanel">
	
	      <?php if ($message != null ) : ?>
	      <div class="alert alert-success">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                <strong>Well done!</strong>   <?php echo $message; ?>
	        </div>
	      <?php endif ; ?>     
	    
	      <div class="panel panel-default" id="storage">
	        <div class="panel-heading">
	          <div class="panel-btns">
	            <a href="#" class="minimize">−</a>
	          </div>
	          <h4 class="panel-title">Inbond Storing </h4>
	          <p>Form Penempatan Barang Masuk</p>
        	</div>
	        <div class="panel-body pos">
				<div class="col-md-3">
		          <div class="panel panel-info panel-alt">
		            <div class="panel-heading">
		              <h4 class="panel-title">List Produk</h4>
		            </div>
		            <div class="panel-body">
		              <div id='product-list'>
		                <div class='storage-product' id="prod1">
		                	<span class="product-name">Product 1</span>
							<span class="input-group-addon">
								<label class="qty">320</label>
								<label class="separator">/</label>
								<label class="unalocate text-success">0</label>
							</span>
		                </div>
		                <div class='storage-product' id="prod2">
		                	<span class="product-name">Product 2</span>
							<span class="input-group-addon">
								<label class="qty">100</label>
								<label class="separator">/</label>
								<label class="unalocate text-success">0</label>
							</span>
		                </div>
		                <div class='storage-product' id="prod3">
		                	<span class="product-name">Product 3</span>
							<span class="input-group-addon">
								<label class="qty">100</label>
								<label class="separator">/</label>
								<label class="unalocate text-success">0</label>
							</span>
		                </div>
		                <div class='storage-product' id="prod4">
		                	<span class="product-name">Product 4</span>
							<span class="input-group-addon">
								<label class="qty">100</label>
								<label class="separator">/</label>
								<label class="unalocate text-success">0</label>
							</span>
		                </div>
		                <div class='storage-product' id="prod5">
		                	<span class="product-name">Product 5</span>
							<span class="input-group-addon">
								<label class="qty">100</label>
								<label class="separator">/</label>
								<label class="unalocate text-success">0</label>
							</span>
		                </div>
		              </div>		              
		            </div>
		          </div>
		        </div>	
				<div class="col-md-9">
		          <div class="panel panel-info panel-alt">
		            <div class="panel-heading">
		              <h4 class="panel-title">Pallete / Rak</h4>
		            </div>
		            <div class="panel-body">
		              <div id='storage-list'>
		              	<div class="row">
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A1</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A2</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A3</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A4</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A5</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>			                			                			                	
		              	</div>
		              	<div class="row">
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A6</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A7</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A8</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A9</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>
			                <div class="rack col-md-2" data-maximum="300" data-storable="300">
								<label class="rack-title empty">A10</label>
								<div id="capacity" class="lots" style="height:0;"></div>
			                </div>			                			                			                			                
		              	</div>		              	
		              </div>
		            </div>
		          </div>
		        </div>			                    
	        </div><!-- panel-body -->	 
			<div class="panel-footer"><!-- panel-footer -->
			 <div class="row">
				<div class="col-sm-4 col-sm-offset-8">
				  <a class="btn btn-default">Cancel</a>&nbsp;		
				  <a class="btn btn-success" id="confirm">Confirm & Proceed</a>
				</div>
			 </div>
		  </div>             
	      </div><!-- panel -->
	        
	    </div><!-- contentpanel -->
	
	<link href="<?php echo base_url(); ?>bracket/css/storage.css" rel="stylesheet">	 
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
	<script src="<?php echo base_url()?>bracket/js/jquery.autogrow-textarea.js"></script>	
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
		
		var qtySelected = 0;
		var productSelected = "", productName="", maxRack = 0, newMax = 0;	
		
	    // clicked product
	    $j('#product-list').on('click','.storage-product',function(){

			if($j(this).hasClass('active'))
			{
				$j(this).removeClass('active');
				qtySelected = 0; productSelected = ""; productName=""; maxRack = 0; newMax = 0;				
				startAlocation();				
			}
			else
			{
				if ((productSelected == ($j(this).attr("id"))) || productSelected == "")
				{
					$j(this).addClass('active');
					productSelected = $j(this).attr("id");
					productName = $j(this).find('span.product-name').text();
					qtySelected = parseInt($j(this).find('label.qty').text());
				}
				else
				{
					alert('Proses pengalokasian hanya dapat dilakukan per barang!');				
					startAlocation();
				}
			}
	        return false;
	    });


	    // clicked storage
	    $j('#storage-list').on('click','.rack',function(){
			
			if($j(this).hasClass('active'))
			{
				$j(this).removeClass('active');
				qtySelected = 0; productSelected = ""; productName=""; maxRack = 0; newMax = 0;
				startAlocation();				
			}
			else
			{
				if($j('#product-list').children('div').hasClass('active'))
				{
					maxRack = parseInt($j(this).attr("data-storable"));
					var initMax = parseInt($j(this).attr("data-maximum"));
					if(maxRack > 0 )
					{
						$j(this).addClass('active');
						
						/* calculation */
						newMax = maxRack - qtySelected;
						/* animation */
						capacity = $j(this).find('#capacity');

						/* update product storability */
						if(newMax >= 0)
						{
							$j('#'+ productSelected).find('label.qty').text(0);
							$j('#'+ productSelected).find('label.unalocate').text(qtySelected);	
							
							$j(this).attr("data-storable", newMax);
							$j(this).append(
							'<input type="hidden" data-product-id="'+productSelected+
							'" data-product-name="'+productName+'" data-product-qty="'+qtySelected+'">');
													
							var heightAnimation = parseFloat((qtySelected/initMax)*100);	
						}
						else
						{
							var surplus = newMax * -1;
							$j('#'+ productSelected).find('label.qty').text(surplus);
							$j('#'+ productSelected).find('label.unalocate').text(maxRack);
							
							$j(this).attr("data-storable", 0);
							$j(this).append(
							'<input type="hidden" data-product-id="'+productSelected+
							'" data-product-name="'+productName+'" data-product-qty="'+maxRack+'">');		

							var heightAnimation = parseFloat((maxRack/initMax)*100);
						}	
						
						/* animation continue*/
						var heightCapacity = parseFloat(capacity.css('height')) + heightAnimation;

						if(heightCapacity > 50 && heightCapacity < 50)
						{
							capacity.attr('class','').addClass('lots');
						}						
						
						if(heightCapacity > 50 && heightCapacity <= 75)
						{
							capacity.prev().removeClass('empty').addClass('warning');
							capacity.attr('class','').addClass('warning');
						}
						
						if(heightCapacity >= 80)
						{
							capacity.prev().removeClass('empty').addClass('warning');						
							capacity.attr('class','').addClass('full');
						}
						
						capacity.css('height', heightCapacity+'%');
						qtySelected = 0; productSelected = ""; productName=""; maxRack = 0; newMax = 0;
						startAlocation();													
					}
					else
					{
						alert('Tidak ada tempat tersisa di Rak yang Anda pilih!');
						startAlocation();
					}					
				}
				else
				{
					
				}
			
			}
	        return false;
	    });
		
		    
	});
	</script>
	<script type="text/javascript">
		function startAlocation()
		{	
			qtySelected = 0; productSelected = ""; productName=""; maxRack = 0; newMax = 0;	
			$j('.storage-product').removeClass('active');
			$j('.rack').removeClass('active');		
		}
	</script>