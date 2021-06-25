<script>
$('.t-cadastro').on('click',function()
{	
   //b_menuslow();
   requestPage('?br=cad_usuarios','conteudo','GET');
});
</script>
<div class="sidebar">
        <div class="row no-gutters">
            <div class="col-auto align-self-center">
                <figure class="avatar avatar-50">
                    <img src="assets/img/user1.png" alt="">
                </figure>
            </div>
            <div class="col pl-3 align-self-center">
                <p class="my-0"><? echo $_SESSION['nome'];?></p>
                <p class="text-mute my-0 small"></p>
            </div>
            <div class="col-auto align-self-center">
                <a href="#" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
            </div>
        </div>
        <div class="list-group main-menu my-4">
            <a onclick="requestPage('?br=agenda','conteudo','GET');" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Inicio</a>
			<a onclick="requestPage('?br=cad_usuarios','conteudo','GET');" class="list-group-item list-group-item-action"><i class="material-icons">supervisor_account</i>Usuarios</a>
        </div>
    </div>