<?php
  // Inicie a sessão
  session_start();
  include('conexao.php');
  // Verifique se o usuário está autenticado
  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
      header("Location: login.php");
      exit();
  }
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-BR">

<head>
  <title>Sindicato dos Professores de Bauru</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/icon-spb.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    html, body {
      height: 100%;
    }

    section {
      height: 100%;
    }
  </style>
</head>

<body>
  
  <header class="section page-header">
    <!-- Cabeçalho RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
        data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
        data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
        data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
        data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
        data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
          <span></span>
        </div>
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item active"><a class="rd-nav-link" href="add_news.php">Adicionar Notícia</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="info_contatos.php">Contatos</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="info_socio.php">Seja Sócio</a></li>
              </ul>
              <a class="button button-md button-default-outline-2 button-ujarak" href="logout.php" style="background-color: #107050;">Sair</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  
  
  
  <section class="noticias" style="display: flex; align-items: center;">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
          <h1 class="page-title">Adicione a Noticia!</h1>
          <p>Preencha os campos abaixo com as informações da noticia!</p>
        </div>
      </div>
      <div class="row" style="margin-top: 10px;">
        <div class="col-lg-12">
          <div class="box p-3">
            <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-12" style="padding: 0;">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 0px;">
                <div class="col-lg-12" style="padding: 0;">
                  <div class="form-group">
                    <label for="noticia">Corpo da Notícia</label>
                    <textarea name="noticia" class="form-control" rows="4" id="noticia"></textarea>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 0px;">
                <div class="col-lg-6" style="padding: 0;">
                  <div class="form-group">
                    <label for="link">Link para a Notícia</label>
                    <input type="text" name="link" class="form-control" id="link">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 0px;">
                <div class="col-lg-6" style="padding: 0;">
                  <div class="form-group">
                    <label for="data">Data da Publicação</label>
                    <input type="date" name="data" class="form-control" id="data">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 0px;">
                <div class="col-lg-6" style="padding: 0;">
                  <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" class="form-control encontre" name="pic" accept="image/*" id="pic" aria-describedby="helpId">
                  </div>
                </div>
              </div>
              <div class="form-group" style="display: flex; justify-content: flex-end;">
                  <input type="submit" value="gravar" name="gravar" id="gravar" class=" botao" style="color: #fff; background-color: #107050; border-color: #107050; cursor: pointer; border-radius: 5px; text-transform: capitalize;">    
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="copyright"
    style="display: flex; justify-content: center; align-items: center; background: #12533d; color: #ffffff;">
    <p>&copy;Sindicato dos Professores de Bauru 2023 - Todos os direitos reservados.</p>
  </div>
  <?php 
      try
      {
        $conexao = new PDO($dsn, $usuario, $senha);      
        if(isset($_POST["gravar"]))
        {
          if(isset($_FILES['pic']))
          {
            $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = './imagem/'; //Diretório para uploads 
            move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          }

          $query = "insert into noticias (data, titulo, noticia, imagem, link) values (:data, :titulo, :noticia, :imagem, :link)";
                     
          $stmt = $conexao->prepare($query);
          $stmt->bindValue(':data', $_POST['data']);
          $stmt->bindValue(':titulo', $_POST['titulo']);
          $stmt->bindValue(':noticia', $_POST['noticia']);
          $stmt->bindValue(':imagem', $new_name);
          $stmt->bindValue(':link', $_POST['link']);
          
          $stmt->execute();

          $_lista = $stmt->fetch();
          exit;
        }
         
      }
      catch(PDOException $e)
      {
        echo 'message' . $e->getMessage();
        echo '<br> Code: ' . $e->getCode();
      }
	  ?>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
