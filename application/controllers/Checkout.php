<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index(){
	

		if($this->input->post()){
			
			$this->session->unset_userdata('cart_session');
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Your order has been sent.</div>');
			redirect('');
		}
		
		$contents['cart_session'] = $this->session->userdata('cart_session');
	
		$template['content']    = $this->load->view('checkout',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	
	
	
}
