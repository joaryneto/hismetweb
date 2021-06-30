<script>

function data(valor)
{
	if(event.key === 'Enter') 
	{
	  if(valor == "")
	  {
	    swal('Atenção', 'Selecione uma data.');
	  }
	  else
   	  {
	      //$('#codigo').val(codigo);
		$( "dataagenda" ).datepicker( "hide" );
	    requestPage2('?br=atu_pesquisa&codigo=<?=$_SESSION['codcliente'];?>&data='+ valor +'&tipo=2&ap=2','loadfagenda','GET');
	  }
	}
}

function bccliente(nome)
{
	if(nome == "")
	{
	    swal('Atenção', 'Campo cliente branco.');
	}
	else
	{
	   requestPage2('?br=atu_pesquisa&pesquisa='+ nome +'&tipo=3&ap=1','pesquisacliente','GET');
    }
}

function d_proximo()
{
	requestPage2('?br=atu_pesquisa&data='+ document.getElementById('dataagenda').value +'&ap=2','modals','GET');
}

function c_proximo(codigo, nome)
{
	requestPage2('?br=atu_pesquisa&codigo='+ codigo +'&nome='+ nome +'&ap=2','modals','GET');
}

function cs_proximo()
{	
    var data = document.getElementById('dataagenda').value;
	var nome = document.getElementById('nome').value;
	var codigo = document.getElementById('codigo').value;
	
	if(data == "")
	{
	    swal('Atenção', 'Selecione uma data.');
	}
	else if(hora == "")
	{
	    swal('Atenção', 'Selecione uma hora.');
	}
	else if(nome == "")
	{
	    swal('Atenção', 'Selecione Cliente data.');
	}
	else if(codigo == "")
	{
	    swal('Atenção', 'Selecione um Cliente data.');
	}
	else
	{
		//$('#modalusuario').modal('hide');
	    requestPage2('?br=atu_pesquisa&data='+ data +'&hora='+ hora +'&nome='+ nome +'&pcodigo='+ pcodigo +'&codigo='+ codigo +'&ap=8','modals','GET');
	}
}

function novo_a()
{
	requestPage2('?br=atu_pesquisa&ap=1&novo=1','modals','GET');
}

</script>
<?

