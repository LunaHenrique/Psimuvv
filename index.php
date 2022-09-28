<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Psimuvv</title>
</head>
<body>
    <?php
        session_start();
        include 'php/cabecalho.php';
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">adsada
                <h2 class="mt-5" style="text-align: justify;">Violência Doméstica</h2>
                <p class="text-justify text-wrap">Infelizmente, a violência doméstica e familiar contra a mulher ainda é uma realidade no Brasil, já que, por exemplo, 57% dos brasileiros conhecem alguma mulher que foi vítima de ameaça de morte pelo atual parceiro. Nesses casos, a violência pode ser entendida como qualquer ação ou omissão influenciada pelo gênero da vítima que lhe cause  morte, lesão, sofrimento físico, sexual ou psicológico, além de danos morais ou patrimoniais. </p>
                <div class="d-flex justify-content-center">
                    <img src="imagens/grafico.png" alt="Grafico" style="width:300px;">
                </div>

                <hr class="d-sm-none">
            </div>

            <div class="col-sm-6">

                <div class="d-flex justify-content-center">
                    <img class="mt-5 " src="imagens/grafico.png" alt="Grafico" style="width:300px;">
                </div>

                <h2>Por que fazer terapia?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ut pharetra mattis justo ornare auctor.
                    Fusce cursus et tortor pharetra placerat.
                    Vestibulum feugiat id mi condimentum iaculis.
                    Vestibulum sit amet enim tortor.
                    Cras vitae cursus ante, id interdum ipsum.
                    Nullam vehicula neque ac velit condimentum fringilla.
                    Sed cursus, ex quis pellentesque feugiat, tortor orci suscipit eros, in sodales neque nunc scelerisque turpis.
                    Phasellus metus metus, porta vel interdum ut, facilisis convallis lacus.
                    Mauris molestie mollis vestibulum. Morbi sit amet elementum lorem.
                    Pellentesque pulvinar nibh ac facilisis rutrum. Ut iaculis tortor vel euismod pharetra.</p>
            </div>
        </div>
        <div class="row">
            <div class="container d-flex justify-content-center">
                <a href="#" class="bg-primary text-secondary btn btn-dark btn-lg my-5 btn-outline-light"> Consulta</a>
            </div>
        </div>
    </div>

</body>
</html>