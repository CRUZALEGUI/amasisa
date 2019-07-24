<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loguearse extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database('app_amasisa');
		$this->load->model('Auth');
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('auth/login_rules'));
	}

	
	public function index()
	{
		$this->load->view('login1');
	
	}
	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getloginrules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === FALSE){      // === significa que no es igual 
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password')
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}
		else{
			$usr=$this->input->post('email');
			$pass=$this->input->post('password');
			if(!$res=$this->Auth->login($usr,$pass)){
				echo json_encode(array('msg' => 'verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}
			$data=array(
				'ID_USUARIOS' => $res->ID_USUARIOS,
				'TIPO_USUARIO' =>$res->TIPO_USUARIO,
				'ESTADO' => $res->ESTADO,
				'NOMBRE'=>$res->NOMBRE,
				'is_logged' => TRUE,



			);
			if($res->TIPO_USUARIO==1){
			$this->session->set_userdata($data);
			echo json_encode(array('url'=> base_url('Administrador/')));
			   //controlador
			   }
			   else{
			   	 $this->session->set_userdata($data);
			
			echo json_encode(array('url'=> base_url('Inicio_dentro/')));
			   }
		}

	}

	public function logout(){
		$vars=array('id','rango','status','nombre_usuario','is_logged');
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect('Loguearse/index');
	}

}
