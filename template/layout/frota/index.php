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
                <a href="cart.html" class="btn btn-link" type="button"><span aria-hidden="true" class="h5 icon_cart_alt"></span><span class="status-dot bg-danger"></span></a>
                <a href="profile.html" class=""><span class="avatar avatar-30"><img src="assets/img/user1.png" alt=""></span></a>
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
            <div class="tab-pane fade " id="cadastro" role="tabpanel" aria-labelledby="home-tab">
                
        
            </div>
			
			
			<div class="tab-pane fade show active" id="search" role="tabpanel" aria-labelledby="search-tab">
			<div class="container-fluid h-300 position-relative overflow-hidden bg-default">
                    <div class="background opac">
                        <img src="<? echo $_SESSION['template'];?>assets/img/carro.jpg" alt="">
                    </div>
                </div>
                <div class="container mb-4 top-150 position-relative z-1">
                    <h4 class="text-white mb-3 text-center">Agenda de Carros<br>
                        <span class="text-mute small mt-2"></span>
                    </h4>
                    <div class="card border-0 shadow-light">
                        <div class="card-body">
                            <input type="text" Onkeyup="pesquisar(this.value);" class="form-control form-control-lg mb-3" placeholder="Busca">
                            <button class="btn btn-sm btn-outline-default my-1 a-agenda2">Agendar</button>
                        </div>
                    </div>
</div>    
                <div class="container-fluid pt-3 mb-4 bg-white border-bottom">
                    

                    <!-- Swiper -->
                    
                </div>
                <div class="container mb-4">
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
        </div>
    </main>

    <div class="footer-tabs border-top text-center">
        <ul class="nav nav-tabs nav-fill justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="h4 icon_house_alt"></i>
                    <small class="sr-only">Home</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                    <i class="h4 icon_calendar"></i>
                    <small class="sr-only">Appointment</small>
                </a>
            </li>
            <li class="nav-item centerlarge">
                <a class="nav-link bg-default d-inline-block" data-toggle="tab" href="#deases" role="tab" aria-controls="deases" aria-selected="false">
                    <i class="h4 icon_shield mt-1"></i>
                    <small class="sr-only">Self Assessment</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                    <i class="h4 icon_mail_alt"></i>
                    <small class="sr-only">Messages</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="h4 icon_lifesaver mt-1"></i>
                    <small class="sr-only">Emergency Contacts</small>
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
