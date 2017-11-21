<?php 
/**
* 
*/
class buku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('buku_model');
		$this->load->model('penerbit_model');
	}
	function index()
	{
		$data['buku']=$this->buku_model->ambil_data();
		$this->load->view('buku/buku_list',$data);

	}

	function tambah()
	{
		$data=array(
			'judul'=>set_value('judul'),
			'pengarang'=>set_value('pengarang'),
			'tahun'=>set_value('tahun'),
			'harga'=>set_value('harga'),
			'penerbit' => $this->penerbit_model->ambil_data(),
			'id_buku'=>set_value('id_buku'),
			'button'=>'Tambah',
			'action'=>site_url('buku/tambah_aksi'),

			);
		$this->load->view('buku/buku_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'judul'=>$this->input->post('judul'),
			'pengarang'=>$this->input->post('pengarang'),
			'id_penerbit'=>$this->input->post('id_penerbit'),
			'tahun'=>$this->input->post('tahun'),
			'harga'=>$this->input->post('harga'),			
			);
		$this->buku_model->tambah_data($data);
		redirect(site_url('buku'));
	}
	function delete($id)
	{
		$this->buku_model->hapus_data($id);
		redirect(site_url('buku'));

	}

	function edit($id)
	{
		$buk=$this->buku_model->ambil_data_id($id);	
		$data=array(
			'judul'=>set_value('judul',$buk->judul),
			'pengarang'=>set_value('pengarang',$buk->pengarang),
			'penerbit' => $this->penerbit_model->ambil_data(),
			'tahun'=>set_value('tahun',$buk->tahun),
			'harga'=>set_value('harga',$buk->harga),
			'id_buku'=>set_value('id_buku',$buk->id_buku),
			'button'=>'Edit',
			'action'=>site_url('buku/edit_aksi'),

			);
		$this->load->view('buku/buku_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'judul'=>$this->input->post('judul'),
			'pengarang'=>$this->input->post('pengarang'),
			'id_penerbit'=>$this->input->post('id_penerbit'),
			'tahun'=>$this->input->post('tahun'),
			'harga'=>$this->input->post('harga'),	
			
			);
		$id=$this->input->post('id_buku');
		$this->buku_model->edit_data($id,$data);
		redirect(site_url('buku'));
	}

}
?>