<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	private $link_ci = "video";
	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
	
        if ($this->session->has_userdata('username')) {
			$param = array(
				'halaman' => $this->link_ci,
				'title' => 'Video E-book',
		
			);
	
			$this->template->load($param);
        } else {
            $this->load->view('login');
        }
	
	}



}
