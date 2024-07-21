<?php
$url = $_REQUEST['u'];
$width = $_REQUEST['w'];
$height = $_REQUEST['h'];
$ssurl = 'http://mini.s-shot.ru/'.$width.'/'.$height.'/PNG/?'.$url;
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($ssurl.'.png') . "\""); 
readfile($ssurl);
exit;
?>