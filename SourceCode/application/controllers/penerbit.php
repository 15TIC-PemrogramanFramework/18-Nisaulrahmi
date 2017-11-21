<?php 
/**
* 
*/
class penerbit extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('penerbit_model');
	}
	
	function index()
	{
			$data['penerbit'] = $this->penerbit_model->ambil_data();
			$this->load->view('penerbit/penerbit_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama_penerbit' => set_value('nama_penerbit'),
			'alamat_penerbit' => set_value('alamat_penerbit'),
			'tahun_penerbit' => set_value('tahun_penerbit'),
			'id_penerbit' => set_value('id_penerbit'),
			'button' => 'Tambah',
			'action' => site_url('penerbit/tambah_Peminjaman_aksi')
		);
		$this->load->view('penerbit/penerbit_form', $data);
	}

	function tambah_Peminjaman_aksi()
	{
		$data = array(
			'nama_penerbit' => $this->input->post('nama_penerbit'),
			'alamat_penerbit' => $this->input->post('alamat_penerbit'),
			'tahun_penerbit' => $this->input->post('tahun_penerbit'),
		);
		$this->penerbit_model->tambah_data($data);
		redirect(site_url('penerbit'));
	}

	function delete($id)
	{
		$this->penerbit_model->hapus_data($id);
		redirect(site_url('penerbit'));
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