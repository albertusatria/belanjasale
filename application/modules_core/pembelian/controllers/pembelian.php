<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Pembelian extends Admin_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_user');
		$this->load->model('m_role');
		$this->load->model('m_in_order');
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
		$data['title']		  = "Purchasing Receipt Order Pinaple SI";
		$data['main_content'] = "menu";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function order()
	{
		// user_auth
		$this->check_auth('R');

		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['message'] = $this->session->flashdata('message');
		$step = 'detail';
		$data['list_order'] = $this->m_in_order->get_list_order($step);
		$data['title']		  = "Receipt Purchasing Pinaple SI";
		$data['main_content'] = "receipt";
		$this->load->view('dashboard/admin/template', $data);
	}


	public function checkin()
	{
		// user_auth
		$this->check_auth('R');

		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['message'] = $this->session->flashdata('message');
		$data['title']		  = "POS Inventory Pinaple SI";
		$data['main_content'] = "pos";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function create_in_order()
	{


        $this->load->helper('date');
        $datestring = '%Y-%m-%d %h:%i:%a';
        $time = time();
        $now = mdate($datestring, $time);

		//ambil barang yang ga da di tabel
		foreach ($_POST as $value) {
		$tgltransaksi = DateTime::createFromFormat('d/m/Y', $value['tanggal'])->format('Y-m-d');


			$input = array(
				'is_pembelian' => $value['isPembelian'],
				'remarks' => $value['remarks'],
				'petugas_order' => $value['petugas_order'],
				'step' => $value['step'],
				'tgl_transaksi' => $tgltransaksi,
				'tgl_order' => $now
				);
		}
		$data = $this->m_in_order->create_in_order($input);
		header('Content-Type: application/json');
	    echo json_encode($data);
	}

	// page title
	public function page_title() {
		$data['page_title'] = 'Purchasing';
		$this->session->set_userdata($data);
	}
}
