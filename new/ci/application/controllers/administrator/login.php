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
		$this->form_validation->set_rules('email', 'Email', 'required',
								array(	'required'		=> '%s Harus Diisi',
									));

		$this->form_validation->set_rules('password', 'Password', 'required',
								array(	'required'		=> '%s Harus Diisi',
									));

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('administrator/v_login');

			// atau cara lain balik
			// return $this->index();
		}else{

			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));

			$this->load->model('m_admin');

			$result = $this->m_admin->getAdmin($email, $password);
			
			if ($result->row()) {
				// var_dump($result->row());

				$data_user = $result->row();
				$data = [
					'login' => true,
					'email' => $data_user->email,
					'status' => $data_user->status,
				];

				$this->session->set_userdata($data);
				if ($data_user->status == 'admin') {
					redirect('administrator/pegawai');
				} else {
					redirect('administrator/pengguna');
				}

				// redirect('administrator/pegawai');


			}else{
				$this->session->set_flashdata('msg', 'Email atau Password salah');
				redirect('administrator/login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('administrator/login');
	}
}