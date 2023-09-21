<?php
$name=$_POST['name'];
$link=$_POST['link'];
$data="#EXTM3U
#EXTINF:-1 tvg-id='$name',$name
$link";
$file='movie.m3u8';
$fp=fopen($file, 'a');
fwrite($fp , $data);
fclose($fp);
?>