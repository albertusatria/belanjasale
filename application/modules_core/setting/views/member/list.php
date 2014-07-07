    <div class="pageheader">
      <h2><i class="fa fa-users"></i>Members</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">Pinaple SI</a></li>
          <li class="active">Members</li>
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
      
      <div class="panel panel-default" id="studentPay">
        <div class="panel-heading">
        	<div class="menu-head-info">
				<h3 class="panel-title">Member List and Setup</h3>
			  	<p class="text-muted">Lorem Ipsum dolor sit amet....</p>		  
        	</div>
			<div class="button-head pull-right">
				<button class="btn btn-info" data-toggle="modal" data-target="#addMember">
					<span class="fa fa-plus"></span>Add New Member
				</button>
			</div>        	
        </div>
        <div class="panel-body">
            <div class="table-responsive">
				<table class="table mb30" id="memberList">
		            <thead>
		              <tr>
		                <th>#</th>
		                <th>First Name</th>
		                <th>Last Name</th>
		                <th>Username</th>
		                <th></th>
		              </tr>
		            </thead>
		            <tbody>
		              <tr>
		                <td>1</td>
		                <td>Mark</td>
		                <td>Otto</td>
		                <td>@mdo</td>
		                <td class="table-action">
		                  <a href="#" data-toggle="modal" data-target="#editMember"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
		              </tr>
		              <tr>
		                <td>2</td>
		                <td>Jacob</td>
		                <td>Thornton</td>
		                <td>@fat</td>
		                <td class="table-action">
		                  <a href="#" data-toggle="modal" data-target="#editMember"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
		              </tr>
		              <tr>
		                <td>3</td>
		                <td>Larry</td>
		                <td>the Bird</td>
		                <td>@twitter</td>
		                <td class="table-action">
		                  <a href="#" data-toggle="modal" data-target="#editMember"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
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
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Add Member Registration Form</h4>
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
                <select id="addprop" name="prop" class="form-control input-sm" required="" onchange="ajaxkota(this.value)">
      					<option value="">-- Select Provinsi -- </option>
                <?php foreach ($provinsis as $provinsi) : ?>
                  <option value="<?php echo $provinsi->id ?>"> <?php echo $provinsi->nama?> </option>
                <?php endforeach; ?>
                </select>               
                <label class="error" for="prop"></label>
              </div>
              <div class="col-sm-2">
                <select id="addkota" name="kota" class="form-control input-sm" required="" onchange="ajaxkec(this.value)">
                  <option value="">Kota</option>
                </select>
                <label class="error" for="kota"></label>
              </div>               
              <div class="col-sm-2">
                <select id="addkec" name="kec" class="form-control input-sm" required="" onchange="ajaxkel(this.value)">
                  <option value="">Kecamatan</option>
                </select>
                <label class="error" for="kec"></label>
              </div>    
              <div class="col-sm-2">
                <select id="addkel" name="kel" class="form-control input-sm" required="">
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
                <input type="text" name="hp" class="form-control" placeholder="atau masukkan nomer HP...">
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
        <button class="btn btn-success">Save New Member</button>
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
    
    //data table
    jQuery('#memberList').dataTable({
      "sPaginationType": "full_numbers"
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
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        return false;
    });
    
  // Basic Form
  jQuery("#regisMember").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  }); 
  
	jQuery("input[name=hp]").rules( "add", {
	  minlength: 10,
	  maxlength: 13,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});  
	
	jQuery("input[name=telephone]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});		
	
	jQuery("input[name=fax]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});	
      
    jQuery('#addMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#addMember input[name=telephone]').removeAttr("required");
    	}
    });
    
    jQuery('#editMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#editMember input[name=telephone]').removeAttr("required");	
    	}
    });  

  });
</script>

<script>
var ajaxku;

