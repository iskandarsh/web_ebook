<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petunjuk extends CI_Controller {

	private $link_ci = "petunjuk";
	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
	
        if ($this->session->has_userdata('username')) {
			$param = array(
				'halaman' => $this->link_ci,
				'title' => 'Petunjuk E-book',
		
			);
	
			$this->template->load($param);
        } else {
            $this->load->view('login');
        }
	
	}



}
