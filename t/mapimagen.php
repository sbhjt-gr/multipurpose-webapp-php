<?php
$location = str_replace(' ','%20','$_REQUEST["l"]');
$width = $_REQUEST['w'];
$height = $_REQUEST['h'];
$maptype1 = $_REQUEST['m'];
if (empty($maptype1)){
    $maptype = '';
} else {
    $maptype = 'satellite';
}
$gmaps = 'https://maps.google.com/maps/api/staticmap?center='.$location.'&zoom=5'.'&size='.$height.'x'.$width.'&maptype='.$maptype.'&mobile=true&sensor=false';
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($gmaps.'.png') . "\""); 
readfile($gmaps); 
exit;
?>