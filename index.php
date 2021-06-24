<?

if($_SERVER["HTTPS"] != "on" and @$_SERVER['SERVER_NAME'] == "app.hismet.com.br" or $_SERVER["HTTPS"] != "on" and @$_SERVER['SERVER_NAME'] == "hismet.com.br")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
else
{

require_once("./load/load.php");

    if($_SESSION['tipo'] == 1)
    {
	    if(@$_GET['h'] == "login")
		{
	       include ('template/layout/medicina/login.php');  
		}
		else if(@$_GET['h'] == "sistema")
		{
	       include ('template/layout/medicina/sistema.php');  
		}
		else
		{
		   include ('template/layout/medicina/index.php');
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
	       include ('template/layout/site/sistema.php');  
		}
		else
		{
		   include ('template/layout/site/index.php');
		}
	}
}
?>