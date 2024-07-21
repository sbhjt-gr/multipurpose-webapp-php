<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Instagram Video Downloader</title>
<meta property="og:title" content="Instagram Video Downloader" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
?>
<?php
include '../header-564qs59743.php';
echo '<br />
<br />';
$type = $_GET['type'];
if ($type == "invalidurl") {
    echo '<center><div class="alert alert-info fade in bs-example">
      <a class="close" data-dismiss="alert">x</a>
      <strong>Error!</strong> The URL you entered is incorrect!
    </div></center>';
} else {}
echo '<form method="post" action="t/videogenerated.php" ng-app="CloudySilver" class="ng-scope">
 <div flex-container="row" flex-gutter="24">
    <div flex-item>
      <div class="card">
        <div class="p+">
          <strong class="fs-headline display-block"><h3><font color="red">Instagram Video Downloader</font></h3></strong>
          <center><span class="fs-subhead tc-black-2 display-block">Enter URL in the input box.</span></center>
<br />
<div class="p+ pt0">
    <lx-text-field lx-label="Enter URL Here">
        <input type="text" name="url" required />
    </lx-text-field>
</div>
          </div>
<center><div id="loading" style="display: none;"><img src="images/loading.gif" style="height: 75px; width: 75px;" alt="Please Wait" /> <br /> <div class="lead">Generating Download Link</div></div>
        <div class="card__actions">
          <input type="submit" id="submit" class="btn btn--m btn--black btn--flat" lx-ripple name="submit" value="Download" />
            <script>
  $(document).ready(function()
  {

    $("#submit").click(function()
    {

      $("#loading").show();

    });

  });
  </script>
        </div>
      </div>
    </div></center>
  </div></form>
<br />';
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>