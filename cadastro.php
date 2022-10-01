<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css\estilo.css">
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
<div>
    <h1 class="text-center">Cadastro</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <div class="card mx-auto bg-primary border border-0" style="width:250px;">
                    <img class="card-img-top" src="imagens/paciente.png">
                    <div class="card-header"> <h4 class="text-center">Paciente<h4></div>
                    <div class="card-body">
                        <p>Torne-se uma paciente e comece seu tratamento!</p>
                        <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPaciente">
                            iniciar
                        </button>
                    </div>
                </div>
            </div> 
            <div class="col-sm-6">
                <br>
                <div class="card mx-auto bg-primary border border-0" style="width:250px;">
                    <img class="card-img-top" src="imagens/psicologo.png">
                    <div class="card-header"><h4 class="text-center">Psicólogo<h4></div>
                    <div class="card-body">
                        <p>Junte-se a nossa equipe de psicológos agora!</p>
                    <div class="card-footer>">
                        <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPsicologo">
                            Iniciar
                        </button>
                    </div>
                    </div>
                </div>
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
                <div class="mb-3 mt-3 form-floating">
                    <input type="text" class="form-control" id="nome" placeholder="Big Yoshi da Silva" name="nome">
                    <label for="nome" class="form-label">Nome completo</label>
                    
                </div>

                <div class="mb-3 form-floating">
                    <input type="date" class="form-control" id="nasc" name="nasc">
                    <label for="nome" class="form-label">Data de nascimento</label>
                </div>

                <div class="mb-3 form-floating">  
                    <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" id="cpf" placeholder="000.000.000-00" name="cpf">
                    <label for="cpf" class="form-label">CPF</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" onkeypress="$(this).mask('(00) 00000-0000');" id="cel" placeholder="(00) 00000-0000" name="cel">
                    <label for="cel" class="form-label">Celular</label>
                </div>
                
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="password" class="form-control" id="senha" placeholder="*********" name="senha">
                    <label for="senha" class="form-label">Senha:</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="mensagens" placeholder="" name="mensagens" value="sim">
                    <label for="mensagens" class="form-check-label">Aceito receber mensagens da equipe do Psimuvv</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termo" placeholder="" name="termo" value="sim">
                    <label for="termo" class="form-check-label">Aceito os termos e condições</label>
                </div>
                <button type="submit" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-dismiss="modal">Enviar</button>

            </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <p>Não roubamos seus dados (confia)</p>
            </div>

            </div>
        </div>
    </div>
    <div class="modal" id="cadastroPsicologo">
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
                <div class="mb-3 mt-3 form-floating">
                    <input type="text" class="form-control" id="nome" placeholder="Big Yoshi da Silva" name="nome">
                    <label for="nome" class="form-label">Nome completo</label>
                    
                </div>

                <div class="mb-3 form-floating">
                    <input type="date" class="form-control" id="nasc" name="nasc">
                    <label for="nome" class="form-label">Data de nascimento</label>
                </div>

                <div class="mb-3 form-floating">  
                    <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" id="cpf" placeholder="000.000.000-00" name="cpf">
                    <label for="cpf" class="form-label">CPF</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" onkeypress="$(this).mask('(00) 00000-0000');" id="cel" placeholder="(00) 00000-0000" name="cel">
                    <label for="cel" class="form-label">Celular</label>
                </div>
                
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="password" class="form-control" id="senha" placeholder="*********" name="senha">
                    <label for="senha" class="form-label">Senha:</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="mensagens" placeholder="" name="mensagens" value="sim">
                    <label for="mensagens" class="form-check-label">Aceito receber mensagens da equipe do Psimuvv</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termo" placeholder="" name="termo" value="sim">
                    <label for="termo" class="form-check-label">Aceito os termos e condições</label>
                </div>
                <button type="submit" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-dismiss="modal">Enviar</button>

            </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <p>Não roubamos seus dados (confia)</p>
            </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>