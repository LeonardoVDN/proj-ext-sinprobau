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
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      margin: 15px 0;
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input:hover, select:hover, textarea:hover {
      outline: none;
      border: 1px solid rgba(16,112,80,1);
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: rgba(16,112,80,1);
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: rgba(16,112,80,1);
      }
  </style>
</head>

<body>
<?php 
    include('conexao.php');
      try
      {
        $conexao = new PDO($dsn, $usuario, $senha);      
        if(isset($_POST["boto"]))
        {

          $query = "insert into socio (nome, sobrenome, nascimento, email, cidadania, endereco, tipolocal, estadocivil, cidade, estado, cep, rg, cpf, telefone, celular, disciplina, locaisdetrabalho, formacao, outros, dependente1, graudeparentesco1, nascimento1, dependente2, graudeparentesco2, nascimento2, dependente3, graudeparentesco3, nascimento3, dependente4, graudeparentesco4, nascimento4, instituicao, data, cidadeinstituicao, obsevacao) values (:nome, :sobrenome, :nascimento, :email, :cidadania, :endereco, :tipolocal, :estadocivil, :cidade, :estado, :cep, :rg, :cpf, :telefone, :celular, :disciplina, :locaisdetrabalho, :formacao, :outros, :dependente1, :graudeparentesco1, :nascimento1, :dependente2, :graudeparentesco2, :nascimento2, :dependente3, :graudeparentesco3, :nascimento3, :dependente4, :graudeparentesco4, :nascimento4, :instituicao, :data, :cidadeinstituicao, :obsevacao)";
                     
          $stmt = $conexao->prepare($query);
          $stmt->bindValue(':nome', $_POST['nome']);
          $stmt->bindValue(':sobrenome', $_POST['sobrenome']);
          $stmt->bindValue(':nascimento', $_POST['nascimento']);
          $stmt->bindValue(':email', $_POST['email']);
          $stmt->bindValue(':cidadania', $_POST['cidadania']);
          $stmt->bindValue(':endereco', $_POST['endereco']);
          $stmt->bindValue(':tipolocal', $_POST['tipolocal']);
          $stmt->bindValue(':estadocivil', $_POST['estadocivil']);
          $stmt->bindValue(':cidade', $_POST['cidade']);
          $stmt->bindValue(':estado', $_POST['estado']);
          $stmt->bindValue(':cep', $_POST['cep']);
          $stmt->bindValue(':rg', $_POST['rg']);
          $stmt->bindValue(':cpf', $_POST['cpf']);
          $stmt->bindValue(':telefone', $_POST['telefone']);
          $stmt->bindValue(':celular', $_POST['celular']);
          $stmt->bindValue(':disciplina', $_POST['disciplina']);
          $stmt->bindValue(':locaisdetrabalho', $_POST['locaisdetrabalho']);
          $stmt->bindValue(':formacao', $_POST['formacao']);
          $stmt->bindValue(':outros', $_POST['outros']);
          $stmt->bindValue(':dependente1', $_POST['dependente1']);
          $stmt->bindValue(':graudeparentesco1', $_POST['graudeparentesco1']);
          $stmt->bindValue(':nascimento1', $_POST['nascimento1']);
          $stmt->bindValue(':dependente2', $_POST['dependente2']);
          $stmt->bindValue(':graudeparentesco2', $_POST['graudeparentesco2']);
          $stmt->bindValue(':nascimento2', $_POST['nascimento2']);
          $stmt->bindValue(':dependente3', $_POST['dependente3']);
          $stmt->bindValue(':graudeparentesco3', $_POST['graudeparentesco3']);
          $stmt->bindValue(':nascimento3', $_POST['nascimento3']);
          $stmt->bindValue(':dependente4', $_POST['dependente4']);
          $stmt->bindValue(':graudeparentesco4', $_POST['graudeparentesco4']);
          $stmt->bindValue(':nascimento4', $_POST['nascimento4']);
          $stmt->bindValue(':instituicao', $_POST['instituicao']);
          $stmt->bindValue(':data', $_POST['data']);
          $stmt->bindValue(':cidadeinstituicao', $_POST['cidadeinstituicao']);
          $stmt->bindValue(':obsevacao', $_POST['obsevacao']);

          
          $stmt->execute();

          $_lista = $stmt->fetch();
          header('Location: index.html'); 
          exit;
        }
         
      }
      catch(PDOException $e)
      {
        echo 'message' . $e->getMessage();
        echo '<br> Code: ' . $e->getCode();
      }
	  ?>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
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
          <span></span></div>
        <div class="rd-navbar-aside-outer">
          <div class="rd-navbar-aside">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand">
                <!--Brand--><a class="brand" href="index.html"><img src="images/logo2.png" alt="logo" width="225"
                    height="18" /></a>
              </div>
            </div>
            <div class="rd-navbar-aside-right rd-navbar-collapse">
              <ul class="rd-navbar-corporate-contacts">
                <li>
                  <div class="unit unit-spacing-xs">
                    <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                    <div class="unit-body">
                      <p>13:00<span>pm</span> — 17:00<span>pm</span></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-xs">
                    <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                    <div class="unit-body"><a class="link-phone" href="tel:#">+55 14 3879-5313</a></div>
                  </div>
                </li>
              </ul><a class="button button-md button-default-outline-2 button-ujarak" href="socio.html">Seja Sócio</a>
            </div>
          </div>
        </div>
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap">
              <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                <li><a class="icon fa fa-facebook" href="https://www.facebook.com/sinprobauru"></a></li>
                <li><a class="icon fa fa-youtube-play"
                    href="https://www.youtube.com/channel/UCrH5GgS-k0VkvI2xiUqppbA"></a></li>
                <li><a class="icon fa fa-whatsapp" href="https://api.whatsapp.com/send?phone=5514991695995"></a></li>
                <li><a class="icon fa fa-instagram" href="https://www.instagram.com/sinprobau"></a></li>
              </ul>
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="sindicato.html">Sindicato</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="convenios.html">Convênios</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="convencoes.html">Convenções</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Notícias</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="carteirinha_virtual.html">Carteirinha Virtual</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="contato.html">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- Carrossel-->

    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
  </section>
  <!--Informações sobre sindicato-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="row row-sm row-40 row-md-50">
        <div class="col-sm-6 col-md-12 wow fadeInRight ">
          <!-- Product Big-->
          <article class="product-big" style="background-color: #d3cece;">
            <div class="testbox">
              <form method="post">
                <h2>Seja Sócio</h2>    
                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" name="nome" id="inputName" placeholder="Nome">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="nascimento">Nascimento</label>
                    <input type="date" class="form-control" name="nascimento" id="nascimento">
                    </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="exemplo@exemplo.com">
                </div>
                <div class="form-group">
                  <label for="cidadania">Natural de</label>
                  <input type="text" class="form-control" name="cidadania" id="cidadania" placeholder="Cidadania">
                </div>
                <div class="form-group">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua ..., nº 0">
                </div>
                <div class="form-group">
                  <label for="tipolocal">Tipo Local</label>
                  <input type="text" class="form-control" name="tipolocal" id="tipolocal" placeholder="Apartamento, hotel, casa, etc.">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="estadocivil">Estado Civil</label>
                    <select id="estadocivil" name="estadocivil" class="form-control">
                      <option selected>Escolher...</option>
                      <option>Soleiro(a)</option>
                      <option>Casado(a)</option>
                      <option>Viúvo(a)</option>
                      <option>Divorciado(a)</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estado" class="form-control">
                      <option selected>Escolher...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="cep">CEP</label>
                    <input type="number" class="form-control" name="cep" id="cep">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="number" class="form-control" name="rg" id="rg">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" name="cpf" id="cpf">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="number" class="form-control" name="telefone" id="telefone">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="celular">Celular</label>
                    <input type="number" class="form-control" name="celular" id="celular">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="disciplina">Disciplina</label>
                    <input type="text" class="form-control" name="disciplina" id="disciplina">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="locaisdetrabalho">Locais de trabalho</label>
                    <input type="text" class="form-control" name="locaisdetrabalho" id="locaisdetrabalho">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="formacao">Formação</label>
                    <select id="formacao" name="formacao" class="form-control">
                      <option selected>Escolher...</option>
                      <option>Doutorado</option>
                      <option>Mestrado</option>
                      <option>Outros</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="outros">Outros</label>
                  <input type="text" class="form-control" name="outros" id="outros">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="dependente1">Dependente</label>
                    <input type="text" class="form-control" name="dependente1" id="dependente1">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="graudeparentesco1">Grau de Parentesco</label>
                    <input type="text" class="form-control" name="graudeparentesco1" id="graudeparentesco1">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="nascimento1">Nascimento</label>
                    <input type="date" class="form-control" name="nascimento1" id="nascimento1">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="dependente2">Dependente</label>
                    <input type="text" class="form-control" name="dependente2" id="dependente2">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="graudeparentesco2">Grau de Parentesco</label>
                    <input type="text" class="form-control" name="graudeparentesco2" id="graudeparentesco2">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="nascimento2">Nascimento</label>
                    <input type="date" class="form-control" name="nascimento2" id="nascimento2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="dependente3">Dependente</label>
                    <input type="text" class="form-control" name="dependente3" id="dependente3">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="graudeparentesco3">Grau de Parentesco</label>
                    <input type="text" class="form-control" name="graudeparentesco3" id="graudeparentesco3">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="nascimento3">Nascimento</label>
                    <input type="date" class="form-control" name="nascimento3" id="nascimento3">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="dependente4">Dependente</label>
                    <input type="text" class="form-control" name="dependente4" id="dependente4">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="graudeparentesco4">Grau de Parentesco</label>
                    <input type="text" class="form-control" name="graudeparentesco4" id="graudeparentesco4">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="nascimento4">Nascimento</label>
                    <input type="date" class="form-control" name="nascimento4" id="nascimento4">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-7">
                  <label for="instituicao">Instituição</label>
                  <input type="text" class="form-control" name="instituicao" id="instituicao">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-7">
                  <label for="data">Data</label>
                  <input type="date" class="form-control" name="data" id="data">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-7">
                  <label for="cidadeinstituicao">Cidade</label>
                  <input type="text" class="form-control" name="cidadeinstituicao" id="cidadeinstituicao">
                  </div>
                </div>
                <div class="item">
                    <label for="obsevacao">Observações</label>
                    <textarea name="obsevacao" class="form-control" rows="4" id="obsevacao"></textarea>
                </div>
                <div class="btn-block">
                  <button type="button button-md button-default-outline-2 button-ujarak" name="boto" id="boto" >Enviar</button>
                </div>
              </form>
            </div>
          </article>
        </div>
  </section> 
    
  </section>
  <!-- Banner-->
  <section class="section bg-default text-center offset-top-50">
    <div class="parallax-container" data-parallax-img="images/parallax-1-1920x850.jpg">
      <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
        <div class="container">
          <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span
              class="d-block font-weight-semi-bold">First-class Impressions</span><span
              class="d-block font-weight-light">are Waiting for You!</span></h2>
          <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers
            various tours and excursions with destinations all over the world. Browse our website to find your dream
            tour!</p><a class="button button-secondary button-pipaluk" href="#">Book a Tour Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Rodapé-->
  <footer class="section footer-corporate context-dark">
    <div class="footer-corporate-inset">
      <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; flex-direction: column; align-items: center; width: 35%;">
          <div class="logo" style="display: flex; justify-content: center; padding-bottom: 25px;">
            <img src="images/logo1.png" alt="Logo da Empresa" style="width: 60%;">
          </div>
          <div class="patrocinadores" style="display: flex; justify-content: center; align-items: center;">
            <a href="http://contee.org.br/contee/" style="width: 10%;"><img src="images/logo_contee.png" alt="Logo Contee"></a>
            <a href="http://portalctb.org.br/site/" style="width: 10%;"><img src="images/logo_ctb.png" alt="Logo CTB"></a>
            <a href="http://www.fepesp.org.br/" style="width: 10%;"><img src="images/logo_fepesp.jpg" alt="Logo Fepesp"></a>
          </div>
        </div>
        <div class="row row-40 justify-content-lg-between" style="width: 100%;">
          <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
            <div class="oh-desktop">
              <div class="wow slideInRight" data-wow-delay="0s">
                <h6 class="text-spacing-100 text-uppercase">Sindicato dos Professores de Bauru</h6>
                <ul class="footer-contacts d-inline-block d-sm-block">
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">(14) 3879-5313 - (FAX)</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                      <div class="unit-body"><a class="link-aemail" href="#">Mande um E-mail</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                      <div class="unit-body"><a class="link-location" href="#">Rua Capitão Gomes Duarte, 6-74 - Bauru - SP</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright" style="display: flex; justify-content: center; align-items: center; background: #12533d; color: #ffffff;">
    <p>&copy;Sindicato dos Professores de Bauru 2023 - Todos os direitos reservados.</p>
  </div>

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>