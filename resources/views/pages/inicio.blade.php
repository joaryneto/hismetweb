@extends('home')
@section('content')
<section class="camera_container">
        <div id="camera" class="camera_wrap">
			 
          @foreach($slides as $p)
            <div data-src="{{ ENV('ASSET_URL') }}images/slide/{{ $p->imagens}}">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"></div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <div class="fa-user"></div>
                <h3>HISMET ONLINE</h3>
                <p>Acesso ao nosso Sistema WEB.</p>
				<form action="https://sistema.hismet.com.br/verifica_senha.php" target="_brank" method="post" id="requisicao" name="requisicao">
            <div class="input-group">
              <input class="form-control" type="text" name="login" style="width:90%" placeholder="Email" required>
			  <input class="form-control" type="password" name="senha" style="width:90%" placeholder="Senha" required>
			  <input name="enviar" type="submit" style="margin-top:20px" class="btn btn-primary" value="Logar">
            </div>
          </form>
		     <a href=""></a>
              </li>
              <li onclick="window.location='index.php?url=contato'">
                <div class="fa-calculator"></div>
                <h3>Orçamento Online</h3>
                <p>Solicite agora seu orçamento sem compromisso.</p>
				<a href="index.php?url=contato"></a>
              </li>
			                <li>
                <div class="fa-user-md"></div>
                  <h3>Gerar guia </h3>
				  <p>Solicitar guia de exames não conveniadas.</p><a href="#"></a>
                  <form action="https://sistema.hismet.com.br/avulso/index.php" method="post" id="requisicao" name="requisicao">
            <div class="input-group">
              <input class="form-control" type="text" name="cpf" style="width:90%" placeholder="CNPJ / CPF" required>
			  <input name="enviar" type="submit" style="margin-top:20px" class="btn btn-primary" value="Próximo passo">
            </div>
          </form><a href="#"></a>
              </li>
              <li>
                <div class="fa-heartbeat"></div>
                <h3>Nosso contato</h3>
                <p>Email: comercial@hismet.com.br <br> Whatsapp: (65) 9.8120-4712<br>Fone: (65) 3321-7051 </p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <!--<section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-calculator"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Orçamento Online</a></h3>
                    <p>Solicite agora seu orçamento sem compromisso.</p>
                  </div>
                </div>
                <hr>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-hotel"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Solicitação de Exames.</a></h3>
                    <p>Solicitar guia de exames não conveniadas.</p>
                  </div>
                </div>
				<hr>

              </li>
            </ul>
          </div>
        </section>-->
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>Conheça a Hismet</h2><img src="images/medico.jpg" alt="">
                <p>A HISMET se orgulha de seus profissionais altamente especializados e de sua moderna rede credenciada, que asseguram o melhor desempenho no atendimento a todos os clientes, em qualquer parte do território nacional.</p><a href="index.php?url=quemsomos" class="btn">Leia mais</a>
              </div>
              <div class="grid_4">
                <h3>Medicina Ocupacional</h3>
                <p></p>
                <ul class="marked-list">
                  <li><a href="/exame/">Exame médico </a></li>
                  <li><a href="/exame/">Audiometria</a></li>
                  <li><a href="/exame/">Espirometria</a></li>
                  <li><a href="/exame/">Laboratorias</a></li>
                  <li><a href="/exame/">Eletrocardiograma</a></li>
                  <li><a href="/exame/">Eletroencefalograma</a></li>
                  <li><a href="/exame/">Raio X</a></li>
				          <li><a href="/servico-pcmso/">PCMSO</a></li>
                  <li><a href="/servico-ppra/">PPRA</a></li>
                  <li><a href="/servico-ltcat/">LTCAT</a></li>
                  <li><a href="/servico-ppp/">PPP</a></li>
                  <li><a href="/servico-cipa/">CIPA</a></li>
                </ul><!--<a href="#" class="btn">Leia mais</a>-->
              </div>
			  <!--<script>
			  function teste()
			  {
				   if()
				   {
					   
				   }
				   else
				   {
					   
				   } 
			  }
			  </script>
			  <div class="grid_4">
                <h3>Engenharia e Segurança do Trabalho</h3>
                <p></p>
                <ul class="marked-list">
                  <li><a href="index.php?url=servico_pcmso">PCMSO</a></li>
                  <li><a href="index.php?url=servico_ppra">PPRA</a></li>
                  <li><a href="index.php?url=servico_ltcat">LTCAT</a></li>
                  <li><a href="index.php?url=servico_ppp">PPP</a></li>
                  <li><a href="index.php?url=servico_cipa">CIPA</a></li>
				  <!--<li><a href="index.php?url=servico_cipa">AET NR-17</a><div style="display:none;">Anális ergonômica do Trabalho</div></li>
				  <li><a href="index.php?url=servico_cipa">PGSSMATR NR-31</a><div style="display:none;">O Programa de Gestão de Segurança e Saúde no Meio Ambiente do Trabalho Rural</div></li>
				  <li><a href="index.php?url=servico_cipa">Prontuário NR-20</a><div style="display:none;"></div></li>-->
				  
                </ul><!--<a href="#" class="btn">Leia mais</a>--
              </div>-->
              
              <!-- DIV DE HORARIO DE ATENDIMENTO-->
              <div class="grid_4">
                <div class="info-box">
                  <h2 class="fa-clock-o">Atendimento</h2>
                  <hr>
                  <h3>Horarios:</h3>
                  <dl>
                    <dt>Segunda a Sexta</dt>
                    <dd>07:30h às 17:30h</dd>
                  </dl>
                  <hr>
                  <h3></h3>
                </div>
              </div>
              <!-- DIV DE HORARIO DE ATENDIMENTO-->
             
              <!-- DIV DE XML ESOCIAL-->
              <div class="grid_4">
                <div class="info-box"  style="background-color:#39F">
                  <h2 class="fa-cloud-download">eSocial</h2>
                  <hr>
                  <h3><a href="https://sistema.hismet.com.br/consultarxml.php" target="_blank">Clique aqui para acessar os arquivos.</a></h3>
                  <dl>
                    <dt>Para empresa conveniada, fazer o acesso pelo Hismet Online.</dt>
                  </dl>
                  <hr>
                  <h3></h3>
                </div>
              </div>
              <!-- DIV DE XML ESOCIAL-->             
                            
            </div>
          </div>
</section>
@stop