<html>
    <head>
        <title> Personagens <?php if(isset($_GET['op'])){echo $_GET['op'];} ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
            <meta charset="UTF-8">
   
        </head>

    <body>
    <div class="container">

        <div class="col">
         <div class="rol">
             &nbsp;
        </div>
        </div>

        <div class="col">
                <div class="row">
                    <figure class="figure">
                        <img src="img/logo1.png" width="150" height="40" >
                       
                      </figure>
                </div>
              </div>
    
              <div class="col">
                <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Arsenal
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="index.php">.38</a>
                                            <a class="dropdown-item" href="index.php">shotgun</a>
                                            <a class="dropdown-item" href="index.php">rifle</a>
                                        </div>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php?op=2">resumo</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                
              </div>

       


        <?php if(isset($_GET['op'])){ ?>
            <?php if($_GET['op'] == 2) { ?>

                <div class="row">
  <div class="col">
    &nbsp;
  </div>
</div>

<div class="row">
  <div class="col">
    <img src="img/tlou.jpg" width="600" height="500">
    <br>
    <h3>The last of us</h3>
    <h5>The Last of Us é um jogo eletrônico de ação-aventura e sobrevivência</h5>
        <br>
        <p style="text-align:justify;">  Na história, os jogadores controlam Joel, um homem encarregado de escoltar uma adolescente chamada Ellie através de um Estados Unidos pós-apocalíptico. The Last of Us é jogado a partir de uma perspectiva em terceira pessoa, com os jogadores usando armas de fogo, armas improvisadas e furtividade a fim de defenderem-se de humanos hostis e criaturas canibalísticas infectadas por uma mutação do fungo Cordyceps.  </p>
  </div>
  <div class="col">
    <h3>Tipos de inimigos:</h3>
    <br>
    <div class="accordion" id="accordionExample">
      <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Militares
                  </button>
              </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
              data-parent="#accordionExample">
              <div class="card-body">
                Os militares aparecem durante toda a jornada com um nível altíssimo de percepção de campo e precisão nos disparos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Caçadores
                  </button>
              </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
              data-parent="#accordionExample">
              <div class="card-body">
                O grupo chamado de Os Caçadores é formado por inúmeros sobreviventes que utilizam recursos extremos para tentar sobreviver, executando estranhos em busca de suprimentos. Estes inimigos usam armas de fogo e atacam em grupos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Corredores
                  </button>
              </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Os corredores representam o primeiro estágio da atuação do fungo nos humanos. Ainda com características físicas básicas próximas do convencional, os runners apresentam um tom de pele pálido e constantes sangramentos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Perseguidores
                  </button>
              </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Os Perseguidores estão em um estágio entre os Corredores e os Estaladores. Embora sua face não tenha sido toda destruída pelo fungo, preservando ainda algumas áreas identificáveis, os Perseguidores trazem um sentido de investigação mais aguçado.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Estaladores
                  </button>
              </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Os Estaladores apresentam um avançado estágio do fungo, com a parte superior do rosto completamente dilacerada e dominada pelo Cordyceps.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Vermes
                  </button>
              </h5>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Os Vermes apresentam o fungo em seu estágio mais avançado, onde o Cordyceps já dominou todo o corpo do indivíduo, criando uma espécie de escudo que neutraliza ataques mais fracos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Trôpegos
                  </button>
              </h5>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Eles são como os Baiacus, mas em vez de atirar esporos em você, eles soltam uma nuvem de esporos corrosivos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Rei dos Ratos
                  </button>
              </h5>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Essa abominação é uma forma de infecção prolongada, composta por múltiplos indivíduos.
              </div>
          </div>
      </div>

<br>
<h3>inimigos em ordem de perigo</h3>
<p style="text-align: justify;"> inimigos classificados do mais ao menos perigoso</p>

  </div>
</div>

<div class="row">
  <div class="col">
      <nav class="navbar navbar-light bg-light ml-auto">
          <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
            © 2022 Sony Interactive Entertainment Inc. Todos os direitos reservados.
          </a>
      </nav>
  </div>
</div>

</div>

                <?php } ?>

        <?php }else{ ?>

 <div class="col">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" height="800" src="img/bill.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" height="800" src="img/tess.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" height="800" src="img/toomy.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>

<div class="row">
    <div class="col">
        &nbsp;
    </div>
</div>

<div class="row">
    <div class="col">
        
    </div>
</div>

<div class="row">
  <div class="col" style="text-align: left;">
    <img src="img/joel.jpg" width="400" height="300" alt="joel miller">
    <figcaption class="figure-caption">joel</figcaption>
   </div>
   <div class="col" style="text-align:center">
    <img src="img/ellie.jpg" width="400" height="300" alt="Ellie">
    <figcaption class="figure-caption">Ellie</figcaption>
  </div>
  <div class="col" style="text-align: right;" >
    <img src="img/abby.webp" width="400" height="300" alt="Ellie">
    <figcaption class="figure-caption">Abby</figcaption>
  </div>
</div>



        </div>
 
        <?php } ?>
 
    </body>
</html