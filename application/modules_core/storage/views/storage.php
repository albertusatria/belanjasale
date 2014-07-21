	        
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
								<label class="qty">100</label>
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
			                <div class="rack col-md-2" maximum="300">
								A1
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A2
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A3
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A4
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A5
			                </div>	
		              	</div>
		              	<div class="row">
			                <div class="rack col-md-2" maximum="300">
								A6
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A7
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A8
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A9
			                </div>
			                <div class="rack col-md-2" maximum="300">
								A10
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
		var productSelected = "", maxRack = 0, newMax = 0;	
		
	    // clicked product
	    $j('#product-list').on('click','.storage-product',function(){

			if($j(this).hasClass('active'))
			{
				$j(this).removeClass('active');
			}
			else
			{
				if ((productSelected == ($j(this).attr("id"))) || productSelected == "")
				{
					$j(this).addClass('active');
					productSelected = $j(this).attr("id");
					qtySelected = Number($j(this).find('label.qty').text());
				}
				else
				{
					alert('Proses pengalokasian hanya dapat dilakukan per barang!');
					return false;
				}
			}
	        return false;
	    });

	    // clicked storage
	    $j('#storage-list').on('click','.rack',function(){
			
			if($j(this).hasClass('active'))
			{
				$j(this).removeClass('active');
			}
			else
			{
				maxRack = Number($j(this).attr("maximum"));

				if(maxRack > 0)
				{
					$j(this).addClass('active');
					
					newMax = maxRack - qtySelected;
					$j(this).attr("maximum", newMax);
					if(newMax >= 0)
					{
						$j('#'+ productSelected).find('label.qty').text(0);
						$j('#'+ productSelected).find('label.unalocate').text(qtySelected);	

						qtySelected = 0; productSelected = ""; maxRack = 0; newMax = 0;
						startAlocation();
					}					
				}
				else
				{
					alert('Tidak ada tempat tersisa di Rak yang Anda pilih!');
					startAlocation();
				}
			
			}
	        return false;
	    });
		
		    
	});
	</script>
	<script type="text/javascript">
		function startAlocation()
		{	
			$j('.storage-product').removeClass('active');
			$j('.rack').removeClass('active');		
		}
	</script>