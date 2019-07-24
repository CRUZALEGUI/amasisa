<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrandome extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->database('app_amasisa');
		$this->load->model('Users');
		$this->load->library(array('form_validation'));
	}

	
	public function index()
	{
		$data['menu']=mi_menu();
		$this->load->view('registro1',$data);
		/*$query=$this->db->get('usuarios');*/
		/*var_dump($query->result());*/
	}
	public function create(){
		$username = $this->input->post('username'); //esto es lo mismo que hacer: $_POST[]; 
		$email= $this->input->post('email');
		$password = $this->input->post('password');
		$password_confirm = $this->input->post('password_confirm');
		
		$config = array(
        array(
                'field' => 'username',
                'label' => 'Nombre de usuario',
                'rules' => 'required|alpha_numeric'   //se separa con '|'  
        ),
        array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                        'required' => 'El %s es inválido ',
                ),
        ),
        array(
                'field' => 'password',
                'label' => 'Contrasena',
                'rules' => 'required'
        ),
        array(
                'field' => 'password_confirm',
                'label' => 'Confirmar contrasena',
                'rules' => 'required'
        	)
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
                {
                		$data['menu']=mi_menu();
                        $this->load->view('registro1',$data);
                }
                else
                {
                  $datos=array(

						'nombre_usuario' => $username,      //ESTO ES UNA REFERENCIA QUE SE  
						'correo' => $email,                 //DEBE INSERTAR                
						'contrasena' => $password,          ////EN UNA TABLA QUE TU QUIERES 

						)
						;
						$data['menu']=mi_menu();

						if(!$this->Users->create_de_usuario($datos)){
							$data['msg']= 'Ocurrio un problema al ingresar los datos, regrese más tarde';
							$this->load->view('registro1',$data);
						}
						$data['msg']= 'Registrado correctamente';
						$this->load->view('registro1',$data);      
                }


		
	}


}

