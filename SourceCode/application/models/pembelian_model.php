<?php
/**
 * 
 */
 class pembelian_model extends CI_Model
 {
 	public $nama_table = 'pembelian';
	public $id = 'id_pembelian';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Peminjaman()
 	{
 		$this->db->distinct();
 		$this->db->select('pm.id_pembelian, c.nama, c.alamat, b.judul, b.harga');
 		$this->db->from('pembelian pm');
 		$this->db->join('buku b', 'b.id_buku = pm.id_buku');
 		$this->db->join('customer c', 'c.id_customer = pm.id_customer');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
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