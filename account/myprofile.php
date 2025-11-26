<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /account/login.php");
    exit();
}

echo '<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<meta property="og:title" content="My Profile - Cloudy Silver" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
include '../header-564qs59743.php';
?>
<br />
<div class="container">
<h2>My Profile</h2>
<div class="panel panel-default">
    <div class="panel-heading"><b>Profile Information</b></div>
    <div class="panel-body">
        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION["username"], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>User ID:</strong> <?php echo intval($_SESSION["id"]); ?></p>
    </div>
</div>
<a href="/index.php" class="btn btn-default">Back to Home</a>
</div>
<br />
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>
