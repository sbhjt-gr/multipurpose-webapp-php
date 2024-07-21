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
$url = $_REQUEST['url'];
$width = $_REQUEST['width'];
$height = $_REQUEST['height'];
echo '<img src="tools/ssimage.php?u='.$url.'&w='.$width.'&h='.$height.'" />'.
'<br />
<center><a href="tools/ssimage.php?u='.$url.'&w='.$width.'&h='.$height.'" target="_top"><big>Download</big></a></center></body>
</html>';
?>