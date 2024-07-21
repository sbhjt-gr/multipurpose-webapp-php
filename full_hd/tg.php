<?php
if (isset($_POST['submit'])) {}
else {
echo '<!DOCTYPE html>
<html>
<head>
<title>Enter Details!</title>
<meta property="og:title" content="Enter Details!" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>
<br />
<center><form method="post" action="full_hd/tg.php"><input name="dir" placeholder="Directory" /><input name="p" type="number" placeholder="Page" /><input type="number" name="fpp" value="18" placeholder="Files Per Page" />
<input type="submit" name="submit" value="Generate" />
</form>
<br />
</center>
</body>
</html>';
}
?>
<?php
$getdir = $_POST['dir'];
if (isset($_POST['submit'])) {
if (empty($getdir)) {
echo '<!DOCTYPE html>
<html>
<head>
<title>Directory Not Found!</title>
<meta property="og:title" content="Directory Not Found!" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>'.'<br /><center>Directory Not Found!</center>'.'
</body>
</html>';
}
else {
$filedir = "../downloads/wallpapers".$_GET['dir']."/*";
$fileinside = glob($filedir);
echo '<!DOCTYPE html>
<html>
<head>
<title>Generated</title>
<meta property="og:title" content="Generated" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
foreach($fileinside as $isfile) {
echo $isfile;
if(is_file($isfile)) {
$getpath = pathinfo($isfile);
$path = "." . $getpath['extension'];
$file_name = basename($isfile, $path);
$file_full_name = basename($isfile);
$save = "../downloads/thumbnails/tmb_".$file_full_name;
list($width, $height) = getimagesize($isfile);
$modwidth = 200;
$diff = $width / $modwidth;
$modheight = $height / $diff;
$tn = imagecreatetruecolor($modwidth, $modheight);
$image = imagecreatefromjpeg($isfile);
imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height);
imagejpeg($tn, $save, 100);
echo '<img src="/downloads/thumbnails/tmb_'.$file_full_name.'" style="height: 75px; width: 75px;" />';
}
}
echo '
</body>
</html>';
}
} else {}
?>