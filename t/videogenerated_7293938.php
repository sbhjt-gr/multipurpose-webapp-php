<?php
echo "<!DOCTYPE html>
<html>
<head>";
$url = $_POST['url'];
$urltwo = str_replace("https://www.","",$url);
$urlthree = str_replace("http://www.","",$urltwo);
$urlfour = str_replace("www.","",$urlthree);
$urlsix = substr($urlfour, 13);
$urlseven = str_replace($urlsix,"",$urlfour);
$urleight = str_replace("/p/","",$urlseven);
$urlnine = str_replace(".com","",$urleight);
if ($urlnine == "instagram") {}
else if ($urlnine == "http://instag") {}
else if ($urlnine == "https://insta") {}
else {
    header("Location: instavideodown.php?type=invalidurl");
    exit;
}
$submit = $_POST['submit'];
if ($submit == "Download") {}
else {
     header("Location: instavideodown.php?please=enter");
    exit;
}
include '../head-tags-efrtg1232s84.php';
$urlhttps = 'https://www.'.$urlfour;
$html3 = file_get_contents($urlhttps);
$url1 = preg_match('/<meta property="og:description" content="(.+)"/', $html3, $match3);
$info3 = parse_url($match3[1]);
$infotwotwo1 =  $info3[path];
$skip1 = substr(strstr($infotwotwo1," "), 1);
$skip2 = substr(strstr($skip1," "), 1);
$skip3 = substr(strstr($skip2," "), 1);
$skip4 = substr(strstr($skip3," "), 3);
echo '<title>'; echo $skip4." - Instagram"; echo '</title>';
echo '<meta property="og:title" content="'; echo $skip4." - Instagram"; echo ' />';
echo "</head>
<body>";
include '../header-564qs59743.php';
echo '<div class="dwnld_file12" flex-container="row" flex-gutter="24"><div flex-item=""><div class="card">';
$html1 = file_get_contents($urlhttps);
$url2 = preg_match('/<meta property="og:video" content="(.+)"/', $html1, $match1);
$info1 = parse_url($match1[1]);
$delspace1 = str_replace('" />','',$info1['path']);
$vdourlchange = $info1['scheme'].'://'.$info1['host'].str_replace(" ","",$delspace1);
$vdourl = str_replace(" ","",$vdourlchange);
echo '<img src="';
$html2 = file_get_contents($urlhttps);
$url3 = preg_match('/<meta property="og:image" content="(.+)"/', $html2, $match2);
$info2 = parse_url($match2[1]);
$delspace2 = str_replace('" />','',$info2['path']);
echo $info2['scheme'].'://'.$info2['host'].str_replace(" ","",$delspace2); echo '" class="dwnld_thmbnl img-thumbnail" /><div class="p+"><span class="fs-subhead tc-black-2 display-block text-capitalize" style="font-weight: bold; font-size: 16px;">';
echo $skip4;
echo '</span><div><p class="lead"><b>Size: </b>'; $filesize = curl_init($vdourl);
curl_setopt($filesize, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($filesize, CURLOPT_HEADER, TRUE);
curl_setopt($filesize, CURLOPT_NOBODY, TRUE);
$data = curl_exec($filesize);
$size = curl_getinfo($filesize, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
function formatSizeUnits($bytes)
{
if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}
echo formatSizeUnits($size);
echo ' <br /><b>Resolution: </b>'; $html4 = file_get_contents($urlhttps);
$url4 = preg_match('/<meta property="og:video:width" content="(.+)"/', $html4, $match4);
$info4 = parse_url($match4[1]);
$infotwotwo2 =  $info4[path]; echo $infotwotwo2; echo "x"; $html5 = file_get_contents($urlhttps);
$url5 = preg_match('/<meta property="og:video:height" content="(.+)"/', $html5, $match5);
$info5 = parse_url($match5[1]);
$infotwotwo3 =  $info5[path]; echo $infotwotwo3;
echo '<br /><b>Type: </b>';
$html6 = file_get_contents($urlhttps);
$url6 = preg_match('/<meta property="og:video:type" content="(.+)"/', $html6, $match6);
$info6 = parse_url($match6[1]);
$infotype1 =  str_replace("video/","",$info6[path]);
echo strtoupper($infotype1);
echo '<br /><b>Description: </b>';
echo $infotwotwo1;
echo '</p></div></div><div class="card__actions"><a class="btn btnwtch dwnld_shr"><li class="fa fa-eye"></li>&nbsp;&nbsp;WATCH VIDEO</a><a class="btn btnshr dwnld_shr float_right"><li class="fa fa-share"></li>&nbsp;&nbsp;SHARE</a><div>
<a href="'; $skip39 = substr($vdourl , 44);
echo "t/down1.php?id=".$skip39;
echo '"><button class="btn btn--m btn--orange btn--flat" lx-ripple=""><li class="fa fa-download"></li>&nbsp;&nbsp;Download Video</button></a></div></div></div></div></div>';
echo '
       <div id="myModalWatch" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h4 class="modal-title">'; echo "Watch Video"; echo '</h4>
        </div>
        <div class="modal-body">
<center>
<video src="'; echo $vdourl; echo '" width="270" height="auto" controlsList="nodownload" controls></video>
<br />
          <p class="text-warning"><small>You can download this video here!</small></p>
<a href="'; echo "t/down1.php?id=".$skip39; echo '"><big>Download</big></a>
</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btnwtch btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function(){
$("#submit").click(function(){$("#loading").show();});});</script>
<br />';
include '../footer-73q4637394.php';
echo "</body>
</html>";
$destination_folder = '../t/InstaVideos/';
$newfname = $destination_folder . basename($skip4."...".$infotype1);
$file = fopen (str_replace(" ","",$vdourl), "rb");
if ($file) {
$newf = fopen ($newfname, "wb");
if ($newf)
while(!feof($file)) {
fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
}
}
if ($file) {
fclose($file);
}
if ($newf) {
fclose($newf);
}
?>
  <script type="text/javascript">
  $(document).ready(function()
  {
    $(".btnwtch").click(function()
    {
      $("#myModalWatch").modal('show');
    });
  });
  </script>