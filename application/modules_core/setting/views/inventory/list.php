    <div class="pageheader">
      <h2><i class="fa fa-users"></i>Pengaturan Barang</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">BelanjaSale</a></li>
          <li class="active">Barang</li>
        </ol>
      </div>
    </div>
        
    <div class="contentpanel">

      <div id="pesan" class="alert alert-success" style="display:none">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <strong>Well done!</strong>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="menu-head-info">
				  <h3 class="panel-title">Member List and Setup</h3>
			  	<p class="text-muted">Lorem Ipsum dolor sit amet....</p>		  
        	</div>
    			<div class="button-head pull-right">
    				<a href="<?php echo base_url(); ?>setting/inventory/add" class="btn btn-danger">
    					<span class="fa fa-barcode"></span> &nbsp; Tambah Barang &nbsp;
    				</a>
    			</div>        	
        </div>
        <div class="panel-body">
            <div class="table-responsive">
				    <table class="table mb30" id="table1">
		            <thead>
		              <tr>
                    <th style="width:5%">#</th>
                    <th style="width:10%">Barcode</th>
		                <th style="width:25%">Nama Produk</th>
		                <th style="width:15%">Stok Total</th>
		                <th style="width:10%">Harga Jual</th>
                    <th style="width:10%">Status</th>
		                <th style="width:5%"></th>
		              </tr>
		            </thead>
		            <tbody>
                    <td colspan="6" class="dataTables_empty">Loading data...</td>
                    <!-- 
                    <?php if(isset($barangs)) : foreach ($barangs as $barang) : ?>
                        <tr>
                            <td><?php echo $barang->barcode; ?></td>
                            <td><?php echo $barang->nama_barang; ?></td>
                            <td><?php echo $barang->stok_total; ?></td>
                            <td><?php echo $barang->harga_jual; ?></td>
                            <td>
                              <?php if ($barang->deleted == '1') : ?>
                                <span class="text text-danger">DELETED</span>
                              <?php endif; ?>
                              <?php if ($barang->deleted == '0') : ?>
                                <span class="text text-info">ACTIVE</span>
                              <?php endif; ?>                            
                            </td>
                            <td class="table-action">
                                <a href="<?php echo base_url(); ?>setting/inventory/detail/<?php echo $barang->barcode; ?>"><i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url(); ?>setting/inventory/delete/<?php echo $barang->barcode; ?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ; ?>
                    <?php endif; ?>                    
                    -->
		            </tbody>
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	      
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
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>



<script>
  jQuery(document).ready(function() {

  // Initialize jQuery buttons
  $("button").button();
    
  // Show List of Products
  var productTable = $('#table1').dataTable({
    "sPaginationType": "full_numbers",
    // "pagingType": "scrolling",
    "bJQueryUI": false,
    "bSortClasses": false,
    "bProcessing": false,
    "bServerSide": true,
    "sAjaxSource": CI_ROOT+"setting/inventory/get_barcode",
    "aaSorting": [[1, "asc"]], // Set default sort by "code" column
    "aoColumns": [
      { "sClass": "number", "mData": 0, "bSortable": false, "bSearchable": false, "sWidth": "50px" },
      { "sClass": "barcode", "mData": 1, "sWidth": "150px" },
      { "sClass": "nama_barang", "mData": 2, "sWidth": "250px" },
      { "sClass": "stok_total", "mData": 3 },
      { "sClass": "harga_jual", "mData": 4 },
      { "sClass": "deleted", "mData": 5,
        "mRender": function(status, type, full) {
          //return "<a href='#' class='delete-row' id='"+data+"'><i class='fa fa-trash-o'></i></a>";
          if (status == 1)
            return "<span class='text text-danger'>DELETED</span>";
          else
            return "<span class='text text-info'>ACTIVE</span>";
        }
       },
      { "sClass": "center", "mData": "DT_RowId", "bSortable": false, "bSearchable": false, "sWidth": "70px", 
        "mRender": function(data, type, full) {
          //return "<a href='#' class='delete-row' id='"+data+"'><i class='fa fa-trash-o'></i></a>";          
          return "<a href='"+CI_ROOT+"setting/inventory/detail/"+<?php echo $barang->barcode; ?>+"'><i class='fa fa-pencil'></i></a>"+
          "&nbsp;&nbsp;&nbsp;"+
          "<a href='#' class='delete-row' id='" + data + "'><i class='fa fa-trash-o'></i></a>";
        }
      }
    ],
    "fnDrawCallback": function(oSettings) {
      // Initialize delete buttons
      //$("button.delete-row").button({
      //  icons: { primary: "fa fa-trash-o" }, text: false
      //});
    }
  });


    
	// Chosen Select
	jQuery("#salesID").chosen({'width':'100%','white-space':'nowrap'});
      
    
    // Chosen Select
    jQuery(".table-responsive select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
      
    // Delete row in a table
    jQuery('a.delete-row').live("click", function(e){
      // console.log(jQuery(this).attr("id")) ;
      // jQuery(this).addClass('clicked');


      var c = confirm("Continue delete?");
      if(c) {
        var item = {};
        var number = 1;
        item[number] = {};
        item[number]['barcode'] = jQuery(this).attr("id");
        console.log(jQuery(this).attr("id"));
        // console.log(item[1]['pelanggan_id']);

        $.ajax({
        type: "POST",
        url: CI_ROOT+"setting/inventory/delete_barcode",
        data: item,
         success: function(data)
         {
            productTable.fnDraw(true);
            // jQuery('.clicked').closest('tr').fadeOut(function(){
            //      jQuery(this).remove();
            // });
            // jQuery('.delete-row').removeClass('clicked');
            jQuery('#pesan').removeClass('alert-danger').addClass('alert-success');            
            jQuery('#pesan').find('strong').text('Berhasil dihapus');              
            jQuery('#pesan').show();

         },
         error: function (data)
         {  
            jQuery('#pesan').removeClass('alert-success').addClass('alert-danger');          
            jQuery('#pesan').find('strong').text('Gagal dihapus');              
            jQuery('#pesan').show();
         }

        });        
      }
      else {
        jQuery('#pesan').removeClass('alert-success').addClass('alert-danger');          
        jQuery('#pesan').find('strong').text('Perintah Penghapusan dibatalkan');              
        jQuery('#pesan').show();

      }
    });

  });
</script>