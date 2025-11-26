<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Contact - Cloudy Silver</title>
<meta property="og:title" content="Contact - Cloudy Silver" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
include '../header-564qs59743.php';
echo '<br /><h2>Contact Us</h2>
    <div class="contact-agile" id="contact">
            <div class="container">
                <div class="col-sm-8 contact-middle">
                    <h4>Contact to us</h4>
                    <form action="'; echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); echo'" method="post">
                        <input type="text" value="'.htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8').'" placeholder="YOUR NAME" name="name" required="" />
                        <input type="text" value="'.htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8').'" name="email" class="c-email" placeholder="YOUR EMAIL" required="" />

<input type="text" value="" name="subject" class="c-email" placeholder="SUBJECT" required />
                        <textarea name="text" placeholder="YOUR MESSAGE" required></textarea>
<input type="hidden" name="action" value="send_message"  />
<br />
                        <div class="submit">
                            <input type="submit" value="SEND MESSAGE" />
                        </div>
                    <div class="clearfix"></div>
                    </form>
                </div>
                <div class="col-md-1 col-sm-1 contact-right">
                        <ul>
                         <li>
			<li><a href="https://www.instagram.com/cloudy.silver"
target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li><a href="https://twitter.com/cloudy_silver" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li><a href="https://m.facebook.com/cloudysilver" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                </div>
            </div>
        </div>
<!--<center>
    <div class="alert alert-info fade in bs-example">
      <a class="close" data-dismiss="alert">x</a>
<strong>Security Password:</strong> Please create a security password that contains at least 4 characters. We might ask you for it in the future.
</div>
  </center>-->';
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>