function ajaxkota(id){

    ajaxku = buatajax();

    var item = {};
    var number = 1;
    item[number] = {};
    item[number]['id_prov'] = id;
    console.log(id);
    console.log(item[1]['id_prov']);
      $.ajax({
        type: "POST",
        url: CI_ROOT+"setting/wilayah/get_kota",
        data: item,
         success: function(data)
         {
            $('#addkota').find("option").remove();
            for (index = 0; index < data.length; ++index) {
                id = data[index]['id'];
                nama = data[index]['nama'];
                $('#addkota').append('<option value="'+id+'">'+nama+'</option>');
            } 
            $('#addkec').find("option").remove();
            $('#addkec').append('<option value="">- Kecamatan - </option>');
            $('#addkel').find("option").remove();
            $('#addkel').append('<option value="">- Kelurahan/Desa - </option>');

         },
         error: function (data)
         {
            console.log('gagal');
         }
      });   
}

function ajaxkec(id){
    var item = {};
    var number = 1;
    item[number] = {};
    item[number]['id_kabupaten'] = id;
    console.log(id);
    console.log(item[1]['id_kabupaten']);
      $.ajax({
        type: "POST",
        url: CI_ROOT+"setting/wilayah/get_kecamatan",
        data: item,
         success: function(data)
         {
            $('#addkec').find("option").remove();
            for (index = 0; index < data.length; ++index) {
                id = data[index]['id'];
                nama = data[index]['nama'];
                $('#addkec').append('<option value="'+id+'">'+nama+'</option>');
            } 
            $('#addkel').find("option").remove();
            $('#addkel').append('<option value="">- Kelurahan/Desa - </option>');
         },

         error: function (data)
         {
            console.log('gagal');
         }
      });   
}

function ajaxkel(id){
    var item = {};
    var number = 1;
    item[number] = {};
    item[number]['id_kecamatan'] = id;
    console.log(id);
    console.log(item[1]['id_kecamatan']);
      $.ajax({
        type: "POST",
        url: CI_ROOT+"setting/wilayah/get_desa",
        data: item,
         success: function(data)
         {
            $('#addkel').find("option").remove();
            for (index = 0; index < data.length; ++index) {
                id = data[index]['id'];
                nama = data[index]['nama'];
                $('#addkel').append('<option value="'+id+'">'+nama+'</option>');
            } 
         },
         error: function (data)
         {
            console.log('gagal');
         }
      });   
}

function buatajax(){
    if (window.XMLHttpRequest){
    	return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
   		return new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    return null;
}
function stateChanged(){
    var data;
    if (ajaxku.readyState==4){
    
    	data=ajaxku.responseText;
    	
	    if(data.length>=0){
	    	document.getElementById("kota").innerHTML = data
	    }else{
	    	document.getElementById("kota").value = "<option selected>Kota/Kab</option>";
	    }
    }
}

function stateChangedKec(){
    var data;
    if (ajaxku.readyState==4){
    
	    data=ajaxku.responseText;
	    
	    if(data.length>=0){
	    	document.getElementById("kec").innerHTML = data
	    }else{
		    document.getElementById("kec").value = "<option selected>Kecamatan</option>";
	    }
    }
}

function stateChangedKel(){
    var data;
    if (ajaxku.readyState==4){
    
	    data=ajaxku.responseText;
	    
	    if(data.length>=0){
	    	document.getElementById("kel").innerHTML = data
	    }else{
		    document.getElementById("kel").value = "<option selected>Kelurahan/Desa</option>";
	    }
    }
}             		
</script>

<script>  
  $('#pembayaran').on('click', '.btn-cari-bayar', function(){
      var $valid = jQuery('#pembayaran').valid();
      if(!$valid) {
        return false;
      }	
      else
      {
      	var nis = $('.nis').val();
		  $('#studentListPay > tbody:first').append(
                    '<tr class="student-row">'+
                    '<td>'+
                    '<div class="ckbox ckbox-success">'+
					'<input class="checkboxStud" type="checkbox" id="checkbox1">'+
					'<label for="checkbox1"></label>'+
					'</div>'+
                    '</td>'+
                    '<td>'+
					'<div class="media">'+
					'<div class="media-body">'+
					'<button class="pull-right btn btn-large btn-success btn-pay" data-toggle="modal" data-target="#paymentMethod">Pay</button>'+
					'<h5 class="text-default">Juli 2014</h5>'+
					'</div>'+
					'</div>'+
					'</td>'+
					'</tr>'
			);
			return false;
      }  
  });
</script>