<?php

class m_penjualan extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_list_order_by_step($step) {
    	$sql = "SELECT o.order_id, o.tgl_transaksi, o.is_pembelian, o.remarks, o.step,
    					o.petugas_order, u.user_full_name AS petugas_order_name, o.tgl_order,
	    				o.petugas_input, s.user_full_name AS petugas_input_name, o.tgl_input, 
	    				o.petugas_verifikasi, e.user_full_name AS petugas_verifikasi_name, o.tgl_verifikasi, 
	    				o.jumlah 
    			FROM (SELECT * FROM purcs_order p WHERE p.step = '$step') o
    			LEFT JOIN users u ON o.petugas_order = u.user_id
				LEFT JOIN users s ON o.petugas_input = s.user_id
				LEFT JOIN users e ON o.petugas_verifikasi = s.user_id";
    	$query = $this->db->query($sql);
    	if ($query->num_rows() > 0) {
    		return $query->result();
    	}
    	else {
    		return array();
    	}
    }

    public function get_detail_order_by_id($order_id) {
    	$sql = "SELECT p.order_id,p.barcode,b.nama_barang,p.qty,p.harga_beli,p.exp_date,p.sub_total,p.kode_rak FROM
                (SELECT * FROM purcs_order_detail o WHERE o.order_id = '$order_id') p
    			LEFT JOIN inv_barang b ON p.barcode = b.barcode";
    	$query = $this->db->query($sql);
    	// echo '<pre>'; print_r($query->result()); die;
    	if ($query->num_rows() > 0) {
    		return $query->result();
    	}
    	else {
    		return array();
    	}	    	
    }

    public function get_list_order_by_id($order_id) {
    	// $this->db->where('order_id',$order_id);
    	// $query = $this->db->get('purcs_order');
    	$sql = "SELECT o.order_id, o.tgl_transaksi, o.is_pembelian, o.remarks, o.step,
    					o.petugas_order, u.user_full_name AS petugas_order_name, o.tgl_order,
	    				o.petugas_input, s.user_full_name AS petugas_input_name, o.tgl_input, 
	    				o.petugas_verifikasi, e.user_full_name AS petugas_verifikasi_name, o.tgl_verifikasi, 
	    				o.jumlah 
    			FROM (SELECT * FROM purcs_order p WHERE p.order_id = '$order_id') o
    			LEFT JOIN users u ON o.petugas_order = u.user_id
				LEFT JOIN users s ON o.petugas_input = s.user_id
				LEFT JOIN users e ON o.petugas_verifikasi = s.user_id";
    	$query = $this->db->query($sql);
    	// echo '<pre>'; print_r($query->result()); die;
    	if ($query->num_rows() > 0) {
    		return $query->row();
    	}
    	else {
    		return array();
    	}
    }

    public function save_nota($input) {
    	$ins = $this->db->insert('pos_receipt',$input);
    	if ($ins) {
    		return $this->db->insert_id();
    	}
    	else {
    		return array();
    	}
    }

    public function update_order($order_id,$input) {
    	$this->db->where('order_id',$order_id);
    	$update = $this->db->update('purcs_order',$input);
    	if ($update) {
    		return true;
    	}
    	else {
    		return false;
    	}
    }

    public function save_detail_nota($input) {
    	$insert = $this->db->insert('pos_receipt_detail',$input);
    	if ($insert) {
    		return $this->db->insert_id();
    	}
    	else {
    		return false;
    	}
    }


}