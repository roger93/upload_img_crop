
<?php
include "db.php";
$images = get_imgs();
?>
<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Roger</title>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">


	</head>
	<body>
<?php include "navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h1>Imagenes</h1>
		<a href="./form.php" class="btn btn-default">Agregar mas</a>
		<?php if(count($images)>0):?>
			<ul>
			<?php foreach($images as $img):?>
				<li><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">
				<br>
				<a class="btn btn-default btn-xs" href="./cropform.php?id=<?php echo $img->id; ?>">Recortar</a> 
				<a class="btn btn-default btn-xs" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a> 
				<a class="btn btn-default btn-xs" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
				</li>
			<?php endforeach;?>
			</ul>
		<?php else:?>
			<h4>No hay imagenes!</h4>
		<?php endif; ?>
</div>
</div>
</div>
	</body>

</html>
