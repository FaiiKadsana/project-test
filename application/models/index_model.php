<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

	class Index_Model extends CI_Model {
		
		public function adddata($name="",$lastname="",$phone=""){
			$insert=array(
			"name"=>$name,"lastname"=>$lastname,"phone"=>$phone
			);
			$this->db->insert("index",$insert);
		//	print_r($this->db->last_query());
			return true;
			}
		public function show (){
			//$this->db->select("");
			$show=$this->db->get("index");
			//return $show->row(); //ข้อมูลแถวแรกแถวเดียว
			return $show->result(); //ทั้งหมด
			}
		public function delete ($id){
			$this->db->where("id",$id);
			$this->db->delete("index");
			return true;
			
			}
		public function edit($id){
			$this->db->where("id",$id);
			$edit=$this->db->get("index");
			return $edit->row();
			}
		public function updatedata ($id="",$name="",$lastname="",$phone=""){
			print_r($id);
			$update=array("name"=>$name,"lastname"=>$lastname,"phone"=>$phone);
			$this->db->where("id",$id);
			$this->db->update("index",$update);
			//print_r($this->db->last_query());
			return true;
			
			}
		}