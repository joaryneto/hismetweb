<?php

session_start();

include_once 'load/load.php'; 

?>
<!doctype html>
<html lang="pt-br">
<head>
    <!-- Custom styles for this template -->
<? include_once 'template/layout/frota/css.php';  ?>

</head>
<div class="container pt-5">
  <div class="row">
	<div class="col-md-12 col-sm-12"> 
		<div class="component-box">
			<!--Tabs with Icon example -->
							<div class="row flex-colum">
                <div class="col-12 col-md-6 col-lg-5 mx-auto login-row">
                    <div class="row h-100">
                        <div class="col-12 align-self-center">
                            <h1 class="font-weight-light mb-5 text-center"><small class="font-weight-light">Bem-vindo</small>,<br><span class="text-mute">Faça login para continuar</span></h1>
                            <form action="login.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-2">account_circle</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label active">
                                            <input type="text" id="inputEmail" name="login" class="form-control" autofocus="" required="">
                                            <label for="inputEmail" class="form-control-label">Nome do usuário</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-1">lock</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label">
                                            <input type="password" id="inputPassword" name="senha" class="form-control" required="">
                                            <label for="inputPassword" class="form-control-label">Senha</label>
                                        </div>
                                    </div>
								<div id="load"></div>
                                </div>
								<div class="w-100"></div>
								<div class="col-12 mt-auto pb-4 col-md-6 col-lg-5 mx-auto login-footer">
									<button type="submit" class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Logar</span><i class="material-icons right-absoute">arrow_forward</i></a>
							
									<br>
								</div></form>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

if(isset($_POST['login']))
{
    $POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $login = $POST['login'];
    $senha = $POST['senha'];

    $SQL = "select 
		a.codigo,
		a.senha
		from usuarios a 
		where 
		a.login='{$login}' limit 1";

    $senhad = null; 
    $result = mysqli_query($db,$SQL);
    while($res = @mysqli_fetch_array($result))
    {
        $_SESSION['usuario']    = $res['codigo'];
        $senhad                 = $res['senha'];
    }

    if(password_verify($senha, $senhad))
    {
        print "<script>
			window.location='/painel.php'; 
			</script>";
    }
}
?>

<? include_once 'template/layout/frota/scripts.php';  ?>

</html>