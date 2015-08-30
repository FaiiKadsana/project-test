<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

	class Upphoto_Model extends CI_Model {
		public function addfile($photo){
			$insert=array("photo"=>$photo);
			$this->db->insert("photo",$insert);
		//	print_r($this->db->last_query());
			return true;
			}
		
	}