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
		$this->load->model('m_penjualan');
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
	public function save_nota() {		

        $this->load->helper('date');
        $datestring = '%Y-%m-%d %h:%i:%a';
        $time = time();
        $now = mdate($datestring, $time);

		foreach ($_POST as $value) {
			$input = array(
				'tgl_transaksi' => $now,
				'is_Dropshipping' => $value['isDropshipping'],
				'is_Penjualan'	=> $value['isPenjualan'],
				'pelanggan_id'	=> $value['pelanggan_id'],
				'sales_id'	=> $value['sales_id'],
				'alamat' => $value['alamat'],
				'petugas_input' => $value['petugas_input'],
				'biaya_kirim'	=> $value['biaya_kirim'],
				'tgl_input'	=> $now,
				'jumlah' => $value['jumlah']
				);
		}
		$data = $this->m_penjualan->save_nota($input);
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}	

	// page title
	public function save_detail_nota() {		

        $this->load->helper('date');
        $datestring = '%Y-%m-%d %h:%i:%a';
        $time = time();
        $now = mdate($datestring, $time);

		foreach ($_POST as $value) {
			$input = array(
				'receipt_id' => $value['receipt_id'],
				'barcode' => $value['barcode'],
				'qty'	=> $value['qty'],
				'harga_jual'	=> $value['harga_jual'],
				'sub_total'	=> $value['sub_total']
				);
		$data = $this->m_penjualan->save_detail_nota($input);
		}
		header('Content-Type: application/json');
	    echo json_encode($data);		
	}	


	// page title
	public function page_title() {
		$data['page_title'] = 'POS Sales';
		$this->session->set_userdata($data);
	}
}
