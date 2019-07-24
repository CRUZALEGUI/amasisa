<?php

class Seguridad_model extends CI_Model{

	function __construct(){
		parent::__construct();

	}

public function listar_usuarios(){
		$usuarios = $this->db->get('USUARIOS')->result();
		
		return $usuarios;
	}


public function registrar_usuarios($param){

		$campos =  array(
			'NOMBRE' => $param['nombre'],
			'APELLIDOS' => $param['apellidos'],
			'EDAD' => $param['edad'],
			'DNI' => $param['dni'],
			'TELEFONO' => $param['telefono'],
			'DIRECCION' => $param['direccion'],
			'CORREO' => $param['correo'],
			'CONTRASENA' => $param['contrasena'],
			'TIPO_USUARIO' => $param['tipo_usuario']			
		);

		$this->db->insert('USUARIOS',$campos);
		

	}
}