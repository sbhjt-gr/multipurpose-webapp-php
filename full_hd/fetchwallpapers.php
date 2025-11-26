 <?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Fetch Wallpapers</title>
<meta property="og:title" content="Fetch Wallpapers" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
include '../header-564qs59743.php';
?>
<?php
if (isset($_POST['submit'])) {
$pin = isset($_POST['pin']) ? intval($_POST['pin']) : 0;
if ($pin === 1296) {

} else {
echo "<br /><center>PIN ERROR!</center><br />";
}
}
else {
echo '<br />
<center>
<form method="post">
<input type="number" name="pin" placeholder="Enter PIN" required />
<input type="submit" name="submit" value="Access" />
</form>
</center>
<br />';
}
?>
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>