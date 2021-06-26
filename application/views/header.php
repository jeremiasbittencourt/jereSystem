<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Jere System BETA</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>">


	<ul class="nav nav-pills">
	  	<li class="nav-item">
	    	<a class="nav-link" aria-current="page" href="<?php echo base_url() ?>">Página inicial</a>
	  	</li>
	  	<!-- <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url().'quemSomos'?>">Quem somos</a>
	  	</li> -->
	  	<!-- <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url().'equipe'?>">Equipe</a>
	  </li> -->
	  <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url().'cadastrar_usuario'?>">Cadastrar usuário</a>
	  <li class="nav-item">
	    	<a class="nav-link" href="<?php echo base_url().'usuarios_cadastrados'?>">Usuários cadastrados</a>
	  </li>
	</ul>

<script>
		var base_url = '<?php echo base_url() ?>';
</script>

</head>
	<body background="/jeremias/assets/img/background-site.jpg"

