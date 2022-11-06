<?

error_reporting(E_ALL);
ob_start();
session_start();


function isMobile() 
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
//echo "<br>TESTE: ".$_SESSION['usuario']."<br>";

require_once("./load/load.php");

$anoY = date('Y');
$mesM = date('m');

$SQL = "select * from laudos_enviados where YEAR(dataenvio)=$anoY and month(dataenvio)=$mesM and status IN (2)";
$RES = mysqli_query($db,$SQL);

$contar = 0;
while($row = mysqli_fetch_array($RES))
{
	
	$SQL2 = "SELECT * FROM laudos_enviados where codigo='".$row['codigo']."'";
	
	$RES2 = mysqli_query($db3,$SQL2);
	
	$x=0;
	while($rows = mysqli_fetch_array($RES2))
	{
		$x=1;
	}
	
	if($x==1)
	{
		//echo "<br>".$row['fatura'];
		//$SQL2 = "UPDATE laudos_enviados SET dataenvio='".$row['dataenvio']."',tipolaudo='".$row['tipolaudo']."',status='".$row['status']."' where codigo=".$row['codigo']."";
		//$RES2 = mysqli_query($db3,$SQL2);
	    //mysqli_close($db);
		
	}
	else
	{
		$SQL2 = "INSERT INTO `laudo`.`laudos_enviados`(`codigo`, `protocolo`, `empresa`, `cpf`, `paciente`, `dataenvio`, `status`, `laudador`, `datainiciolaudo`, `dataterminolaudo`, `tipolaudo`, `solicitantelaudo`, `valor_laudador`, `valor_empresa`, `desconto_empresa`, `cpf_laudador`) VALUES (".$row['codigo'].", '".$row['protocolo']."', '".$row['empresa']."', '".$row['rg']."', '".$row['paciente']."', '".$row['dataenvio']."', ".$row['status'].", ".$row['laudador'].", '".$row['datainiciolaudo']."', '".$row['dataterminolaudo']."', ".$row['tipolaudo'].", ".$row['solicitantelaudo'].", ".$row['valor_laudador'].", ".$row['valor_empresa'].", ".$row['desconto_empresa'].", '".$row['cpf_laudador']."');";
		
	    $RES2 = mysqli_query($db3,$SQL2);
	    //mysqli_close($db);
	}
	
	$contar ++;
}

if(Empty($_SESSION['usuario']))
{
	print("<script>swal('Você não esta logado.');</script>"); 
    print("<script>window.location.href='index.php';</script>"); 
}

$sucesso = true;

$SQL = "SELECT * FROM internet_usuarios where email='".$_SESSION['login']."'";
$pessoa = mysqli_query($db,$SQL);
while($rows = mysqli_fetch_array($pessoa))
{
	$nome = $rows['nome'];
	$email = $rows['email'];
	$senha = $rows['senha'];
	$telefone = $rows['telefone'];
	$mensagem = $row['mensagem'];
	$empresa = $rows['nome_empresa'];
	$foto = $rows['foto'];
	$tipo = $rows['tipocad'];
	$codusuario = $rows['codigo'];
	$defineuser = $rows['cod_usuario'];
	$_SESSION['cpfresplaudo'] = $rows['empresa'];
	
	Switch($rows['tipocad'])
    {
		case 1:
		$funcao = "Médico";
		break;
		case 2:
		$funcao = "Atendimento";
		break;
		case 3:
		$funcao = "Administrador";
		break;
		
	}
}
	
$SQL = "SELECT menu FROM permissoes where usuario='".$codusuario."' and status=1";

$sucesso = mysqli_query($db,$SQL);
	  
