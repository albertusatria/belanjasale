    <div class="pageheader">
      <h2><i class="fa fa-barcode"></i> Receipt Order</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>dashboard/admin">Belanjasale</a></li>
          <li><a href="<?php echo base_url()?>pembelian">Purchasing Menu</a></li>          
          <li class="active">Receipt Order</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
	  		<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
			</div>
      <?php endif ; ?>   
      
	      <div class="panel panel-default">
	        <div class="panel-heading">
	          <h3 class="panel-title">Receipt Order Data</h3>
	          <p>
		          List of all receipt order on purchasing.
	          </p>
	          <p>
	          	<a href="" data-title="Add Purchasing Receipt Order" class="tip" style="margin-right:50px;" data-toggle="modal" data-target="#purchasingOrder">
	          		<i class="fa fa-plus"></i> Add New Purchasing Receipt Order
	          	</a>
	          	<a href="#" data-title="Add Inventory Goods Receipt Order" class="tip" data-toggle="modal" data-target="#inventoryGoods">
	          		<i class="fa fa-plus"></i> Add New Inventory Goods Receipt Order
	          	</a>	          	
	          </p>
	        </div>
	        <div class="panel-body">
	          <div class="table-responsive">
	            <table class="table" id="listOrder">
	              <thead>
	                 <tr>
	                    <th>Rendering engine</th>
	                    <th>Browser</th>
	                    <th>Platform(s)</th>
	                    <th>Engine version</th>
	                    <th>CSS grade</th>
	                 </tr>
	              </thead>
	              <tbody>
	                 <tr class="">
	                    <td>Trident</td>
	                    <td>Internet
	                        Explorer 4.0</td>
	                    <td>Win 95+</td>
	                    <td class="center"> 4</td>
	                    <td class="center">X</td>
	                 </tr>
	                 <tr class="">
	                    <td>LoremIpsum</td>
	                    <td>DolorSitAmet</td>
	                    <td>Win 95+</td>
	                    <td class="center"> 4</td>
	                    <td class="center">X</td>
	                 </tr>	                 
	              </tbody>
	           </table>
	          </div><!-- table-responsive -->
	          
	        </div><!-- panel-body -->
	      </div><!-- panel -->
	        
	    </div><!-- contentpanel -->      
      
      
<!-- Modal Order Receipt-->
<div class="modal fade" id="purchasingOrder" tabindex="-1" role="dialog" aria-labelledby="purchasingOrderLabel" aria-hidden="true">
<form id="purchasingInventory" action="" class="form-horizontal" novalidate="novalidate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Purchasing Receipt Order</h4>
        <p>Form penambahan nomor nota untuk nota pembelian.</p>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="col-sm-3 control-label">No. Nota <span class="asterisk">*</span></label>
          <div class="col-sm-9">
            <input type="text" name="no-nota-order" class="form-control" placeholder="Masukkan nomor nota..." required="">
          </div>
        </div>
                        
        <div class="form-group">
          <label class="col-sm-3 control-label">Comment</label>
          <div class="col-sm-9">
            <textarea rows="5" class="form-control" placeholder="Masukkan catatan untuk nota (jika ada)..."></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</form>
</div><!-- modal -->

<!-- Modal Inventory Goods-->
<div class="modal fade" id="inventoryGoods" tabindex="-1" role="dialog" aria-labelledby="inventoryGoodsLabel" aria-hidden="true">
<form id="purchasingInventoryPlus" action="" class="form-horizontal" novalidate="novalidate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Inventory Goods Receipt Order</h4>
		<p>Form penambahan nomor nota untuk barang bonus, retur, dkk.</p>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="col-sm-3 control-label">No. Nota <span class="asterisk">*</span></label>
          <div class="col-sm-9">
            <input type="text" name="no-nota-goods" class="form-control" placeholder="Masukkan nomor nota..." required="">
          </div>
        </div>
                        
        <div class="form-group">
          <label class="col-sm-3 control-label">Comment</label>
          <div class="col-sm-9">
            <textarea rows="5" class="form-control" placeholder="Masukkan catatan untuk nota (jika ada)..."></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</form>
</div><!-- modal -->
      

<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/chosen.jquery.min.js"></script>

<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>
 
<script>
var $j = jQuery.noConflict(); 
jQuery(document).ready(function(){
	  
  jQuery('#listOrder').dataTable();	  
	  
    // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
	  
  // Basic Form
  jQuery("#purchasingInventory").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });

  // Basic Form
  jQuery("#inventoryGoods").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });


});
</script>