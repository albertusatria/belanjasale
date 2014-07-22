<?php

class m_inventory extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_inventories() {
    	$query = $this->db->get('inv_barang');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }

    function get_inventory($barcode) {
        $this->db->where('barcode',$barcode);
        $query = $this->db->get('inv_barang');
        //echo '<pre>'; print_r($query->row());die;
        if ($query->num_rows > 0) {
            return $query->row();
        } else {
            return array();
        }
    }


    function get_inventory_array($pelanggan_id,$barcode) {
        $sql = "SELECT b.barcode,b.nama_barang,b.harga_jual,d.harga_jual as harga_member,d.min_qty,b.kode_rak
                FROM (SELECT * FROM inv_barang i WHERE i.barcode = '$barcode') b
                LEFT JOIN (SELECT * FROM crm_diskon c WHERE c.pelanggan_id = '$pelanggan_id') d ON b.barcode = d.barcode ";
        $query = $this->db->query($sql);
        //echo '<pre>'; print_r($query->row());die;
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    function update_barcode($barcode,$input) {
        $this->db->where('barcode',$barcode);
        $updt = $this->db->update('inv_barang',$input);
        // echo '<pre>'; print_r($query->result());die;
        if ($updt) {
            return true;
        } else {
            return false;
        }
    }

    function save_barcode($input) {
        $ins = $this->db->insert('inv_barang',$input);
        // echo '<pre>'; print_r($query->result());die;
        if ($ins) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    function check_barcode($barcode) {
        $this->db->where('barcode',$barcode);
        $query = $this->db->get('inv_barang');
        // echo '<pre>'; print_r($query->result());die;
        if ($query->num_rows > 0) {
            return true;
        } else {
            return false;
        }

    }
}
