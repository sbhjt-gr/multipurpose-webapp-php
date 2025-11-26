<?php
session_start();
echo '<!DOCTYPE html>
<html>
<head>
<title>Lost Password - Cloudy Silver</title>
<meta property="og:title" content="Lost Password" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
include '../header-564qs59743.php';
?>
<br />
<div class="loginreg">
<div class="full_login_body">
      <div class="wrapper">
    <form class="form-signin" method="post">
      <h2 class="form-signin-heading">Reset Password</h2>
      <p>Password recovery functionality coming soon.</p>
      <br />
      <input type="email" class="form-control login-box" name="email" placeholder="Enter your email" disabled />
      <br />
      <input class="btn btn-lg btn-primary btn-block login-box" type="submit" value="Send Reset Link" disabled />   
      <br />
      <center><a href="/account/login.php">Back to Login</a></center>
    </form>
  </div>
</div>
<br />
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>
