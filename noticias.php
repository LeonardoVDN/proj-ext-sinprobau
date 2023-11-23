﻿<!DOCTYPE html>
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

        .box {
            margin-top: 15px;
            margin-bottom: 15px;
            border: 1px solid;
        }
        
        .noticia {
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .foto {
            display: flex;
            justify-content: center;
        }

        .ntc {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <!--Cabeçalho-->
    <header class="section page-header">
        <!-- Cabeçalho RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px"
                data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                    data-rd-navbar-toggle=".rd-navbar-collapse">
                    <span></span>
                </div>
                <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand--><a class="brand" href="index.html"><img src="images/logo2.png" alt="logo"
                                        width="225" height="18" /></a>
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
                                        <div class="unit-body"><a class="link-phone" href="tel:#">+55 14 3879-5313</a>
                                        </div>
                                    </div>
                                </li>
                            </ul><a class="button button-md button-default-outline-2 button-ujarak"
                                href="socio.php">Seja Sócio</a>
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
                                <li><a class="icon fa fa-whatsapp"
                                        href="https://api.whatsapp.com/send?phone=5514991695995"></a></li>
                                <li><a class="icon fa fa-instagram" href="https://www.instagram.com/sinprobau"></a></li>
                            </ul>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="sindicato.html">Sindicato</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="convenios.html">Convênios</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="convencoes.html">Convenções</a>
                                </li>
                                <li class="rd-nav-item active"><a class="rd-nav-link" href="noticias.php">Notícias</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link"
                                        href="carteirinha_virtual.html">Carteirinha Virtual</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="contato.php">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<?php
  include('conexao.php'); 
?>

<?php
  if(isset($_REQUEST["idAlt"]))
  {
    $idAlt = $_REQUEST["idAlt"];

    setcookie("Historico[$idAlt]", $idAlt, time()+60*60*24*30);
  }
?>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php   

    $sql = mysqli_query($conn, "SELECT * FROM noticias");            
    while($linha = mysqli_fetch_array($sql))
    {
      echo "<div class='container box'>
                <div class='row mb-2 noticia'>
                    <div class='foto col-md-6'>
                        <img src=imagem/".$linha['imagem']."></img>
                    </div>
                    <div class='dados col-md-6'>
                        <h4 class='titulo'>".$linha['titulo']."</h4>
                        <p>".$linha['data']."</p>
                        <p class = 'ntc'>".$linha['noticia']."</p>
                        <a href=".$linha['link'].">".$linha['link']."</a>   
                    </div>
                </div>
            </div>";
    }
    echo "<br><br><div class=' text-center'><strong><p>Não há mais noticias </p></strong></div>";                  
?> 
    <!--Rodapé-->
    <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; flex-direction: column; align-items: center; width: 35%;">
                    <div class="logo" style="display: flex; justify-content: center; padding-bottom: 25px;">
                        <img src="images/logo1.png" alt="Logo da Empresa" style="width: 60%;">
                    </div>
                    <div class="patrocinadores" style="display: flex; justify-content: center; align-items: center;">
                        <a href="http://contee.org.br/contee/" style="width: 10%;"><img src="images/logo_contee.png"
                                alt="Logo Contee"></a>
                        <a href="http://portalctb.org.br/site/" style="width: 10%;"><img src="images/logo_ctb.png"
                                alt="Logo CTB"></a>
                        <a href="http://www.fepesp.org.br/" style="width: 10%;"><img src="images/logo_fepesp.jpg"
                                alt="Logo Fepesp"></a>
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
                                            <div class="unit-body"><a class="link-phone" href="tel:#">(14) 3879-5313 -
                                                    (FAX)</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                            <div class="unit-body"><a class="link-aemail" href="#">Mande um E-mail</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                            <div class="unit-body"><a class="link-location" href="#">Rua Capitão Gomes
                                                    Duarte, 6-74 - Bauru -
                                                    SP</a></div>
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