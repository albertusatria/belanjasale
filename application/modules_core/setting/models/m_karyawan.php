<?php

class m_karyawan extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_sales() {
        $this->db->where('status','SALES');
    	$query = $this->db->get('sdm_users');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }
}
