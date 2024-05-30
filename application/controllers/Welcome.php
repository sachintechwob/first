<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function upload()
	{
	 	$config = array(
            'upload_path' 	=> realpath('uploads/'),
            'allowed_types' => 'jpg|png|jpeg',
            'encrypt_name' 	=> TRUE,
            'remove_spaces' => TRUE,
        );
	 	//load library upload
        $this->load->library("upload", $config);

        $this->upload->initialize($config);

        if ($this->upload->do_upload("userfile")) {
			
			$data_upload = $this->upload->data();
        	
        	$img['image_library'] = 'gd2';
        	$img['source_image']  = realpath('uploads/'.$data_upload['file_name']);
        	//$img['create_thumb']  = TRUE;
        	$img['width']		  = '200';
        	$img['height']		  = '200';

        	$img['x_axis']		  = '200';
        	$img['y_axis']		  = '200';

        	$img['maintain_ratio']= FALSE;
        	$img['new_image']     = realpath('uploads/thumb/');

        	//load library lib image
        	$this->load->library("image_lib", $img);

			$this->image_lib->initialize($img);
        	$this->image_lib->resize();

        	unlink('uploads/'.$data_upload['file_name']);

        	$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Gambar Berhasil Diupload</div>');
        	redirect("welcome");

        }else{
        	echo $this->upload->display_errors();
        }
	}
}
