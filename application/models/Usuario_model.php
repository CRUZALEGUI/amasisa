<?php

class Usuario_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function guardar($param){

		$campos =  array(
			'NOMBRE' => $param['nombre'],
			'APELLIDOS' => $param['apellidos'],
			'EDAD' => $param['edad'],
			'DNI' => $param['dni'],
			'TELEFONO' => $param['telefono'],
			'DIRECCION' => $param['direccion'],
			'CORREO' => $param['correo'],
			'CONTRASENA' => $param['contrasena']
		);

		$this->db->insert('USUARIOS',$campos);
		

	}
}