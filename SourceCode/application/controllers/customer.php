<?php 
/**
* 
*/
class customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');



	}
	function index()
	{
		$data['customer']=$this->customer_model->ambil_data();
		$this->load->view('customer/customer_list',$data);

	}

	function tambah()
	{
		$data=array(
			'nama'=>set_value('nama'),
			'password'=>set_value('password'),
			'alamat'=>set_value('alamat'),
			'id_customer'=>set_value('id_customer'),
			'button'=>'Tambah',
			'action'=>site_url('customer/tambah_aksi'),

			);
		$this->load->view('customer/customer_form',$data);
}

function tambah_aksi()
{
	$data=array(
			'nama'=>$this->input->post('nama'),
			'password'=>$this->input->post('password'),
			'alamat'=>$this->input->post('alamat'),
			);
	$this->customer_model->tambah_data($data);
	redirect(site_url('customer'));
}
function delete($id)
{
	$this->customer_model->hapus_data($id);
	redirect(site_url('customer'));

}

function edit($id)
{
$mhs=$this->customer_model->ambil_data_id($id);	
$data=array(
			'nama'=>set_value('nama',$mhs->nama),
			'password'=>set_value('password',$mhs->password),
			'alamat'=>set_value('daerah',$mhs->alamat),
			'id_customer'=>set_value('id_customer',$mhs->id_customer),
			'button'=>'Edit',
			'action'=>site_url('customer/edit_aksi'),

			);
$this->load->view('customer/customer_form',$data);
}
function edit_aksi()
{
	$data=array(
			'nama'=>$this->input->post('nama'),
			'password'=>$this->input->post('password'),
			'alamat'=>$this->input->post('alamat'),
			);
	$id=$this->input->post('id_customer');
	$this->customer_model->edit_data($id,$data);
	redirect(site_url('customer'));

}

}
 ?>