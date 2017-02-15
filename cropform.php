<?php
if(isset($_GET["id"])){
	include "db.php";
	$img = get_img($_GET["id"]);
}
?>
<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Roger</title>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
<script src='plugins/jquery/jquery.min.js'></script>
<script src='plugins/jcrop/js/jquery.Jcrop.min.js'></script>

	</head>
	<body>

<?php include "navbar.php"; ?>

<div class="container">

<div class="row">
<div class="col-md-8">
<h1>Recortar Imagen</h1>
<p>Selecciona un fragmento de imagen para recortay y a continuacion click en el boton Procesar.</p>
  <!-- This is the image we're attaching Jcrop to -->
		<img src="uploads/<?php echo $img->src; ?>" id="target" class="img-responsive">
  <!-- This is the form that our event handler fills -->
  <form id="coords"
    class="coords"
    method="post" 
    action="crop.php">
    <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">

    <div class="inline-labels">
    <label><input type="hidden" size="4" id="x1" name="x1" /></label>
    <label> <input type="hidden" size="4" id="y1" name="y1" /></label>
    <label> <input type="hidden" size="4" id="x2" name="x2" /></label>
    <label> <input type="hidden" size="4" id="y2" name="y2" /></label>
    <label> <input type="hidden" size="4" id="w" name="w" /></label>
    <label> <input type="hidden" size="4" id="h" name="h" /></label>
    </div>
    <input type="submit" value="Procesar" class="btn btn-primary">
  </form>



</div>
</div>
</div>

<script type="text/javascript">

  jQuery(function($){

  	var oImage = document.getElementById("target");

    var jcrop_api;

    $('#target').Jcrop({
      onChange:   showCoords,
      onSelect:   showCoords,
      onRelease:  clearCoords,
	trueSize: [oImage.naturalWidth,oImage.naturalHeight],
    },function(){
      jcrop_api = this;
    });

    $('#coords').on('change','input',function(e){
      var x1 = $('#x1').val(),
          x2 = $('#x2').val(),
          y1 = $('#y1').val(),
          y2 = $('#y2').val();
          w = $('#w').val(),
          h = $('#h').val();
      jcrop_api.setSelect([x1,y1,x2,y2]);
    });

  });

  // Simple event handler, called from onChange and onSelect
  // event handlers, as per the Jcrop invocation above
  function showCoords(c)
  {
    $('#x1').val(c.x);
    $('#y1').val(c.y);
    $('#x2').val(c.x2);
    $('#y2').val(c.y2);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function clearCoords()
  {
    $('#coords input').val('');
  };



</script>

	</body>

</html>
