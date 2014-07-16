<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Member extends Admin_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_user');
		$this->load->model('m_role');
		// load user
		$this->load->helper('text');
		// page title
		$this->page_title();
	}

	public function edit()
	{
		// user_auth
		$this->check_auth('R');

		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// get user list
		$data['rs_user'] = $this->m_user->get_all_user();
		// load template
		$data['message'] = $this->session->flashdata('message');
		$data['title']		  = "Edit Member Pinaple SI";
		$data['main_content'] = "edit";
		$this->load->view('dashboard/admin/template', $data);
	}

	// page title
	public function page_title() {
		$data['page_title'] = 'Edit Member';
		$this->session->set_userdata($data);
	}
}
