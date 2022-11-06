<!DOCTYPE html>
<html lang="pt-BR" class="md">
<head>
<title>Hismet - Higiene - Segurança e Medicina do Trabalho</title>

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no, viewport-fit=cover">

<!-- app CSS -->
<link rel="stylesheet" href="{!! asset('css/grid.css') !!}">
<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
<link rel="stylesheet" href="{!! asset('css/camera.css') !!}">
<link rel="stylesheet" href="{!! asset('css/owl-carousel.css') !!}">
<link href="{!! asset('inc/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('inc/vendors/font-awesome-pro/css/font-awesome.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('css/styleswitcher.css') !!}">
<link rel="stylesheet" href="{!! asset('css/rd-mailform.css') !!}"/>

    <script src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{!! asset('js/jquery-migrate-1.2.1.js') !!}"></script>
	
	 <script src="{!! asset('js/AjaxScript.js.php') !!}"></script>
    <script src="{!! asset('js/device.min.js') !!}"></script>
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
      @include('header')
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
      @yield('content')
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      @include('footer')
    </div>
	<script src="{!! asset('js/script.js') !!}"></script>
  </body><!-- Google Tag Manager --><noscript>
</html>