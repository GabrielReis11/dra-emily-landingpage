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
                            <a class="nav-link " href="#atuacao">Atuação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre-mim">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#agendamento">Agendamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#depoimentos">Depoimentos</a>
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
                                <a href="https://wa.me/+557197103059" class="btn">
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
                            <a href="https://wa.me/+557197103059" class="btn mt-auto">
                                <i class="bi bi-whatsapp me-2"></i>Agende sua consulta
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="row h-100 align-content-between">

                            <?php
                            // O array $especialidades está vindo do 'include/infos.php'

                            // Loop para gerar os cards
                            foreach ($especialidades as $index => $especialidade):

                                // --- INÍCIO DA NOVA LÓGICA DE CLASSES ---

                                // Classes base da grid
                                $column_classes = "col-6 col-md-3";

                                // Lógica de Margem para MOBILE (2 colunas)
                                // Adiciona 'mb-4' para todos, EXCETO os 2 últimos (index 6 e 7), que são a última fileira.
                                if ($index < 6) {
                                    $column_classes .= " mb-4";
                                }

                                // Lógica de Margem para DESKTOP (4 colunas)
                                // Adiciona 'mb-md-4' para os 4 primeiros (fileira de cima)
                                // Adiciona 'mb-md-0' para os 4 últimos (fileira de baixo),
                                // para sobrescrever o 'mb-4' do mobile (se houver).
                                if ($index < 4) {
                                    $column_classes .= " mb-md-4";
                                } else {
                                    $column_classes .= " mb-md-0";
                                }
                                // --- FIM DA NOVA LÓGICA DE CLASSES ---
                                ?>

                                <div class="<?= $column_classes ?>">
                                    <div class="especialidade-card">
                                        <img src="img/icons/<?= htmlspecialchars($especialidade['icon']) ?>"
                                             alt="<?= htmlspecialchars($especialidade['alt']) ?>"
                                             class="especialidade-icon">
                                        <h6 class="especialidade-label"><?= htmlspecialchars($especialidade['label']) ?></h6>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sobre-mim" class="py-5 py-md-6"> <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 order-lg-2">
                        <div class="sobremim-content">

                            <div class="sobremim-title-wrapper">
                                <img src="img/logo-sobremim.png" alt="" class="logo-sobremim">
                                <div>
                                    <h3 class="section-subtitle mb-0">Muito prazer, sou a</h3>
                                    <h2 class="section-title">Dra. Emily Ricaldi</h2>
                                </div>
                            </div>

                            <ul class="sobremim-list">
                                <li>Graduação em Medicina pela Universidade Salvador - UNIFACS</li>
                                <li>Residência Médica em Cirurgia Geral pelo Hospital Universitário da Universidade Federal de Sergipe - UFS/SE</li>
                                <li>Residência Médica em Urologia pelas Obras Sociais Irmã Dulce - OSID/BA</li>
                                <li>Certificação em Cirurgia Robótica pela Intuitive.</li>
                            </ul>

                            <a href="https://wa.me/+557197103059" target="_blank" class="btn-sobremim">
                                <i class="bi bi-whatsapp me-2"></i>Entre em Contato
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-1 mb-4 mb-lg-0">
                        <img src="img/emily-sobremim.png" alt="Dra. Emily Ricaldi" class="img-fluid img-sobremim">
                    </div>

                </div>
        </section>
        <section id="agendamento" class="py-5">
            <div class="container">

                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h3 class="section-subtitle">Locais de Atendimento</h3>
                        <h2 class="section-title">Encontre o consultório mais próximo e<br>tenha cuidado especializado ao seu alcance.</h2>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="cidade-title">Aracaju</h2>
                    </div>
                </div>

                <div class="row mb-4">
                    <?php
                    // Loop para os locais de Aracaju (usa $locais_aracaju)
                    foreach ($locais_aracaju as $local):
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="local-card">
                                <img src="img/locais-atendimento/aracaju/<?= htmlspecialchars($local['img']) ?>"
                                     alt="<?= htmlspecialchars($local['alt']) ?>" class="local-card-img">
                                <div class="local-card-body">
                                    <h5 class="local-card-title"><?= htmlspecialchars($local['titulo']) ?></h5>
                                    <p class="local-card-info">
                                        <i class="bi bi-geo-alt-fill me-2"></i><?= htmlspecialchars($local['endereco']) ?>
                                    </p>
                                    <p class="local-card-info">
                                        <i class="bi bi-telephone-fill me-2"></i><?= htmlspecialchars($local['telefone']) ?>
                                    </p>
                                    <div class="local-card-buttons">
                                        <a href="https://wa.me/+557197103059" target="_blank" class="btn-local btn-local-primary">Agende sua consulta</a>

                                        <a href="#" class="btn-local btn-local-secondary"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-<?= htmlspecialchars($local['id']) ?>">
                                            Consultar convênios
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="cidade-title">Salvador</h2>
                    </div>
                </div>

                <div class="row">
                    <?php
                    // Loop para os locais de Salvador (usa $locais_salvador)
                    foreach ($locais_salvador as $local):
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="local-card">
                                <img src="img/locais-atendimento/salvador/<?= htmlspecialchars($local['img']) ?>"
                                     alt="<?= htmlspecialchars($local['alt']) ?>" class="local-card-img">
                                <div class="local-card-body">
                                    <h5 class="local-card-title"><?= htmlspecialchars($local['titulo']) ?></h5>
                                    <p class="local-card-info">
                                        <i class="bi bi-geo-alt-fill me-2"></i><?= htmlspecialchars($local['endereco']) ?>
                                    </p>
                                    <p class="local-card-info">
                                        <i class="bi bi-telephone-fill me-2"></i><?= htmlspecialchars($local['telefone']) ?>
                                    </p>
                                    <div class="local-card-buttons">
                                        <a href="https://wa.me/+557197103059" target="_blank" class="btn-local btn-local-primary">Agende sua consulta</a>

                                        <a href="#" class="btn-local btn-local-secondary"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-<?= htmlspecialchars($local['id']) ?>">
                                            Consultar convênios
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <section id="depoimentos" class="py-5">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="depoimentos-title">o que meus pacientes<br>podem te contar?</h2>
                        <p class="depoimentos-text">
                            Relatos reais que refletem cuidado, dedicação e confiança em cada etapa do
                            tratamento. Estou pronta para cuidar de você também, entre em contato!
                        </p>

                        <a href="https://wa.me/+557197103059" class="link-agendamento"> <i class="bi bi-calendar-check me-2"></i>Agende sua consulta
                        </a>
                    </div>

                    <div class="col-lg-8">
                        <div class="owl-carousel owl-theme">

                            <?php
                            foreach ($depoimentos as $depoimento):
                                ?>

                                <div class="item">
                                    <div class="testimonial-card">
                                        <div class="card-header">
                                            <img src="img/logo-nav.png" alt="" class="testimonial-header-logo">
                                            Dra. Emily Ricaldi
                                        </div>
                                        <div class="card-body">
                                            <i class="bi bi-quote quote-icon"></i>
                                            <p class="card-text">
                                                <?= htmlspecialchars($depoimento['depoimento']) ?>
                                            </p>
                                        </div>
                                        <div class="card-author">
                                            <i class="bi bi-person-circle me-3"></i>
                                            <div>
                                                <strong><?= htmlspecialchars($depoimento['nome']) ?>, <?= htmlspecialchars($depoimento['idade']) ?></strong>
                                                <span><?= htmlspecialchars($depoimento['local']) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once 'include/scripts.php'?>
    <?php
    // Junta os dois arrays de locais em um só
    $todos_locais = array_merge($locais_aracaju, $locais_salvador);

    // Faz um único loop para gerar todos os modais
    foreach ($todos_locais as $local):
        ?>

        <div class="modal fade" id="modal-<?= htmlspecialchars($local['id']) ?>" tabindex="-1" aria-labelledby="label-<?= htmlspecialchars($local['id']) ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="label-<?= htmlspecialchars($local['id']) ?>">Convênios - <?= htmlspecialchars($local['titulo']) ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="img/convenios/<?= htmlspecialchars($local['img_convenio']) ?>" alt="Convênios - <?= htmlspecialchars($local['titulo']) ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</body>
</html>
