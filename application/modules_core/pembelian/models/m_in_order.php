<?php

class m_in_order extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_list_order($step) {
    	$this->db->where('step',$step);
    	$query = $this->db->get('purcs_order');
    	if ($query->num_rows() > 0) {
    		return $query->result();
    	}
    	else {
    		return array();
    	}
    }

    public function create_in_order($input) {
    	$ins = $this->db->insert('purcs_order',$input);
    	if ($ins) {
    		return $this->db->insert_id();
    	}
    	else {
    		return array();
    	}
    }

}