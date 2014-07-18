<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Karyawan extends Admin_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_menu');	
		$this->load->model('m_wilayah');
		$this->load->model('m_member');
		$this->load->model('m_karyawan');
		
		// load permission
		$this->load->helper('text');
		// page title
		$this->page_title();
	}

	public function index()
	{
		// user_auth
		$this->check_auth('R');

		$data['message'] = $this->session->flashdata('message');
		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['provinsis'] = $this->m_wilayah->get_propinsi();
		$data['members'] = $this->m_member->get_members();
		$data['saless'] = $this->m_karyawan->get_sales();
		$data['title']	= "Manage Member Pinaple SI";
		$data['main_content'] = "setting/member/list";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function get_karyawans() {
		$this->load->library('datatables');	
		$result = $this->datatables->getData('v_pelanggan', array('','pelanggan_id', 'nama_lengkap', 'nama_kota', 'telp_rumah', 'telp_hp',  'username', 'deleted'), 'pelanggan_id', true);
		
		echo $result;
	}

	public function delete_karyawans() {
		$id = '';
		foreach ($_POST as $value) {
			$id = $value['pelanggan_id'];
		}
		$data = $this->m_member->delete_member($id);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}

	// page title
	public function page_title() {
		$data['page_title'] = 'Member';
		$this->session->set_userdata($data);
	}
}
