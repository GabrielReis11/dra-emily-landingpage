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
    <title>Supremo CRM</title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    <?php include_once 'include/cdns.php'?>
    <?php include_once 'include/infos.php'?>
</head>
<body>
    <header>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container d-flex justify-content-between align-items-center">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <img src="img/logo-supremo.png" alt="Logo Supremo CRM">
                <div>
                    <a href="tel:+5511999999999" class="btn"><i class="fa-brands fa-whatsapp me-1"></i>(45) 9875-4321</a>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="hero">
            <div class="filtro-preto"></div>
            <div class="container infos-hero">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-10">
                        <h1 class="titulo-hero">Imóveis na Praia Brava e <br> Fazenda em Intajaí</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="conheca-imoveis">
            <div class="contaier">
                <div class="row">
                    <div class="col-12">
                        <h2>Conheça nossos Imóveis</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once 'include/scripts.php'?>
</body>
</html>
