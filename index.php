<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css\estilo.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Psimuvv</title>
</head>
<body>
<!-- CABEÇALHO -->
<section id="cabeçalho">
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark mb-5 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="imagens/Logo.png" alt="Psimuvv" style="width:50px;"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">Consulta</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">Nossa Equipe</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#sobre-nos">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary" href="#perfil">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<!-- INICIO -->
<section id="inicio" class="container my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 style="text-align: justify;">Violência Doméstica</h2>
                <p class="text-justify text-wrap">Infelizmente, a violência doméstica e familiar contra a mulher ainda é uma realidade no Brasil, já que, por exemplo, 57% dos brasileiros conhecem alguma mulher que foi vítima de ameaça de morte pelo atual parceiro. Nesses casos, a violência pode ser entendida como qualquer ação ou omissão influenciada pelo gênero da vítima que lhe cause  morte, lesão, sofrimento físico, sexual ou psicológico, além de danos morais ou patrimoniais. </p>
                <div class="d-flex justify-content-center tipos-violencia">
                    <img src="imagens\violencia-domestica.png" alt="Grafico" style="width:400px;">
                </div>
                <hr class="d-sm-none">
            </div>

            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <img class="mt-5 " src="imagens\por-que-terapia.png" alt="Grafico" style="width:400px;">
                </div>
                <h2>Por que fazer terapia?</h2>
                <p>Muitas pessoas acham que terapia é “coisa de doido”, “frescura” ou só uma “conversinha”, mas terapia é um ambiente livre de julgamentos e seguro em que você e seu pscicoterapeuta/psicólogo caminharão juntos em direção à melhora da sua saúde mental e qualidade de vida. </p>
            </div>
        </div>
        <div class="row">
            <div class="container d-flex justify-content-center">
                <a href="#" class="bg-primary text-secondary btn btn-dark btn-lg my-5 btn-outline-light"> Consulta</a>
            </div>
        </div>
    </div>
</section>

<!-- NOSSA EQUIPE -->
<section id="nossa-equipe"  class="container my-5">
    <h1 class="text-center">Nossa Equipe</h1>
    <p class="text-center">Conheça nossos profissionais voluntários que estão aqui para te acolher.
    <div class="row">
        <div class="col-sm-6 mb-2">
            <div id="card-nossa-equipe" class="card mx-auto bg-primary border border-0">
                <div class="card-body" id="card-body-nossa-equipe">
                    <div class="row">
                        <div class="col-1"><img class="card-img-top" id="card-img-nossa-equipe" src="imagens/depoimentos-6.png"></div>
                        <div class="col-11">
                            <h3 class="mt-3">Big Yoshi</h3>
                            <p>CRP: 22/242429<p>
                            <p>Abordagem: TCC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="card-nossa-equipe" class="card mx-auto bg-primary border border-0">
                <div class="card-body" id="card-body-nossa-equipe">
                    <div class="row">
                        <div class="col-1"><img class="card-img-top" id="card-img-nossa-equipe" src="imagens/depoimentos-6.png"></div>
                        <div class="col-11">
                            <h3 class="mt-3">Big Yoshi</h3>
                            <p>CRP: 22/242429<p>
                            <p>Abordagem: TCC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- LOGIN E CADASTRO -->
<section id="perfil" class="container my-5">
    <h1 class="text-center">Perfil</h1>

    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-4">
                <br>
                <div class="card mx-auto bg-primary border border-0" style="width:250px;">
                    <img class="card-img-top" src="imagens/login.png">
                    <div class="card-header"> <h4 class="text-center">Login<h4></div>
                    <div class="card-body">
                        <p>Ja tenho conta e quero começar meu tratamento!</p>
                        <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalLogin">
                            Entrar
                        </button>
                    </div>
                </div>
            </div> 
            <div class="col-sm-4">
                <br>
                <div class="card mx-auto bg-primary border border-0" style="width:250px;">
                    <img class="card-img-top" src="imagens/paciente.png">
                    <div class="card-header"> <h4 class="text-center">Paciente<h4></div>
                    <div class="card-body">
                        <p>Torne-se uma paciente e comece seu tratamento!</p>
                        <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPaciente">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div> 
            <div class="col-sm-4">
                <br>
                <div class="card mx-auto bg-primary border border-0" style="width:250px;">
                    <img class="card-img-top" src="imagens/psicologo.png">
                    <div class="card-header"><h4 class="text-center">Psicólogo<h4></div>
                    <div class="card-body">
                        <p>Junte-se a nossa equipe de psicológos agora!</p>
                    <div class="card-footer>">
                        <button type="button" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-toggle="modal" data-bs-target="#cadastroPsicologo">
                            Cadastrar
                        </button>
                    </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <!-- MODALS -->
    <div class="modal" id="modalLogin">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email">
                        <label for="email" class="form-label">Email:</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" class="form-control" id="senha" placeholder="*********" name="senha">
                        <label for="senha" class="form-label">Senha:</label>
                    </div>
                    <button type="submit" class="btn btn-dark bg-primary text-secondary btn-lg btn-outline-light mx-auto d-block" data-bs-dismiss="modal">Entrar</button>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <p>Não roubamos seus dados (confia)</p>
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
                <h4 class="modal-title">Cadastro do Psicólogo</h4>
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
                    <input type="text" class="form-control" id="crp" placeholder="12345678" name="crp">
                    <label for="crp" class="form-label">CRP</label>
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
</section>

