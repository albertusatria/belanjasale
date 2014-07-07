<?php

class m_wilayah extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_propinsi() {
    	$query = $this->db->get('wil_provinsi');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }

    function get_kota($id) {
    	$this->db->where('id_prov',$id);
    	$query = $this->db->get('wil_kabupaten');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result_array();
    	} else {
    		return array();
    	}
    }

    function get_kecamatan($id) {
    	$this->db->where('id_kabupaten',$id);
    	$query = $this->db->get('wil_kecamatan');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result_array();
    	} else {
    		return array();
    	}
    }

    function get_desa($id) {
    	$this->db->where('id_kecamatan',$id);
    	$query = $this->db->get('wil_desa');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result_array();
    	} else {
    		return array();
    	}
    }


}
