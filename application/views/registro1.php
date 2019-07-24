<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTRO1</title>
</head>
<body>
	<h1>REGISTRO</h1>
	<ul>
		<?php foreach($menu as $item): ?>
		<li><a href="<?php echo $item['url']; ?>"> <?php echo $item['title']; ?> </a></li>
	<?php endforeach;?>
	</ul>
	<?php echo validation_errors(); ?>
	<?php 
		echo form_open('registrandome/create',array('method'=> 'POST'));
		echo form_label('Nombre de usuario:');
		echo form_input('username');
		echo "<br>";
		echo form_label('correo electronico');
		echo form_input(array('type' => 'email', 'name' => 'email'));
		echo "<br>";
		echo form_label('contraseña');
		echo form_password('password');
		echo "<br>";
		echo form_label('confirmacion de contraseña');
		echo form_password('password_confirm');
		echo "<br>";
		echo form_submit('submit','Enviar');
		echo form_close();

    ?>
    <?= isset($msg) ? $msg : '' ?>
	
</body>
</html>