$inputb = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if(@$inputb['ap'] == 1)
{
	$p_data = @$inputb['data'];
	$p_codigo = @$inputb['codigo'];
	
	$p_x = 0;
	$SQL = "SELECT codigo FROM agendamento where sistema='".$_SESSION['sistema']."' and usuario='".$_SESSION['usuario']."' and status=0;";
	$RES = mysqli_query($db,$SQL);
	while($rows = mysqli_fetch_array($RES))
	{
		$p_x = 1;
	}

	if($p_x == 0)
    {
	   $query = "INSERT INTO agendamento (sistema, usuario, data,status) VALUES ('".$_SESSION['sistema']."','".$_SESSION['usuario']."','".revertedata($data)."','0')";
       $sucesso = mysqli_query($db,$query);
	}
	
	$SQL = "SELECT codigo FROM agendamento where sistema='".$_SESSION['sistema']."' and usuario='".$_SESSION['usuario']."' and status=0;";
	$RES = mysqli_query($db,$SQL);
	$rows = mysqli_fetch_array($RES);
	
	$_SESSION['agendamento'] = $rows['codigo'];
	
	$SQL2 = "SELECT count(produtos.codigo) as qtd, sum(produtos.preco) as total FROM agendamento 
	inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	inner join produtos on produtos.codigo=agendamento_servicos.servico
	where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.agendamento='".$rows['codigo']."' and agendamento.status=0 ORDER BY agendamento.codigo asc";
	
	$RES2 = mysqli_query($db,$SQL2);
	$rowds = mysqli_fetch_array($RES2);
	
	print('<script> $("#qtd").val("'.$rowds['qtd'].'"); </script>');
	print('<script> document.getElementById("sv_qtd").innerHTML = "'.$rowds['qtd'].'";</script>');
	print('<script> document.getElementById("sv_total").innerHTML = "<span style=\'color: green;\'>Total: R$ '.number_format($rowds['total'],2,",",".").'</span>";</script>');
	
	?>
	<div class="modal-header">
<h2 class="pmd-card-title-text">Agenda - Servicos </h2>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
    <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="title[]" class="form-control m-input dataagenda" placeholder="Enter title" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
	
	<script>
	function servico_add(codigo)
    {
		var data = document.getElementById('dataagenda').value;
		var hora = document.getElementById('hora').value;
		var profissional = document.getElementById('profissional').value;
		var obs = document.getElementById('obs').value;
		var servico = document.getElementById('servico').value;
		
		if(profissional == "")
		{
			swal('Atenção', 'Selecione um Motorista.');
		}
		else if(data == "")
		{
			swal('Atenção', 'Selecione uma Data.');
		}
		else if(hora == "")
		{
			swal('Atenção', 'Selecione um Horario.');
		}
		else if(servico == "")
		{
			swal('Atenção', 'Selecione um Carro.');
		}
		else
		{
		   requestPage2('?br=atu_pesquisa&codigo='+ codigo +'&servico='+ servico +'&profissional='+ profissional +'&data='+ data +'&hora='+ hora +'&obs='+ obs +'&addservico=true&load=1','load','GET');
		}
	}
	
	$('.data').mask('00/00/0000');
	
	jQuery('.dataagenda').datepicker({
		format: 'dd/mm/yyyy',
 		autoclose: true,
 		todayHighlight: true,
		        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		orientation: "bottom left",
		startDate: "-0d"
	});
	
	function sleep(ms) {
	   return new Promise(resolve => setTimeout(resolve, ms));
	}

	async function phorario(dataagenda)
    {
		await sleep(500);
		
		//var profissional = document.getElementById('profissional').value;
		var servico = document.getElementById('servico').value;
		
		if(profissional == null)
		{
			swal('Atenção', 'Selecione um Motorista.');
		}
		else if(dataagenda == "")
		{
			swal('Atenção', 'Selecione uma Data.');
		}
		else
		{
			requestoption('?br=atu_pesquisa&servico='+ servico +'&data='+ dataagenda +'&lhorario=true','hora','GET');
		}
	}
	
	function pservico()
    {
		var profissional = document.getElementById('profissional').value;
		
		if(profissional == null)
		{
			swal('Atenção', 'Selecione um Motorista.');
		}
		else
		{
		    requestoption('?br=atu_pesquisa&profissional='+ profissional +'&lservico=true','servico','GET');
	    }
	}
	
	function cp_proximo(codigo)
	{
		var qtd = document.getElementById('qtd').value;
		
		if(qtd == 0)
		{
			swal('Atenção','Agende um Carro: Escolha o Motorista -> Data do Agendamento -> Horario e Carro. Após ter escolhido Clique no Botão Mais(+) depois em Proximo para escolher o Cliente.');
		}
		else
		{
			$('#modalap').modal('hide');
			requestPage2('?br=atu_pesquisa&ap=6&load=1','load','GET');
		}
	}
	
	function dataAtualFormatada(){
    var data = new Date(),
        dia  = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0'+dia : dia,
        mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0'+mes : mes,
        anoF = data.getFullYear();
    return diaF+"/"+mesF+"/"+anoF;
    }

	function pdata()
	{
		var profissional = document.getElementById('profissional').value;
		var data = document.getElementById('dataagenda').value;
		//phorario(data);
		
		if(profissional == 0)
		{
			 $('.dataagenda').val(dataAtualFormatada);
			 document.getElementById('hora').innerHTML = '<option value="">Escolher Horario<option>';
			 $('.dataagenda').attr('disabled', true);
			 $('.hora').attr('disabled', true);
			 $('.servico').attr('disabled', true);
			 
			 
		}
		else
		{
			 $('.dataagenda').attr('disabled', false);
			 $('.hora').attr('disabled', false);
			 $('.servico').attr('disabled', false);
		}
	}
	
	</script>
	<div class="m-t-40 row" id="forcaixa">
	<div class="form-group col-md-12 m-t-20">
	<select name="servico" id="servico" class="form-control servico" placeholder="Escolha um serviço" autocomplete="off">
	<option value="">Escolher Carro</option>
	<?
		$SQL1 = "SELECT * FROM produtos where sistema='".$_SESSION['sistema']."' and status=1;";
		$RES1 = mysqli_query($db,$SQL1);
		while($row = mysqli_fetch_array($RES1))
		{
			echo "<option value='".$row['codigo']."'>".$row['descricao']."</option>";
		}
     ?>
	</select>
	</div>
	<? 
	if($_SESSION['permissao'] == 4 )
	{
    ?>
	<div class="form-group col-md-12 m-t-20">
	<select name="profissional" id="profissional" class="form-control" onchange="pdata()" autocomplete="off">
	<option value="">Escolher Motorista</option>
		<?
		
		$SQL1 = "SELECT * FROM usuarios where sistema='".$_SESSION['sistema']."' and tipo in (1,2,3,4) and status=1;";
		$RES1 = mysqli_query($db,$SQL1);
		while($row = mysqli_fetch_array($RES1))
		{
			echo "<option value='".$row['codigo']."'>".$row['nome']."</option>";
		}
     ?>
	</select>
	</div>
    <? }else{ ?>
	<input name="profissional" id="profissional" type="hidden" placeholder="Data" value="<? echo $_SESSION['usuario'];?>" autocomplete="off" class="form-control  form-control-lg data dataagenda"/>
	<?}?>
	<div class="form-group col-md-12 m-t-20">
    <input name="dataagenda" id="dataagenda" type="text" onchange="phorario(this.value);" <? if($_SESSION['permissao'] == 4 ){ ?> disabled <?}?> placeholder="Data" value="" autocomplete="off" class="form-control  form-control-lg data dataagenda" readonly />
	<input name="qtd" id="qtd" value="" type="hidden" value="0" autocomplete="off" class="form-control  form-control-lg" required="required"/>
	</div>
	
	<!--
	<div id="newRow" class="form-group col-md-12 m-t-20"></div>
	<div class="form-group col-md-12 m-t-20">
	<div class="form-group pmd-textfield pmd-textfield-floating-label">
	 <a class="btn pmd-btn-outline pmd-ripple-effect btn-primary" id="addRow">Concluir</a>
	 </div> </div>-->
	 
	 
	<div class="form-group col-md-12 m-t-20">
	<select name="hora" id="hora" class="form-control hora" placeholder="Escolha um serviço" disabled autocomplete="off">
	<option value="">Escolher Periodo</option>
	</select>
	</div>
	<div class="form-group col-md-12 m-t-20">
	<textarea id="obs" name="obs" class="form-control" rows="2" cols="3" placeholder="Observação"></textarea>
	</div>
	</div>
	<div id="dtable" style="display: none;">
	<h4>Pré-Agendados :</h4>
	<div class="form-group pmd-textfield pmd-textfield-floating-label" id="s_load">
	<div class="pmd-table-card pmd-card pmd-z-depth pmd-card-custom-view">
		<table class="table pmd-table">
			<thead>
				<tr>
					<th>Descrição</th>
					<th>Motorista</th>
					<th>Data - Hora</th>
				</tr>
			</thead>
			<tbody id="listaservicos">
			<?
			    
	        $SQL = "SELECT usuarios.nome,agendamento.codigo as codagenda, agendamento_servicos.codigo, agendamento_servicos.data,agendamento_servicos.hora, produtos.descricao, produtos.preco FROM agendamento 
	        inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	        inner join produtos on produtos.codigo=agendamento_servicos.servico
            inner join usuarios on usuarios.codigo=agendamento_servicos.profissional
	        where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.agendamento='".$_SESSION['agendamento']."' and agendamento.status=0 ORDER BY agendamento.codigo asc";
	
	        $RES = mysqli_query($db,$SQL);
	        while($row = mysqli_fetch_array($RES))
	        {
		    ?>
		    <tr onclick="a_ex(<? echo $row['codigo']?>)" href="javascript:void(0);">
		      <td data-title="Descrição">
		        <?=$row['descricao'];?>
		     </td>
			 <td data-title="Data - Hora">
		        <?=$row['nome'];?>
		     </td>
			 <td data-title="Data - Hora">
		        <?=formatodata($row['data']);?> - <?=formatohora($row['hora']);?>
		     </td>
			 <td data-title="Data - Hora">
		        R$ <?=number_format($row['preco'],2,",",".");?>
		     </td>
		   </tr>
	        <?	} ?>
			</tbody>
		</table>
	 </div>
	 </div> 
	 </div>
	 <div class="form-group pmd-textfield pmd-textfield-floating-label">
	 <a class="btn pmd-btn-outline pmd-ripple-effect btn-primary" href="javascript: void(0);" onclick="servico_add(<?=$rows['codigo'];?>);">Concluir</a>
	 </div>
<script>
function sv_itens()
{
  if($('#dtable').css('display') == 'none' )
  {
	 $("#forcaixa" ).hide( "slow" );
	 $("#dtable" ).show( "slow" );
  }
  else
  {
	 $("#forcaixa" ).show( "slow" );
	 $("#dtable" ).hide( "slow" );
  }
}

</script>
<script>
function a_ex(codigo)
{
	if(codigo == null)
	{

	}
	else
	{
		  requestPage2('?br=atu_pesquisa&codigo=<?=$rows["codigo"];?>&servico='+ codigo +'&excluir=true&load=2','listaservicos','GET');
	}
}
</script>
	  </div>
     <div class="modal-footer">
    </div>
	<?
}
else if(@$inputb['ap'] == 3)
{
	$_SESSION['codigo'] = @$inputb['codigo'];
	
	?>
<div class="modal-header">
<h2 class="pmd-card-title-text">Agenda - Cliente </h2>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<div class="m-t-40 row">
    <script>
	function cliente_r(pesquisa)
    {
		if(pesquisa == "")
		{
			
		}
		else
		{
	        requestPage2('?br=atu_pesquisa&pesquisa='+ pesquisa +'&ap=4','seachcliente','GET');
		}
    }
	
	function cliente_s(cliente, nome)
    {
		if(cliente == "")
		{
			
		}
		else if(nome == "")
		{
			
		}
		else
		{
			$('#modalap').modal('hide');
	        requestPage2('?br=atu_pesquisa&cliente='+ cliente +'&nome='+ nome +'&ap=6&load=1','load','GET');
		}
    }
	</script>
	<div class="form-group col-md-12 m-t-20">
	<input type="text" name="c_nome" id="c_nome" value="" placeholder="Buscar cliente por nome" onkeyup="cliente_r(this.value);" class="form-control" autocomplete="off" required="required" />
	<div id="seachcliente"></div>
	</div>
	<div class="form-group col-md-12 m-t-20">
	<a class="btn pmd-btn-outline pmd-ripple-effect btn-primary" href="javascript: void(0);" onclick="requestPage2('?br=atu_pesquisa&tipo=1&ap=1','modals','GET');"><i class="fa fa-plus-circle"></i> Novo</a>
	</div>
</div>
		</div>
		<div class="modal-footer">
</div>
	<?
}
else if(@$inputb['ap'] == 4)
{
	
$pesquisa = @$inputb['pesquisa'];

?>
<script>



</script>
<div class="pmd-table-card pmd-card pmd-z-depth pmd-card-custom-view">
<table class="table pmd-table">
<tbody>
<?
$SQL = "SELECT * FROM clientes where sistema='".$_SESSION['sistema']."' and nome like '%".$pesquisa."%';";
$res = mysqli_query($db,$SQL); 
$x = 0;
while($row = mysqli_fetch_array($res))
{
?>
<tr style="cursor: pointer;" onMouseOver="this.style.color='#C0C0C0'" onMouseOut="this.style.color='#67757c'" onclick="cliente_s('<?=$row['codigo'];?>','<?=$row['nome'];?>');">
<td data-title="Cliente"><? echo $row['nome'];?></td>
</tr>
<? $x = 1;
}


if($x == 0)
{
 echo "<tr><td>Nenhum resultado encontrado.</td><td></td><td></td><td></td></tr>";

}
?>
</tbody>	
</table>
</div>
<?
}
else if(@$inputb['ap'] == 5)
{
	
  $_SESSION['codagenda'] = $_GET['codigo'];
  
  $SQL = "SELECT * FROM agendamento_servicos where codigo='".$_SESSION['codagenda']."'";
  $RES = mysqli_query($db,$SQL);
  while($row = mysqli_fetch_array($RES))
  {
  
?>
<div class="modal-header">
<h2 class="pmd-card-title-text">Agenda - Editar Agendamento </h2>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<div class="m-t-40 row">
<div class="form-group col-md-12 m-t-20" id="inputcliente">
<input name="profissional" id="profissional" type="hidden" value="<?=$_GET['profissional'];?>" autocomplete="off" class="form-control" readonly>
<input name="nome" id="nome" type="text" value="<?=$_GET['nome'];?>" autocomplete="off" class="form-control" readonly>
</div>
<div class="form-group col-md-12 m-t-20" id="inputcliente">
	<div class="input-group">
			<input type="text" name="dataagenda" id="dataagenda" onchange="phorario(this.value);" value="<?=formatodata($_GET['data']);?>" class="form-control" placeholder="00/00/0000">
			<div class="input-group-append">
				<span class="input-group-text"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	<script>
	jQuery('#dataagenda').datepicker({
			format: 'dd/mm/yyyy',
			autoclose: true,
			todayHighlight: true,
			language: "pt-BR",
			lang: 'pt',
			orientation: "bottom left",
			startDate: "-0d"
	});
	
	function sleep(ms) {
	   return new Promise(resolve => setTimeout(resolve, ms));
	}

	async function phorario(dataagenda)
    {
		await sleep(500);
		
		var profissional = document.getElementById('profissional').value;
		
		if(profissional == null)
		{
			swal('Atenção', 'Selecione um profissional.');
		}
		else if(dataagenda == "")
		{
			swal('Atenção', 'Selecione uma Data.');
		}
		else
		{
			requestoption('?br=atu_pesquisa&profissional='+ profissional +'&data='+ dataagenda +'&lhorario=true','hora','GET');
		}
	}
	
	$('#rr_agenda').on('click',function(){	

    var datav = document.getElementById('dataagenda').value;
	var horav = document.getElementById('hora').value;
	var obs = document.getElementById('obs').value;
	
	if(datav == "")
	{
		swal('Atenção', 'Selecione uma data.');
	}
	if(horav == "")
	{
		swal('Atenção', 'Selecione a hora.');
	}
	else
	{
	   $('#modalap').modal('hide');		
	   requestPage2('?br=atu_pesquisa&data='+ datav +'&hora='+ horav +'&obs='+ obs +'&ap=9&load=1','load','GET');
	}
    });
	</script>
</div>
<div class="form-group col-md-4 m-t-20">
	<select name="hora" id="hora" class="form-control" autocomplete="off" required="required">
	</select>
</div>
<div class="form-group col-md-12 m-t-20">
	<textarea id="obs" name="obs" class="form-control" rows="2" cols="3" placeholder="Observação"><?=$row['obs'];?></textarea>
	</div>
</div>
	<div class="modal-footer">
	<button type="button" id="rr_agenda" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Gravar</button>
</div>
<?	
  }
}
else if(@$inputb['ap'] == 6)
{
	//$cliente = $inputb['cliente'];
	//$nome = $inputb['nome'];
	
	if($_SESSION['agendamento'] == "")
	{
		print('<script>
               swal({   
            title: "Atenção",   
            text: "Agendamento invalido, feche e tente novamente.",   
            timer: 2000,   
            showConfirmButton: false 
        });
        </script>');
		print("<script> requestPage2('?br=atu_pesquisa&ap=1','modals','GET');</script> ");
		
	}
	else
	{
		print('<script>
               swal({   
            title: "Atenção",   
            text: "Carro Agendado com sucesso.",   
            timer: 2000,   
            showConfirmButton: false 
        });
        </script>');
		
		$SQL = "UPDATE agendamento SET status=1 where sistema='".$_SESSION['sistema']."' and codigo='".$_SESSION['agendamento']."'";
		mysqli_query($db,$SQL);
	}
}
else if(@$inputb['ap'] == 7)
{

   $SQL = "UPDATE agendamento SET data='".revertedata($inputb['data'])."', hora='".$inputb['hora']."' WHERE sistema='".$_SESSION['sistema']."' and codigo='".$inputb['codigo']."'";
   mysqli_query($db,$SQL);
 ?>
 
  <script> 
  $('#editaagenda').modal('hide');
   swal({   
            title: "Atenção",   
            text: "Reagendado com sucesso.",   
            timer: 1000,   
            showConfirmButton: false 
        });
  </script>
 
 <?
}
else if(@$inputb['ap'] == 8)
{
   $codigo = $inputb['codigo'];
   $x = 0;
   $agendamento = "";
   $SQL = "SELECT * FROM agendamento_servicos where sistema='".$_SESSION['sistema']."' and codigo='".$codigo."'";
   $RES = mysqli_query($db,$SQL);
   while($row = mysqli_fetch_array($RES))
   {
	   $x = 1;
	   $agendamento = $row['agendamento'];
   }
   
   if($x == 0)
   {
	   
   }
   else
   {
	   
    $SQL = "DELETE from agendamento_servicos WHERE sistema='".$_SESSION['sistema']."' and codigo='".$codigo."';";
    mysqli_query($db,$SQL);
	
	$descricao = "Agendamento Cancelado";
	$SQL2 = "INSERT INTO logs(sistema,evento,descricao, usuario,tipo) VALUES('".$_SESSION['sistema']."','".$agendamento."','".$descricao."','".$_SESSION['usuario']."','1');";
    mysqli_query($db,$SQL2);
	
    $y = 0;
    $SQL = "SELECT * FROM agendamento_servicos where sistema='".$_SESSION['sistema']."' and agendamento='".$agendamento."'";
    $RES = mysqli_query($db,$SQL);
    while($row = mysqli_fetch_array($RES))
    {
	   $y = 1;
    }
   
    if($x == 0)
    {
	   $SQL = "DELETE from agendamento WHERE sistema='".$_SESSION['sistema']."' and codigo='".$agendamento."';";
       mysqli_query($db,$SQL); 
	   
    }
 ?>
 
  <script>
  swal({   
            title: "Atenção",   
            text: "Cancelado com sucesso.",   
            timer: 2000,   
            showConfirmButton: false 
        });
  </script>
 
 <?	
   }
}
else if(@$inputb['ap'] == 9)
{
   $data = $inputb['data'];
   $hora = $inputb['hora'];
   $obs = $inputb['obs'];
   
   
   $SQL = "UPDATE agendamento_servicos SET data='".revertedata($data)."',hora='".$hora."',obs='".$obs."' WHERE sistema='".$_SESSION['sistema']."' and codigo='".$_SESSION['codagenda']."';";
   mysqli_query($db,$SQL);
   
   ?>
   <script>
   swal({   
            title: "Atenção",   
            text: "Reagendado com sucesso.",   
            timer: 2000,   
            showConfirmButton: false 
        });
   </script>
 <?
}

if(@$inputb['novo'] == 1)
{
   $codigo = $_SESSION['agendamento'];
   
   if(!isset($_SESSION['agendamento']))
   { 
      
   }
   else
   {
      $SQL = "DELETE from agendamento WHERE sistema='".$_SESSION['sistema']."' and codigo='".$codigo."' and status=0";
      mysqli_query($db,$SQL);
   }
 ?>
 
 <?
}

if(@$inputb['excluir'] == "true")
{
	$codigo = $inputb['codigo'];
	$servico = $inputb['servico'];
	
	$SQL1 = "DELETE from agendamento_servicos where sistema='".$_SESSION['sistema']."' and codigo='".$servico."'";
	$RES1 = mysqli_query($db,$SQL1);
	
	$SQL2 = "SELECT count(produtos.codigo) as qtd,sum(produtos.preco) as total FROM agendamento 
	inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	inner join produtos on produtos.codigo=agendamento_servicos.servico
	where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.agendamento='".$codigo."' and agendamento.status=0 ORDER BY agendamento.codigo asc";
	
	$RES2 = mysqli_query($db,$SQL2);
	$row = mysqli_fetch_array($RES2);
	
	if($row['qtd'] == 0)
	{
		print('<script> sv_itens(); </script>');
	}
	
	print('<script> $("#qtd").val("'.$row['qtd'].'"); </script>');
	print('<script> document.getElementById("sv_total").innerHTML = "<span style=\'color: green;\'>Total: R$ '.number_format($row['total'],2,",",".").'</span>";</script>');
	print('<script> document.getElementById("sv_qtd").innerHTML = "'.$row['qtd'].'";</script>');
	

}

if(@$inputb['addservico'] == "true")
{
	$servico = $inputb['servico'];
	$profissional = $inputb['profissional'];
	$codigo = $inputb['codigo'];
	$data = revertedata($inputb['data']);
	$hora = $inputb['hora'];
	$obs = $inputb['obs'];
	
	$x = 0;
	$SQL = "SELECT usuarios.nome FROM agendamento_servicos inner join usuarios on usuarios.codigo=agendamento_servicos.profissional where agendamento_servicos.servico='".$servico."' and agendamento_servicos.data='".$data."' and agendamento_servicos.periodo='".$hora."'";
	$RES = mysqli_query($db,$SQL);
	while($rowx = mysqli_fetch_array($RES))
	{
		$nome = $rowx['nome'];
		$x = 1;
	}
	
	if($x == 1)
	{
		print('<script>
               swal({   
            title: "Atenção",   
            text: "Carro já está Reservado para <b>'.$nome.'</b>. Escolha outro carro, periodo ou data.",
			html: "<b></b>",
            showConfirmButton: true 
        });
        </script>');
	}
	else
	{
	
	
	if($inputb['servico'] == "")
	{
		print "<script> swal('t', 'Selecione um serviço.'); </script>";
	}
	else
	{
		$SQL = "INSERT into agendamento_servicos(sistema,agendamento,servico,profissional,data,periodo,obs) values('".$_SESSION['sistema']."','".$codigo."','".$servico."','".$profissional."','".$data."','".$hora."','".$obs."');";
		mysqli_query($db,$SQL);
	}
	
	
	$SQL = "UPDATE agendamento SET status=1 where sistema='".$_SESSION['sistema']."' and codigo='".$_SESSION['agendamento']."'";
	mysqli_query($db,$SQL);
	
	$SQL = "SELECT count(produtos.codigo) as qtd,sum(produtos.preco) as total FROM agendamento 
	inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	inner join produtos on produtos.codigo=agendamento_servicos.servico
	where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.agendamento='".$codigo."' and agendamento.status=0 ORDER BY agendamento.codigo asc";
	
	$RES = mysqli_query($db,$SQL);
	$row = mysqli_fetch_array($RES);
	
	print('<script> $("#dataagenda").val(""); </script>');
	print('<script> $("#qtd").val("'.$row['qtd'].'"); </script>');
	print('<script> document.getElementById("hora").innerHTML = "<option value=\'\'>Escolher Horario</option>";</script>');
	//print('<script> document.getElementById("servico").innerHTML = "<option value=\'\'>Escolher Serviço</option>";</script>');
	
	print('<script> document.getElementById("sv_total").innerHTML = "<span style=\'color: green;\'>Valor Total: R$ '.number_format($row['total'],2,",",".").'</span>";</script>');
	print('<script> document.getElementById("sv_qtd").innerHTML = "'.$row['qtd'].'";</script>');
	
	
	print('<script> $("#modalap").modal("hide"); </script>');
	
	print('<script>
               swal({   
            title: "Atenção",   
            text: "Carro Agendado com sucesso.",   
            timer: 2000,   
            showConfirmButton: false 
        });
        </script>');
		
	}
}

if(@$inputb['lhorario'] == "true")
{
    $data = @$inputb['data'];
	$profissional = @$inputb['profissional'];
	$servico = @$inputb['servico'];
	
	?>
	<option value="">Escolher Periodo</option>
		<?
		
		$data = revertedata($inputb['data']);
		
		$SQL1 = "SELECT horarios.descricao FROM horarios ORDER BY horarios.codigo asc";
		$RES1 = mysqli_query($db,$SQL1);
		while($row1 = mysqli_fetch_array($RES1))
		{
			
		  $x = 0;
		  $nome = "";
		  
		  $SQL2 = "SELECT agendamento_servicos.hora,agendamento.nome FROM agendamento 
		  inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo 
		  where agendamento_servicos.sistema='".$_SESSION['sistema']."' and agendamento_servicos.data='".$data."' and agendamento_servicos.servico='".$servico."' and agendamento_servicos.periodo='".$row1['descricao']."'";
		  $RES2 = mysqli_query($db,$SQL2);
		  while($row2 = mysqli_fetch_array($RES2))
		  {
			 $nome = $row2['nome'];
			 $x = 0;
		  }
		  
		  if($inputb['hora'] == $row1['hora'])
	      {
			  $selectd = "selected"; 
		  }
		  else
		  {
		      $selectd = "";  
		  }
		  
		  if($x == 0)
		  {
			   echo "<option value='".$row1['descricao']."' ".$selectd.">".$row1['descricao']."</option>";
		  }
		  else
		  {
			   //echo "<option value='".$row1['hora']."' ".$selectd.">".$row1['hora']." - ".$nome." </option>";
		  }
		}

		?>
	<?
}

if(@$inputb['lservico'] == "true")
{ 
    $p_codigo = @$inputb['profissional'];
    ?>
    <option value="">Escolher Carro</option>
	<?  
	
	$SQL = "SELECT produtos.codigo, produtos.descricao FROM produtos 
	inner join produtos_usuarios on produtos_usuarios.produto=produtos.codigo
	where produtos.sistema='".$_SESSION['sistema']."' and produtos_usuarios.usuario='{$p_codigo}' and produtos.tipo=2";
	$RES = mysqli_query($db,$SQL);
	while($row = mysqli_fetch_array($RES))
	{
		echo "<option value='".$row['codigo']."'>".$row['descricao']."</option>";
	}
}

if(@$inputb['load'] == 1)
{
	$data = "";
	$pesquisa = "";
	$whe = "";
	
	$pesquisa = @$inputb['pesquisa'];
	$data = @revertedata($inputb['data']);
	
	$_SESSION['dataagenda'] = $data;
		
	if(isset($pesquisa))
    {
		if(strlen($pesquisa) > 2)
	    {
		  $whe = " and clientes.nome like '%".$pesquisa."%' or produtos.descricao like '%".$pesquisa."%' or agendamento_servicos.data = '".$data."'";
		}
	}
	else
	{ 
        $data = date("Y-m-d");
        $whe = " and agendamento_servicos.data = '".$data."'"; 
	}
	
	if($_SESSION['permissao'] == 4)
	{
		$whe2 = "";
	}
	else
	{
		$whe2 = "and agendamento.usuario='".$_SESSION['usuario']."'";
	}
	
	echo '<div class="container mb-4">';
	
	$SQL = "SELECT agendamento_servicos.profissional, usuarios.nome as username,produtos.descricao,agendamento.codigo,agendamento_servicos.obs,agendamento_servicos.codigo as codservico,agendamento.cliente,clientes.nome, clientes.celular,agendamento_servicos.data,agendamento_servicos.periodo,agendamento_servicos.profissional FROM agendamento 
    left join clientes on clientes.codigo=agendamento.cliente
	inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	inner join produtos on produtos.codigo=agendamento_servicos.servico
	inner join usuarios on usuarios.codigo=agendamento_servicos.profissional
	where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.status=0 $whe ORDER BY agendamento.codigo desc";
	$RES = mysqli_query($db,$SQL);
	while($row = mysqli_fetch_array($RES))
	{
		?>
		
		<div class="card  border-0 shadow-sm mb-3">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="<? echo $_SESSION['template'];?>images/usuario.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Motorista: <? echo $row['username'];?> <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute"></span></small></h6>
                                    <p class="small text-mute mb-0"><h6>Carro: <? echo $row['descricao'];?></h6></p>
									<p class="small text-mute mb-0"><? echo $row['obs'];?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="row ">
                                <div class="col-auto pr-0 align-self-center">
                                    <span class="material-icons vm">alarm </span>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-0">Dia: <? echo formatodata($row['data']);?></p>
									<p class="mb-0">Periodo: <? echo $row['periodo'];?></p>
                                </div>
                                <div class="col-auto align-self-center">
								<? if($row['profissional'] == $_SESSION['usuario']){ ?>
                                    <a class="btn btn-sm btn-outline-default" onclick="agendaex('<? echo $row['codservico'];?>');">Cancelar</a>
								<? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
				
			  <?
			  
	}
	
	echo '</div>';
	
}
else if(@$inputb['load'] == 2)
{
	$codigo = @$inputb['codigo'];
	            
	$SQL = "SELECT usuarios.nome,agendamento.codigo as codagenda, agendamento_servicos.codigo, agendamento_servicos.data,agendamento_servicos.hora, produtos.descricao,produtos.preco FROM agendamento 
	inner join agendamento_servicos on agendamento_servicos.agendamento=agendamento.codigo
	inner join produtos on produtos.codigo=agendamento_servicos.servico
	inner join usuarios on usuarios.codigo=agendamento_servicos.profissional
	where agendamento.sistema='".$_SESSION['sistema']."' and agendamento_servicos.agendamento='".$codigo."' and agendamento.status=0 ORDER BY agendamento.codigo asc";
	
	$RES = mysqli_query($db,$SQL);
	while($row = mysqli_fetch_array($RES))
	{
		?>
		<tr onclick="a_ex(<? echo $row['codigo']?>)" href="javascript:void(0);">
		 <td data-title="Descrição">
		  <?=$row['descricao'];?>
		 </td>
		 <td data-title="Nome">
		        <?=$row['nome'];?>
		     </td>
		  <td data-title="Data - Hora">
		        <?=formatodata($row['data']);?> - <?=formatohora($row['hora']);?>
		     </td>
		</tr>
	    <?	  
	}
}
?>












