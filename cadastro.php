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
    <div class="container">
        <h1 class="mt-6">OQ TU E EIN</h1>

        <button type="button" class="btn bg-primary text-secondary btn-dark btn-lg my-5 btn-outline-light" data-bs-toggle="modal" data-bs-target="#cadastroPaciente">
            Paciente
        </button>

        <button type="button" class="btn bg-primary text-secondary btn-dark btn-lg my-5 btn-outline-light" data-bs-toggle="modal" data-bs-target="#cadastroPsicologo">
            Psicologo
        </button>
    </div>
    
    <div class="modal" id="cadastroPaciente">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Cadastro do Paciente</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Piriri piroro
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn bg-primary text-secondary btn-dark btn-lg btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
    <div class="modal" id="cadastroPsicologo">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Cadastro do Psicologo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Papapa pipipi
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn bg-primary text-secondary btn-dark btn-lg btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
</body>
</html>