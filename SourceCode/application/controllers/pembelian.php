<?php 
/**
* 
*/
class pembelian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
		$this->load->model('buku_model');
		$this->load->model('customer_model');
	}
	
	function index()
	{
			$data['pembelian'] = $this->pembelian_model->Select_Peminjaman();
			$this->load->view('pembelian/pembelian_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah()
	{
		$data = array(
			'id_buku' => set_value('id_buku'),
			'id_customer' => set_value('id_customer'),
			'buku' => $this->buku_model->ambil_data(),
			'customer' => $this->customer_model->ambil_data(),
			'id_pembelian' => set_value('id_pembelian'),
			'button' => 'Tambah',
			'action' => site_url('pembelian/tambah_Peminjaman_aksi')
		);
		$this->load->view('pembelian/pembelian_form', $data);
	}

	function tambah_Peminjaman_aksi()
	{
		$data = array(
			'id_customer' => $this->input->post('id_customer'),
			'id_buku' => $this->input->post('id_buku'),
			'id_pembelian' => $this->input->post('id_pembelian'),
		);
		$this->pembelian_model->tambah_data($data);
		redirect(site_url('pembelian'));
	}

	function delete($id)
	{
		$this->pembelian_model->hapus_data($id);
		redirect(site_url('pembelian'));
	}
/*
	function edit($id)
	{
		$pembelian=($this->pembelian_model->ambil_data_id($id));
		$data = array(
			'id_pem' => set_value('id_pem',$pembelian->id_pem),
			'id_mem' => set_value('id_mem',$pembelian->id_mem),
			'stok' => set_value('stok',$pembelian->stok),
			'id' => set_value('id',$pembelian->id),
			'member' => $this->member_model->Select_Anggota(),
			'barang' => $this->barang_model->Select_Anggota(),
			'button' => 'Edit',
			'action' => site_url('pembelian/edit_aksi')
		);
		$this->load->view('pembelian/pembelian_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_mem' => $this->input->post('id_mem'),
			'id' => $this->input->post('id'),
		);
		$id_pem = $this->input->post('id_pem');
		$this->pembelian_model->edit_data($id_pem,$data);
		redirect(site_url('pembelian'));
	}
} */
}
?>