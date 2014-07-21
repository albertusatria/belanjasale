<?php

class m_diskon extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_daftar_barang_harga_khusus($id) {
        $this->db->select('crm_diskon.id,crm_diskon.barcode,inv_barang.nama_barang,crm_diskon.min_qty,crm_diskon.harga_jual,crm_diskon.deleted,inv_barang.harga_jual as harga_normal');
        $this->db->where('crm_diskon.deleted','0');
        $this->db->where('crm_diskon.pelanggan_id',$id);
    	$this->db->from('crm_diskon');
        $this->db->join('inv_barang','crm_diskon.barcode = inv_barang.barcode');
        $query = $this->db->get();
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }


    function get_detail_barang($id) {
        $this->db->where('barcode',$id);
        $query = $this->db->get('inv_barang');
        if ($query->num_rows > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }


    function delete_diskon_member($id,$input) {
        $this->db->where('id',$id);
        $delete = $this->db->update('crm_diskon',$input);
        if ($delete) {
            return true;
        }
        else {
            return false;
        }
    }

    function save_barang_diskon($input) {
        $ins = $this->db->insert('crm_diskon',$input);
        if ($ins) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }


    function get_barang_no_diskon($id) {
        $sql = "SELECT * FROM inv_barang i WHERE i.barcode NOT IN (SELECT d.barcode FROM crm_diskon d WHERE d.pelanggan_id = '$id') ";
        $query = $this->db->query($sql);
        if ($query->num_rows > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

}
