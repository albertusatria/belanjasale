<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/admin_base.php' );

class Inventory extends Admin_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('m_menu');	
		$this->load->model('m_inventory');
		$this->load->model('m_rak');		

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
		$data['barangs'] = $this->m_inventory->get_inventories();
		$data['title']	= "Manage Member Pinaple SI";
		$data['main_content'] = "setting/inventory/list";
		$this->load->view('dashboard/admin/template', $data);
	}

	public function add() {
		// user_auth
		$this->check_auth('C');
		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['barangs'] = $this->m_inventory->get_inventories();
		$data['raks'] = $this->m_rak->get_rak();
		$data['title']	= "Manage Member Pinaple SI";
		$data['main_content'] = "setting/inventory/add";
		$this->load->view('dashboard/admin/template', $data);		
	}

	public function detail($barcode = "") {
		// user_auth
		$this->check_auth('U');
		// menu
		$data['menu'] = $this->menu();
		// user detail
		$data['user'] = $this->user;
		// load template
		$data['barang'] = $this->m_inventory->get_inventory($barcode);
		$data['barang_parent'] = $this->m_inventory->get_inventory($data['barang']->barcode_parent);
		$data['raks'] = $this->m_rak->get_rak();		
		$data['message'] = $this->session->flashdata('message');
		$data['title']		  = "Edit Member Pinaple SI";
		$data['main_content'] = "setting/inventory/edit";
		$this->load->view('dashboard/admin/template', $data);		
	}

	public function save_barcode() {

		$now = date('Y-m-d');

		foreach ($_POST as $value) {
			if ($value['barcode_parent'] == null || $value['barcode_parent'] == '')
			{
				//jika parent
				$input = array(
					'barcode' 		=> $value['barcode'],
					'nama_barang' 	=> $value['nama_barang'],
					'buffer_stok'	=> $value['buffer_stok'],
					'satuan'		=> $value['satuan'],
					'harga_jual'	=> $value['harga_jual'],
					'berat'			=> $value['berat'],
					'volume'		=> $value['volume'],
					'petugas_id'	=> $value['petugas_id'],
					'dc'			=> $now
					);
			}
			else {
				//jika anak
				$input = array(
					'barcode' 		=> $value['barcode'],
					'nama_barang' 	=> $value['nama_barang'],
					'buffer_stok'	=> $value['buffer_stok'],
					'satuan'		=> $value['satuan'],
					'harga_jual'	=> $value['harga_jual'],
					'kode_rak'		=> $value['kode_rak'],
					'berat'			=> $value['berat'],
					'volume'		=> $value['volume'],
					'barcode_parent'=> $value['barcode_parent'],
					'petugas_id'	=> $value['petugas_id'],
					'dc'			=> $now
					);				
				$params = array(
					'konversi'		=> $value['konversi'],
					'du'			=> $now
					);				
				$data = $this->m_inventory->update_barcode($value['barcode_parent'],$params);
			}
		}
		//jika
		$data = $this->m_inventory->save_barcode($input);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan');
		// header('Content-Type: application/json');
	    // echo json_encode($data);			
	}	

	public function update_barcode() {

		$now = date('Y-m-d');

		foreach ($_POST as $value) {
			$barcode = $value['barcode'];

			if ($value['barcode_parent'] == null || $value['barcode_parent'] == '')
			{
				//jika parent
				$input = array(
					'nama_barang' 	=> $value['nama_barang'],
					'buffer_stok'	=> $value['buffer_stok'],
					'satuan'		=> $value['satuan'],
					'harga_jual'	=> $value['harga_jual'],
					'berat'			=> $value['berat'],
					'volume'		=> $value['volume'],
					'petugas_id'	=> $value['petugas_id'],
					'du'			=> $now
					);
			}
			else {
				//jika anak
				$input = array(
					'nama_barang' 	=> $value['nama_barang'],
					'buffer_stok'	=> $value['buffer_stok'],
					'satuan'		=> $value['satuan'],
					'harga_jual'	=> $value['harga_jual'],
					'kode_rak'		=> $value['kode_rak'],
					'berat'			=> $value['berat'],
					'volume'		=> $value['volume'],
					'barcode_parent'=> $value['barcode_parent'],
					'petugas_id'	=> $value['petugas_id'],
					'du'			=> $now
					);				
			}
		}
		//jika
		$data = $this->m_inventory->update_barcode($barcode,$input);
		$this->session->set_flashdata('message', 'Data berhasil diubah');
		// header('Content-Type: application/json');
	    // echo json_encode($data);			
	}	

	public function get_barcode() {
		$this->load->library('datatables');	
		$result = $this->datatables->getData('inv_barang', array('','barcode', 
			'nama_barang', 'stok_total', 'harga_jual', 'deleted'), 'barcode', true);
		echo $result;
	}

	public function check_barcode() {
		foreach ($_POST as $value) {
			$barcode = $value['barcode'];
		}
		$data = $this->m_inventory->check_barcode($barcode);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}	

	public function delete_barcode() {
		$barcode = '';
		foreach ($_POST as $value) {
			$barcode = $value['barcode'];
			$input = array(
				'deleted' => '1'
				);
		}
		$data = $this->m_inventory->update_barcode($barcode,$input);
		header('Content-Type: application/json');
	    echo json_encode($data);			
	}

	public function get_detail_barang() {
		//ambil barang yang ga da di tabel
		foreach ($_POST as $value) {
			$barcode = $value['barcode'];
			$pelanggan_id = $value['pelanggan_id'];
		}
		$data = $this->m_inventory->get_inventory_array($pelanggan_id,$barcode);
		header('Content-Type: application/json');
	    echo json_encode($data);
	}

	// page title
	public function page_title() {
		$data['page_title'] = 'Inventory';
		$this->session->set_userdata($data);
	}
}
