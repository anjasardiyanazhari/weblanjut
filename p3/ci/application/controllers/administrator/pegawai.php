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
		$data = $this->m_pegawai->getAll();
		
		var_dump($data);

		// $data['sub_judul'] = 'Data Pegawai';

		// $this->load->view('administrator/template/header');
		// $this->load->view('administrator/pegawai/v_index', $data);
		// $this->load->view('administrator/template/footer');
	}
}
