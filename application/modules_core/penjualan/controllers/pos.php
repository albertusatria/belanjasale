<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Pos extends Admin_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_user');
		$this->load->model('m_role');
		$this->load->model('m_member');
		// load user
		$this->load->helper('text');
		// page title
		$this->page_title();
	}

	public function index()
	{
		// user_auth
		$this->check_auth('R');

		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['message'] = $this->session->flashdata('message');
		$data['title']		  = "POS Sales Pinaple SI";
		$data['main_content'] = "pos";
		$this->load->view('dashboard/admin/template', $data);
	}


	// page title
	public function get_member() {		
		foreach ($_POST as $value) {
			$pelanggan_id = $value['pelanggan_id'];
		}
		$data = $this->m_member->get_member($pelanggan_id);
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}


	// page title
	public function page_title() {
		$data['page_title'] = 'POS Sales';
		$this->session->set_userdata($data);
	}
}
