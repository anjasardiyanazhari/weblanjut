<?php
defined('BASEPATH') or exit('No direct script access allowed');


class pegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');

		// Pengecekan udah login atau tidak, kalau tidak di redirect ke form login
		if ($this->session->userdata('login') == false) {
			redirect('administrator/login');
		}
	}

	public function index()
	{
		//percobaan untuk menampilkan data semua pegawai
		// $data = $this->m_pegawai->getAll();
		// var_dump($data);


		$data['sub_judul'] = 'DATA PEGAWAI';
		$data['data_pegawai'] = $this->m_pegawai->getAll();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_index', $data);
		$this->load->view('administrator/template/footer');
	}

	//aksi hapus data pegawai
	public function delete($id)
	{
		$this->m_pegawai->hapus($id);
		$this->session->set_flashdata('msg', 'Data Berhasil Dihapus');
		redirect('administrator/pegawai/index');
	}

	//untuk function tambah data step 1
	public function add()
	{
		//untuk falidasi di pegawai agar tidak bisa akses link add yang sudah di sembunyikan dari login pengguna/operator
		if ($this->session->userdata('status') != 'admin') {
			redirect('administrator/pegawai');
		}

		$data['sub_judul'] = 'TAMBAH PEGAWAI';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_add', $data);
		$this->load->view('administrator/template/footer');
	}

	//untuk function tambah data step 2
	function proses_simpan()
	{
		$this->form_validation->set_rules('nip', 'Nip', 'required|numeric|exact_length[8]|is_unique[tbl_pegawai.nip]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[6]');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|min_length[5]');

		if ($this->form_validation->run() == false) {
			$this->add();
		} else {

			//index array menyesuaikan nama field di tabel
			$object = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jabatan' => $this->input->post('jabatan'),
			);
			$this->m_pegawai->tambah($object);
			redirect('administrator/pegawai/index');
		}
	}

	//untuk function Edit data step 1 
	function edit($id)
	{

		$data['sub_judul'] = 'EDIT PEGAWAI';
		$data['isi_form'] = $this->m_pegawai->getWhere($id);
		$this->load->view('administrator/template/header');
		$this->load->view('administrator/pegawai/v_edit', $data);
		$this->load->view('administrator/template/footer');
	}

	//untuk function Edit data step 2
	function proses_edit()
	{
		$id = $this->input->post('id');

		$this->form_validation->set_rules('nip', 'Nip', 'required|numeric|exact_length[8]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[6]');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|min_length[5]');

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {

			//index array menyesuaikan nama field di tabel
			$object = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jabatan' => $this->input->post('jabatan'),
			);
			$this->m_pegawai->simpan_edit($id, $object);
			redirect('administrator/pegawai/index');
		}
	}
}
