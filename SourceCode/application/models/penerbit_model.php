<?php
/**
 * 
 */
 class penerbit_model extends CI_Model
 {
 	public $nama_table = 'penerbit';
	public $id = 'id_penerbit';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Peminjaman()
 	{
 		$this->db->distinct();
 		$this->db->select('tb.id_terbit, b.judul, p.id_penerbit, p.nama_penerbit, p.tahun_penerbit , b.harga');
 		$this->db->from('terbit tb');
 		$this->db->join('buku b', 'b.id_buku = tb.id_buku');
 		$this->db->join('penerbit p', 'p.id_penerbit = tb.id_penerbit');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();

	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($kode_pinjam,$data)
 	{
 		$this->db->where($this->id, $kode_pinjam);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>