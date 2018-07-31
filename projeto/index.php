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
              <li class="active"><a href="index.php">Início</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="sobrenos.php">Sobre nós</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-12"><img src="loja/i2.jpg" width="100%"></div>
      </div>
    </div>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body" style="background-color: #2f4f4f;">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                      <option>Todas as marcas</option>
                      <option>Ford</option>
                      <option>Fiat</option>
                      <option>Bmw</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control" id="sel2">
                    <option>Todos os modelos</option>
                    <option>Ford</option>
                    <option>Fiat</option>
                    <option>Bmw</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control" id="sel2">
                    <option>Todos os anos</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                  <label class="radio-inline" style="color: #fff;"><input type="radio" name="optradio" checked>Todos</label>
                  <label class="radio-inline" style="color: #fff;"><input type="radio" name="optradio">Novos</label>
                  <label class="radio-inline" style="color: #fff;"><input type="radio" name="optradio">Usados</label>
              </div>
       
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-2"><button style="width: 100%;">Buscar</button></div>
              <div class="col-md-5"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 align="center">Veículos em Destaque! <img src="loja/i4.gif" width="3%"></h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4" style="text-align: center;">
            <img src="loja/i5.png">
            <br><h7>Relampago Marquinhos</h7>
            <br><h7>R$:Impagável</h7>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <img src="loja/i6.jpg">
            <br><h7>mazerati</h7>
            <br><h7>R$: 200.000</h7>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <img src="loja/i7.jpg">
            <br><h7>Ford KA</h7>
            <br><h7>R$: 70.000</h7>
          </div>
        </div>
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