<?php 
/**
* 
*/
class buku_model extends CI_Model
{
	
	public $nama_table ='buku';
	public $id         ='id_buku';
	public $order	   ='DESC';

	function __construct()
	{
		parent::__construct();
	}


	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->distinct();
 		$this->db->select('b.id_buku, b.judul, b.pengarang, b.tahun, b.harga, p.id_penerbit, p.nama_penerbit, p.alamat_penerbit, p.tahun_penerbit');
 		$this->db->from('buku b');
 		$this->db->join('penerbit p', 'p.id_penerbit = b.id_penerbit');
 		return $this->db->get($this->nama_table)->result();

	}

	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function cek_login($username,$password){
		$this->db->where('nama',$username);
		$this->db->where('prodi',$password);
		return $this->db->get($this->nama_table)->row();
	}

	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		 $this->db->insert($this->nama_table,$data);
		 return $this->db->get($this->nama_table)->result();
		
	}

	//untuk hapus data seluruh mahasiswa
	function hapus_data($id){
		 $this->db->where($this->id,$id);
		 $this->db->delete($this->nama_table);
	
}

	function edit_data($id,$data){
		 $this->db->where($this->id,$id);
		 $this->db->update($this->nama_table,$data);
}
}
 ?>