<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function index() {
		
		$product_cart = array();

	
		if($this->session->userdata('cart_session')){
		
			$cart_session = $this->session->userdata('cart_session');
		
			foreach($cart_session as $id=>$val){
				$product_cart[$id] = $val;
			}
		
		} 
		
		if($this->input->post('qty')){
			$qty_add = $this->input->post('qty');
		} else {
			$qty_add = 1;
		}
		

				$product_cart[$this->input->post('product_id')] = $qty_add;
			
			$this->session->set_userdata('cart_session',$product_cart);
			
			$cart_session = $this->session->userdata('cart_session');
		
			$arr = array();
			$arr['update_cart'] = array_sum($cart_session);
			echo json_encode($arr);
		
		
	}
	
	
	public function update() {
		

		
		$product_id = $this->input->post('product_id');
		$qty = $this->input->post('qty');
		
		$count_arr = count($product_id);
		
	
		for($i=0;$i<$count_arr;$i++){
	
			$product_cart = array();
	
			if($this->session->userdata('cart_session')){
		
				$cart_session = $this->session->userdata('cart_session');
		
					foreach($cart_session as $id=>$val){
						$product_cart[$id] = $val;
					}
		
			} 
		
			if($qty[$i] == 0){
				$qty_add = 1;
			} else {
				$qty_add = $qty[$i];
			}
		
	
			$product_cart[$product_id[$i]] = $qty_add;
			
		
			$this->session->set_userdata('cart_session',$product_cart);
			
			
			
		
		}
		
			$cart_session = $this->session->userdata('cart_session');
		
			$arr = array();
			$arr['update_cart'] = array_sum($cart_session);
			echo json_encode($arr);
			
		
	}
	
	public function delete() {
		
		$product_cart = array();
	
		if($this->session->userdata('cart_session')){
		
			$cart_session = $this->session->userdata('cart_session');
		
			foreach($cart_session as $id=>$val){
				if($this->input->post('product_id') == $id){
				
				} else {
					$product_cart[$id] = $val;
				}
			}
		
		} 
		
			

					
			$this->session->set_userdata('cart_session',$product_cart);
			
			$cart_session = $this->session->userdata('cart_session');
			
			$arr = array();
			$arr['update_cart'] = array_sum($cart_session);
			echo json_encode($arr);
		
		
	}
	
	public function empty_cart() {
		
			$this->session->unset_userdata('cart_session');
			
			$arr = array();
			$arr['update_cart'] = 0;
			echo json_encode($arr);
		
		
	}
	

	
}