    <div class="pageheader">
      <h2><i class="fa fa-users"></i>Karyawan</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">Pinaple SI</a></li>
          <li class="active">Karyawan</li>
        </ol>
      </div>
    </div>
        
    <div class="contentpanel">

      <div id="pesan" class="alert alert-success" style="display:none">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <strong>Well done!</strong>
      </div>
      
      <div class="panel panel-default" id="studentPay">
        <div class="panel-heading">
        	<div class="menu-head-info">
				  <h3 class="panel-title">Daftar Karyawan</h3>
			  	<p class="text-muted">Lorem Ipsum dolor sit amet....</p>		  
        	</div>
    			<div class="button-head pull-right">
    				<a href="<?php echo base_url()?>setting/member/add" class="btn btn-danger">
    					&nbsp; <span class="fa fa-users"></span>&nbsp; Tambah Karyawan &nbsp;
    				</a>
    			</div>        	
        </div>
        <div class="panel-body">
            <div class="table-responsive">
				<table class="table mb30" id="memberList">
		            <thead>
		              <tr>
		                <th style="width:5%">#</th>
                    <th style="width:10%">Identitas</th>
		                <th style="width:25%">Username</th>
		                <th style="width:15%">Nama lengkap</th>
		                <th style="width:10%">Status</th>
		                <th style="width:5%"></th>
		              </tr>
		            </thead>
		            <tbody>
              <tr>
                <td colspan="6" class="dataTables_empty">Loading data...</td>
              </tr>
		            </tbody>
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	      
      </div><!-- panel -->
        
    </div><!-- contentpanel -->
    
<!-- add member -->
<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">

     <input type="hidden" id="adduserid" name="user_id" value="<?php echo $user['user_id'] ?>">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Add Member Registration Form</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="text" id="addid" name="id" class="form-control" placeholder="Masukkan ID Member, contoh KTP/SIM/Paspor" required="">
              </div>
            </div>		  
            <div class="form-group">
              <label class="col-sm-2 control-label">Full Name <span class="asterisk">*</span></label>
              <div class="col-sm-8">
                <input type="text" id="addname" name="name" class="form-control" placeholder="Masukkan nama lengkap member..." required="">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat <span class="asterisk">*</span></label>
              <div class="col-sm-8">
                <textarea rows="5" id="addalamat" class="form-control" placeholder="Masukkan alamat member..." required=""></textarea>
              </div>
            </div>

			<div class="form-group">
              <label class="col-sm-2 control-label">Daerah <span class="asterisk">*</span></label>
              <div class="col-sm-2">
                <select id="addprop" name="prop" class="form-control input-sm" required="" onchange="ajaxkota(this.value)">
      					<option value="">Pilih Provinsi</option>
                <?php foreach ($provinsis as $provinsi) : ?>
                  <option value="<?php echo $provinsi->id ?>"> <?php echo $provinsi->nama?> </option>
                <?php endforeach; ?>
                </select>               
                <label class="error" for="prop"></label>
              </div>
              <div class="col-sm-2">
                <select id="addkota" name="kota" class="form-control input-sm" required="" onchange="ajaxkec(this.value)">
                  <option value="">Pilih Kabupaten/Kota</option>
                </select>
                <label class="error" for="kota"></label>
              </div>               
              <div class="col-sm-2">
                <select id="addkec" name="kec" class="form-control input-sm" required="" onchange="ajaxkel(this.value)">
                  <option value="">Pilih Kecamatan</option>
                </select>
                <label class="error" for="kec"></label>
              </div>    
              <div class="col-sm-2">
                <select id="addkel" name="kel" class="form-control input-sm" required="">
                  <option value="">Pilih Kelurahan/Desa</option>
                </select>
                <label class="error" for="kel"></label>
              </div>                        
            </div>
            
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Pos <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="text" id="addkdpos" name="kode-pos" class="form-control" placeholder="Type member zip..." required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
              <div class="col-sm-4">
                <input type="text" id="addrmh" name="telephone" class="form-control" placeholder="masukkan nomer telepon..." required="">
              </div>
              <div class="col-sm-4">
                <input type="text" id="addhp" name="hp" class="form-control" placeholder="atau masukkan nomer HP...">
              </div>              
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Fax</label>
              <div class="col-sm-5">
                <input type="text" id="addfax" name="fax" class="form-control" placeholder="Type member fax...">
              </div>
            </div>
            
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="email" id="addemail" name="email" class="form-control" placeholder="Type member email..." required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sales <span class="asterisk">*</span></label>
              <div class="col-sm-5">
      				<select id="addsales" class="form-control input-sm" required="">
                <?php foreach ($saless as $sales) : ?>
                  <option value="<?php echo $sales->kary_id ?>"> <?php echo $sales->username?> </option>
                <?php endforeach; ?>
              </select>
              </div>
            </div>                        	
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="reset" data-dismiss="modal">Cancel</button>
        <button class="btn btn-success" id="saveMember">Save New Member</button>
      </div>
	  </form>  
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div>
<!-- end add Member -->