while($row = mysqli_fetch_array($sucesso))
{
		 ///print("<script>window.alert('".$row['menu']."')</script>");
		 
		 Switch($row['menu'])
		 {
			 case 0:
			 $menu0 = true;
			 $_SESSION['menu0'] = true;
			 break;
			 case 1:
			 $menu1 = true;
			 $_SESSION['menu1'] = true;
			 break;
			 case 2:
			 $menu2 = true;
			 $_SESSION['menu2'] = true;
			 break;
			 case 3:
			 $menu3 = true;
			 $_SESSION['menu3'] = true;
			 break;
			 case 4:
			 $menu4 = true;
			 $_SESSION['menu4'] = true;
			 break;
			 case 5:
			 $menu5 = true;
			 $_SESSION['menu5'] = true;
			 break;
			 case 6:
			 $menu6 = true;
			 $_SESSION['menu6'] = true;
			 break;
			 case 7:
			 $menu7 = true;
			 $_SESSION['menu7'] = true;
			 break;
			 case 8:
			 $menu8 = true;
			 $_SESSION['menu8'] = true;
			 break;
			 case 9:
			 $menu9 = true;
			 $_SESSION['menu9'] = true;
			 break;
			 case 10:
			 $menu10 = true;
			 $_SESSION['menu10'] = true;
			 break;
			 case 11:
			 $menu11 = true;
			 $_SESSION['menu11'] = true;
			 break;
			 case 12:
			 $menu12 = true;
			 $_SESSION['menu12'] = true;
			 break;
			 case 13:
			 $menu13 = true;
			 $_SESSION['menu13'] = true;
			 break;
			 case 14:
			 $menu14 = true;
			 $_SESSION['menu14'] = true;
			 break;
			 case 15:
			 $menu15 = true;
			 $_SESSION['menu15'] = true;
			 break;
			 case 16:
			 $menu16 = true;
			 $_SESSION['menu16'] = true;
			 break;
			 case 17:
			 $menu17 = true;
			 $_SESSION['menu17'] = true;
			 break;
			 case 18:
			 $menu18 = true;
			 $_SESSION['menu18'] = true;
			 break;
			 case 99:
			 $menu99 = true;
			 $_SESSION['menu99'] = true;
			 break;
		 }
}
	
function mt_rand_str ($l, $c = '1234567890') {
    for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
    return $s;
}

