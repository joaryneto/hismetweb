<?

if(@$_SERVER['SERVER_NAME'] == "sistema.site" or $_SERVER['SERVER_NAME'] == "app.hismet.com.br")
{
	$_SESSION['nosistema'] = "".$_SERVER['SERVER_NAME']."/";
	$_SESSION['nomesoft'] = "App Hismet";
	$_SESSION['tipo'] = 1;
	$_SESSION['manifest'] = "manifest.json";
	$_SESSION['cor'] = "#FFFFFF";
	$_SESSION['img'] = "sistema";
	$_SESSION['tema'] = "blue";
	$_SESSION['pg'] = "pgsis";
	$_SESSION['template'] = "template/layout/medicina/";
	//print('<script> localStorage.setItem("sistema", "'.$sistema.'"); </script>');
}
else if(@$_SERVER['SERVER_NAME'] == "teste.hismet.com.br" or @$_SERVER['SERVER_NAME'] == "sistema.web" or $_SERVER['SERVER_NAME'] == "hismet.com.br" or $_SERVER['SERVER_NAME'] == "www.hismet.com.br")
{
	$_SESSION['nosistema'] = "".$_SERVER['SERVER_NAME']."/";
	$_SESSION['nomesoft'] = "Hismet";
	$_SESSION['tipo'] = 2;
	$_SESSION['manifest'] = "manifest.json";
	$_SESSION['cor'] = "#FFFFFF";
	$_SESSION['tema'] = "blue";
	$_SESSION['img'] = "sistema";
	$_SESSION['pg'] = "pages";
	$_SESSION['template'] = "template/layout/site/";
	
	//print('<script> localStorage.setItem("sistema", "'.$sistema.'"); </script>');
}
else if(@$_SERVER['SERVER_NAME'] == "sistema.frota" or $_SERVER['SERVER_NAME'] == "frota.hismet.com.br")
{
	$_SESSION['nosistema'] = "".$_SERVER['SERVER_NAME']."/";
	$_SESSION['nomesoft'] = "Frota Hismet";
	$_SESSION['tipo'] = 3;
	$_SESSION['manifest'] = "manifest.json";
	$_SESSION['cor'] = "#FFFFFF";
	$_SESSION['tema'] = "blue";
	$_SESSION['img'] = "sistema";
	$_SESSION['pg'] = "pgfro";
	$_SESSION['template'] = "template/layout/frota/";
	
	//print('<script> localStorage.setItem("sistema", "'.$sistema.'"); </script>');
}

function formatodata($data){
    return date("d/m/Y", strtotime($data));
}

function formatodatahora($data){
    return date("d/m/Y H:i:s", strtotime($data));
}

function formatohora($horas){
    return date("H:i", strtotime($horas));
}

$data = date('Y-m-d');
$hora = date('H:i:s');
$ano = date('Y');
$datahora = date('Y-m-d H:i:s');

function revertedata($data){
	if($data != "")
	{
		$sep_data = explode("/",$data);
		$data = @$sep_data[2]."-".@$sep_data[1]."-".@$sep_data[0];
	}
	
	return $data;
}

function revertemes($data){
	if($data != "")
	{
		$sep_data = explode("/",$data);
		$data = @$sep_data[1]."-".@$sep_data[0];
	}
	
	return $data;
}

function valor($numero)
{
   $numero = number_format($numero, 2, ',', '.');
   return $numero;
}
	
require_once("./load/class/mysql.class.php");
require_once("./load/class/security.class.php");

$string = '{
  "name": "'.$_SESSION['nomesoft'].'",
  "short_name": "'.$_SESSION['nomesoft'].'",
  "icons": [{
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-128x128.png",
      "sizes": "128x128",
      "type": "image/png"
    }, {
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-144x144.png",
      "sizes": "144x144",
      "type": "image/png"
    }, {
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-152x152.png",
      "sizes": "152x152",
      "type": "image/png"
    }, {
      "src": "'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-192x192.png",
      "sizes": "192x192",
      "type": "image/png",
	  "purpose": "maskable"
    }, {
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-256x256.png",
      "sizes": "256x256",
      "type": "image/png",
	  "purpose": "maskable"
    }, {
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-512x512.png",
      "sizes": "512x512",
      "type": "image/png",
	  "purpose": "maskable"
    }, {
      "src": "/'.$_SESSION['template'].'images/icons/'.$_SESSION['img'].'/icon-32x32.png",
      "sizes": "32x32",
      "type": "image/png",
	  "purpose": "maskable"
    }],
  "start_url": "https://'.$_SESSION['nosistema'].'",
  "display": "standalone",
  "background_color": "'.$_SESSION['cor'].'",
  "theme_color": "'.$_SESSION['cor'].'"
}';

if(!Empty($_SESSION['manifest']))
{
   $fp = fopen(''.$_SESSION['template'].$_SESSION['manifest'].'', 'w');
   fwrite($fp, $string);
   fclose($fp);
}

//$_SESSION['pg'] = "pgsl";

if(isset($_GET['br']) == true) 
{
	if(empty($_SERVER['HTTP_REFERER']) == true)
	{
		exit();
	}
	
	$page = $_GET['br'];
	
	switch($page) 
	{
		default : $file = ''.$_SESSION['pg'].'/'.$page.'.php'; break;
	}
	
	if(file_exists($file) == false) 
	{ 
		$file = '404.php'; 
	}
	require ($file);
	exit();
}

?>