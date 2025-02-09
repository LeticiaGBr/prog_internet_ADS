CREATE DATABASE IF NOT EXISTS crud_ppi;
USE crud_ppi;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Inserindo dados iniciais
INSERT INTO usuario (nome, email, usuario, senha)
VALUES 
('Letícia Gehrke', 'leticiagehrkebr@gmail.com', 'leticia', '1234'),
('Arthur Silva', 'arthur@gmail.com', 'arthur', 'senha123');
