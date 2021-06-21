<?

//require_once("./load/load.php");

//require_once("phpmailer/class.phpmailer.php");
//require_once("phpmailer/class.smtp.php");

//$mail = new PHPMailer();

//$class = New dbControle();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Hismet - Higiene - Segurança e Medicina do Trabalho</title>
<meta name="url" content="http://www.hismet.com.br" />
<meta name="author" content="MEGNET - Site: http://www.megnet.com.br - E-mail: megnet@megnet.com.br"/>
<meta lang="pt" name="Description" content="clínica especializada em segurança e medicina do trabalho, com equipe de profissionais altamente qualificados" />
<meta lang="pt" name="Keywords" content="exames admissionais, trabalho, laboratório e análises clinicas, perícia insalubridade, periculosidade, LTCAP PPP CIPA EPI, audiometria, ricos ambientais, acuidade visual, ppra, saude ocupacional, pcmso" />
<meta name="abstract" content="clínica especializada em segurança e medicina do trabalho" />
<meta name="Googlebot" content="all" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta http-equiv="title" content="Hismet - Higiene - Segurança e Medicina do Trabalho" />
<meta name="robots" content="All" />
<meta name="Identifier-URL" content="http://www.hismet.com.br" />
<meta name="content-language" content="pt-br" />
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
<link rel="manifest" href="images/icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
	<link href="inc/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="inc/vendors/font-awesome-pro/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleswitcher.css">

    <!--<link rel="stylesheet" href="css/mailform.css">-->
    <link rel="stylesheet" href="css/rd-mailform.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
	
	 <script src="js/AjaxScript.js.php"></script>
	<!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/device.min.js"></script>
	<style>
	.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
        padding-right: 12px;
        padding-left: 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.styleswitcher{
	display:none;
}
	</style>
  </head>
  <?php $meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo"); $hoje = getdate(); $dia = $hoje["mday"]; $mes = $hoje["mon"]; $nomemes = $meses[$mes];
 $ano = $hoje["year"]; ?>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
            <img src="images/Logo/Logo_03.png" style="width: 150px;height: auto;padding: 25px;top: -15px;left: 30px;">
			<div style="font-family: Arial, Helvetica, sans-serif;">Cuiabá-MT, <? print "$dia de $nomemes de $ano"; ?></div>
          </div>
		  <a href="callto:#" class="fa-phone">(65) 3321 - 7051</a>
          <p>Um de nossos representantes terá prazer em contatá-lo em até 24 horas. 
		  <br>
		  
		  </p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Inicio</a>
                </li>
                <li><a href="index.php?url=quemsomos">Quem Somos</a>
                  <!--<ul>
                    <li><a href="#">#</a></li>
                    <li><a href="#">#</a></li>
                    <li><a href="#">#</a></li>
                  </ul>-->
                </li>
                <li><a href="index.php?url=servico">Serviços</a>
                </li>
                <li><a href="index.php?url=clientes">Clientes</a>
                </li>
				<li><a href="index.php?url=sistema">Sistema</a>
                </li>
				<li><a href="index.php?url=links">Links</a>
                </li>
                <li><a href="index.php?url=contato">Contato</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <? if($_SESSION['manutencao']!=1){include("url.php");}else{include("url2.php");} ?>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address><b>MATRIZ:</b> Av. General Mello nº 227 - CEP: 78015-300 <br/> Dom Aquino (centro) - Cuiabá – MT </address>
                  </div>
                </div>
				<div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address><b>FILIAL:</b> Rua J, Quadra APO, lotes 25, 26, 27. - CEP: 78.098-410<br/> Distrito Industrial - Cuiabá – MT </address>
                  </div>
                </div>
				<div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address><b>FILIAL:</b> Av. Filinto Muller, n° 911 - CEP: 78110-300 <br/> Centro - Várzea Grande – MT</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow">administrativo@hismet.com.br</div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">Fone/Fax: (65) 3321-7051 </a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">Fone/Fax: (65) 3667-0494</a></div>
                </div>
				<div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">Fone/Fax: (65) 3029-1088 / 3029-1085</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="https://www.facebook.com/HismetOficial" target="_brank">Siga-nos no Facebook</a></div>
                </div>
                <!--<div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">#</a></div>
                </div>-->
              </li>
            </ul>
          </div>
        </section>
     <footer>
        <section>
          <div class="container">
            <div class="copyright"><a href="http://www.ectecnologia.com.br" target="_brank">EC TECNOLOGIA.COM.BR</a> © <span id="copyright-year"></span>.&nbsp;&nbsp;Politica de Privacidade 
            </div>
          </div>
        </section>
      </footer>
    </div>

	<script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript>
</html>