<!-- edit member -->
<div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Edit Member Registration Form</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="text" name="id" class="form-control" placeholder="Masukkan ID Member, contoh KTP/SIM/Paspor" required="">
              </div>
            </div>		  
            <div class="form-group">
              <label class="col-sm-2 control-label">Full Name <span class="asterisk">*</span></label>
              <div class="col-sm-8">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap member..." required="">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat <span class="asterisk">*</span></label>
              <div class="col-sm-8">
                <textarea rows="5" class="form-control" placeholder="Masukkan alamat member..." required=""></textarea>
              </div>
            </div>


			<div class="form-group">

              <label class="col-sm-2 control-label">Daerah <span class="asterisk">*</span></label>

              <div class="col-sm-2">
                <select id="prop" name="prop" class="form-control input-sm" required="" onchange="ajaxkota(this.value)">
      					<option value="">Provinsi</option>
                </select>               
                <label class="error" for="prop"></label>
              </div>
              <div class="col-sm-2">
                <select id="kota" name="kota" class="form-control input-sm" required="" onchange="ajaxkec(this.value)">
                  <option value="">Kabupaten/Kota</option>
                </select>
                <label class="error" for="kota"></label>
              </div>               
              <div class="col-sm-2">
                <select id="kec" name="kec" class="form-control input-sm" required="" onchange="ajaxkel(this.value)">
                  <option value="">Kecamatan</option>
                </select>
                <label class="error" for="kec"></label>
              </div>    
              <div class="col-sm-2">
                <select id="kel" name="kel" class="form-control input-sm" required="">
                  <option value="">Kelurahan/Desa</option>
                </select>
                <label class="error" for="kel"></label>
              </div>                        
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Pos <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="text" name="kode-pos" class="form-control" placeholder="Type member zip..." required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
              <div class="col-sm-4">
                <input type="text" name="telephone" class="form-control" placeholder="masukkan nomer telepon..." required="">
              </div>
              <div class="col-sm-4">
                <input type="email" name="hp" class="form-control" placeholder="atau masukkan nomer HP...">
              </div>              
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Fax</label>
              <div class="col-sm-5">
                <input type="text" name="fax" class="form-control" placeholder="Type member fax...">
              </div>
            </div>
            
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="email" name="email" class="form-control" placeholder="Type member email..." required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sales <span class="asterisk">*</span></label>
              <div class="col-sm-5">
				<select id="salesID" class="form-control input-sm" required="">
                  <option value="Bimo">Bimo</option>
                  <option value="Bimo">Simon</option>
                  <option value="Bimo">Albert</option>                                    
                </select>
              </div>
            </div>                        	
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="reset" data-dismiss="modal">Cancel</button>
        <button class="btn btn-success">Save Changes</button>
      </div>
	  </form>  
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div>
<!-- end edit Member -->
    
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
  var productTable = $('#memberList').dataTable({
    "sPaginationType": "full_numbers",
    // "pagingType": "scrolling",
    "bJQueryUI": false,
    "bSortClasses": false,
    "bProcessing": false,
    "bServerSide": true,
    "sAjaxSource": CI_ROOT+"setting/member/get_members",
    "aaSorting": [[1, "asc"]], // Set default sort by "code" column
    "aoColumns": [
      { "sClass": "member_id", "mData": 0, "bSortable": false, "bSearchable": false, "sWidth": "50px" },
      { "sClass": "pelanggan_id", "mData": 1, "sWidth": "150px" },
      { "sClass": "nama_lengkap", "mData": 2, "sWidth": "250px" },
      { "sClass": "kota_id", "mData": 3, "sWidth": "200px" },
      { "sClass": "telp_rmh", "mData": 4, "sWidth": "150px" },
      { "sClass": "telp_hp", "mData": 5, "sWidth": "150px"  },
      { "sClass": "sales_id", "mData": 6, "sWidth": "150px" },
      { "sClass": "deleted", "mData": 7, "sWidth": "10px",
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
          return "<a href='"+CI_ROOT+"setting/member/detail/"+data+"'><i class='fa fa-pencil'></i></a>"+
          "&nbsp;&nbsp;&nbsp;"+
          "<a href='#' class='delete-row' id='" + data + "'><i class='fa fa-trash-o'></i></a>";
        }
      }
    ],
    "fnDrawCallback": function(oSettings) {
      // Initialize delete buttons
      // $("button.delete-row").button({
      //   icons: { primary: "fa fa-trash-o" }, text: false
      // });
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
        item[number]['pelanggan_id'] = jQuery(this).attr("id");

        // console.log(item[1]['pelanggan_id']);

        $.ajax({
        type: "POST",
        url: CI_ROOT+"setting/member/delete_member",
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