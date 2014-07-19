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
		$this->load->model('m_diskon');

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

	public function add()
	{
		// user_auth
		$this->check_auth('C');

		$data['message'] = $this->session->flashdata('message');
		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['provinsis'] = $this->m_wilayah->get_propinsi();
		$data['saless'] = $this->m_karyawan->get_sales();
		$data['title']	= "Manage Member Pinaple SI";
		$data['main_content'] = "setting/member/add";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function detail($id = null)
	{
		// user_auth
		$this->check_auth('U');

		$data['message'] = $this->session->flashdata('message');
		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['member'] = $this->m_member->get_member($id);
		$data['provinsis'] = $this->m_wilayah->get_propinsi();
		$data['diskon_produks'] = $this->m_diskon->get_daftar_barang_harga_khusus($id);		
		//echo '<pre>'; print_r($data['diskon_produks']);die;
		$data['saless'] = $this->m_karyawan->get_sales();
		$data['title']	= "Manage Member Pinaple SI";
		$data['main_content'] = "setting/member/edit";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function get_members() {
		$this->load->library('datatables');	
		$result = $this->datatables->getData('v_pelanggan', array('','pelanggan_id', 'nama_lengkap', 'nama_kota', 'telp_rumah', 'telp_hp',  'username', 'deleted'), 'pelanggan_id', true);
		
		echo $result;
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
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan');
		header('Content-Type: application/json');
		echo json_encode($data);			
	}


	public function update_member() {

        $this->load->helper('date');
        $datestring = '%Y-%m-%d %h:%i:%a';
        $time = time();
        $now = mdate($datestring, $time);

		foreach ($_POST as $value) {
			//add here
			$id = $value['memberid'];
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
				'du' => $now
				);
		}
		// echo '<pre>'; print_r($input); die;
		$data = $this->m_member->update_member($id,$input);
		header('Content-Type: application/json');
		echo json_encode($data);			
	}


	public function delete_diskon_member() {
		foreach ($_POST as $value) {
			$id = $value['id'];
			$input = array(
				'deleted' => '1'
				);
		}
		$data = $this->m_diskon->delete_diskon_member($id,$input);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}

	public function update_diskon_member() {
		foreach ($_POST as $value) {
			$id = $value['id'];
			$input = array(
				'min_qty' => $value['min_qty'],
				'harga_jual' => $value['harga_jual'],
				);
		}
		$data = $this->m_diskon->delete_diskon_member($id,$input);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}

	public function get_barang_no_diskon() {
		//ambil barang yang ga da di tabel
		foreach ($_POST as $value) {
			$id = $value['id'];
		}
		$data = $this->m_diskon->get_barang_no_diskon($id);
		header('Content-Type: application/json');
	    echo json_encode($data);
	}

	public function get_detail_barang() {
		//ambil barang yang ga da di tabel
		foreach ($_POST as $value) {
			$id = $value['id'];
		}
		$data = $this->m_diskon->get_detail_barang($id);
		header('Content-Type: application/json');
	    echo json_encode($data);
	}

	public function save_barang_diskon() {
		//ambil barang yang ga da di tabel

		foreach ($_POST as $value) {
			$input = array(
				'barcode' => $value['barcode'],
				'pelanggan_id' => $value['pelanggan_id'],
				'min_qty' => $value['min_qty'],
				'harga_jual' => $value['harga_jual'],
				'petugas_id' => $value['petugas_id'],
				'tgl_diaktifkan' => date('Y-m-d')
				);
		}
		$data = $this->m_diskon->save_barang_diskon($input);
		header('Content-Type: application/json');
	    echo json_encode($data);
	}

	// page title
	public function page_title() {
		$data['page_title'] = 'Member';
		$this->session->set_userdata($data);
	}
}
