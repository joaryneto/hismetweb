<?php 

//require_once("phpmailer/class.phpmailer.php");
//require_once("phpmailer/class.smtp.php");

// Inicia a classe PHPMailer
//$mail = new PHPMailer();


//pego os dados enviados pelo formulario
$nome       	= $_POST["Nome"];
$telefone   	= $_POST["Telefone"];
$celular        = $_POST["Celular"];
$email_from 	= $_POST["Email"];
$Endereco       = $_POST["Endereco"];
$cep            = $_POST["CEP"];
$bairro         = $_POST["Bairro"];
$cidade         = $_POST["Cidade"];
$estado         = $_POST["Estado"];
$mensagem       = $_POST["Mensagem"];
$ip             = $_POST["ip"];
$mensagem_final = "Fone:   $telefone \n\n<br>";
$mensagem_final = "Celular:   $celular \n\n<br>";
$mensagem_final .= "Mensagem:   $mensagem \n\n\n<br><br>
__________________________________________________________________________________________________ <br>
                                Endereço de IP do remetente da mensagem : $ip";
/*								
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{

 //$email = $_POST['email'];
	
 //$b1 = mysql_query("SELECT internet_usuarios.email, internet_usuarios.senha ,internet_usuarios.nome FROM internet_usuarios INNER JOIN internet_empresas on internet_empresas.usuarios=internet_usuarios.codigo where internet_usuarios.email='".$email."'");
 //$b2 = mysql_fetch_array($b1);
 
	//gerarprotocolo();
	
    //$SQL = "UPDATE internet_usuarios SET protocolo='".$protocolo."' where email='".$email."'";
	
	//$b3 = mysql_query($SQL); 
	
	   //$nome = $b2['nome'];
	   //$senha = $b2['senha'];
	   
	   # Define os dados do servidor e tipo de conexão
	   
	   $mail->IsSMTP(); // Define que a mensagem será SMTP
	   $mail->Host = "smtp.hismet.com.br"; # Endereço do servidor SMTP
	   $mail->Port = 587; // Porta TCP para a conexão
	   $mail->SMTPAutoTLS = true; // Utiliza TLS Automaticamente se disponível
	   $mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
	   $mail->Username = 'info@hismet.com.br'; # Usuário de e-mail
	   $mail->Password = '@med2829'; // # Senha do usuário de e-mail @med2829

	   # Define o remetente (você)
	   $mail->From = "ti@hismet.com.br"; # Seu e-mail
	   $mail->FromName = "HISMET"; // Seu nome

	   # Define os destinatário(s)
	   $mail->AddAddress('ti@hismet.com.br', 'TESTE'); # Os campos podem ser substituidos por variáveis
	   //$mail->AddAddress('administrativo@hismet.com.br'); # Caso queira receber uma copia
	   #$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
	   #$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

	   # Define os dados técnicos da Mensagem
	   $mail->IsHTML(true); # Define que o e-mail será enviado como HTML
	   #$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

	   # Define a mensagem (Texto e Assunto)
	   $mail->Subject = "ORÇAMENTO - HISMET"; # Assunto da mensagem

	   include('TESTE');

	   # Define os anexos (opcional)
	   #$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

	   # Envia o e-mail
	   //$enviado = $mail->Send();


	   
	   //$sucesso = true;
	   
 if($mail->Send())
 {
    ?>
    <script type="text/javascript">
	window.alert('Acesse seu email para confirmar recuperação.!!');
	window.location='index.php';
	</script>                      
    <?
 }
 else
 {
	?>
    <script type="text/javascript">
	window.alert('Informações \n *Ocorreu um erro.!! \n Clicar em "Ok" para continuar');
	</script>                      
    <?
 }	  

 # Limpa os destinatários e os anexos
	   $mail->ClearAllRecipients();
	   $mail->ClearAttachments();
}
*/

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	
$to = "administrativo@hismet.com.br";
$subject = "CONTATO - SITE HISMET";

$message = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
<meta name="format-detection" content="telephone=no"/>
    <title>SISMED</title>
    <style>
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }
      body {
        
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      .body {
        
        width: 100%; 
      }

      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      .main {
        border-radius: 20px;
        width: 100%; 
      }
      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }
      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }
      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }
      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }
      a {
        color: #3498db;
        text-decoration: underline; 
      }

      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }
      .btn-primary table td {
        background-color: #3498db; 
      }
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
      }

      .last {
        margin-bottom: 0; 
      }
      .first {
        margin-top: 0; 
      }
      .align-center {
        text-align: center; 
      }
      .align-right {
        text-align: right; 
      }
      .align-left {
        text-align: left; 
      }
      .clear {
        clear: both; 
      }
      .mt0 {
        margin-top: 0; 
      }
      .mb0 {
        margin-bottom: 0; 
      }
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }
      .powered-by a {
        text-decoration: none; 
      }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }
    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <span class="preheader"></span>
            <table role="presentation" class="main">
              <tr>
                <td class="wrapper" style="background: grey;border-color: blue;border: 5ox;border-radius: 20px;">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="background: white;padding: 20px;">
                    <tr>
					<td><img src="http://hismet.com.br/images/Logo/Logo_03.png" height="120px"/></td>
					</tr>
					<tr>
                      <td>
					  <br /><br />
                        <p>CONTATO</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
							    <span>Nome: '.$nome.'</span><br />
								<span>Telefone: '.$telefone.'</span><br />
								<span>Email: '.$email_from.'</span><br />
								<span>Mensagem: '.$mensagem_final.'</span>
								<br>
								<br>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <div class="footer">
            </div>
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@hismet.com.br>' . "\r\n";

$suces = mail($to,$subject,$message,$headers);

if($suces)
 {
    ?>
    <script type="text/javascript">
	window.alert('Enviado com sucesso!!');
	window.location='index.php';
	</script>                      
    <?
}
else
{
	?>
    <script type="text/javascript">
	window.alert('Informações \n *Ocorreu um erro.!! \n Clicar em "Ok" para continuar');
	window.location='index.php?url=contato';
	</script>                      
    <?
}	

}
else
{
	?>
    <script type="text/javascript">
	window.alert('Preencha corretamento os campos.');
	window.location='index.php?url=contato';
	</script>                      
    <?
}
?> 
