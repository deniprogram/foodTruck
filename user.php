<!doctype html>
<?php
session_start();
if($_SESSION['logado'] == false){
    header('Location: index.html');
}
?>
<html lang="pt-br">

<head>

<title>BeeImoveiees</title>
<meta   charset="UTF-8">
<link   href='img/favicon.ico' rel='icon' type='image/x-icon'/>
<link   rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
<meta   name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link   href="web/css/style.css" rel="stylesheet">
<link   href="lib/jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
<script src="lib/jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>
<script src="lib/jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="controller/ctlUserPainel.js"></script>

</head>

<body> <!-- Inicio de body -->

<div class="container"> <!-- Container Principal -->

<div class="row">   <!-- Row Principal -->
    <div class="col-xs-12 col-sm-5 col-md-3 center-block mensagesndePainelUser">
        <div class="alert alert-warning alert-dismissible fade in" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign"></span>  Alteraçao Concluida.
        </div>
    </div>
<div  class = "col-xs-12 col-sm-12 col-md-12 centerContainer">  <!--  headerTop -->
<div class = "col-xs-12 col-sm-12 col-md-9 painelAdmin center-block">
  <div class = "lateralRight  col-xs-12 col-sm-12 col-md-12">
      <div class = "imagensDestaque  col-xs-12 col-sm-12 col-md-12">
        <img src = "web/img/capa.jpg" class="img-responsive " alt="Responsive image" />
          <img src = "web/img/gabi.jpg" class="img-responsive img-circle imgUser" alt="Responsive image" />
      </div>

      <div class = "containerCenterUser  col-xs-12 col-sm-12 col-md-12">

          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class=""><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Editar</a></li>
                  <li role="presentation" class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Cardápio</a></li>
                  <li class="sair"><a>Sair</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab">
                      <form>
                          <div class = "formUser  col-xs-12 col-sm-12 col-md-6">
                              <div class="form-group">
                                  <label for="nomeFoodTruck">Nome</label>
                                  <input type="email" class="form-control" id="nomeFoodTruck" placeholder="Nome do Food-Truck">
                              </div>
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <label for="senha">Senha</label>
                                  <input type="password" class="form-control" id="senha" placeholder="Senha">
                              </div>
                          </div>

                          <div class = "formUser  col-xs-12 col-sm-12 col-md-6">
                              <div class="form-group">
                                  <label for="endereco">Endereço</label>
                                  <input type="" class="form-control" id="endereco" placeholder="Endereço">
                              </div>

                              <div class="form-group">
                                  <label for="telefone">Tel:</label>
                                  <input type="" class="form-control" id="telefone" placeholder="Tel:">
                              </div>
                              <div class="form-group">
                                  <label for="facebook">Facebook</label>
                                  <input type="" class="form-control" id="facebook" placeholder="Facebook">
                              </div>
                              <div class="form-group">
                                  <label for="site">Site</label>
                                  <input type="" class="form-control" id="site" placeholder="Site">
                              </div>


                          </div>
                          <div class = " painelbutton  col-xs-12 col-sm-12 col-md-5 pull-left">
                              <div class="form-group col-xs-12 col-sm-12 col-md-1 addCardapio  btnPainelUser">
                                  <button type="button" class="btn btn-primary alterarUser" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Alterar</button>
                              </div>
                          </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">
                      <div class="form-group col-xs-12 col-sm-12 col-md-5">
                          <label for="examplessInputPsassword1">Produto</label>
                          <input type="" class="form-control" id="examplessInputPsasswodrd1" placeholder="Produto">
                      </div>
                      <div class="form-group col-xs-12 col-sm-12 col-md-5">
                          <label for="examplessInputPsassword1">Valor</label>
                          <input type="" class="form-control" id="examplessInputPsasswodrd1" placeholder="Valor">
                      </div>
                      <div class="form-group col-xs-12 col-sm-12 col-md-2 addCardapio">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Adicionar</button>
                      </div>


                      <table class="table tableProduto table-bordered">
                          <thead>
                          <tr>
                              <th>Produto</th>
                              <th>Valor</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>

                              <td>Teste</td>
                              <td>R$: 8,00</td>

                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>
                          <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr> <tr>
                              <td>Teste</td>
                              <td>R$: 8,00</td>
                          </tr>

                          </tbody>
                      </table>

                  </div>
              </div>
          </div>




</div>
</div>

</div> <!-- Fim de Row Principal -->
</div><!-- Fim de Container Principal -->

</body><!-- Fim de body -->
</html>


















