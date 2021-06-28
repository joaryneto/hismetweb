<!doctype html>
<html lang="pt-br">

<head>
   
<? include(''.$_SESSION['template'].'css.php');?>

    <!-- Custom styles for this template -->
	
<link href="<? echo $_SESSION['template'];?>assets/css/style-skyblue.css" rel="stylesheet" id="style">
</head>

<body class="ui-rounded">
    <!-- Page laoder -->
    <div class="container-fluid pageloader">
        <div class="row h-100">
            <div class="col-12 align-self-start text-center">
            </div>
            <div class="col-12 align-self-center text-center">
                <div class="loader-logo">
                    <div class="logo"><span></span><span></span>
                        <div class="loader-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 align-self-end text-center">
                <p class="my-5">Por favor, aguarde<br><small class="text-mute">Um mundo está carregando ...</small></p>
            </div>
        </div>
    </div>
    <!-- Page laoder ends -->

    <!-- Fixed navbar -->
    <header class="header fixed-top header-fill">
        <nav class="navbar">
            <div>
                <button class="menu-btn btn btn-link btn-44">
                    <span class="icon material-icons">menu</span>
                </button>
            </div>
            <div>
                <a class="navbar-brand" href="/?h=inicio">
                    <div class="logo"><span></span><span></span></div>
                    <h4 class="logo-text"><img style="height:50px" src="<? echo $_SESSION['template'];?>images/logo.png" alt="logo"><span></span><small></small></h4>
                </a>
            </div>
            <div>
                <a href="#" class=""><span class="avatar avatar-30"><img src="<? echo $_SESSION['template'];?>/images/usuario.png" alt=""></span></a>
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->

    <!-- sidebar -->
    <? include(''.$_SESSION['template'].'/menu.php');?>
    <!-- sidebar ends -->

    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
             
                
                    <script>
		window.onload = function ()
		{
			requestPage('?br=agenda','conteudo','GET');
		}
		</script>
		
        <div id="conteudo">
		<? if($_SESSION['tipo'] == 2){
		if(Empty($_SESSION['manutencao']))
		{
			$_SESSION['manutencao'] = 0;
		}
				   
		if($_SESSION['manutencao']!=1)
		{
			include("url.php");
		}
		else
		{
			include("url2.php");
		} 
		}
		?>

        </div>
            
            </div>
        </div>
    </main>

    <div class="footer-tabs border-top text-center">
        <ul class="nav nav-tabs nav-fill justify-content-center" id="myTab" role="tablist">
            <? if($_SESSION['permissao'] == 4 ){?>
			<li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" onclick="requestPage('?br=cad_usuarios','conteudo','GET');">
                    <i class="h4 icon_profile"></i>
                    <small class="sr-only">Home</small>
                </a>
            </li>
			<? } ?>
            <li class="nav-item">
                <a class="nav-link active" id="search-tab" data-toggle="tab" onclick="requestPage('?br=agenda','conteudo','GET');" >
                    <i class="h4 icon_calendar"></i>
                    <small class="sr-only">Appointment</small>
                </a>
            </li>
        </ul>
    </div>

    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>


<div id="modalap" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content" id="modals">


</div>

<!-- /.modal-dialog -->
</div>
</div>
    <!-- Required jquery and libraries -->
    <? include(''.$_SESSION['template'].'scripts.php');?>
</body>

</html>
