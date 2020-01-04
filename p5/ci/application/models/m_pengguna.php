<?php 

/**
 * 
 */
class M_pengguna extends CI_model
{
	
	//database untuk mengambil semua tbl_pengguna
	public function getAll()
	{
		return $this->db->get('tbl_pengguna')->result();
	}

	//database untuk menghapus data tbl_pengguna menggunakan id tbl
	public function hapus($kode) 
	{
		$this->db->delete('tbl_pengguna', array('kode' => $kode));
	}

	//database untuk menambah table/data
	public function tambah($object)
	{
		$this->db->insert('tbl_pengguna', $object);
	}

	//database untuk mengambil data dengan id edit
	public function getWhere($kode)
	{
		return $this->db->where('kode', $kode)->get('tbl_pengguna')->row();
	}

	//database untuk simpan setelah diedit
	public function simpan_edit($kode, $object)
	{
		$this->db->where('kode', $kode)->update('tbl_pengguna', $object);
	}
}
 ?>