@extends('home')
@section('content')
<section class="well1 ins2 mobile-center">
          <div class="container">
            <h2>Fale Conosco</h2>

<div class="row">
  <div class="grid_3" style="font-family: Arial, Helvetica, sans-serif;text-align: justify;">
<img src="images/img_fale_conosco.jpg" width="206" height="146"><br>
      <br>
      <strong>Fone:</strong><br>
      <b>&nbsp;&nbsp;&nbsp;(65) 3321-7051<br>
&nbsp;&nbsp;&nbsp;(65) 3623-5602</b><br>
      <br>
      <strong>E-mail:</strong><a href="mailto:administrativo@hismet.com.br" style="text-decoration:none; color:#000000"> administrativo@hismet.com.br </a></td>
    <td>
	</div>

	<div class="grid_4" style="font-family: Arial, Helvetica, sans-serif;text-align: justify;">
	<script type="text/javascript">
	jQuery(function(jQuery){
		jQuery("#Telefone").mask("(99) 9999-9999");
		jQuery("#Celular").mask("(99) 9999-9999");
		jQuery("#CEP").mask("99999-999");
		jQuery("#Data_Visita").mask("99/99/9999");
		jQuery("#Horario_Visita1").mask("99:99");
		jQuery("#Horario_Visita2").mask("99:99");
	})
</script>

<script language="JavaScript">
function checar_cadastro(form){
		if (form.Nome.value == ""){
			alert('Favor, preencha o campo Nome.');
			form.Nome.focus();
			return (false);
		}
		if (form.Cidade.value == ""){
			alert('Preencha o campo Cidade.');
			form.Cidade.focus();
			return (false);
		}

		if (form.Email.value == ""){
			alert('E-mail não preenchido.');
			form.Email.focus();
			return (false);
		}

		if (form.Email.value.indexOf('@', 0) == -1){
			alert('O Endereço de E-Mail da está incorreto.');
			form.Email.focus();
			return (false);
		}

		if (form.Telefone.value == ""){
			alert('Preencha o campo Telefone.');
			form.Telefone.focus();
			return (false);
		}

	   return (true);
		}
      </script>
	<form action="{{ route('enviar.email') }}" method="post" enctype="multipart/form-data" name="form" id="form" onsubmit="return checar_cadastro(this)">
    Entre em contato conosco por telefone ou <br>envie sua mensagem pelo formulário abaixo:
    @csrf
    <input name="Nome" placeholder="Name" type="text" class="form-control" id="Nome" size="40" maxlength="90">
    <input name="Endereco" placeholder="Endereço" type="text" class="form-control" id="Endereco" size="40" maxlength="120">
    <input name="CEP" placeholder="CEP"  type="text" class="form-control" id="CEP" value="" size="9" maxlength="9">
    <input name="Bairro" placeholder="Bairro"  type="text" class="form-control" id="Bairro" size="30" maxlength="30">
    <input name="Cidade" placeholder="Cidade"  type="text" class="form-control" id="Cidade" size="30" maxlength="30">
    <select name="Estado" placeholder="Estado"  class="form-control" id="Estado">
    <option value="0"></option>
    <option value="AC">Acre </option>
            <option value="AL">Alagoas </option>
            <option value="AP">Amapá </option>
            <option value="AM">Amazonas </option>
            <option value="BA">Bahia </option>
            <option value="CE">Ceará </option>
            <option value="DF">Distrito Federal </option>
            <option value="ES">Espírito Santo </option>
            <option value="--">Exterior </option>
            <option value="GO">Goiás </option>
            <option value="MA">Maranhão </option>
            <option value="MT" selected="selected">Mato Grosso </option>
            <option value="MS">Mato Grosso do Sul </option>
            <option value="MG">Minas Gerais </option>
            <option value="PA">Pará </option>
            <option value="PB">Paraíba </option>
            <option value="PR">Paraná </option>
            <option value="PE">Pernambuco </option>
            <option value="PI">Piauí </option>
            <option value="RJ">Rio de Janeiro </option>
            <option value="RN">Rio Grande do Norte </option>
            <option value="RS">Rio Grande do Sul </option>
            <option value="RO">Rondônia </option>
            <option value="RR">Roraima </option>
            <option value="SC">Santa Catarina </option>
            <option value="SP">São Paulo </option>
            <option value="SE">Sergipe </option>
            <option value="TO">Tocantins </option>
            </select>
            <input name="email" placeholder="Seu email"  type="text" class="form-control" id="Email" size="40" maxlength="90">
            <input name="telefone" placeholder="Telefone"  type="text" class="form-control" id="Telefone" size="10" maxlength="15">
            <input name="celular" placeholder="Celular"  type="text" class="form-control" id="Celular" size="10" maxlength="15">
            <textarea name="mensagem" placeholder="Mensagem"  cols="40" rows="4" class="form-control" id="Mensagem"></textarea>
            <input name="data_Envio" placeholder="Data Envio"  type="hidden" id="Data Envio" value="<?=date("d-m-Y");?>">
            <input name="hora_Envio" placeholder="Hora Envio"  type="hidden" id="Hora Envio" value="17:47">
			<input name="hostname" placeholder="hostname"  type="hidden" id="hostname" value="b140e8b8.virtua.com.br">
            <input name="ip" type="hidden" id="ip" value="">
            <input name="enviar" type="submit" id="enviar" value="Enviar" class="btn btn-info">
			<br>
	 </form>
	 </div>
	 </div>
     </div>
	 </div>
 </section>
</main>
@stop
