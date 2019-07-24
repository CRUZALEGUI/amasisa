<?php

class Users extends CI_Model{

	function __construct(){
		$this->load->database();
		
		}
	public function create_de_usuario($datos){
		$datos=array(

			'nombre_usuario' => $datos['nombre_usuario'],      
			'correo' => $datos['correo'],                                
			'contrasena' => $datos['contrasena'],         

						);
		if(!$this->db->insert('usuarios_all',$datos)){
			return false;
		}
		return true;
	}	

	}
