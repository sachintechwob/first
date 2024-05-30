<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('admin_model','AM');
        // $this->load->helper('general_helper');
    }

	public function index()
	{	
		if($this->session->userdata('adminId'))
		{
			redirect('admin/dashboard');
		}
		$this->load->view('admin/login');
	}

	public function _chk_if_login(){ 
        $adminId = $this->session->userdata('adminId');
        $loginAdmin = $this->session->userdata('loginAdmin');
       
        if($loginAdmin == false || $adminId == '') {
            $this->session->unset_userdata('adminId');
			$this->session->unset_userdata('loginAdmin');
			$this->session->unset_userdata('first_name');
			$this->session->unset_userdata('last_name');
            redirect(base_url(''));
            exit();         
        }
        else
        {
            return TRUE;   
        } 
       
    }

    public function logout()
	{	
		$this->session->unset_userdata('adminId');
		$this->session->unset_userdata('loginAdmin');
		$this->session->unset_userdata('first_name');
		$this->session->unset_userdata('last_name');
		redirect('admin');
	}

	public function login()
	{	
		$this->form_validation->set_rules('email-username', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login');
        }
        else
        {
            $email = $this->input->post('email-username');
            $password = $this->input->post('password');
            $login = $this->AM->login('admin',array('email' =>$email,'type'=>'Subadmin','is_delete'=>'0','password' =>md5($password)),'id as adminId,first_name,last_name,email,type,number'); 
            if ($login) 
            { 
                $session_data = array(
                    'loginAdmin' => TRUE,
                    'first_name'  => $login->first_name,
                    'last_name'  => $login->last_name,
                    'adminId'  => $login->adminId,
                );

                $this->session->set_userdata($session_data);
                redirect(base_url('admin/dashboard'));
                
            }else
            {
                $this->session->set_flashdata('error','Invalid Email Or Password');
                redirect(base_url('admin'));
            }
        }
	}

	public function dashboard()
	{
		$this->_chk_if_login();
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
	}

	public function invitations()
	{
		$this->_chk_if_login();
        $data['lists'] = $this->AM->get_all_records_where('products','id,name,price,gif_image,image',array('is_delete'=>'0'),'desc');
        $this->load->view('admin/header',$data);
		$this->load->view('admin/invitations');
	}

    public function add_invitations()
    {
        $this->_chk_if_login();
        $this->load->view('admin/header');
        $this->load->view('admin/add_invitations');
    }

    public function create_invitations()
    {
        $this->_chk_if_login();

        $post['name'] = $this->input->post('name');
        $post['price'] = $this->input->post('price');
        $post['description'] = $this->input->post('description');

        if($_FILES['image'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('image'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $imageDetail = $this->upload->data();
                $post['image'] =  $imageDetail['file_name'];
            }
        }  

        if($_FILES['gif_image'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('gif_image'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $imageDetailgif = $this->upload->data();
                $post['gif_image'] =  $imageDetailgif['file_name'];
            }
        }    

        if($_FILES['video'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('video'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $video = $this->upload->data();
                $post['video'] =  $video['file_name'];
            }
        }


        $this->AM->saveData('products',$post);
        redirect('admin/invitations');

    }

    public function update_invitations()
    {
        $this->_chk_if_login();
        $data['record'] = $this->AM->get_where_records('products','*',array('id'=>$this->uri->segment('3')));
        $this->load->view('admin/header',$data);
        $this->load->view('admin/update_invitations');
    }

    public function update_invitation($value='')
    {
        $this->_chk_if_login();

        $post['name'] = $this->input->post('name');
        $post['price'] = $this->input->post('price');
        $post['description'] = $this->input->post('description');

        if($_FILES['image'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('image'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $imageDetail = $this->upload->data();
                $post['image'] =  $imageDetail['file_name'];
                unlink("uploads/".$this->input->post('oldImg'));
            }
        }  

        if($_FILES['gif_image'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('gif_image'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $imageDetailgif = $this->upload->data();
                $post['gif_image'] =  $imageDetailgif['file_name'];
                unlink("uploads/".$this->input->post('oldgifImg'));
            }
        }    

        if($_FILES['video'])
        {
            $config = array(
                'upload_path' => "uploads/",
                'allowed_types' => "*",
                'encrypt_name' =>TRUE,
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);     
            if(!$this->upload->do_upload('video'))
            { 
                $data['imageError'] =  $this->upload->display_errors();
                 
            }
            else
            {
                $video = $this->upload->data();
                $post['video'] =  $video['file_name'];
                unlink("uploads/".$this->input->post('oldvideo'));
            }
        }


        $this->AM->updateData('products',$post,$this->input->post('id'));
        redirect('admin/invitations');

    }

    public function delete_invitations()
    {
        $this->AM->updateData('products',array('is_delete'=>'1'),$this->uri->segment('3'));
        redirect('admin/invitations');
    }


    public function orders()
    {
        $this->_chk_if_login();
        $data['orders'] = $this->AM->get_all_records('order','*');
        // echo "<pre>"; print_r($data);die;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/orders');
    }   

    public function order_details($id)
     {
        $this->_chk_if_login();
        $data['orders'] = $this->AM->getOrderDetails($id);
        $this->load->view('admin/header',$data);
        $this->load->view('admin/order_details');
     } 


     public function change_order_status()
     {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $this->AM->updateData('order',array('order_status'=>$status),$id);
     }




}	