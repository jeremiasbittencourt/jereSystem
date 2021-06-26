
<h1></h1>

<div class="container"> 
  <div class="row">

<style type="text/css">
#form-cadastro { 
background:#white; 
font:14px arial, verdana, helvetica, sans-serif;  
border-top:10px solid #white;
border-left:10px solid #white;  
border-right:10px solid #white;
border-bottom:10px solid #white;
border-radius: 10px;
color:#000000;  
margin-left: 20%;
margin-right: 20%;
} 
#form-cadastro input { 
background:#white;  
}

.container{
padding-bottom: 10px;
border-radius: 10px;  
}

.card{
font-weight: bold;
margin-top: 10px;
align-items: center;
border-radius:10px;
}

#btn-cadastrar{
margin-top: 10px;
margin-bottom: 10px;
}

#status{
margin-top:10px;

}
</style>
  <h1 style="text-align: center">Cadastre-se aqui</h1>
<div id="formulario">

	<form method="POST" name="form" id="form-cadastro" action="<?php echo base_url(). 'efetuar_cadastro'?>">
     
      <div class="card">

         <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" checked="check" name="_status" id="status">
            <label class="form-check-label" for="exampleCheck1" id="status">Status</label>
          </div>
         
         <div class="email">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input placeholder="digite seu email"name="email" type="email" class="form-control" id="email" maxlength="255" aria-describedby="emailHelp">
            </div>

          <div class="nome">
            <label for="exampleInputNome" class="form-label">Nome completo</label>
            <input name="nome" type="name" class="form-control" id="nome" maxlength="255">
          </div>

          <div class="data">
            <label for="exampleInputData" class="form-label">Data de Nascimento</label>
            <input name="data" type="date" class="form-control" id="data">
          </div>

          <div class="senha">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" maxlength="50">
          </div>

            <a type="btn" class="btn btn-success" id="btn-cadastrar">Cadastrar</a>
      </div> 
  </form>
    </div>
  </div>
</div>
  </head>


<link rel="stylesheet" type="text/css" href="assets/css/style.css">

