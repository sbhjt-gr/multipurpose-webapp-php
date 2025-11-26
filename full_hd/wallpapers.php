<?php
echo '<!DOCTYPE html>
<html>
<head>';
$title = isset($_GET['dir']) ? basename($_GET['dir']) : '';
if (empty($title)) {
  echo '<title>Full HD Wallpapers - The Best Collected Full HD Wallpapers Over 10 Categories</title>';
} else {
  echo "<title>".htmlspecialchars($title, ENT_QUOTES, 'UTF-8')." - The Best Collection Of ".htmlspecialchars($title, ENT_QUOTES, 'UTF-8')."
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
$title = isset($_GET['dir']) ? basename($_GET['dir']) : '';
if (empty($title)) {
  echo "Full HD Wallpapers";
} else {
  echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
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
  echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
} echo '</b></div>
      <div class="panel-body">
        <p>Download the best ';
if (empty($title)) {
echo "Full HD Wallpapers";
} else {
echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
} echo '.</p>
      </div></div>';
$directories = glob($dirList . "*");
usort($directories, function ($a, $b) { return filemtime($b) - filemtime($a); });
$dirtype = isset($_GET['type']) ? $_GET['type'] : '';
if ($dirtype == 'dir') {} else {
echo '<div class="list-group">';
foreach($directories as $dir) {
if(is_dir($dir)){
$dir1 = str_replace('../downloads/wallpapers/', '', $dir);
$dir2 = urlencode($dir1);
echo '<a href="full_hd/wallpapers.php?dir='; echo $dir2; echo '&type=dir" class="list-group-item"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;'; echo htmlspecialchars($dir1, ENT_QUOTES, 'UTF-8'); echo '</a>';  
}
}
echo "</div><br />";
}
if ($dirtype == 'dir') {
$safe_dir = basename($_GET['dir']);
$filedir = "../downloads/wallpapers/".$safe_dir."/*";
$fileinsid_ = glob($filedir);
$ordero = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
if (empty($ordero)) {
$order = "New to Old";
} else {
$order = in_array($ordero, ['A to Z', 'New to Old']) ? $ordero : 'New to Old';
}
if ($order == "A to Z") {
    sort($fileinsid_);
} else { usort($fileinsid_, function ($a, $b) { return filemtime($b) - filemtime($a); }); }
$page_num = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
if ($page_num < 1) {
$page = 1;
} else {
$page = $page_num;
}
$record_count = 18;
$total_pages = ceil(count($fileinsid_)/$record_count);
$offset = ($page-1)*$record_count;
$fileinside = array_slice($fileinsid_, $offset,$record_count);
echo '<br /><div class="order_body">
<center><b>Showing Order:</b> '; echo htmlspecialchars($order, ENT_QUOTES, 'UTF-8'); echo '<br /><br />
<b>Set Order:</b> <a href="'; echo "full_hd/wallpapers.php?dir=".urlencode($safe_dir)."&type=".urlencode($_GET['type'])."&order=".urlencode("A to Z")."&page=".intval($page); echo '"><button id="order_desc">A to Z</button></a>&nbsp;|&nbsp;<a href="'; echo "full_hd/wallpapers.php?dir=".urlencode($safe_dir)."&type=".urlencode($_GET['type'])."&order=".urlencode("New to Old")."&page=".intval($page); echo '"><button id="order_asc">New to Old</button></a></center>
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
								<div class="img">';
$thumbnail_path = "/downloads/thumbnails/tmb_".$file_full_name;
if(file_exists("..".$thumbnail_path)){
    echo '<img src="'.$thumbnail_path.'" />';
}else{
    echo '<img src="'.$isfile.'" style="max-width:100%;height:auto;" />';
}
echo '</div>
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
							<center><a href=""><div class="axomf text-capitalize">'; echo htmlspecialchars($file_name, ENT_QUOTES, 'UTF-8'); echo '</div></div></a></center>		
</div>';
}
}
if (count($fileinside) == 0) { echo '<center><p class="lead"><big>No files are available in this directory! <a href="javascript:history.back()">Back</a></big></p></center>'; } else {}
echo '</div></div>
<pre style="background: none; border: none;">
</pre>
<div class="pagina_marg">'; 
echo '<a href="'; echo "full_hd/wallpapers.php?dir=".urlencode($safe_dir)."&type=".urlencode($_GET['type'])."&order=".urlencode($order)."&page=".max(1, intval($page-1)).'"><span id="pagina_prev"><font color="#01770F">←</font> Prev</span></a>'; 
echo '<a href="'; echo "full_hd/wallpapers.php?dir=".urlencode($safe_dir)."&type=".urlencode($_GET['type'])."&order=".urlencode($order)."&page=".intval($page+1).'"><span id="pagina_next">Next <font color="#01770F">→</font></span></a>';
echo '</div>
<pre style="background: none; border: none;">
</pre>
		<form action="'; echo 'full_hd/wallpapers.php'; echo '" method="get"> 
<input type="hidden" name="dir" value="'; echo htmlspecialchars($safe_dir, ENT_QUOTES, 'UTF-8'); echo '" />
<input type="hidden" name="type" value="'; echo htmlspecialchars($_GET['type'], ENT_QUOTES, 'UTF-8'); echo '" />
<input type="hidden" name="order" value="'; echo htmlspecialchars($order, ENT_QUOTES, 'UTF-8'); echo '" />
	<div class="subscribe">
		<div class="container">
				<input type="text" name="page" placeholder="Current Page: '; echo intval($page); echo '" required="" />
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