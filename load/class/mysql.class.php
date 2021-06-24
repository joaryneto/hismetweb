<?
//$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
//$PageName = strtolower(basename( __FILE__ ));
//if($PageRequest == $PageName) exit("<strong> Erro: Não é permitido acessar o arquivo diretamente. </strong>");


//if(!$db = mysqli_connect("robb0478.publiccloud.com.br:3306", "netin_sge", "vxkD128!"))
//{
//    //print("<script>window.alert('Não conectou com banco...')</script>");
//	echo "Não conectou com banco 1...";
//}

if($_SESSION['tipo'] == 1)
{
	
if(!$db = mysqli_connect("mysql742.umbler.com:41890", "sistemaonline", "w9|2-SBgLs9"))
{
    //print("<script>window.alert('Não conectou com banco...')</script>");
	//echo "Não conectou com banco 1";
	exit();
}

@mysqli_select_db($db, "sistemaonline");
@mysqli_set_charset($db,'UTF8');

//mysqli_close($db);

}
else if($_SESSION['tipo'] == 2)
{	

if(!$db = mysqli_connect("mysql742.umbler.com:41890", "sistemaonline", "w9|2-SBgLs9"))
{
    //print("<script>window.alert('Não conectou com banco...')</script>");
	//echo "Não conectou com banco 3";
	exit();
}

@mysqli_select_db($db, "sistemaonline");
@mysqli_set_charset($db,'UTF8');

//mysqli_close($db);
}

/*if(!$db2 = mysqli_connect("mysql669.umbler.com:41890","sistemaec","I_Jt{4|p6u"))
{
   //print("<script>window.alert('Não conectou com banco...')</script>");
	echo "Não conectou com banco 2";
}

@mysqli_select_db($db2, "sistemaec");
@mysqli_set_charset($db2,'UTF8');*/

//mysqli_close($db2);
//@mysqli_query($db,"SET NAMES 'latin1'");
//@mysqli_query($db,'SET character_set_connection=latin1');
//@mysqli_query($db,'SET character_set_client=latin1');
//@mysqli_query($db,'SET character_set_results=latin1');
	
?>