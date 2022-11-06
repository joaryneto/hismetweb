<?

ob_start();

session_start();

error_reporting(1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

require_once("./load/load.php");

    if($_SESSION['tipo'] == 1)
    {
	    if(@$_GET['h'] == "login")
		{
	       include ('template/layout/medicina/login.php');  
		}
		else if(@$_GET['h'] == "inicio")
		{
	       include ('template/layout/medicina/index.php');  
		}
		else
		{
		   include ('template/layout/medicina/login.php');
		}
    }
	else if($_SESSION['tipo'] == 2)
	{
		if(@$_GET['h'] == "login")
		{
	       include ('template/layout/site/login.php');  
		}
		else if(@$_GET['h'] == "sistema")
		{
	       include ('template/layout/site/index.php');  
		}
		else
		{
		   include ('template/layout/site/index.php');
		}
	}
	else if($_SESSION['tipo'] == 3)
	{
		if(@$_GET['h'] == "login")
		{
	       include ('template/layout/frota/login.php');  
		}
		else if(@$_GET['h'] == "inicio")
		{
	       include ('template/layout/frota/index.php');  
		}
		else
		{
		   include ('template/layout/frota/login.php');
		}
	}
?>