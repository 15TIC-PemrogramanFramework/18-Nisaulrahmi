<?php 
/**
* 
*/
class pegawai extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');

		//if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		//{
		//	redirect('/');
		//}

	}
	function index()
	{
		$data['pegawai']=$this->pegawai_model->ambil_data();
		$this->load->view('pegawai/pegawai_list',$data);

	}

	function tambah()
	{
		$data=array(
			'username'=>set_value('username'),
			'password'=>set_value('password'),
			'alamat'=>set_value('alamat'),
			'id_pegawai'=>set_value('id_pegawai'),
			'jabatan'=>set_value('jabatan'),
			'button'=>'Tambah',
			'action'=>site_url('pegawai/tambah_aksi'),
			);
		$this->load->view('pegawai/pegawai_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'alamat'=>$this->input->post('alamat'),
			'jabatan'=>$this->input->post('jabatan'),
			);
		$this->pegawai_model->tambah_data($data);
		redirect(site_url('pegawai'));
	}

	function delete($id)
	{
		$this->pegawai_model->hapus_data($id);
		redirect(site_url('pegawai'));

	}

	function edit($id)
	{
		$pgw=$this->pegawai_model->ambil_data_id($id);	
		$data=array(
			'username'=>set_value('username',$pgw->username),
			'password'=>set_value('password',$pgw->password),
			'alamat'=>set_value('alamat',$pgw->alamat),
			'id_pegawai'=>set_value('id_pegawai',$pgw->id_pegawai),
			'button'=>'Edit',
			'action'=>site_url('pegawai/edit_aksi'),

			);
		$this->load->view('pegawai/pegawai_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'alamat'=>$this->input->post('alamat'),
			);
		$id=$this->input->post('id_pegawai');
		$this->pegawai_model->edit_data($id,$data);
		redirect(site_url('pegawai'));

	}

}
?>