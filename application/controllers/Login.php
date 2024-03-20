<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
        if ($this->auth->login_user($username, $password)) {
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('login');
        
        }
    }

}
