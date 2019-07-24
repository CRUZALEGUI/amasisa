<?php

class Login_model extends CI_Model{

	public function login ($correo,$contrasena)
	{

		$this->db->where('CORREO',$correo);
		$this->db->where('CONTRASENA',$contrasena);
		$q = $this->db->get('USUARIOS');
		if ($q->num_rows()>0) {
			return true;
		} else {
			return false;
		}
		
	}
}