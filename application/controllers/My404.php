<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller 
{

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->load->view('errors/my404',$data);//loading in my template 
    } 
} 
?> 