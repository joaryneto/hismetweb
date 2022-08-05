<?php

session_start();

if(isset($_SESSION['usuario']))
{

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
	<form action="imageup.php" method="post" enctype="multipart/form-data">
	<input type="file" name="banner" >
	<input type="submit" value="submit">
	</form>
	<?php

	$SQL = "select * from web_banner";
	$RES = mysqli_query($db,$SQL);

	?>
    <table>
		<tr>
		  <td>#ID</td>
		  <td>Banner</td>
		</tr>
	<?
	foreach($RES as $row)
	{
		echo "<tr>
		        <td>{$row['codigo']}</td>
				<td>{$row['imagens']}</td>
			  </tr>";
	}
    ?>
	</table>
    <?

	if(isset($_POST['banner']))
	{
		$banner=@$_FILES['banner']['name']; 
		$expbanner=explode('.',$banner);
		$bannerexptype=$expbanner[1];
		date_default_timezone_set('Australia/Melbourne');
		$date = date('m/d/Yh:i:sa', time());
		$rand=rand(10000,99999);
		$encname=$date.$rand;
		$bannername=md5($encname).'.'.$bannerexptype;
		$bannerpath="uploads/banners/".$bannername;
		move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
	}
}
else{

	echo "Acesso não autorizado."; exit;
}
?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<? include_once 'template/layout/frota/scripts.php';  ?>

</html>