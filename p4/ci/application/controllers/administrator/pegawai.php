<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
	}

	public function index()
	{
		//percobaan untuk menampilkan data semua pegawai
		// $data = $this->m_pegawai->getAll();
		// var_dump($data);


		$data['sub_judul'] = 'DATA PEGAWAI';
		$data['data_pegawai']=$this->m_pegawai->getAll();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_index', $data);
		$this->load->view('administrator/template/footer');
	}

	//aksi hapus data pegawai
	public function delete($id) 
	{
		$this->m_pegawai->hapus($id);
		redirect('administrator/pegawai/index');
	}

	//untuk function tambah data step 1
	public function add()
	{
		$data['sub_judul'] = 'TAMBAH PEGAWAI';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_add', $data);
		$this->load->view('administrator/template/footer');
	}
		//untuk function tambah data step 2
		public function proses_simpan()
		{
			//index array menyesuaikan nama field di tabel
			$object = array(
				'nip' =>$this->input->post('nip'),
				'nama' =>$this->input->post('nama'),
				'alamat' =>$this->input->post('alamat'),
				'jabatan' =>$this->input->post('jabatan'),
			);
			$this->m_pegawai->tambah($object);
			redirect('administrator/pegawai/index');
		}

	//untuk function Edit data step 1 
	public function edit($id)
	{
		//untuk SELECT mengambil satu baris=row
		$this->db->where('id', $id);
		$data_table = $this->db->get('tbl_pegawai')->row();

		$data['sub_judul'] = 'EDIT PEGAWAI';
		$data['isi_form'] = $data_table;

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_edit', $data);
		$this->load->view('administrator/template/footer');
	}
}


























