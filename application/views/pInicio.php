



<form name= "loginCds" method="POST" action="cadastro.php" style="text-align:center">
	<h1 class="display-3">Jere System beta</h1><br>

	<div class="container px-4">
  <div class="row gx-1">
    <div class="row">
     <div class="p-2 border bg-grey">
     	<label class="user_login" style="margin-top: 5px; margin-right: 10px"><strong>Login:</strong></label><input type="text" name="login" id="login" value=""><br>
     </div>
    </div>
    <div class="row">
      <div class="p-2 border bg-grey">
      	<label class="user_senha" style="padding-top:5px; margin-right: 10px"><strong>Senha:</strong></label><input type="password" name="senha" id="senha" value="">
      </div>
    </div>
  </div>
</div>
	
<br>


</form>

<div class="row" style="margin-top: 10px"> 
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<button class="btn btn-success" id="acessar"  style="float: right">Acessar</button><br>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<a href="<?php echo base_url() .'cadastrar_usuario'?>" id="cadastroUsuario" class="btn btn-secondary"  style="float: left">Cadastrar Usuário</a>
	</div>
</div>




