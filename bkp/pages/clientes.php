<section class="well1 ins2 mobile-center">
<div class="container">
  <h2>Clientes</h2>
  <br>
  <?

require_once("./load/load.php");

?>
<?

  $SQL = "SELECT razao,logoppra FROM empresas where logoppra != 1 limit 20";
  $RES = mysqli_query($db,$SQL);
  while($row = mysqli_fetch_array($RES))
  {
	  
      echo '<div style="border: 1px solid #CCCCCC; width: 268.5px; height: 90px; float:left; margin:0 20px 20px 0;"><img style="width: 268.5px; height: 90px;" alt="' .  $row['razao']  . '" src="data:image/png;base64,' .  base64_encode( $row['logoppra'])  . '" /></div>';
  }
  
?>
  <div id=""></div>
  </div>
 </section>
</main>
