<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}	
	
	function product(){
		return $q = $this->db->select('*')->from('product')->get()->result();
	}
	
	function product_detail($id){
		return $q = $this->db->select('*')->from('product')->where('product_id',$id)->get()->row();
	}
	
}