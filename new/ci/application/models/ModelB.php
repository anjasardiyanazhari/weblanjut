<?php 
/**
 * 
 */
class ModelB extends CI_Model
{
	
	//database untuk mengambil semua tbl_pegawai
	public function getAll()
	{
		return $this->db->get('data_b')->result();
	}

	//database untuk menghapus data tbl_pegawai menggunakan id tbl
	public function hapus($id_004) 
	{
		$this->db->delete('data_b', array('id_004' => $id_004));
	}

	//database untuk menambah table/data
	public function tambah($object)
	{
		$this->db->insert('data_b', $object);
	}

	//database untuk mengambil data dengan id edit
	public function getWhere($id_004)
	{
		return $this->db->where('id_004', $id_004)->get('data_b')->row();
	}

	//database untuk simpan setelah diedit
	public function simpan_edit($id_004, $object)
	{
		$this->db->where('id_004', $id_004)->update('data_b', $object);
	}
}

?>