<?php 

function mi_menu(){
	return array(
		array(
			'title' => 'Login',
			'url' => base_url('index.php/loguearse'),

		),
		array(
			'title' => 'Registro',
			'url' => base_url('index.php/registrandome'),
		),
	);
}



?>