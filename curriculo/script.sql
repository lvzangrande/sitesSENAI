create table if not exists dados_pessoais(

	nome VARCHAR(100) NOT NULL UNIQUE,

	cargo VARCHAR(100),

	resumo VARCHAR(300),

	grau_formacao ENUM(

	"Curso Livre", 

	"Qualificação Profissional"

	,"Ensino Fundamental", 

	"Ensino Médio",

	"Curso Técnico", 

	"Tecnólogo", 

	"Licenciatura", 

	"Bacharelado", 

	"Especialização", 

	"MBA", 

	"Residência", 

	"Mestrado",

	"Doutorado", 

	"Pós-Doutorado"

	) null,

);



create table if not exists contatos(

	email varchar(100) not null,

	telefone varchar(20) not null,

	portifolio varchar(400) null

);



create table if not exists experiencias(

	empresa varchar(100) null,

	funcao varchar(100) null,

	periodo DATE null,

	descricao varchar(400) null

);



create table if not exists formacao(

	

	instituicao VARCHAR(120) null,

	nome_curso VARCHAR(150) null, 

	

	grau ENUM(

	"Curso Livre", 

	"Qualificação Profissional"

	,"Ensino Fundamental", 

	"Ensino Médio",

	"Curso Técnico", 

	"Tecnólogo", 

	"Licenciatura", 

	"Bacharelado", 

	"Especialização", 

	"MBA", 

	"Residência", 

	"Mestrado",

	"Doutorado", 

	"Pós-Doutorado"

	) null,

	

	periodo varchar(100) null
);