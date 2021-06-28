<?

$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: Não é permitido acessar o arquivo diretamente. </strong>");


if (basename($_SERVER["REQUEST_URI"]) === basename(__FILE__))
{
	exit();
}

//if($_SESSION['menu0'] == false)
//{
//   print("<script>window.alert('Erro: Você não tem permissão.')</script>");
//   print("<script>window.location.href='iniciado.php';</script>");
   //exit("<strong> Erro: Você não tem permissão. </strong>");
//}

$datalimite=date("Y-m")."-".date("t",strtotime(date("Y-m")."-1"));
//$mes = $_POST['mes'];

$_SESSION['datalimite']=$datalimite;
$_SESSION['datalimite'];


?> 

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
                        <input id="data" type="text" OnChange="pesquisar(this.value);" class="form-control form-control-lg mb-3 dataag" placeholder="Data" readonly />  
						<script>
						jQuery('.dataag').datepicker({
								format: 'dd/mm/yyyy',
								autoclose: true,
								todayHighlight: true,
								language: "pt-BR",
								orientation: "bottom left",
								//startDate: "-0d"
						});
						
	                    </script>
						 <Br>
                           <button class="btn btn-sm btn-outline-default my-1 a-agenda2">Agendar</button>
						</div>
                    </div>
</div>    
                <div class="container-fluid pt-3 mb-4 bg-white border-bottom">
                               
</div>        
<div class="container mb-4">
  
  <div class="row">
	<div class="col-md-12 col-sm-12"> 
		<div class="component-box">
			<!--Tabs with Icon example -->
             <div class="row" id="load">
			    <script>
				   
				   $('.a-agenda2').on('click',function()
				   {	
				       $('#modalap').modal('show');
				       requestPage2('?br=atu_pesquisa&tipo=1&ap=1','modals','GET');
				   });

				   a_menuslow();
				   $('.t-agenda').addClass('active');
				   requestPage2('?br=atu_pesquisa&load=1','load','GET');
				</script>
		   </div>
	   </div>
    </div>
  </div>
</div>
<? if(@$_GET['sdas'] == "teste"){?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-categories">
                        <div class="swiper-wrapper">
						    
								<?
		
								$SQL1 = "SELECT * FROM usuarios where sistema='".$_SESSION['sistema']."' and tipo in (2,3,4) and status=1;";
								$RES1 = mysqli_query($db,$SQL1);
								while($row = mysqli_fetch_array($RES1))
								{
										$primeiroNome = explode(" ", $row['nome']);
										echo '<a class="swiper-slide" style="width: 130px;">
										<div class="mb-3 h-100px w-100px rounded overflow-hidden position-relative">
										     <div class="background">
										      <img src="template/images/beautiful-2150881_640%402x.png" alt="">
										   </div>
										</div>
										<h6 class="font-weight-normal mb-1">'.current($primeiroNome).'</h6>';
										
										$datad = date('Y-m-d');
		
										$SQL2 = "SELECT horarios.hora FROM horarios ORDER BY horarios.hora asc";
										$RES2 = mysqli_query($db,$SQL2);
										while($row1 = mysqli_fetch_array($RES2))
										{
			
										$x = 0;
										$nome = "";
		  
										$SQL3 = "SELECT agendamento_servicos.hora,agendamento.nome FROM agendamento 
										inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo 
										where agendamento_servicos.sistema='".$_SESSION['sistema']."' and agendamento_servicos.data='".$datad."' and agendamento_servicos.profissional='".$row['codigo']."' and agendamento_servicos.hora='".$row1['hora']."'";
										$RES3 = mysqli_query($db,$SQL3);
										while($row3 = mysqli_fetch_array($RES3))
										{
													 $nome = $row3['nome'];
													 $x = 1;
													 
													 
										}
												  if($x == 0)
												  {
													   echo '<p><span class="dot-notification mr-1"></span> <span class="text-mute" style="color: green;">'.$row1['hora'].'</span></p>';
												  }
												  else
												  {
													 
													  
													  echo '<p><span class="dot-notification mr-1"></span> <span class="text-mute" style="color: red;">'.$row1['hora'].' - '.$nome.'</span></p>';
												  }
										}
								}
	                              ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- page level script -->
        <script>
        
            $(".sparklinechart").sparkline([5, 6, -7, 2, 0, -4, -2, 4], {
                type: 'bar',
                zeroAxis: false,
                barColor: '#00bf00',
                height: '30',
            });
            $(".sparklinechart2").sparkline([-5, -6, 4, -2, 0, 4, 2, -4], {
                type: 'bar',
                zeroAxis: false,
                barColor: '#00bf00',
                height: '30',
            });

            /* Swiper slider */
            var swiper = new Swiper('.swiper-prices', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
            var swiper = new Swiper('.swiper-categories', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                pagination: false,
            });
            var swiper = new Swiper('.swiper-shares', {
                slidesPerView: 5,
                spaceBetween: 0,
                pagination: false,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        

    </script>
<?} ?>