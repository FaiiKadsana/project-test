<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Index extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index (){
		$data=array();
		$data['action']=base_url('index/add');
		$data['test']="ทดสอบ";
		
		$data['name']=$this->index_model->show();
		
		//print_r($data['name']);
		$this->load->view('index',$data);			
	}
	public function add (){
		$name=$this->input->post('name');
		$lastname=$this->input->post('lastname');
		$phone=$this->input->post('phone');
		$this->index_model->adddata($name,$lastname,$phone);
		redirect("index");
		//echo $name;
	}
	public function delete ($id){
		$this->index_model->delete($id);
		redirect("index");
		
		//echo $id;
		}
	public function edit ($id){ //โชว์ตอนแก้ไข
		$data=array();
		$data['action']=base_url('index/updatedata');
		$data['name']=$this->index_model->edit($id);
		$this->load->view('edit',$data);	
		
		}
	public function updatedata (){ // อัพเดท
		
		if($this->input->server('REQUEST_METHOD')=== 'POST'){
			//print_r($id);
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$lastname=$this->input->post('lastname');
		$phone=$this->input->post('phone');
		$this->index_model->updatedata($id,$name,$lastname,$phone);
		redirect("index");
			
			}
		}
}