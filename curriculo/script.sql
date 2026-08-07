CREATE TABLE IF NOT EXISTS dados_pessoais (
    nome VARCHAR(100) NOT NULL UNIQUE,
    cargo VARCHAR(100),
    resumo VARCHAR(300),
    grau_formacao ENUM(
        'Curso Livre', 
        'Qualificação Profissional',
        'Ensino Fundamental', 
        'Ensino Médio',
        'Curso Técnico', 
        'Tecnólogo', 
        'Licenciatura', 
        'Bacharelado', 
        'Especialização', 
        'MBA', 
        'Residência', 
        'Mestrado',
        'Doutorado', 
        'Pós-Doutorado'
    ) NULL,
    img_user VARCHAR(255) NULL
);

CREATE TABLE IF NOT EXISTS contatos (
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    portifolio VARCHAR(400) NULL
);

CREATE TABLE IF NOT EXISTS experiencias (
    empresa VARCHAR(100) NULL,
    funcao VARCHAR(100) NULL,
    inicio VARCHAR(50) NULL, 
    fim VARCHAR(50) NULL,  
    descricao VARCHAR(400) NULL
);

CREATE TABLE IF NOT EXISTS formacao (
    instituicao VARCHAR(120) NULL,
    nome_curso VARCHAR(150) NULL, 
    grau ENUM(
        'Curso Livre', 
        'Qualificação Profissional',
        'Ensino Fundamental', 
        'Ensino Médio',
        'Curso Técnico', 
        'Tecnólogo', 
        'Licenciatura', 
        'Bacharelado', 
        'Especialização', 
        'MBA', 
        'Residência', 
        'Mestrado',
        'Doutorado', 
        'Pós-Doutorado'
    ) NULL,
    inicio VARCHAR(50) NULL,   
    conclusao VARCHAR(50) NULL 
);

-- INSERTS

INSERT INTO dados_pessoais (nome, cargo, resumo, grau_formacao, img_user) 
VALUES (
    'Lucas Vieira Zangrande', 
    'Desenvolvedor Full Stack | Vendedor', 
    'Estudante de Téc. em Análise e Desenv. de Sistemas (SENAI) e Téc. em Vendas. Conhecimentos em dev web, banco de dados, versionamento, lógica e área comercial. Busco a primeira oportunidade profissional para aplicar conhecimentos e agregar aos resultados da empresa.', 
    'Curso Técnico',
    'foto_default.jpg' 
);

INSERT INTO contatos (email, telefone, portifolio) 
VALUES (
    'zangrande360@gmail.com', 
    '(11) 93939-1905', 
    'https://github.com/lvzangrande'
);

INSERT INTO experiencias (empresa, funcao, inicio, fim, descricao) 
VALUES (
    'YouTube (Freelancer)', 
    'Editor de Vídeo', 
    'Jan. 2026', 
    'Jun. 2026', 
    'Edição e pós-produção de conteúdo audiovisual para canal de empreendedorismo utilizando DaVinci Resolve. Sincronização de efeitos, correção de imagem, design de som e animações 2D/3D.'
);

INSERT INTO experiencias (empresa, funcao, inicio, fim, descricao) 
VALUES (
    'Atuação Informal', 
    'Vendedor e Atendente', 
    NULL, 
    NULL, 
    'Atuação em atividades nas áreas de vendas, atendimento ao público, restaurante, lava-rápido e montagem e monitoramento de brinquedos infláveis.'
);

INSERT INTO formacao (instituicao, nome_curso, grau, inicio, conclusao) 
VALUES (
    'SENAI Armando de Arruda Pereira', 
    'Análise e Desenvolvimento de Sistemas', 
    'Curso Técnico', 
    'Jun. 2025', 
    'Cursando'
);

INSERT INTO formacao (instituicao, nome_curso, grau, inicio, conclusao) 
VALUES (
    'Secretaria da Educação de São Paulo', 
    'Técnico em Vendas', 
    'Curso Técnico', 
    'Jan. 2025', 
    'Cursando'
);

INSERT INTO formacao (instituicao, nome_curso, grau, inicio, conclusao) 
VALUES (
    'Instituto Padrão Militar', 
    'Brigadista Mirim', 
    'Curso Livre', 
    'Ago. 2021', 
    'Dez. 2023'
);