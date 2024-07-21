<?php
$file_url = "https://instagram.frdp1-1.fna.fbcdn.net/vp/" . $_GET['id'];
$filesize = curl_init($file_url);
curl_setopt($filesize, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($filesize, CURLOPT_HEADER, TRUE);
curl_setopt($filesize, CURLOPT_NOBODY, TRUE);
$data = curl_exec($filesize);
$size = curl_getinfo($filesize, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-Length: ".$size);
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);
exit;
?>