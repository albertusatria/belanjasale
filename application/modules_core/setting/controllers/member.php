<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Member extends Admin_base {
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

	public function delete_member() {
		$id = '';
		foreach ($_POST as $value) {
			$id = $value['pelanggan_id'];
		}
		$data = $this->m_member->delete_member($id);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}

	public function add_member() {

        $this->load->helper('date');
        $datestring = '%Y-%m-%d %h:%i:%a';
        $time = time();
        $now = mdate($datestring, $time);

		foreach ($_POST as $value) {
			//add here
			$input = array(
				'pelanggan_id' => $value['id'],
				'nama_lengkap' => $value['nama'],
				'alamat' => $value['alamat'],
				'propinsi_id' => $value['prov'],
				'kota_id' => $value['kota'],
				'kecamatan_id' => $value['kec'],
				'desa_id' => $value['kel'],
				'kodepos' => $value['kdpos'],
				'telp_rumah' => $value['telp_rmh'],
				'telp_hp' => $value['telp_hp'],
				'fax' => $value['fax'],
				'email' => $value['email'],
				'sales_id' => $value['salesid'],
				'petugas_id' => $value['petugas_id'],
				'dc' => $now
				);
		}
		// echo '<pre>'; print_r($input); die;
		$data = $this->m_member->add_member($input);
		header('Content-Type: application/json');
	    // echo json_encode($data);			
	}


	// page title
	public function page_title() {
		$data['page_title'] = 'Member';
		$this->session->set_userdata($data);
	}
}
