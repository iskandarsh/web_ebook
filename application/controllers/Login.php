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
      
        if ($this->session->has_userdata('username')) {
            redirect('home');
        } else {
            $this->load->view('login');
        }
		
	}

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('login');
    }

	public function proses()
    {
        

        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
        if($username == 'admin' && md5($password) == 'admin'){
            $this->session->set_userdata('username',$username);
            redirect('home');
        }else {
            if ($this->auth->login_user($username, $password)) {
                $this->session->set_userdata('username',$username);
                redirect('home');
            } else {
                $this->session->set_flashdata('error', 'Username & Password salah');
                redirect('login');
            
            }
        }
        
    }

}
