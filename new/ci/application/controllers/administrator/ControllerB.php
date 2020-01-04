<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerB extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelB');
	}

	public function index()
	{
		$data['sub_judul'] = 'DATA MAHASISWA';
		$data['data_mahasiswa']=$this->ModelB->getAll();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/mahasiswa/v_index', $data);
		$this->load->view('administrator/template/footer');
	}

	//aksi hapus data mahasiswa
	public function delete($id_004) 
	{
		$this->ModelB->hapus($id_004);
		$this->session->set_flashdata('msg', 'Data Berhasil Dihapus');
		redirect('administrator/ControllerB/index');
	}

	//untuk function tambah data step 1
	public function add()
	{

		$data['sub_judul'] = 'TAMBAH MAHASISWA';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/mahasiswa/v_add', $data);
		$this->load->view('administrator/template/footer');
	}

	//untuk function tambah data step 2
	function proses_simpan()
		{
			$this->form_validation->set_rules('b_nim', 'Nim', 'required|numeric|exact_length[8]|is_unique[data_b.b_nim]');
			$this->form_validation->set_rules('b_nama', 'Nama', 'required|min_length[3]');
			$this->form_validation->set_rules('b_umur', 'Umur', 'required|numeric');

			if ($this->form_validation->run() == false) {
				$this->add();
			} else {

				//index array menyesuaikan nama field di tabel
				$object = array(
					'b_nim' =>$this->input->post('b_nim'),
					'b_nama' =>$this->input->post('b_nama'),
					'b_umur' =>$this->input->post('b_umur'),
				);
				$this->ModelB->tambah($object);
				redirect('administrator/ControllerB/index');
			}		
		}

		//untuk function Edit data step 1 
	 function edit($id_004)
	{


		$data['sub_judul'] = 'EDIT MAHASISWA';
		$data['isi_form'] = $this->ModelB->getWhere($id_004);
		$this->load->view('administrator/template/header');
		$this->load->view('administrator/mahasiswa/v_edit', $data);
		$this->load->view('administrator/template/footer');
		}

		//untuk function Edit data step 2
		function proses_edit()
		{
			$id_004= $this->input->post('id_004');

			$this->form_validation->set_rules('b_nim', 'Nim', 'required|numeric|exact_length[8]');
			$this->form_validation->set_rules('b_nama', 'Nama', 'required|min_length[3]');
			$this->form_validation->set_rules('b_umur', 'Umur', 'required|numeric');

			if ($this->form_validation->run() == false) {
				$this->edit($id_004);
			} else {

				//index array menyesuaikan nama field di tabel
				$object = array(
					'b_nim' =>$this->input->post('b_nim'),
					'b_nama' =>$this->input->post('b_nama'),
					'b_umur' =>$this->input->post('b_umur'),
				);
				$this->ModelB->simpan_edit($id_004, $object);
				redirect('administrator/ControllerB/index');
			}
		}
}
