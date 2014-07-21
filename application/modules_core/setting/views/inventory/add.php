    <div class="pageheader">
      <h2><i class="fa fa-users"></i>Pengaturan Barang</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">BelanjaSale</a></li>
          <li><a href="<?php echo base_url();?>setting/inventory">Barang</a></li>
          <li class="active">Tambah</li>
        </ol>
      </div>
    </div>
        
    <div class="contentpanel">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">Tambah Barang</h4>
          <p>Ini adalah halaman untuk menambah Barang</p>
        </div>
        <form id="sasPanel" class="form-horizontal form-bordered">

        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id'] ?>">

        <div class="panel-body panel-body-nopadding">
          
            <div class="form-group">
              <label class="col-sm-3 control-label">Barang Parent</label>
              <div class="col-sm-5">
                <select class="form-control choosen-select" name="parent_id" id="parent_id">
                    <option value="" selected>Tidak ada</option>
                    <?php if (isset($barangs)) : foreach ($barangs as $barang) : ?>
                        <option value="<?php echo $barang->barcode; ?>"> <?php echo $barang->nama_barang; ?></option>
                    <?php endforeach ; ?>
                    <?php endif; ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Kode Barcode *</label>
              <div class="col-sm-3">
                <input name="barcode" id="barcode" class="form-control" maxlength="16" type="text" value="" required />
              </div>
              <label id="barcode-validate" class="col-sm-3 control-label" style="text-align:left;display:none">Ini pesan</label>
            </div>


            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Barang *</label>
              <div class="col-sm-7">
                <input name="nama_barang" id="nama_barang" class="form-control" maxlength="100" type="text" value="" required />
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Buffer Stok</label>
              <div class="col-sm-3">
                <input name="buffer_stok" id="buffer_stok" class="form-control" maxlength="5" type="text" value="0" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Satuan *</label>
              <div class="col-sm-3">
                <input name="satuan" id="satuan" class="form-control" maxlength="20" type="text" value="Karton" required disabled/>
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Harga Jual *</label>
              <div class="col-sm-3">
                <input name="harga_jual" id="harga_jual" class="form-control" maxlength="25" type="text" value="" required />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Berat (gram)</label>
              <div class="col-sm-3">
                <input name="berat" id="berat" class="form-control" maxlength="25" type="text" value="" />
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Volume *</label>
              <div class="col-sm-3">
                <input name="volume" id="volume" class="form-control" maxlength="25" type="text" value="" required/>
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group">
              <label class="col-sm-3 control-label">Konversi dari parent </label>
              <div class="col-sm-3">
                <input name="konversi" name="konversi" id="konversi" class="form-control" maxlength="3" type="text" value="" required disabled />
                <span></span>
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

           <div class="form-group" id="rak">
              <label class="col-sm-3 control-label">Kode Rak *</label>
              <div class="col-sm-3">
                <select class="form-control choosen-select" name="kode_rak" id="kode_rak">
                    <option value="" selected>Palet</option>
                    <?php if (isset($raks)) : foreach ($raks as $rak) : ?>
                        <option value="<?php echo $rak->kode_rak; ?>"> <?php echo $rak->kode_rak; ?></option>
                    <?php endforeach ; ?>
                    <?php endif; ?>
                </select>
                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
              </div>
            </div>

        </div><!-- panel-body -->
        
        <div class="panel-footer">
             <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <a href="#" id="simpanbarang" class="btn btn-primary">Submit</a>&nbsp;
                  <button class="btn btn-default">Cancel</button>
                </div>
             </div>
          </div><!-- panel-footer -->

          </form>
        
      </div><!-- panel -->      
    </div><!-- contentpanel -->
    
<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>bracket/js/jquery.autogrow-textarea.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap-fileupload.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>bracket/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/dropzone.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.numeric.js"></script>
<script src="<?php echo base_url();?>bracket/js/colorpicker.js"></script>

<script src="<?php echo base_url();?>bracket/js/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<style type="text/css">
  #rak .chosen-drop {display: none};

</style>

<script type="text/javascript">
jQuery("#sasPanel").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    }, 
    error: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error').addClass('has-success');      
    }
});
    CI_ROOT = "<?=base_url() ?>";
