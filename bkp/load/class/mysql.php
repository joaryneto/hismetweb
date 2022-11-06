<?
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: Não é permitido acessar o arquivo diretamente. </strong>");


if (basename($_SERVER["REQUEST_URI"]) === basename(__FILE__))
{
	exit();
}

//if(!$db = mysqli_connect("191.252.111.137", "villesistemas13", "hismet2015", "villesistemas13"))
//{
//    print("<script>window.alert('Não conectou com banco...')</script>");
//}

//if(!$db = mysqli_connect("192.168.1.210", "sistema", "hismetsis"))
//{
//    print("<script>window.alert('Não conectou com banco...')</script>");
//}

if(!$db = mysqli_connect("nsmed1.ddns.net:3306", "sistema", "hismetsis"))
{
    //print("<script>window.alert('Não conectou com banco...')</script>");
	echo "Não conectou com banco 1...";
}

@mysqli_select_db($db, "medicina");
@mysqli_set_charset($db,'UTF8');

//@mysqli_select_db($db4, "villesistemas13");
//@mysqli_set_charset($db4,'UTF8');
//@mysqli_query($db,"SET NAMES 'latin1'");
//@mysqli_query($db,'SET character_set_connection=latin1');
//@mysqli_query($db,'SET character_set_client=latin1');
//@mysqli_query($db,'SET character_set_results=latin1');
	
?>