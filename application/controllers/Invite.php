<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invite extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('invite_model','IM');
        $this->load->helper('general_helper');
    }

	public function index()
	{

		$this->db->select('*');
		$this->db->where('is_delete','0');
		$data['invitations'] = $this->db->get('products')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/index');
	}

	public function details()
	{
		$this->db->select('*');
		$this->db->where('id',$this->uri->segment('2'));
		$this->db->where('is_delete','0');
		$data['details'] = $this->db->get('products')->row();
		$this->db->select('*');
		$this->db->where('id !=',$this->uri->segment('2'));
		$this->db->where('is_delete','0');
		$data['invitations'] = $this->db->get('products')->result();
		$this->load->view('front/header',$data);
		$this->load->view('front/details');
	}

	public function logout()
	{
		$this->session->unset_userdata('userId');
		$this->session->unset_userdata('userName');
		$this->session->unset_userdata('userEmail');
		redirect('invite');
	}

	public function signUp()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['password'] = md5($this->input->post('password'));
		$data['created_date'] = date("Y-m-d H:i:s");

		$userId = $this->IM->saveData('users',$data);

		if($userId)
		{
			$this->session->set_userdata('userId',$userId);
			$this->session->set_userdata('userName',$data['name']);
			$this->session->set_userdata('userEmail',$data['email']);
			echo "success";
		}	
		else
		{
			echo "error";
		}	
	}

	public function login()
	{
		$where['email'] = $this->input->post('email');
		$where['password'] = md5($this->input->post('password'));
		$user = $this->IM->login('users',$where,'id,name,email');
		if($user)
		{
			$this->session->set_userdata('userId',$user['id']);
			$this->session->set_userdata('userName',$user['name']);
			$this->session->set_userdata('userEmail',$user['email']);
			echo "success";
		}	
		else
		{
			echo "error";
		}	
	}

	public function cart()
	{
		$data['cart'] = $this->IM->cart(); 
		$this->load->view('front/header',$data);
		$this->load->view('front/cart');
	}

	public function removeCart($id)
    {
   		$this->IM->deleteData('cart',array('id'=>$id));
   		redirect('invite/cart');
    }

    public function add_to_cart()
    {
    	$exist = $this->IM->get_where_records('cart','id',array('product_id'=>$this->input->post('productId'),'user_id'=>$this->session->userdata('userId')));
    	if(empty($exist))
    	{		
	    	$save = $this->IM->saveData('cart',array('product_id'=>$this->input->post('productId'),'user_id'=>$this->session->userdata('userId'),'qty'=>'1'));
	    	$count = $this->IM->get_all_records_where('cart','id',array('user_id'=>$this->session->userdata('userId')),'desc');
	    	// print_r($count);die();
	    	if($save)
	    	{
	    		echo json_encode(array('cart'=>count($count),'status'=>true));
	    	}	
	    	else
	    	{
	    		echo json_encode(array('cart'=>count($count),'status'=>false));
	    	}	
    	}
    	else
    	{
    		echo false;
    	}	
    }

    public function checkout()
    {
    	$data['qty'] = $this->input->post('qty');
    	$data['product_id'] = $this->input->post('product_id');

    	$this->session->set_userdata('cartProducts',$data);
		$this->load->view('front/header');
		$this->load->view('front/checkout');
    }

    public function complete_order()
    {

		$cartItems = $this->session->userdata('cartProducts');
		$post = $this->input->post();
		if($cartItems['product_id'][0])
		{
			$order['email'] = $post['email'];
			$order['phone'] = $post['mobile'];
			$order['name'] = $post['fullname'];
			$order['created_date'] = date("Y-m-d H:i:s");
			if($post['password'])
			{
				// unset($_COOKIE['userCartItems']);die;
				$order['password'] = md5($post['password']);
				$order['user_id'] = $this->IM->saveData('users',$order);
				unset($_COOKIE['userCartItems']);
			}	
			else
			{
				$order['user_id'] = $this->session->userdata('userId');
			}	

			$order['mobile'] = $order['phone'];
			$order['fullname'] = $post['fullname'];
			unset($order['phone']);
			unset($order['password']);
			unset($order['name']);
			
			$order['address1'] = $post['address1'];
			$order['address2'] = $post['address2'];
			$order['city'] = $post['city'];
			$order['postcode'] = $post['postcode'];
			$order['country'] = $post['country'];
			$order['payment'] = 'COD';
			
			

			$orderId = $this->IM->saveData('order',$order);

			for ($i=0; $i < count($cartItems['product_id']); $i++) { 

				$purchaseArr = array('product_id'=>$cartItems['product_id'][$i],'price'=>getProductPrice($cartItems['product_id'][$i]),'qty'=>$cartItems['qty'][$i],'order_id'=>$orderId);
				$this->IM->saveData('order_details',$purchaseArr);
			}

			$this->IM->deleteData('cart',array('user_id'=>$this->session->userdata('userId')));
		}
		else
		{
			$cart =  $this->IM->cart();
			if(count($cart) > 0)
			{
				$order['fullname'] = $post['fullname'];
				$order['email'] = $post['email'];
				$order['mobile'] = $post['mobile'];
				$order['address1'] = $post['address1'];
				$order['address2'] = $post['address2'];
				$order['city'] = $post['city'];
				$order['postcode'] = $post['postcode'];
				$order['country'] = $post['country'];
				$order['payment'] = 'COD';
				$order['created_date'] = date("Y-m-d H:i:s");
				$order['user_id'] = $this->session->userdata('userId');

				$orderId = $this->IM->saveData('order',$order);

				foreach ($cart as $row) {
					$purchaseArr = array('product_id'=>$row['product_id'],'price'=>$row['price'],'qty'=>$row['qty'],'order_id'=>$orderId);
					$this->IM->saveData('order_details',$purchaseArr);
				}

				$this->IM->deleteData('cart',array('user_id'=>$this->session->userdata('userId')));
			}	
			else
			{
				echo "no"; die();
			}	
		}	

		redirect("invite/thankyou");	
    }

    public function thankyou()
    {
    	$this->load->view('front/header');
		$this->load->view('front/thankyou');
    }

    public function cart_item($value='')
    {
		$this->load->view('front/header');
		$this->load->view('front/cart_new_user');
    }

    public function view_cart()
    {
    	$productId = ltrim($this->input->post('productId'));
    	$data['cart'] = $this->IM->cart_items($productId);
    	$this->load->view('front/cart_item',$data);
    }

    // public function checkout_info()
    // {
    // 	echo "<pre>"; print_r($_POST);die;
    // }

    public function checkEmail()
    {
    	$email = $this->input->post('email');
    	$userId = $this->input->post('userId');
	    $this->db->select('email');
	    $this->db->where('email', $email);
	    if($userId)
		{
			$this->db->where('id !=', $userId);
		}	
	    $query = $this->db->get('users')->num_rows();
	    if($query == 0)
	    {
	        echo json_encode(true);
	    }
	    else
	    { 
	        echo json_encode(FALSE);
	    }
	}

	public function account()
	{
		$data['orders'] = $this->IM->getAllOrder();
		// echo "<pre>"; print_r($data);die;
		$this->load->view('front/header',$data);
		$this->load->view('front/account');
	}

	public function order_details($id)
	{
		$data['orders'] = $this->IM->getOrderDetails($id);
		// echo "<pre>"; print_r($data);die;
		$this->load->view('front/header',$data);
		$this->load->view('front/order_details');
	}
}





















