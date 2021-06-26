
<div class="container">
  <div class="row">
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="_status" id="status" checked="true">
        <label class="form-check-label" for="exampleCheck1">Status</label>
    </div>

    <div class="mb-3 form-check">
        <button type="button" class="btn btn-primary" name="_status" id="pesquisar">Pesquisar</button>
    </div>

    <div class="mb-3 form-check">
          <a type="button" class="btn btn-primary" href="/jeremias/pdf_dados">Gerar PDF</a>
    </div>
  </div>

<table class="table" id="tableUsuarios">
      <thead class="thead-dark">
        <tr>
          <th scope="col"> Id </th>
          
          <th scope="col"> Email </th>

          <th scope="col"> Nome </th>

          <th scope="col"> Data de Nascimento </th>

          <th scope="col"> Alterar </th>

        </tr>
      </thead>

    </div>

      <tbody>
          <?php 

            if(!empty($usuarios))
            {

              foreach ($usuarios as $row) 
              {
                ?>
                
                  <tr>
                      <td> <?php echo $row->email ?> </td>
                      <td> <?php echo $row->nome ?> </td>
                      <td> <?php echo $row->data ?> </td>
                      <td> <?php echo $row->id ?> </td>
                      <td> <button onclick="alterarUsuario(<?php echo $row->id ?>)" type="button" class="btn btn-info" name="_status" id="pesquisar">Editar</button> </td>
                      

         
                  </tr>

                <?php
              }

            }

          ?>
      </tbody>
    </table>
  </div>