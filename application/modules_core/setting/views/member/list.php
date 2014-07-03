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
		                  <a href="#"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
		              </tr>
		              <tr>
		                <td>2</td>
		                <td>Jacob</td>
		                <td>Thornton</td>
		                <td>@fat</td>
		                <td class="table-action">
		                  <a href="#"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
		              </tr>
		              <tr>
		                <td>3</td>
		                <td>Larry</td>
		                <td>the Bird</td>
		                <td>@twitter</td>
		                <td class="table-action">
		                  <a href="#"><i class="fa fa-pencil"></i></a>
		                  <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a>
		                </td>
		              </tr>
		            </tbody>
		          </table>            
            </div><!-- table-responsive -->
            
        </div><!-- panel-body -->	      
      </div><!-- panel -->
        
    </div><!-- contentpanel -->

<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Member Registration Form</h4>
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
              <label class="col-sm-2 control-label">Provinsi <span class="asterisk">*</span></label>
              <div class="col-sm-2">
                <select id="provinsi" class="form-control input-sm" required="">
                  <option value="-1">Provinsi</option>
                </select>
                <label class="error" for="provinsi"></label>
              </div>
              <div class="col-sm-2">
                <select id="kecamatan" class="form-control input-sm" required="">
                  <option value="-1">Kecamatan</option>
                </select>
                <label class="error" for="kecamatan"></label>
              </div>    
              <div class="col-sm-2">
                <select id="kelurahan" class="form-control input-sm" required="">
                  <option value="-1">Kelurahan</option>
                </select>
                <label class="error" for="kelurahan"></label>
              </div>                        
            </div>
            
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Pos <span class="asterisk">*</span></label>
              <div class="col-sm-5">
                <input type="email" name="kode-pos" class="form-control" placeholder="Type member email..." required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
              <div class="col-sm-4">
                <input type="email" name="telepon" class="form-control" placeholder="masukkan nomer telepon..." required="">
              </div>
              <div class="col-sm-4">
                <input type="email" name="hp" class="form-control" placeholder="atau masukkan nomer HP..." required="">
              </div>              
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Fax</label>
              <div class="col-sm-5">
                <input type="email" name="fax" class="form-control" placeholder="Type member fax...">
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

  });
</script>

<script type="text/javascript">
$( document ).ready(function() {
    var modelProvinsi = {"modelMakeTable" : 
        [
                {"modelMakeID" : "1","modelMake" : "DIY"},
                {"modelMakeID" : "2","modelMake" : "Jakarta"},
        ]};
        
var modelKecamatan = {"DIY" : 
        [
                {"modelTypeID" : "1","modelType" : "Depok"},
                {"modelTypeID" : "1","modelType" : "Berbah"}                
        ],
        "Jakarta" : 
        [
                {"modelTypeID" : "1","modelType" : "Kecamatan Jkt1"}
        ]
					};
					
var modelKelurahan = {"Depok" : 
        [
                {"modelTypeID" : "1","modelType" : "Caturtunggal"}
        ],
        "Berbah" : 
        [
                {"modelTypeID" : "1","modelType" : "Kelurahan (Berbah)1"}
        ],        
        "Kecamatan Jkt1" : 
        [
                {"modelTypeID" : "1","modelType" : "Kelurahan Jkt1"}
        ]
					};					


      var ModelListItems= "";
      for (var i = 0; i < modelProvinsi.modelMakeTable.length; i++){
        ModelListItems+= "<option value='" + modelProvinsi.modelMakeTable[i].modelMakeID + "'>" + modelProvinsi.modelMakeTable[i].modelMake + "</option>";
      }
      $("#provinsi").html(ModelListItems);
    
    /* function update kecamatan from changed provinsi */
    var updateSelectProvinsiBox = function(make) {
        console.log('updating with',make);
        var listItems= "";
        for (var i = 0; i < modelKecamatan[make].length; i++){
            listItems+= "<option value='" + modelKecamatan[make][i].modelTypeID + "'>" + modelKecamatan[make][i].modelType + "</option>";
        }
        $("select#kecamatan").html(listItems);
    }
   
    /* function update kelurahan from changed kecamatan */
    var updateSelectKecamatanBox = function(maked) {
        console.log('updating with',maked);
        var listItems= "";
        for (var i = 0; i < modelKelurahan[maked].length; i++){
            listItems+= "<option value='" + modelKelurahan[maked][i].modelTypeID + "'>" + modelKelurahan[maked][i].modelType + "</option>";
        }
        $("select#kelurahan").html(listItems);
    }   
   
	/* on change provinsi */
    $("select#provinsi").on('change',function(){
        var selectedMake = $('#provinsi option:selected').text();
        updateSelectProvinsiBox(selectedMake);
    });
    
    /* on change kecamatan */
    $("select#kecamatan").on('change',function(){
        var selectedMake = $('#kecamatan option:selected').text();
        console.log(selectedMake);
        updateSelectKecamatanBox(selectedMake);
    });
            		
});
</script>

<script>  
  // Basic Form
  jQuery("#regisMember").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });  
  
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