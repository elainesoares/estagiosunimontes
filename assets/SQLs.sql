#========================== BANCO DE DADOS GIZ ============================
create database giz;
use giz;

create table aluno(
	id int(8) auto_increment not null,
	matricula int(8) not null,
	nome varchar(60) not null,
	idFkCurso int(4) not null,
	primary key(id),
	foreign key(idFkCurso) references curso(id)
);

create table curso(
	id int(4) auto_increment not null,
	nome varchar(60) not null,
	qtdPeriodos int(2) not null,
	turno varchar(15) not null,
	idFkCampus int(4) not null,
	primary key(id),
	foreign key(idFkCampus) references campus(id)
);

create table campus(
	id int(4) auto_increment not null,
	cidade varchar(30) not null,
	primary key(id)
);

#========================== BANCO DE DADOS GIZ ============================
create database estagiosunimontes;
use estagiosunimontes;

create table usuario(
	id int(8) auto_increment not null,
	nome varchar(60) not null,
	logradouro varchar(60) not null,
	numero int(5) not null,
	complemento varchar(30),
	bairro varchar(30) not null,
	cep varchar(9),
	cidade varchar(30) not null,
	uf char(2) not null,
	usuario varchar(12) not null,
	senha varchar(10) not null,
	email varchar(80) not null,
        webSite varchar(100),
	imagem varchar(100),
	tipo int(1) not null,
	primary key(id)
);

create table telefone(
	id int(2) auto_increment not null,
	telefone varchar(12) not null,
	idFkUsuario int(8) not null,
	primary key(id),
	foreign key(idFkUsuario) references usuario(id)
);

create table empresa(
	id int(4) auto_increment not null,
	horarioFuncionamentoSemanaInicio time,
	horarioFuncionamentoSemanaTermino time,
	horarioFuncionamentoSabadoInicio time,
	horarioFuncionamentoSabadoTermino time,
	cnpj varchar(18) not null,
	informacoesAdicionais varchar(200),
	idFkUsuario int(8) not null,
	primary key(id),
	foreign key(idFkUsuario) references usuario(id)
);

create table setor(
	id int(4) auto_increment not null,
	nome varchar(20) not null,
        usuario varchar(12) not null,
	senha varchar(10) not null,
	idFkEmpresa int(4) not null,
	primary key(id),
	foreign key(idFkEmpresa) references empresa(id)
);

create table vaga(
	id int(8) auto_increment not null,
	salario real not null,
	turnoEstagio varchar(10) not null,
	cargaHoraria int(2) not null,
	conhecimentosRequeridos varchar(500),
	qtdVagas int(2),
	sexoPreferencia varchar(11) not null,
	informacoesAdicionais varchar(100),
	idFkSetor int(4) not null,
	primary key(id),
	foreign key(idFkSetor) references setor(id)
);

create table estudante(
	id int(8) auto_increment not null,
	sexo char(1) not null,
	estadoCivil varchar(10) not null,
	dataDeNascimento date not null,
	empregado char(3) not null,
	situacaoAtual varchar(50) not null,
	periodo int(2) not null,
	conclusaoCurso varchar(7) not null,
	corRaca varchar(20),
	necessidadesEspeciais char(3) not null,
	tipoNecessidade varchar(100) not null,
	curriculoLattes varchar(100),
	outrasInformacoes varchar(300),
	turnoDisponibilidade varchar(11) not null,
	idFkUsuario int(8) not null,
	idFkMatricula int(8) not null,
	primary key(id),
	foreign key(idFkUsuario) references usuario(id),
	foreign key(idFkMatricula) references matricula(id)
);

create table redeSocial(
	id int(5) auto_increment not null,
	nomeRede varchar(20) not null,
	enderecoRede varchar(50) not null,
	idFkEmpresa int(4) not null,
	idFkEstudante int(8) not null,
	primary key(id),
	foreign key(idFkEmpresa) references empresa(id),
	foreign key(idFkEstudante) references estudante(id)
);

create table localTrabalhado(
	id int(5) auto_increment not null,
	empresa varchar(60) not null,
	cidade varchar(30) not null,
	uf char(2) not null,
	primary key(id)	
);

create table vinculo(
	vinculo varchar(14) not null,
	cargo varchar(30) not null,
	inicio varchar(7) not null,
	atual char(1) not null,
	termino varchar(7) not null,
	descricao varchar(200),
	webSite varchar(100) not null,
	cargaHoraria int(2) not null,
	idFkEstudante int(8) not null,
	idFkLocalTrabalhado int(5) not null,
	foreign key(idFkEstudante) references estudante(id),
	foreign key(idFkLocalTrabalhado) references localTrabalhado(id)
);

create table matricula(
	id int(8) auto_increment not null,
	matricula int(8) not null,
	nome varchar(60) not null,
	idFkCurso int(4) not null,
	primary key(id),
	foreign key(idFkCurso) references curso(id)
);

create table curso(
	id int(4) auto_increment not null,
	nome varchar(60) not null,
	qdtPeriodos int(2) not null,
	turno varchar(15) not null,
	idFkCampus int(4) not null,
	primary key(id),
	foreign key(idFkCampus) references campus(id)
);

create table campus(
	id int(4) auto_increment not null,
	cidade varchar(30) not null,
	primary key(id)
);

create table conhecimentoLinguistico(
	leitura varchar(9) not null,
	pronuncia varchar(9) not null,
	escrita varchar(9) not null,
	compreensao varchar(9) not null,
	idFkEstudante int(8) not null,
	idFkIdioma int(2) not null,
	foreign key(idFkEstudante) references estudante(id),
	foreign key(idFkIdioma) references idioma(id)
);

create table idioma(
	id int(2) auto_increment not null,
	idioma varchar(8) not null,
	primary key(id)
);

create table localFormacao(
	id int(5) auto_increment not null,
	local varchar(30) not null,
	primary key(id)
);

create table estudanteFormacao(
	nomeCursoFormacao varchar(30) not null,
	nivel varchar(14) not null,
	status varchar(15) not null,
	inicio varchar(7) not null,
	conclusao varchar(7) not null,
	idFkEstudante int(8) not null,
	idFkLocalFormacao int(5) not null,
	foreign key(idFkEstudante) references estudante(id),
	foreign key(idFkLocalFormacao) references localFormacao(id)
);

#=============================INSERT=======================================