<!-- DEPOIMENTOS -->
<section id="depoimentos" class="container my-5">
    <div class="row">
            <div class="col-sm-12">
                <h2>Depoimentos</h2>
                
        <!-- CARROSEL DOS DEPOIMENTOS, MUITO COMPLICADO CUIDADO PRA NÃO QUEBRAR -->
        <div id="depoimentos-carrosel" class="carousel slide px-5" data-bs-ride="carousel">

            <!-- Indicadores/Pontinhos -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#depoimentos-carrosel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#depoimentos-carrosel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#depoimentos-carrosel" data-bs-slide-to="2"></button>
            </div>

            <!-- Os Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3">
                        <div id="card-depoimentos" class="card-body"> 
                            <h4 id="card-depoimentos-data">Anônima</h4> <span>23/13/2023</span>
                            <p>Depois que as consultas começaram a minha qualidade de vida melhorou em 100%, graças às consultas pude compreender que eu não tive culpa nenhuma pela violência que sofri. Os psicólogos são muito acolhedores e atenciosos, e eu sou muito grata por terem me ouvido. Se você está com medo de se consultar, fique tranquila, aqui você será acolhida e ajudada! Muito obrigado por toda a ajuda, super recomendo a plataforma! </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div id="card-depoimentos" class="card-body"> 
                            <h4  id="card-depoimentos-data">Anônima</h4> <span>30/02/2022</span>
                            <p>Nunca imaginei que fazer terapia seria tão bom para mim, eu tinha o preconceito de que terapia era algo para doidos, mas eu estava errada, todos precisam de terapia, ainda mais depois de passar por uma situação traumática como eu passei. Eu tive muito medo de me cadastrar na plataforma, mas depois de ler o depoimento de outra paciente, finalmente criei coragem e foi a melhor coisa que já fiz. Graças a ajuda dos psicólogos tenho conseguido superar tudo que me aconteceu no passado, gostaria de agradecer por todo acolhimento e compreensão que eu encontrei aqui. Também gostaria de agradecer aos criadores da plataforma, porque eu jamais teria como pagar essas consultas, ainda mais depois da pandemia, então novamente muito obrigado! Recomendo a plataforma e te digo que não tenha medo de se cadastrar e consultar. </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div id="card-depoimentos" class="card-body"> 
                            <h4 id="card-depoimentos-data">Anônima</h4> <span>21/00/2010</span>
                            <p>Iniciar esse tratamento foi a melhor coisa que eu já fiz por mim, em muito tempo.Eu cheguei a essa plataforma e as consultas, cheia de receios e traumas, e assim que comecei o tratamento todos os meus receios sumiram- aqui eu encontrei psicólogos profissionais que estão dispostos a ouvir, aconselhar e ajudar todas as suas pacientes, embora as consultas sejam online parece que eles na sala de casa, de tão acolhida que eu me sinto- e aos poucos- porque eu sei que vai levar tempo- todos os meus traumas e medos estão indo embora. Muito obrigado por todo serviço prestado, tanto pelos psicólogos quanto pelos desenvolvedores dessa plataforma- porque eu não teria condições financeiras para arcar com o valor das consultas. Recomendo a plataforma e tive uma ótima experiência!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controles de Esquerda e Direita -->
            <button class="carousel-control-prev" type="button" data-bs-target="#depoimentos-carrosel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#depoimentos-carrosel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            </div>
        </div>
    </div>
</section>

<!-- SOBRE NÓS -->
<section id="sobre-nos" class="container my-5">
    <div class="row">
        <div class="col-sm-12">
            <h2>Sobre Nós</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <p class="sobre-nos-texto">O Psimuvv foi desenvolvido a partir do trabalho de conclusão de cinco alunos, no âmbito da disciplina de Projeto Integrador, do curso técnico de Informática para Internet do Instituto Federal de São Paulo - São Miguel Paulista. A ideia do projeto foi retribuir à comunidade exterior o conhecimento adquirido na instituição, bem como  exercer os aprendizados obtidos nas disciplinas técnicas do curso. Para isso, a plataforma foi pensada para atender psicologicamente, de modo gratuito e a distância, mulheres vítimas de violência doméstica e familiar a fim de que essas possam recuperar sua saúde mental. </p>
        </div>
        <div class="col-sm-3">
            <div id="card-sobre-nos" class="card mb-3">
                <div id="card-sobre-nos" class="card-body"> 
                    <h4 class="card-title">Links Úteis</h4>
                    <a class="card-link" href="https://atosoficiais.com.br/cfp/resolucao-do-exercicio-profissional-n-4-2020-dispoe-sobre-regulamentacao-de-servicos-psicologicos-prestados-por-meio-de-tecnologia-da-informacao-e-da-comunicacao-durante-a-pandemia-do-covid-19">
                        Resolução CFP n°04/2020</a> <br>
                    <a class="card-link" href="https://mdh.metasix.solutions/portal/servicos/informacao?t=86&servico=235" >
                        Ligue 180 - Canal de denúncia</a> <br>
                    <a class="card-link" href="https://cadastro.cfp.org.br/" >
                        Consulte o CRP do profissional</a> <br>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div id="card-sobre-nos" class="card">
                <div id="card-sobre-nos" class="card-body"> 
                    <h4 class="card-title">Membras do Desenvolvimento</h4>
                    <ul>
                        <li>Ana Carolina</li>
                        <li>Laura Martins</li>
                        <li>Lucas Henrique</li>
                        <li>Sarah Fernandes</li>
                        <li>Iury Santos</li>
                        <li>Lucas Benati</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>