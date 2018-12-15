<?php 
error_reporting(1);
header('Content-Type: application/json');
if($_GET['hd'] != ""){
$id = $_GET['hd'];
$url = file_get_contents('https://sendit.cloud/embed-'.$id.'.html'); 
$mp4u = explode('poster="', $url);
$mp4u = explode('"', $mp4u[1]);
$www = explode('<source src="', $url);
$www = explode('"', $www[1]); 
$poster = (''.$mp4u[0].'');
$file = (''.$www[0].'');
}
if($_GET['sd'] != ""){
$id = $_GET['sd'];
$url = file_get_contents('https://sendit.cloud/embed-'.$id.'.html'); 
$mp4u = explode('poster="', $url);
$mp4u = explode('"', $mp4u[1]);
$www = explode('<source src="', $url);
$www = explode('"', $www[1]); 
$poster = (''.$mp4u[0].'');
$files = (''.$www[0].'');
}
$hasil = array(
      'high' => $file,
      'medium' => $files,
      'poster' => $poster
   );
   exit( json_encode( $hasil) )
?>
<!DOCTYPE html>
<html>
      <link rel="icon" href="//www.mp4upload.com/images/favicon.gif" type="image/x-icon"/>
      <meta name="robots" content="noindex"/>
      <meta name="googlebot" content="noindex"/>
      <meta name="referrer" content="never"/>
      <meta name="referrer" content="no-referrer"/>
      <meta name="author" content="Zhen"/>
<body>
   High<?php echo $files;?>
</body>
</html>
