<?php 

function getloginrules(){

 return array(
        array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|trim',   //se separa con '|'  
                'errors' => array(
                        'required' => 'El %s es requerdido ',
                ),

        ),
        array(
                'field' => 'password',
                'label' => 'constrasena',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'la %s es requerido ',
                ),
        ),
        
      );

	
}

 ?>               