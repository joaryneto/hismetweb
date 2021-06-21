<?
require_once("./load/class/mysql.php");

if(isset($_GET['br']) == true) 
{
	if(empty($_SERVER['HTTP_REFERER']) == true)
	{
		exit();
	}
	$page = $_GET['br'];
	
	switch($page) 
	{

		//====  ====//
		case 'mexames' : $file = 'pages/cad_medicoexames.php'; break;
		case 'mimagens' : $file = 'pages/ver_imagens.php'; break;
		case 'enviar2' : $file = 'pages/enviar_2.php'; break;
		case 'listusuarios' : $file = 'pages/cad_listadeusuarios.php'; break;
		case 'listcodigos' : $file = 'pages/cad_listadecodigos.php'; break;
		case 'listempresas' : $file = 'pages/cad_listadeempresas.php'; break;
		
		//// ERRO ////
		default : $file = 'pages/'.$page.'.php'; break;
	}
	
	if(file_exists($file) == false) 
	{ 
		$file = '404.php'; 
	}
	require ($file);
	exit();
}

?>