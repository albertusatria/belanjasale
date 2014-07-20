<?php
    $this->load->helper('date');
    $datestring = 'd/m/Y';
    $now = date($datestring);
?>
    <div class="pageheader">
      <h2><i class="fa fa-barcode"></i> Verification Order List</h2>
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
            <div class="menu-head-info">
            <h3 class="panel-title">Receipt Order Data</h3>
            <p class="text-muted">List of all receipt order on purchasing.</p>      
            </div>
          </div>	 
	        <div class="panel-body">
	          <div class="table-responsive">
              <table class="table table-striped mb30 " id="listOrder">
                      <thead>
                        <tr>
                          <th>#Order</th>
                          <th>Step</th>
                          <th>Tgl transaksi</th>
                          <th>Jenis/Ket</th>
                          <th>Order oleh : </th>
                          <th>Tgl order</th>
                          <th>Diinput oleh : </th>
                          <th>Tgl input</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 0; ?>
                        <?php $max = count($list_order); ?>
                        <?php if($max != 0) : while ($i < $max) : ?>

                          <tr class="products">
                            <td>
                              <?php echo $list_order[$i]->order_id ?>
                            </td>
                            <td>
                              <span class="label label-info"><?php echo $list_order[$i]->step ?></span>
                            </td>
                            <td>
                              <?php echo date('d-m-Y',strtotime($list_order[$i]->tgl_transaksi)) ?>
                            </td>                           
                            <td>
                              <?php if ($list_order[$i]->is_pembelian == '1') : ?>
                                <span class="text text-danger">PEMBELIAN</span>     
                              <?php else : ?>
                                <span class="text text-info">LAINNYA : </span>
                              <?php endif; ?>
                                  <span title="" data-placement="right" data-toggle="tooltip" class="fa fa-exclamation-circle tooltips" 
                                  data-original-title="<?php echo $list_order[$i]->remarks ?>"></span>                                
                            </td>
                            <td>
                              <?php echo $list_order[$i]->petugas_order_name ?>
                            </td>
                            <td>
                              <?php echo date('d-m-Y | h:i:s',strtotime( $list_order[$i]->tgl_order)) ?>
                            </td>
                            <td>
                              <?php echo $list_order[$i]->petugas_input_name ?>
                            </td>
                            <td>
                              <?php echo date('d-m-Y | h:i:s',strtotime( $list_order[$i]->tgl_input)) ?>
                            </td>
                            <td class="table-action">
                              <a href="<?php echo base_url() ?>pembelian/edit_detail/<?php echo $list_order[$i]->order_id ?>" class="update-row"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo base_url() ?>pembelian/verifikasi_proses/<?php echo $list_order[$i]->order_id ?>" class="update-row"><i class="fa fa-check"></i></a>
                              <!-- <a href="#" class="delete-row"><i class="fa fa-times"></i></a> -->
                              <!-- <a href="#" class="save-row" style="display:none;"><i class="fa fa-save"></i></a> -->
                              <!-- <a href="#" class="cancel-row" style="display:none;"><i class="fa fa-undo"></i></a> -->
                            </td>
                          </tr>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                        <?php endif ?>


                      </tbody>
                    </table>            
	          </div><!-- table-responsive -->
	          
	        </div><!-- panel-body -->
	      </div><!-- panel -->
	        
	    </div><!-- contentpanel -->      

<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>bracket/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/chosen.jquery.min.js"></script>

<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>
 
<script>
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

  jQuery("#createOrder").on('click',function(){
    var valid = jQuery("#purchasingInventory").valid();
    if (!valid) {
      console.log('gagal');
    }
    else {
      //buat surat masuk

      var isPembelian;
      if (jQuery('#chkpembelian').prop('checked')) {
        isPembelian = 1;
      } else {
        isPembelian = 0
      }

      var item = {};
      var number = 1;
      item[number] = {}
      item[number]['tanggal'] = jQuery("#datepicker").val();
      item[number]['isPembelian'] = isPembelian;
      item[number]['remarks'] = jQuery("#keterangan").val();
      item[number]['petugas_order'] = jQuery("#userid").val();
      item[number]['step'] = 'detail';

      //update span
      jQuery.ajax({
        type: "POST",
        url: CI_ROOT+"pembelian/pembelian/create_in_order",
        data: item,
         success: function(data)
         {
            console.log(data);
            console.log('joss');
            //redirect

         },
         error: function (data)
         {  
            console.log('pait');
         }

        });        
    }
  });

  jQuery("#chkpembelian").on('click',function(){
    console.log(jQuery('#chkpembelian').prop('checked'));
    if (jQuery('#chkpembelian').prop('checked'))
    {
      jQuery("#labelketerangan").text("No nota");
      jQuery("#keterangan").attr("placeholder","Masukkan no nota untuk membantu verifikasi");
    } else {
      jQuery("#labelketerangan").text("Keterangan");
      jQuery("#keterangan").attr("placeholder","Berikan keterangan misalnya : barang retur, barang hadiah, dll");
    }
  });

});
</script>

<script type="text/javascript">

  jQuery('#datepicker').datepicker();
    
  jQuery('#datepicker-inline').datepicker();

</script>