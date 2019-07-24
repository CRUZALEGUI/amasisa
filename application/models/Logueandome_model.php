<?php

class Logueandome_model extends CI_Model{

	function __construct(){
		$this->load->database();
		
		}
	public function validation($para){
		$para=array(    
			'correo' => $para['correo'],                                
			'contrasena' => $para['contrasena'],         

						);
		if(!$this->db->insert('usuarios_all',$para)){
			return false;
		}
		return true;
	}	

	}