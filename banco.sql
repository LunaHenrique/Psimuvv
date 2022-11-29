create database Psimuvv;
use Psimuvv;
create table paciente(
	idPaciente int not null auto_increment Primary key,
	nomePaciente varchar(100) not null,
    dataNascimento date not null,
    cpfPaciente char(11) not null,
    celularPaciente varchar(15) not null,
    emailPaciente varchar(100) not null,
    senhaPaciente varchar(15) not null,
    mensagemPaciente tinyint(1) null,
    termoPaciente tinyint(1) null
);
create table psicologo(
	idPsicologo int not null auto_increment Primary key,
    nomePsicologo varchar(100) not null,
    dataPsicologo date not null,
	cpfPsicologo char(11) not null,
    crpPsicologo varchar(13) not null,
    celularPsicologo varchar(15) not null,
    emailPsicologo varchar(100) not null,
    senhapsicologo varchar(15) not null,
    mensagemPsicologo tinyint(1) null,
    termoPaciente tinyint(1) null
);
create table depoimento(
	idDepoimento int not null auto_increment Primary key,
    textoDepoimento varchar(1000) not null,
    dataDepoimento date not null
);
create table acolhimento(
	idAcolhimento int not null auto_increment Primary key,
    nomeAcolhimento  varchar(100) not null,
    celular varchar(20) not null,
    emailAcolhimento varchar(100) not null,
    textoAcolhimento varchar(1000) not null
);