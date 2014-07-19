    <div class="pageheader">
      <h2><i class="fa fa-table"></i> Purchasing</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>dashboard/admin">Belanjasale</a></li>
          <li class="active">Purchasing</li>
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
      
      <div class="row">

		<div class="col-sm-6 col-md-3">
			<a href="<?php echo base_url()?>pembelian/receipt">
			<div class="panel panel-info panel-alt widget-today">
	            <div class="panel-heading text-center">
	              <i class="fa fa-barcode"></i>
	            </div>
	            <div class="panel-body text-center">
	              <h3 class="today">Receipt Order</h3>
	            </div><!-- panel-body -->
			</div>
			</a>
        </div>
        
		<div class="col-sm-6 col-md-3">
			<a href="<?php echo base_url()?>">		
			<div class="panel panel-warning panel-alt widget-today">
	            <div class="panel-heading text-center">
	              <i class="fa fa-plus-square"></i>
	            </div>
	            <div class="panel-body text-center">
	              <h3 class="today">Purchasing Point</h3>
	            </div><!-- panel-body -->
	        </div>
			</a>
        </div>

		<div class="col-sm-6 col-md-3">
			<a href="">
			<div class="panel panel-success panel-alt widget-today">
	            <div class="panel-heading text-center">
	              <i class="fa fa-check-square"></i>
	            </div>
	            <div class="panel-body text-center">
	              <h3 class="today">Verification Order</h3>
	            </div><!-- panel-body -->
	        </div>
			</a>
        </div>

		<div class="col-sm-6 col-md-3">
			<a href="">
			<div class="panel panel-dark panel-alt widget-today">
	            <div class="panel-heading text-center">
	              <i class="fa fa-book"></i>
	            </div>
	            <div class="panel-body text-center">
	              <h3 class="today">Order History</h3>
	            </div><!-- panel-body -->
	        </div>
			</a>
        </div>
                
      </div>
      
    </div>

<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>bracket/js/custom.js"></script>    