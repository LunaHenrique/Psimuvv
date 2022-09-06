<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Psimuvv</title>
</head>
<body>
    <?php
        session_start();
        include 'php/cabecalho.php';
    ?>
    <h1 class="text-center">Cadastro</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 center-block">
                <img class="mt-5 mx-auto d-block " src="imagens/placeholder.jpg" alt="Paciente" style="width:200px;">

                <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPaciente">
                    Paciente
                </button>
            </div>

            <div class="col-sm-6 center-block">
                <img class="mt-5 mx-auto d-block " src="imagens/placeholder.jpg" alt="Psicologo" style="width:200px;">

                <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPsicologo">
                    Psicologo
                </button>
            </div>   
        </div>
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
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="nome" placeholder="Big Yoshi da Silva" name="nome">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control"onkeypress="$(this).mask('000.000.000-00');" id="cpf" placeholder="000.000.000-00" name="cpf">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha-Segura-123" name="senha">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
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