<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		
		if (!empty($username) && !empty($password) && !empty($nama)) {
			// Assuming $email and $no_hp are defined elsewhere in your code
			$this->auth->register($username, $password, $nama);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
			redirect('login');
		} else {
			$this->session->set_flashdata('error', 'Username, password, dan nama harus diisi');
			redirect('register');
		}
		

		// echo 'ad';
		// $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[user_app.username]');
		// $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		// $this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');

		// if ($this->form_validation->run()==true)
	   	// {
		// 	$username = $this->input->post('username');
		// 	$password = $this->input->post('password');
		// 	$nama = $this->input->post('nama');

		// 	$this->auth->register($username,$password,$nama,$email,$no_hp);
		// 	$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
		// 	redirect('login');
		// }
		// else
		// {
		// 	$this->session->set_flashdata('error', validation_errors());
		// 	redirect('register');
		// }
	}
}
