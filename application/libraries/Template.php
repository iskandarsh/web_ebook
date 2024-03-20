<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {


    public function load($data = array()) {

        $CI = &get_instance();
        $halaman = $data['halaman'];
        $data['isi_conten'] = $CI->load->view($halaman, $data, true);
    
        $CI->load->view('body', $data);
    }
}
