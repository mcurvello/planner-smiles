Solução Planner Smiles - Guia de início rápido

O QUE É
A QUEM SE DESTINA / OBJETIVO

O Planner é um serviço Smiles que vai facilitar em tudo a sua próxima viagem. Oferecemos um sistema de planejamento total, começando pelo básico: sua forma de pagamento, com mensalidades destinadas a bater uma meta, incentivando a cultura do longo prazo, e indo além, para todos os detalhes da viagem, com todos os custos, que via de regra são esquecidos, devidamente calculados com o apoio de um usuário Planner Smiles experiente cadastrado na Plataforma.

O usuário ainda conta com Lives Guia de Turismo, imagens 360º dos destinos que planeja, intercâmbio cultural interativo via Facechat, para que o planejamento ou mesmo as dicas sejam feitas em tempo real, conectando destinos e pessoas. 

O Planner também possui sorteios trimestrais, sorteio de viagem antecipada, perfis de usuário, sistema cashback e acesso a vários descontos em empresas parceiras, além de um cartão em sistema cashless. Tudo isso numa interface simples, intuitiva e com acessibilidade.
Planner Smiles: nunca foi tão fácil viajar!

INSTALAÇÃO LOCAL

Instale apache, php e mysql ao seu modo (xampp, wamp ou individual), instale o git;
Em seu servidor local baixe o projeto usando git clone;
Instale database.sql em PHPMyAdmin;

< CRIE O BANCO DE DADOS, DESCRITO LOGO ABAIXO NA SESSÃO "BANCO DE DADOS", ANTES DE INICIAR AS PORTAS DO APACHE E MYSQL >

Com a pasta Smiles instalada na pasta '../xampp/htdocs', inicie o servidor Apache na porta 80 e o MySQL na 3306;
Em seguida, no navegador, digite 'localhost/Smiles' e a página index.php deve abrir.

BIBLIOTECAS DO PROJETO

Foi utilizado para o frontend PHP7, Bootstrap4 e ferramentas como Apache, Xampp e Mysql para testes.

BANCO DE DADOS

Abra o seu banco de dados -> no usuário root, retire a senha, se existir alguma -> Inicie uma nova Query ->

< INICIO QUERY SQL >

CREATE DATABASE smiles;

USE smiles;

CREATE TABLE users(
id int(4) AUTO_INCREMENT,
login varchar(30) NOT NULL,
senha varchar(30) NOT NULL,
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
foto varchar(100) NOT NULL,
descricao varchar(500) NOT NULL,
naturalidade varchar(100),
idiomas varchar(100) NOT NULL,
PRIMARY KEY (id)
);

< FIM QUERY SQL >

Feito isso, você terá como criar um novo usuário através do modal do login, no botão "Conheça o Planner Smiles"

SISTEMA DE TEMPLATE

Escolhi trabalhar com Bootstrap 4 pela facilidade e rapidez no desenvolvimento das páginas. O PHP foi escolhido pela familiaridade com a linguagem e facilidade na renderização de elementos;

MUITO OBRIGADO POR LER ATÉ AQUI

SOBRE OS AUTORES/DESENVOLVEDORES

Marcio Sena Curvello (backend)
Murilo Amaral Inário (frontend)

SOBRE A EQUIPE

Fernanda Mayan Holtz
Fernanda Mikulski Guedes
Luca Guimarães Figueiredo Luz
Marcio Sena Curvello
Murilo Amaral Inácio