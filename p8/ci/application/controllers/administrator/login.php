<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('administrator/v_login');
	}

	public function proses_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('m_admin');

		$result = $this->m_admin->getAdmin($email, $password);
		
		if ($result->row()) {
			var_dump($result->row());
		}else{
			$this->session->set_flashdata('msg', 'Email atau Password salah');
			redirect('administrator/login');
		}
	}
}
