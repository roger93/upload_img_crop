<?php
include "db.php";
include "class.upload.php";

$img=null;
$img = get_img($_POST["id"]);
$imgsrc = "uploads/".$img->src;
//print_r($img);

if($img!=null){
//echo $img;
$upload = new Upload($imgsrc);
$upload->image_resize = true;
$upload->jpeg_quality = 85;
$upload->image_precrop = array($_POST["y1"], $upload->image_src_x - $_POST["x2"], $upload->image_src_y - $_POST["y2"], $_POST["x1"]);
$upload->image_x = $_POST["w"];
$upload->image_y = $_POST["h"];
//echo $foldr;

@$upload->Process("uploads/");

if($upload->processed){
upd_img($upload->file_dst_name,$img->id);
}

}
header("Location: ./");



?>