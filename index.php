<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Dra Emily Ferreira - Urologista</title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    <?php include_once 'include/cdns.php'?>
    <?php include_once 'include/infos.php'?>
</head>
<body>
    <header>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-light shadow">
            <div class="container">
                <a class="navbar-brand text-white" href="#sobre-mim"><img src="img/logo-nav.png" alt="" style="width: 48px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre-mim">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#atuacao">Atuação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#depoimentos">Abordagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#depoimentos">Depoimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#agendamento">Agendamento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container-fluid d-flex align-items-end justify-content-center"  id="hero">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-5">
                    <img src="img/logo-emily.png" alt="" class="logo-hero">
                </div>
            </div>
        </section>
        <section id="cta" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Confiança &amp; Cuidado</h5>
                                <p class="card-text">
                                    “Cuidar da saúde urológica é mais do que tratar sintomas. É garantir bem-estar em cada fase da vida, com respeito, acolhimento e dedicação.” - Dra. Emily Ricaldi
                                </p>
                                <a href="#" class="btn">
                                    <i class="bi bi-whatsapp me-2"></i>Agende sua consulta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="atuacao" class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="section-subtitle">Minhas Especialidades</h3>
                        <h2 class="section-title">Excelência em cada área <br> do cuidado urológico</h2>
                    </div>
                </div>

                <div class="row align-items-stretch">
                    <div class="col-xl-4 mb-4 mb-xl-0">
                        <div class="card-descricao">
                            <h4 class="card-descricao-title">Cuidado urológico completo</h4>
                            <p class="card-descricao-text">
                                Atenção especializada em cada fase da sua saúde.
                                Minha especialidade é cuidado humano, tecnologia avançada e acompanhamento
                                próximo para que você se sinta sempre seguro e acolhido.
                            </p>
                            <a href="#" class="btn mt-auto">
                                <i class="bi bi-whatsapp me-2"></i>Agende sua consulta
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="row h-100 align-content-between">
                            <div class="col-6 col-md-3 mb-4">
                                <div class="especialidade-card">
                                    <img src="img/icons/hugeicons_man.png" alt="Urologia masculina" class="especialidade-icon">
                                    <h6 class="especialidade-label">Urologia masculina</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="especialidade-card">
                                    <img src="img/icons/streamline-ultimate_pregnancy-sperm-1.png" alt="Infertilidade" class="especialidade-icon">
                                    <h6 class="especialidade-label">Infertilidade</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="especialidade-card">
                                    <img src="img/icons/hugeicons_woman.png" alt="Urologia feminina" class="especialidade-icon">
                                    <h6 class="especialidade-label">Urologia feminina</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="especialidade-card">
                                    <img src="img/icons/streamline-ultimate_factory-industrial-robot-arm-1.png" alt="Cirurgia robótica" class="especialidade-icon">
                                    <h6 class="especialidade-label">Cirurgia robótica</h6>
                                </div>
                            </div>

                            <div class="col-6 col-md-3"> <div class="especialidade-card">
                                    <img src="img/icons/ph_drop-thin.png" alt="Disfunções urinárias" class="especialidade-icon">
                                    <h6 class="especialidade-label">Disfunções urinárias</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3"> <div class="especialidade-card">
                                    <img src="img/icons/healthicons_prostate-cancer-outline.png" alt="Oncologia urológica" class="especialidade-icon">
                                    <h6 class="especialidade-label">Oncologia urológica</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3"> <div class="especialidade-card">
                                    <img src="img/icons/hugeicons_gem.png" alt="Litíase" class="especialidade-icon">
                                    <h6 class="especialidade-label">Litíase</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3"> <div class="especialidade-card">
                                    <img src="img/icons/healthicons_baby-0203m-outline.png" alt="Urologia pediátrica" class="especialidade-icon">
                                    <h6 class="especialidade-label">Urologia pediátrica</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once 'include/scripts.php'?>

</body>
</html>
