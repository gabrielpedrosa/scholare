<?php
//
?>
<!Doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Scholare</title>
  </head>
  <body>
    <div id="loader"class="carregar"></div>
    <header>
      <img id="logo"src="img/logo.jpg">
      <div id="logo"> Scholare </div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li class="submenu hide"><a href="#">Cadastros</a>
            <ul>
              <li><a href="#">Aluno</a></li>
              <li><a href="#">Professor</a></li>
            </ul>
          </li>
          <li class="submenu hide"><a href="#">Notas</a>
            <ul>
              <li><a href="#">Cadastrar Notas</a></li>
              <li><a href="#">Exibir Notas</a></li>
            </ul>
          </li>
          <li class="submenu hide"><a href="#">Presença</a>
            <ul>
              <li><a href="#">Cadastrar Presença</a></li>
              <li><a href="#">Exibir Presença</a></li>
            </ul>
          </li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Cadastre-se</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
      <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>

    <div class="container">
      <div id="carousel">
        <div id="itens">
          <ul>
            <li><div class="item"><img class="img" src="img/pestalozzi01.jpg"></div></li>
            <li><div class="item"><img class="img" src="img/pestalozzi02.jpg"></div></li>
            <li><div class="item"><img class="img" src="img/pestalozzi03.jpg"></div></li>
          </ul>
        </div>
      </div>
    </div>

    <footer>
      <div>
        <h6>Desenvolvido por estudantes do Instituto Federal de Educação, Ciência e Tecnologia de Rondônia
          <br>
          © 2018 Bootstrap.</h6>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
  </body>
</html>