function retiraacentos($texto) { 
$array1 = array("?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "-", ".", ",","/","(",")","'","`"); 
$array2 = array("A", "A", "A", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c", "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C", "", "", "","","","`","`");
return str_replace($array1, $array2, $texto); 
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Painel Admin - Imaggi Radiologia</title>
	
	<? //if(){ ?>
    <!-- Bootstrap Core CSS -->
    <link href="template/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	
	<? if($_GET['url'] == "enviar_2" or $_GET['url'] == "confirmar_inconsistencia" or $_GET['url'] == "enviar_externo") {?>
	
    <!-- Dropzone css -->
    <link href="template/assets/node_modules/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
	
	<? } ?>
	
	<!-- page CSS -->
    <link href="template/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="template/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="template/assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="template/assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="template/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="template/assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="template/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="template/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="template/assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="template/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
	
	<!-- owl slider CSS -->
    <link href="template/assets/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="template/assets/owl.carousel/owl.theme.default.css" rel="stylesheet">
	
	<link href="template/style.css" rel="stylesheet">
	<!--alerts CSS -->
    <link href="template/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	
    <!-- Page plugins css -->
    <link href="template/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="template/assets/node_modules/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="template/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="template/assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="template/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="template/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="template/css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="template/css/colors/blue-dark.css" id="theme" rel="stylesheet">
	
	<script type="text/javascript" src="template/js/AjaxScript.js.php"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

<style>
.container-fluid {
    max-width: 1480px !important;
}

.modal-lg {
    max-width: 900px !important;
}

@media (min-width: 768px) {
	
.mini-sidebar .scroll-sidebar {
    max-width: 1480px !important;
    }
}

.topbar .top-navbar {
    max-width: 1480px !important;
}

.table td, .table th {
	padding: .35rem !important;
}

@media screen and (max-width: 480px)
{
	.hid
	{
		display:none !important;
	}
	.btn-info, .btn-info.disabled {
	    margin: 2px !important;
	}
	#rx
	{
		height:444px !important;
	}
}
@media screen and (max-width: 900px) and (min-width: 600px), (min-width: 1100px) {
{
	.hid
	{
		display:block !important;
	}
}

<!--@media (min-width: 768px) {
.form-control {
    <!--min-height: 18px !important;
}

html body .m-t-40 {
    margin-top: 0px !important;
}

.select2-container--default .select2-selection--single {
    <!--height: 25px !important;--
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 25px !important;
}

.sidebar-nav ul li a {
{
	font-size: 10px !important;
}

body {
    font-size: 10px !important;
}
}-->
</style>
</head>

<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">IMAGGI</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="iniciado.php?url=inicio">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="template/img/logo1.png" style="height: 70px;"  alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="template/img/logo1.png" style="height: 70px;"  alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="template/img/logo2.png" style="height: 40px;position: relative;top: 6.5px;" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="template/img/logo2.png" style="height: 40px;position: relative;top: 6.5px;" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down"><span></span></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="icon-Magnifi-Glass2"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>-->
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
						<!--
						< 
						
						$SQL_RES = "SELECT mensagens.* FROM mensagens 
						inner join mensagens_ver on mensagens_ver.cod_usuario=mensagens.p_usuario and mensagens_ver.status=1
						where mensagens.p_usuario=".$_SESSION['usuario']." ORDER BY mensagens.codigo desc";
						$res = mysqli_query($db,$SQL_RES);
						
						
						$passa = false;
						
						for ($i = 1; $row = mysqli_fetch_assoc($res); ++$i)
						{
							$passa = true;
						}
						
						?>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
							
							< if($passa == true)
						         {
						         ?>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
								< } ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notificação</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
										    <
											 
											$SQL_RES2 = "SELECT mensagens.*, internet_usuarios.nome,internet_usuarios.foto FROM mensagens 
                                                           inner join internet_usuarios on internet_usuarios.cod_usuario=mensagens.d_usuario
														   inner join mensagens_ver on mensagens_ver.cod_usuario=mensagens.p_usuario and mensagens_ver.status=1
														   where mensagens.p_usuario=".$_SESSION['usuario']." ORDER BY mensagens.codigo desc";
														   
											$res = mysqli_query($db,$SQL_RES2);
											while($row = mysqli_fetch_array($res))
											{
											?>
                                            <!-- Message --
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5><=$row['nome'];?></h5> <span class="mail-desc"><=$row['assunto'];?></span> <span class="time">
													< echo date("h:i:s A",$row['data']); ?></span> </div>
                                            </a>
						                   < } ?>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Verifique todas as notificações</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
						
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<? if(isset($foto)){?>
							<img src="<? echo $foto;?>" alt="user" class="profile-pic" /> 
							<? }else{?> 
							<img src="template/assets/images/users/icon-member.png" alt="user" class="profile-pic">
							<? } ?></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
											<? if(isset($foto)){?>
											<img src="<? echo $foto;?>" alt="user">
											<? }else{?> 
											<img src="template/assets/images/users/icon-member.png" alt="user">
											<? } ?></div>
                                            <div class="u-text">
                                                <h4><? echo $nome; ?></h4>
                                                <p class="text-muted"><? echo $email; ?></p><a href="iniciado.php?url=perfil" class="btn btn-rounded btn-danger btn-sm">Ver perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="iniciado.php?url=perfil"><i class="ti-user"></i> Meu Perfil</a></li>
                                    <!--<li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>-->
                                    <li role="separator" class="divider"></li>
                                    <li><a href="index.php"><i class="fa fa-power-off"></i> Sair</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
		<? include 'menu.php';?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!--<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">< echo $_SESSION['PAGINA']; ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                            <li class="breadcrumb-item active">< echo $_SESSION['PAGINA']; ?></li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>-->
		
				<? if($_SESSION['manutencao']!=1){include("url.php");}else{include("url2.php");} ?>
				
                <!-- .right-sidebar -->
  
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!--<footer class="footer"> © 2019 </footer>-->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	
    <script src="template/assets/node_modules/jquery/jquery.min.js"></script>

    <!-- Bootstrap popper Core JavaScript -->
    <script src="template/assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="template/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="template/assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="template/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="template/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="template/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="template/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="template/assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="template/assets/node_modules/d3/d3.min.js"></script>
    <script src="template/assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="template/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="template/js/dashboard1.js"></script>
	    <!-- This is data table -->
    <script src="template/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
    <script>
    $(function() {
        $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() 
			{
                var currentOrder = table.order()[0];
				
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') 
				{
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        
    });
    $('#example23').DataTable({
        <? if($menu99 == 1){ ?>
		dom: 'Bfrtip',
        buttons: [
            'copy', 
			'csv',
			'excel', 
			'print',
			'pdf',
        ],
		<? } ?>
		"order": [
        [0, 'desc']
        ],
        language: 
		{
		    url: 'template/js/Portuguese-Brasil.json'
		},
		"pageLength": 100
    });
    </script>
	

	<!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="template/assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="template/assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="template/assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="template/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="template/assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script type="text/javascript" src="template/assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
    $(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').on('click', function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').on('click', function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    
	<script>
	$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#txtcpfs').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#txtcpfs" ).autocomplete({
	    minLength: 2,
	    source: function( request, response ) {
	        $.ajax({
	            url: "consulta.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#txtcpfs').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) 
		{
	        $("#txtcpfs").val( ui.item.cpf );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) 
		{
	        $("#txtcpfs").val( ui.item.cpf );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) 
    {
      return $( "<li>" )
        .append( "<a><b>CPF: </b>" + item.cpf + "<br><b>Nome: </b>" + item.nome + "<br><b> Data Nascimento: </b>" + item.nascimento + "</a><br>" )
        .appendTo( ul );
    };
	
	    // Atribui evento e função para limpeza dos campos
    $('#txtCodigo').on('input', limpaCampos2);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#txtCodigo" ).autocomplete({
	    minLength: 2,
	    source: function( request, response ) {
	        $.ajax({
	            url: "consulta2.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete2',
	                parametro: $('#txtCodigo').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#txtCodigo").val( ui.item.codigo );
	        carregarDados2();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#txtCodigo").val( ui.item.codigo );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a><b>Codigo: </b>" + item.codigo + "<br><b>CPF: </b>" + item.cpf + "<br><b>Nome: </b>" + item.nome + "<br><b> Data Nascimento: </b>" + item.nascimento + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#txtcpfs').val();

    	if(busca != "" && busca.length >= 2){
    		$.ajax({
	            url: "consulta.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#txtcpfs').val()
	            },
	            success: function( data ) {
	               $('#txtcpfs').val(data[0].cpf);
	               $('#txtRg').val(data[0].rg);
	               $('#txtPaciente').val(data[0].nome);
	               $('#txtNascimento').val(data[0].nascimento);
	            }
	        });
    	}
    }
	
	    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados2(){
    	var busca = $('#txtCodigo').val();

    	if(busca != "" && busca.length >= 2){
    		$.ajax({
	            url: "consulta2.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#txtCodigo').val()
	            },
	            success: function( data ) {
	               $('#txtcpfs').val(data[0].cpf);
	               $('#txtRg').val(data[0].rg);
				   $('#empresa').val(36894418000137);
	               $('#txtPaciente').val(data[0].nome);
	               $('#txtNascimento').val(data[0].nascimento);
				   $('#txtEmpresa').text(data[0].fantasia);
				   
				   // Visualizar Client Empresa
				   $('#EShow').show();
				   
				   // Desabilitar input
				   //$("#txtPaciente").attr('disabled', 'true');
				   //$("#txtRg").attr('disabled', 'true');

	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#txtcpfs').val();

       if(busca == ""){
	   $('#txtPaciente').val('');
           $('#txtNascimento').val('');
       }
    }
	
	    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos2(){
       var busca = $('#txtCodigo').val();

       if(busca == ""){
	   $('#txtPaciente').val('');
           $('#txtNascimento').val('');
		   $('#txtRg').val('');
		   $('#txtcpfs').val('');
		   $('#empresa').val('');
		   $('#categoria').val('');
		   $('#txtEmpresa').text('');
		   
		   // 
		   $('#EShow').hide();
		   
		   // Habilitar input
		   //jQuery("#txtPaciente").removeAttr('disabled');
		   //jQuery("#txtRg").removeAttr('disabled');
       }
    }
});
	
	</script>
	
	<? /* if($_GET['url'] == "inicio" or $_GET['url'] == "enviar" or $_GET['url'] == "editar_laudo" or $_GET['url'] == "enviar_externo" ) {*/?>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!--<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'> MAIS NOVO 
  
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
	
    <!-- Plugin JavaScript -->
    <script src="template/assets/node_modules/moment/moment.js"></script>
    <script src="template/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="template/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="template/assets/node_modules/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="template/assets/node_modules/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="template/assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="template/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="template/assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="template/assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="template/assets/node_modules/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').on('click', function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#txtNascimento').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
	jQuery('#relmedico').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
    jQuery('#relmedico2').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
    jQuery('#relmedico3').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
    jQuery('#relmedico4').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
	jQuery('#faturalimit').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
	jQuery('#faturavenc').datepicker({
		format: 'mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		viewMode: "months",
        minViewMode: "months",
		language: "pt-BR",
		orientation: "bottom left"
    });
	jQuery('#faturame').datepicker({
		format: 'mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		viewMode: "months",
        minViewMode: "months",
		language: "pt-BR",
		orientation: "bottom left"
    });
    jQuery('#txtdata').datepicker({
		format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
		language: "pt-BR",
		orientation: "bottom left"
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    </script>
	<? //} ?>
	<? if($_GET['url'] == "enviar_2" or $_GET['url'] == "confirmar_inconsistencia" or $_GET['url'] == "enviar_externo") 
	{?>
    <!-- Dropzone Plugin JavaScript -->
    <script src="template/assets/node_modules/dropzone-master/dist/dropzone.js"></script>
	<? } ?>
	
	<script src="template/js/mask.js"></script>
	<script src="template/js/jquery.maskMoney.min.js"></script>
	
	<!-- Sweet-Alert  -->
    <script src="template/assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="template/assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>
	
    <!-- jQuery for carousel -->
    <script src="template/assets/owl.carousel/owl.carousel.min.js"></script>
	
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="template/assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>

	
</body>
</html>
<?

 
?>
	