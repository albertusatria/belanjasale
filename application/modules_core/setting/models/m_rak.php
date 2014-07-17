<?php

class m_rak extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_rak() {
    	$query = $this->db->get('inv_rak');
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }

}
