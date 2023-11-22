<?php
// Inicie a sessão
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}

include("conexao.php");

$sql = "SELECT * FROM socio";
$result = $conn->query($sql) or die($conn->error);
$i = 1;
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
      height: 300%;
    }

    main {
      height: 300%;
      margin: 8px;
    }

    .box {
      border: 1px solid #50ba87;
      border-radius: 5px;
      margin-top: 10px;
      padding: 15px;
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
                <li class="rd-nav-item"><a class="rd-nav-link" href="add_news.php">Adicionar Notícia</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="info_contatos.php">Contatos</a></li>
                <li class="rd-nav-item active"><a class="rd-nav-link" href="info_socio.php">Seja Sócio</a></li>
              </ul>
              <a class="button button-md button-default-outline-2 button-ujarak" href="logout.php" style="background-color: #107050;">Sair</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <?php while($dado = $result->fetch_array()){ ?>
        <?php echo "<div id='box-".$i."' class='box'>"; ?>
        <p><b>Nome:  </b> <?php echo $dado["nome"]; ?></p>
        <p><b>Sobrenome:  </b><?php echo $dado["sobrenome"]; ?></p>
        <p><b>Nascimento:  </b><?php echo date("d/m/Y", strtotime($dado["nascimento"])); ?></p>
        <p><b>E-mail:  </b><?php echo $dado["email"]; ?></p>
        <p><b>Cidadania:  </b><?php echo $dado["cidadania"]; ?></p>
        <p><b>Endereço:  </b><?php echo $dado["endereco"]; ?></p>
        <p><b>Tipo Local:  </b><?php echo $dado["tipolocal"]; ?></p>
        <p><b>Estado Civil:  </b><?php echo $dado["estadocivil"]; ?></p>
        <p><b>Cidade:  </b><?php echo $dado["cidade"]; ?></p>
        <p><b>Estado:  </b><?php echo $dado["estado"]; ?></p>
        <p><b>CEP:  </b><?php echo $dado["cep"]; ?></p>
        <p><b>RG:  </b><?php echo $dado["rg"]; ?></p>
        <p><b>CPF:  </b><?php echo $dado["cpf"]; ?></p>
        <p><b>Telefone:  </b><?php echo $dado["telefone"]; ?></p>
        <p><b>Celular:  </b><?php echo $dado["celular"]; ?></p>
        <p><b>Disciplina:  </b><?php echo $dado["disciplina"]; ?></p>
        <p><b>Locais de Trabalho:  </b><?php echo $dado["locaisdetrabalho"]; ?></p>
        <p><b>Formação:  </b><?php echo $dado["formacao"]; ?></p>
        <p><b>Outra formação:  </b><?php echo $dado["outros"]; ?></p>
        <p><b>Dependente:  </b><?php echo $dado["dependente1"]; ?></p>
        <p><b>Grau de Parentesco:  </b><?php echo $dado["graudeparentesco1"]; ?></p>
        <p><b>Nascimento:  </b><?php echo $dado["nascimento1"]; ?></p>
        <p><b>Dependente:  </b><?php echo $dado["dependente2"]; ?></p>
        <p><b>Grau de Parentesco:  </b><?php echo $dado["graudeparentesco2"]; ?></p>
        <p><b>Nascimento:  </b><?php echo $dado["nascimento2"]; ?></p>
        <p><b>Dependente:  </b><?php echo $dado["dependente3"]; ?></p>
        <p><b>Grau de Parentesco:  </b><?php echo $dado["graudeparentesco3"]; ?></p>
        <p><b>Nascimento:  </b><?php echo $dado["nascimento3"]; ?></p>
        <p><b>Dependente:  </b><?php echo $dado["dependente4"]; ?></p>
        <p><b>Grau de Parentesco:  </b><?php echo $dado["graudeparentesco4"]; ?></p>
        <p><b>Nascimento:  </b><?php echo $dado["nascimento4"]; ?></p>
        <p><b>Diploma/Holerite:  </b><?php echo $dado["diploma"]; ?></p>
        <p><b>Instituição:  </b><?php echo $dado["instituicao"]; ?></p>
        <p><b>Data:  </b><?php echo date("d/m/Y", strtotime($dado["data"])); ?></p>
        <p><b>Cidade Instituição:  </b><?php echo $dado["cidadeinstituicao"]; ?></p>
        <p><b>Observação:  </b><?php echo $dado["observacao"]; ?></p>
        <?php echo "</div>"; ?>
      <?php } ?>
    </div>
  </main>

  <div class="copyright"
    style="display: flex; justify-content: center; align-items: center; background: #12533d; color: #ffffff;">
    <p>&copy;Sindicato dos Professores de Bauru 2023 - Todos os direitos reservados.</p>
  </div>

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
