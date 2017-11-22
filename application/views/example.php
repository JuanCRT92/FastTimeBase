<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>

	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('main/tipo_documento')?>'>Tipo Documento</a> |
		<a href='<?php echo site_url('main/persona')?>'>Persona</a> |
		<a href='<?php echo site_url('main/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('main/offices_management')?>'>Offices</a> | 
		<a href='<?php echo site_url('main/employees_management')?>'>Employees</a> |		 
		<a href='<?php echo site_url('main/film_management')?>'>Films</a> |
		<a href='<?php echo site_url('main/multigrids')?>'>Multigrid [BETA]</a>
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
