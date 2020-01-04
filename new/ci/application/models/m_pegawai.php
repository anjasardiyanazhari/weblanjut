<?php 
/**
 * 
 */
class M_pegawai extends CI_Model
{
	
	//database untuk mengambil semua tbl_pegawai
	public function getAll()
	{
		return $this->db->get('tbl_pegawai')->result();
	}

	//database untuk menghapus data tbl_pegawai menggunakan id tbl
	public function hapus($id) 
	{
		$this->db->delete('tbl_pegawai', array('id' => $id));
	}

	//database untuk menambah table/data
	public function tambah($object)
	{
		$this->db->insert('tbl_pegawai', $object);
	}

	//database untuk mengambil data dengan id edit
	public function getWhere($id)
	{
		return $this->db->where('id', $id)->get('tbl_pegawai')->row();
	}

	//database untuk simpan setelah diedit
	public function simpan_edit($id, $object)
	{
		$this->db->where('id', $id)->update('tbl_pegawai', $object);
	}
}

?>