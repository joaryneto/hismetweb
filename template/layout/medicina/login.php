<?
function isMobile() 
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!doctype html>
<html lang="en">

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


    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="banner-hero vh-100 scroll-y bg-dark">
            <div class="background opac">
                <img src="assets/img/login.jpg" alt="">
            </div>
            <div class="container h-100 text-white">
                <div class="row h-100 h-sm-auto">
                    <div class="col-12 col-md-8 col-lg-5 col-xl-4 mx-auto align-self-center text-center">
                        <div class="loader-logo">
                            <img style="height:200px" src="<? echo $_SESSION['template'];?>/images/logo.png" alt="" class="header-logo">
                        <h4><br><small class="text-mute"></small></h4>
                        </div>
                        <br>
                        <br>
                        <h5 class="font-weight-light mb-1 text-mute">Bem-vindo,</h5>
                        <h3 class="font-weight-normal mb-4">Faça login para continuar</h3>

                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Login</label>
                            <input type="email" id="inputEmail" class="form-control form-control-lg border-0" placeholder="Seu login" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="inputPassword" class="form-control form-control-lg border-0" onkeypress="if (event.keyCode === 13) {logar();}" placeholder="Sua senha" required="">
                        </div>
                        
                        <div class="my-3 row">
                            <div class="col-6 col-md py-1 text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Continuar logado</label>
                                </div>
                            </div>
                            <div class="col-6 col-md py-1 text-right text-md-right">
                            </div>
                        </div>
						<div id="load"></div>
                        <div class="mb-4">
                            <a href="#" class=" btn btn-lg btn-default default-shadow btn-block" onclick="logar();">Logar <span class="ml-2 icon arrow_right"></span></a>
							<? if(isMobile()){?>
							<a id="btninstall" href="javascript:void(0);" class=" btn btn-lg btn-default default-shadow btn-block ">Instalar Aplicativo<span class="ml-2 icon arrow_right"></span></a>
							<? } ?>
                        </div>
                        <div class="mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of page content -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->

    <!-- Required jquery and libraries -->
    <? include(''.$_SESSION['template'].'scripts.php');?>

    <script>
        "use strict"
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-stories3', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
        });

    </script>
</body>

</html>
