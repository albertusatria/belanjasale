<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Wilayah extends Admin_base {

	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_menu');	
		$this->load->model('m_wilayah');		
		// load permission
		$this->load->helper('text');
	}

	public function index()
	{
		// user_auth
		$this->check_auth('R');
		die;
	}

	// page title
	public function get_kota() {		

		$id = '';
		foreach ($_POST as $value) {
			$id = $value['id_prov'];
		}

		$data = $this->m_wilayah->get_kota($id);
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}

	public function get_kecamatan() {		

		$id = '';
		foreach ($_POST as $value) {
			$id = $value['id_kabupaten'];
		}

		$data = $this->m_wilayah->get_kecamatan($id);
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}

	public function get_desa() {		

		$id = '';
		foreach ($_POST as $value) {
			$id = $value['id_kecamatan'];
		}

		$data = $this->m_wilayah->get_desa($id);
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}

}
