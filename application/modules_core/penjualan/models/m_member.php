<?php

class m_member extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_member($id) {
        $this->db->select('*');
        $this->db->where('pelanggan_id',$id);
        $this->db->from('crm_pelanggan');
        $this->db->join('sdm_users', 'crm_pelanggan.sales_id = sdm_users.kary_id');
        $this->db->join('wil_kabupaten', 'crm_pelanggan.kota_id = wil_kabupaten.id');
        $query = $this->db->get();
        // echo '<pre>'; print_r($query->result());die;
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
}