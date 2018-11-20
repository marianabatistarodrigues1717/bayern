<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bayern Brasil">
    <meta name="author" content="Mariana Rodrigues">

    <title>Bayern Brasil</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="css/estilo1.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bayern Store BR</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="roupas.php">Roupas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="acessorios.php">Acessorios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="brinquedos.php">Brinquedos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php">conectar</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead" style="background-image: url('img/w1.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Bayern Store</h1>
                        <span class="subheading">Loja oficial</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
      <center> <h2> Sobre o time e a loja:</h2> </center>
        Bayern Store é um site de roupas e acessórios para os torcedores brasileiros vinculado ao Bayern Brasil.Aqui vocês encontraram artigos diversos do maior time da alemanha:O Fussball Club Bayern Munchen.Venham conferir tudo que temos para você!

      <?php
      include_once "conexao.php";
      $conexao = conecta_mysql();
      $sql = "SELECT sobre FROM sobre where id_s= 1";
      $resultado = mysqli_query($conexao,$sql);
      if ($resultado) {
        $mensagens = array();
        while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
          $mensagens[] = $linha;
        }
        foreach ($mensagens as $mensagem){
          print $mensagem['sobre']."";
        }
      }
      ?>

    <hr>
    <center> <h2> Mande Sua avaliação </h2> </center>
    <form method="post" action="">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
      </div>
      <div class="form-group">
         <label>Mensagem</label>
         <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
       </div>
       <center><button type="submit" class="btn btn-primary">Enviar</button></center>

      </form>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted"> &copy;Desenvolvido Por Mariana Rodrigues</p>
                </div>
            </div>
        </div>
    </footer>
    <br>
    <br><br><br>

    <?php
      // session_start();
      if ( isset($_POST["email"]) ){
        $email = $_POST["email"];
        $nome= $_POST["nome"];
        $texto= $_POST["texto"];
        $conexao = conecta_mysql();
    		$sql = "insert into mensagens(nome_mens,email_mens,mensagem) values('$nome','$email','$texto')";
    		if (mysqli_query($conexao,$sql)){
    				print "Mensagem enviada.";
    			}
    		else{
    			print "Erro ao enviar a mensagem.";
    		}
      }
      ?>

    <script src="js/clean-blog.min.js"></script>

</body>

</html>
