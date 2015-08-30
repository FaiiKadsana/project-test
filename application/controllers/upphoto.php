<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Upphoto extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("upphoto_model","upphoto_model");
		$this->load->library('upload');
	}
	public function index (){
	if($this->input->server('REQUEST_METHOD')=== 'POST'){
	
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
		$this->upphoto_model->addfile($_FILES['userfile']['name']);
    }
	redirect ('upphoto');
	}
		$this->load->view('upphoto');			
	}
	
private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '100';
    $config['overwrite']     = FALSE;

    return $config;
}

}