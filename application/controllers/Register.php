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
		

		
	}
}