</script>

<script>
jQuery(document).ready(function(){

  jQuery("#rak").find(".chosen-drop").css("display","none");
    
  jQuery("#buffer-stok").numeric();
  jQuery("#berat").numeric();
  jQuery("#harga_jual").numeric();
  jQuery("#konversi").numeric();

  // Chosen Select
  jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});
  jQuery("select").chosen({
   'min-width': '100px',
   'white-space': 'nowrap',
   disable_search_threshold: 10
  });  

  jQuery("#parent_id").change(function(){
    if (jQuery(this).val() != "") {
      //bila tidak kosong
      jQuery("#satuan").val("");
      jQuery("#satuan").removeAttr("disabled");
      jQuery("#konversi").removeAttr("disabled");
      jQuery("#rak").find(".chosen-drop").css("display","block");
    }
    else {
      jQuery("#konversi").val("");
      jQuery("#kode_rak").val("");      
      jQuery("#rak").find(".chosen-single span").text("Palet");
      jQuery("#satuan").val("Karton");
      jQuery("#satuan").attr("disabled","");
      jQuery("#konversi").attr("disabled","");
      jQuery("#rak").find(".chosen-drop").css("display","none");
      console.log("nilai : "+jQuery("#kode_rak").val());
    }
  });

  // jQuery("#kode_rak").change(function(){
  //     console.log("nilai saya : "+jQuery(this).val());    
  // });

  jQuery("#barcode").on('blur', function(){
      console.log(jQuery(this).val());
      var item   = {};
      var number = 1;
      item[number] = {};
      item[number]['barcode'] = jQuery(this).val();

      $.ajax({
          type: "POST",
          url: CI_ROOT+"setting/inventory/check_barcode",
          data: item,
           success: function(data)
           {
              console.log(data);
              if (data == true)
              {
                //terjadi double
                jQuery('#barcode-validate').show();
                jQuery('#barcode-validate').css("color","red");
                jQuery('#barcode-validate').text("barcode sudah ada");
                jQuery('#simpanbarang').attr("disabled","");
              }
              else
              {
                //berhasil
                jQuery('#barcode-validate').show();
                jQuery('#barcode-validate').css("color","green");
                jQuery('#barcode-validate').text("berhasil");
                jQuery('#simpanbarang').removeAttr("disabled");
              }
           },
           error: function(data)
           {
              console.log('terjadi kesalahan sistem');
           }
      });           
  }); //end of jQuery("#barcode").on('blur', function(){

  jQuery('#sasPanel').on('click', '#simpanbarang', function(){
      var valid = jQuery("#sasPanel").valid();
      if (!valid) 
      {
        console.log('gagal');
      } 
      else 
      {
        //raknya harus terisi dulu

        console.log('berhasil');
        var item   = {};
        var number = 1;
        item[number] = {};
        item[number]['barcode_parent'] = jQuery('#parent_id').val();
        item[number]['barcode'] = jQuery('#barcode').val();
        item[number]['nama_barang'] = jQuery('#nama_barang').val();
        item[number]['buffer_stok'] = jQuery('#buffer_stok').val();
        item[number]['harga_jual'] = jQuery('#harga_jual').val();
        item[number]['satuan'] = jQuery('#satuan').val();
        item[number]['berat'] = jQuery('#berat').val();
        item[number]['volume'] = jQuery('#volume').val();
        item[number]['konversi'] = jQuery('#konversi').val();
        item[number]['kode_rak'] = jQuery('#kode_rak').val();
        item[number]['petugas_id'] = jQuery('#user_id').val();

        console.log(item[1]);
        // return false;

        $.ajax({
            type: "POST",
            url: CI_ROOT+"setting/inventory/save_barcode",
            data: item,
             success: function(data)
             {
                //console.log(data);
                window.location.replace(CI_ROOT + 'setting/inventory');
             },
             error: function(data)
             {
                console.log('terjadi kesalahan sistem');
             }
        });   

      }
      
        
  }); //end of jQuery("#barcode").on('blur', function(){

});
</script>
