<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index(){
	
		$contents['row']          = $this->product_model->product();
		$contents['cart_session'] = $this->session->userdata('cart_session');

		$template['content']      = $this->load->view('product',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	
	
}
