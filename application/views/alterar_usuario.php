
<h1></h1>

<div class="container"> 
  <div class="row">

<style type="text/css">
#form-alterar { 
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
#form-alterar input { 
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

#btn-alterar{
margin-top: 10px;
margin-bottom: 10px;
}

#status{
margin-top:10px;

}
</style>
  <h1 style="text-align: center">Alterar Usuário</h1>
<div id="alterar">

  <form method="POST" name="form" id="form-alterar" action="<?php echo base_url(). 'atualizar_usuario'?>">
         
         <?php

            $estado = $usuario->status;

            if($estado =='1'){
              $statusCheck='checked';
            }else{
              $statusCheck='';
            }

          ?>
      <div class="card">


         <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $usuario->id ?>">

         <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" <?php echo $statusCheck?> name="_status" id="status">
            <label class="form-check-label" for="exampleCheck1" id="status">Status</label>
          </div>
         
         <div class="email">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input value="<?php echo $usuario->email; ?>"name="email" type="email" class="form-control" id="email" maxlength="255" aria-describedby="emailHelp">
            </div>

          <div class="nome">
            <label for="exampleInputNome" class="form-label">Nome completo</label>
            <input value="<?php echo $usuario->nome; ?>" name="nome" type="name" class="form-control" id="nome" maxlength="255">
          </div>

          <div class="data">
            <label for="exampleInputData" class="form-label">Data de Nascimento</label>
            <input value="<?php echo $usuario->data; ?>"name="data" type="date" class="form-control" id="data">
          </div>

          <div class="senha">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input value="<?php echo $usuario->senha; ?>" name="senha" type="password" class="form-control" id="senha" maxlength="50">
          </div>

            <a type="btn" class="btn btn-warning" id="btn-alterar">Alterar</a>
      </div> 
  </form>
    </div>
  </div>
</div>
  </head>




  