<?php

class m_diskon extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_daftar_barang_harga_khusus($id) {
        $this->db->where('deleted','0');
    	$query = $this->db->get('crm_diskon');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
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

}
