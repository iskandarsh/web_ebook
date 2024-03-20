<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $link_ci = "home";
	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
	
        if ($this->session->has_userdata('username')) {
			$param = array(
				'halaman' => $this->link_ci,
				'title' => 'Home',
		
			);
	
			$this->template->load($param);
        } else {
            $this->load->view('login');
        }
	
	}



}
