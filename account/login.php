<?php

require_once "config_62882qyul.php";

$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username";
    } else{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password";
    } else{
        $password = trim($_POST["password"]);
    }
    

    if(empty($username_err) && empty($password_err)){
 
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){                    

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            session_regenerate_id(true);
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header("location: /index.php");
                        } else{

                            $password_err = "The password you entered is not valid";
                        }
                    }
                } else{

                    $username_err = "No account found with" . $username;
                }
            } else{
                header("location: /s/contact.php?type=errorlogin");
            }
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta property="og:title" content="Log In – Cloudy Silver" />
<?php include '../head-tags-efrtg1232s84.php'; ?> 
</head>
<body>
<?php include '../header-564qs59743.php'; ?>
<br />
<div class="loginreg">
<div class="full_login_body">
      <div class="wrapper">
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <h2 class="form-signin-heading">Log In</h2>
      
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
echo '<center><div class="alert alert-info fade in bs-example">
  <a class="close" data-dismiss="alert">x</a>You are already logged in as ' . htmlspecialchars($_SESSION["username"]) . 
'</div></center>'; }
?>
<br />
      <input type="text" class="form-control login-box has-error" name="username" placeholder="Username" />
<br />
      <input type="password" class="form-control login-box" name="password" placeholder="Password" />
<br />
      <input class="btn btn-lg btn-primary btn-block login-box" type="submit" value="Login" />   
<br />
<center><a href="/account/lpass.php">Lost Password?</a></center>
<div class="dhaa">Don't have an account? <a href="/account/signup.php">Sign up here!</a>
    </form>
  </div>
</div>
<?php include '../footer-73q4637394.php'; ?>
</body>
</html>