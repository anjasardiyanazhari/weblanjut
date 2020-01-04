<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'DATA DASHBOARD KAWIN';
		$data['halaman'] = 'backend/index';
		$this->load->view('backend/template', $data);
	}

	public function barang()
	{
		$data['judul'] = 'DATA BARANG';
		$data['halaman'] = 'backend/barang';
		$this->load->view('backend/template', $data);
	}

	public function paket()
	{
		$data['judul'] = 'DATA BARANG';
		$data['halaman'] = 'backend/paket';
		$this->load->view('backend/template', $data);
	}

	public function Foto($data = null)
	{
		// Fungsion untuk upload
		$data['judul'] = 'DATA UPLOAD';
		$data['halaman'] = 'backend/upload';
		$this->load->view('backend/template', $data);
	}

	function Simpan_barang()
	{
		$config['upload_path'] = './assets/uploads/';

		$config['allowed_types'] = 'jpg|png|pdf';
		$config['max_size'] = '3000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';
		$this->load->library('upload');

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('txtgambar')) {
			$data['pesan'] = $this->upload->display_errors();
			$this->Foto($data);
		} else {
			// $data= array('upload_data'=>$this->upload->data());
			$data['pesan'] = 'berhasil upload';
			$this->Foto($data);
		}
	}
}
