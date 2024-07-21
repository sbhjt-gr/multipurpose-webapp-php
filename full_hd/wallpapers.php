<?php
echo '<!DOCTYPE html>
<html>
<head>';
$title = $_GET['dir'];
if (empty($title)) {
  echo '<title>Full HD Wallpapers - The Best Collected Full HD Wallpapers Over 10 Categories</title>';
} else {
  echo "<title>".$title." - The Best Collection Of ".$title."
</title>";
}
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
include '../header-564qs59743.php';
?>
<?php
include '../scripts/Mobile_Detect.php';
$dirList = '../downloads/wallpapers/';
echo '<br /><h3>';
$title = $_GET['dir'];
if (empty($title)) {
  echo "Full HD Wallpapers";
} else {
  echo $title;
}
echo '</h3><br />';
function formatSizeUnits($bytes)
{if ($bytes >= 1073741824){
$bytes = number_format($bytes / 1073741824, 2) . ' GB';
} elseif ($bytes >= 1048576) {
$bytes = number_format($bytes / 1048576, 2) . ' MB';
} elseif ($bytes >= 1024) {
$bytes = number_format($bytes / 1024, 2) . ' KB';
} elseif ($bytes > 1) {
$bytes = $bytes . ' bytes';
} elseif ($bytes == 1) {
$bytes = $bytes . ' byte';
} else {
$bytes = '0 bytes';
} return $bytes;
}
echo '<div class="about-bottom">
		<div class="container">
			<h3>WALLPAPER COLLECTION</h3>
			<p class="lead">WE HAVE THE BEST WALLPAPERS</p>
		 </div>
	</div>
<br />
<br />';
echo '<div class="panel panel-default category-list">
      <div class="panel-heading"><b>';
if (empty($title)) {
  echo "Full HD Wallpapers";
} else {
  echo $title;
} echo '</b></div>
      <div class="panel-body">
        <p>Download the best ';
if (empty($title)) {
echo "Full HD Wallpapers";
} else {
echo $title;
} echo '.</p>
      </div></div>';
$directories = glob($dirList . "*");
usort($directories, function ($a, $b) { return filemtime($b) - filemtime($a); });
$dirtype = $_GET['type'];
if ($dirtype == dir) {} else {
echo '<div class="list-group">';
foreach($directories as $dir) {
if(is_dir($dir)){
$dir1 = str_replace('../downloads/wallpapers/', '', $dir);
$dir2 = str_replace(' ', '%20', $dir1);
echo '<a href="full_hd/wallpapers.php?dir='; echo $dir2; echo '&type=dir" class="list-group-item"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;'; echo $dir1; echo '</a>';  
}
}
echo "</div><br />";
}
if ($dirtype == dir) {
$filedir = "../downloads/wallpapers/".$_GET['dir']."/*";
$fileinsid_ = glob($filedir);
$ordero = $_REQUEST['order'];
if (empty($ordero)) {
$order = "New to Old";
} else {
$order = $ordero;
}
if ($order == "A to Z") {
} else { usort($fileinsid_, function ($a, $b) { return filemtime($b) - filemtime($a); }); }
$page_num = $_REQUEST['page'];
if (empty($page_num)) {
$page = 1;
} else {
$page = $page_num;
}
$record_count = 18;
$total_pages = ceil(count($filedir)/$record_count);
$offset = ($page-1)*$record_count;
$fileinside = array_slice($fileinsid_, $offset,$record_count);
echo '<br /><div class="order_body">
<center><b>Showing Order:</b> '; echo $order; echo '<br /><br />
<b>Set Order:</b> <a href="'; echo "full_hd/wallpapers.php?dir=".$_GET['dir']."&type=".$_GET['type']."&order="."A to Z"."&page=".$page; echo '"><button id="order_desc">A to Z</button></a>&nbsp;|&nbsp;<a href="'; echo "full_hd/wallpapers.php?dir=".$_GET['dir']."&type=".$_GET['type']."&order="."New to Old"."&page=".$page; echo '"><button id="order_asc">New to Old</button></a></center>
</div><br />';
echo '<div class="team-section">
<div class="team-grids">';
foreach($fileinside as $isfile) {
if(is_file($isfile)) {
$getpath = pathinfo($isfile);
$path = "." . $getpath['extension'];
$file_name = basename($isfile, $path);
$file_full_name = basename($isfile);
echo '<div class="col-md-4 team-grid">
							<div class="ih-item circle effect1"><a href="'; echo "https://".$_SERVER['SERVER_NAME']; echo $_SERVER['REQUEST_URI']."#1"; echo '">
								<div class="spinner"></div>
								<div class="img"><img src="/downloads/thumbnails/tmb_'.$file_full_name.'" /></div>
								<div class="info">
								  <div class="info-back">
									<h4>';
echo formatSizeUnits(filesize($isfile));
echo '</h4>							<span>Resolution: ';
$resolution = getimagesize($isfile);
echo $resolution[1]."x".$resolution[0];
echo '</span>
								  </div>
								</div></a>
							</div>
							<p>Tap on image to get full details</p>
							<center><a href=""><div class="axomf text-capitalize">'; echo $file_name; echo '</div></div></a></center>		
</div>';
$detect = new Mobile_Detect();
if ($detect->isMobile()) { echo '<pre style="background: none; border: none;">
</pre>'; } else {}
}
}
if (empty($isfile)) { echo '<center><p class="lead"><big>No more files are available in page number '.$page.'! <a href="javascript:history.back()">Back</a></big></p></center>'; } else {}
echo '</div></div>
<pre style="background: none; border: none;">
</pre>
<div class="pagina_marg">';
echo '<a href="'; echo "full_hd/wallpapers.php?dir=".$_GET['dir']."&type=".$_GET['type']."&order=".$_GET['order']."&page=".($page-1).'"><span id="pagina_prev"><font color="#01770F">←</font> Prev</span></a>'; 
echo '<a href="'; echo "full_hd/wallpapers.php?dir=".$_GET['dir']."&type=".$_GET['type']."&order=".$_GET['order']."&page=".($page+1).'"><span id="pagina_next">Next <font color="#01770F">→</font></span></a>'; 
echo '</div>
<pre style="background: none; border: none;">
</pre>
		<form action="'; echo 'full_hd/wallpapers.php'; echo '" method="get"> 
<input type="hidden" name="dir" value="'; echo $_GET['dir']; echo '" />
<input type="hidden" name="type" value="'; echo $_GET['type']; echo '" />
<input type="hidden" name="order" value="'; echo $_GET['order']; echo '" />
	<div class="subscribe">
		<div class="container">
				<input type="text" name="page" placeholder="Current Page: '; echo $page; echo '" required="" />
				<input type="submit" value="Go to Page" />
		</div>
	</div>
</form>';
echo '<div class="clearfix"></div>';
} else {}
?>
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>