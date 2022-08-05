<?

//echo "url2";

$url = $_GET['url'];

if ($url == "") { $url = "principal"; }

switch ($url) {

   		case "principal":
       	include("pages/inicio.php");
       	break;
		
   		case "recontratar":
       	include("pages/recadFuncionario.php");
       	break;	
		
   		case "demitir":
       	include("pages/demitiFuncionario.php");
       	break;				
		
   		case "validar":
       	include("pages/validaCadFuncionario.php");
       	break;		
		
   		case "cadastrar":
       	include("pages/cadFuncionario_v3.php");
       	break;
		
   		case "faturas":
       	include("pages/lista_faturas.php");
       	break;	
		
		case "extrato":
       	include("pages/extrato_exames.php");
       	break;
		
   		case "requisicao":
       	include("pages/reqExame_v6.php");
       	break;

   		case "requisicao_conv":
       	include("pages/reqExame_v5_conv.php");
       	break;

   		case "requisicao_conv":
       	include("pages/reqListaExames2_conv.php");
       	break;	
		
   		case "requisicao2":
       	include("pages/reqListaExames3.php");
       	break;		
		
   		case "exames":
       	include("pages/lista_exames.php");
       	break;	
		
   		case "extintores":
       	include("pages/lista_extintores.php");
       	break;	
		
   		case "convocacao":
		include("pages/lista_convocacao_v7.php");
       	break;	
		
   		case "convocacao_anual":
       	include("pages/lista_convocacao_anual_v2.php");
       	break;			
		
		case "ls_vencimento":
       	include("pages/lista_vencimento_v2.php");
       	break;	
		
		case "guiaexame":
       	include("pages/imprimirguia.php");
       	break;	
		
		case "complementar":
       	include("pages/reqListaExamesComplementar.php");
       	break;
		
		case "excluircomplementar":
       	include("pages/excluir_complementar.php");
       	break;		
		
		case "excluircomplementar2":
       	include("pages/excluir_complementar2.php");
       	break;																

		case "mensagem":
       	include("pages/mensagem.php");
       	break;	
		
		case "erro":
       	include("pages/mensagem.php");
       	break;

        case "xmlaso":
        include("pages/aso.php");
        break;	
		
		case "gerar_ambiente":
        include("pages/cad_ambiente.php");
        break;
		
		case "fatura";
		include("pages/fatura.php");
		break;
		
		case "anteriores";
		include("pages/fat_anteriores.php");
		break;
		
		case "segundavia":
        include("pages/segundavia_aso.php");
        break;
		
		default:
		include("pages/$url.php");
		break;
        		
			
}


?>