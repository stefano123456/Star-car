<!DOCTYPE html>
<html lang="en">
  <head>
    <title>StarCar Veículos</title>
    <link rel="icon" href="loja/fav.png" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
    body{
      background-color: #d3d3d3;
    }
  </style>
  <body>
    <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <div style="margin-top: 6px;"><a class="navbar-fluid" href="index.php"><img src="loja/logo1.png"></a></div>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Início</a></li>
              <li class="active"><a href="contato.php">Contato</a></li>
              <li><a href="sobrenos.php">Sobre nós</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="usuario">Nome:</label>
            <input type="text" class="form-control" id="usuario">
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="telefone">telefone:</label>
            <input type="number" class="form-control" id="telefone">
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="comment">Comentário:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>        
      </div>
      <div class="row">
        <div class="col-md-12" align="center" style="margin:0px 0px 30px 0px; "><button>Enviar</button></div>
      </div>
    </div>   
  </body>
  <footer>
    <div class="container" style="background-color: #033;">
      <div class="row">
        <div class="col-lg-4" style=" margin-left: 20px; margin-top: 25px;">
          <h7><a href="contato.php">Contato</a></h7>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" style="margin-left: 20px;">
          <h7><a>stefano_nog@hotmail.com</a></h7>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align: center; margin-top: 25px; margin-bottom: 25px; color:#9cf; ">
          <h7>© 2018 stefano criação. Todos os direitos reservados a mim que criei essa parada, e as pessoas de que furtei as imagens do google(obrigado).
            <br>Este site não tem propósitos lucrativos, é apenas material de estudo de um aluno que está cursando técnico em informática.</h7>
        </div>
      </div>
    </div>
  </footer>
</html>