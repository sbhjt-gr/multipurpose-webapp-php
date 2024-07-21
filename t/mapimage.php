<!DOCTYPE html>
<html>
<head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php
include '../head-tags-efrtg1232s84.php';
?>
<body>
<?php
$location = $_REQUEST['location'];
$width = $_REQUEST['width'];
$height = $_REQUEST['height'];
$maptype = $_REQUEST['maptype'];
echo '<img src="tools/mapimagen.php?l='.$location.'&w='.$width.'&h='.$height.'&m='.$maptype.'" />'.
'<br />
<center><a href="tools/mapimagen.php?l='.$location.'&w='.$width.'&h='.$height.'&m='.$maptype.'" target="_top"><big>Download</big></a></center></body>
</html>';
?>