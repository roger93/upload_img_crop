<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Roger</title>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">

	<body>
<?php include "navbar.php"; ?>	</head>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h1>Subir imagenes</h1>
		<form enctype="multipart/form-data" method="post" action="upload.php">
		<input name="image[]" required="" type="file" multiple />
		<br>
		<input type="submit" value="Upload">
		</form>
</div>
</div>
</div>
	</body>

</html>
