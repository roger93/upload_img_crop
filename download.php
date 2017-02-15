<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		$fullpath = $img->folder.$img->src;
		header("Content-Disposition: attachment; filename=$img->src");
		readfile($fullpath);
	}
}


?>