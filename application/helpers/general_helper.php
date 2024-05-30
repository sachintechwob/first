<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function cartCount($userId)
{
	$ci =& get_instance();
	$ci->db->select('id');
	$ci->db->where('user_id',$userId);
	$data = $ci->db->get('cart')->num_rows();
	if(!empty($data)){
		return $data;
	}else{
		return "0";
	}
}

function getProductPrice($productId)
{
	$ci =& get_instance();
	$ci->db->select('price');
	$ci->db->where('id',$productId);
	$data = $ci->db->get('products')->row_array();
	if(!empty($data)){
		return $data['price'];
	}else{
		return "0";
	}
}