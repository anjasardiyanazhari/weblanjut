<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengguna');

		// Pengecekan udah login atau tidak
		if ($this->session->userdata('login') == false) {
			redirect('administrator/login');
		}
	}

	public function index()
	{
		//percobaan untuk menampilkan data semua pegawai
		// $data = $this->m_pengguna->getAll();
		// var_dump($data);


		$data['sub_judul'] = 'DATA PENGGUNA';
		$data['data_pengguna']=$this->m_pengguna->getAll();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pengguna/v_tampil', $data);
		$this->load->view('administrator/template/footer');
	}

	//aksi hapus data pengguna
	public function delete($kode) 
	{
		$this->m_pengguna->hapus($kode);
		redirect('administrator/pengguna/index');
	}

	//untuk function tambah data step 1
	public function add()
	{
		$data['sub_judul'] = 'TAMBAH PENGGUNA';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pengguna/v_tambah', $data);
		$this->load->view('administrator/template/footer');
	}
	//untuk function tambah data step 2
	function proses_simpan()
		{
			//index array menyesuaikan nama field di tabel
			$object = array(
				'email' =>$this->input->post('email'),
				'password' =>$this->input->post('password'),
			);
			$this->m_pengguna->tambah($object);
			redirect('administrator/pengguna/index');
		}

	//untuk function Edit data step 1 
	 function edit($kode)
	{

		$data['sub_judul'] = 'EDIT PENGGUNA';
		$data['isi_form'] = $this->m_pengguna->getWhere($kode);

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pengguna/v_ubah', $data);
		$this->load->view('administrator/template/footer');
	}

		//untuk function Edit data step 2
		function proses_edit()
		{
			$kode= $this->input->post('kode');

			//index array menyesuaikan nama field di tabel
			$object = array(
				'email' =>$this->input->post('email'),
				'password' =>$this->input->post('password'),
			);
			$this->m_pengguna->simpan_edit($kode, $object);
			redirect('administrator/pengguna/index');
		}


}