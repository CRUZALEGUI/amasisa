<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dashboard</title>
</head>
<body>
	<h1>DASHBOARD</h1>
	<?php if($dat=$this->session->flashdata('msg')): ?>
		<p><?= $dat ?></p>
	<?php endif; ?>	
	<a href="<?php echo base_url('Loguearse/logout'); ?>">Cerra Sesion</a>
</body>
</html>