-- criando a base de dados
CREATE DATABASE gestao_3b;

-- colocando a base em uso
USE gestao_3b;

-- criando a tabela de usuarios
CREATE table usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nomeCompleto VARCHAR(200) NOT NULL,
	login VARCHAR(100) NOT NULL,
	senha VARCHAR(32) NOT NULL,
	nivel INT NOT NULL,
	-- 0 (eu), 1 - administrador, 2 gestao_3agestao_3agestao_3agestao_3agestao_3agestao_3agestao_3agestao_3a- secretaria, 3 - consulta
	telefone VARCHAR(18) NOT NULL,
	dataCriacao TIMESTAMP DEFAULT NOW(),
	dataAlteracao TIMESTAMP null
	);

    