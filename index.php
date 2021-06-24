<?

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
		else if(@$_GET['sl'] == "sistema")
		{
	       include ('template/layout/site/sistema.php');  
		}
		else
		{
		   include ('template/layout/site/index.php');
		}
	}
	else if($_SESSION['tipo'] == 3)
	{
		if(@$_GET['sl'] == "login")
		{
	       include ('template/layout/spa/login.php');  
		}
		else if(@$_GET['sl'] == "sistema")
		{
	       include ('template/layout/spa/sistema.php');  
		}
		else
		{
		   include ('template/layout/spa/index.php');
		}
	}

?>