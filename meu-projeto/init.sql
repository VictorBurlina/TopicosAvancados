CREATE DATABASE IF NOT EXISTS Clientes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Clientes;

CREATE TABLE IF NOT EXISTS Clientes (
    Id_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100),
    Endereco VARCHAR(150),
    Cidade VARCHAR(100),
    Telefone VARCHAR(20)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


INSERT INTO Clientes (Nome, Endereco, Cidade, Telefone) VALUES
('Joao Silva', 'Rua das Flores 123', 'Sao Paulo', '11987654321'),
('Maria Santos', 'Av Paulista 1000', 'Sao Paulo', '11991234567'),
('Carlos Oliveira', 'Rua Amapa 45', 'Rio de Janeiro', '21987654321'),
('Ana Costa', 'Rua B 789', 'Belo Horizonte', '31999887766'),
('Pedro Souza', 'Av Atlantica 300', 'Rio de Janeiro', '21991230000'),
('Juliana Mendes', 'Rua C 111', 'Curitiba', '41987654321'),
('Ricardo Lima', 'Rua D 222', 'Fortaleza', '85991234567'),
('Fernanda Rocha', 'Av Brasil 500', 'Recife', '81987654321'),
('Marcos Pereira', 'Rua E 333', 'Porto Alegre', '51999887766'),
('Patricia Goncalves', 'Av Central 77', 'Goiania', '62991230000'),
('Lucas Fernandes', 'Rua F 444', 'Campinas', '19987654321'),
('Amanda Martins', 'Rua G 555', 'Natal', '84991234567'),
('Bruno Carvalho', 'Av Norte 88', 'Manaus', '92987654321'),
('Tatiane Ribeiro', 'Rua H 666', 'Belem', '91999887766'),
('Eduardo Almeida', 'Rua I 777', 'Campo Grande', '67991230000'),
('Carolina Teixeira', 'Av Sul 99', 'Joao Pessoa', '83987654321'),
('Thiago Nunes', 'Rua J 888', 'Maceio', '82991234567'),
('Leticia Barros', 'Av Leste 55', 'Aracaju', '79987654321'),
('Rodrigo Azevedo', 'Rua K 999', 'Cuiaba', '65999887766'),
('Vanessa Dias', 'Rua L 1010', 'Florianopolis', '48991230000'),
('Felipe Castro', 'Rua M 1111', 'Vitoria', '27987654321'),
('Aline Farias', 'Av Oeste 1212', 'Teresina', '86991234567'),
('Gabriel Moraes', 'Rua N 1313', 'Uberlandia', '34987654321'),
('Renata Pires', 'Rua O 1414', 'Sorocaba', '15999887766'),
('Anderson Brito', 'Av Verde 1515', 'Niteroi', '21991231234'),
('Beatriz Cunha', 'Rua P 1616', 'Santos', '13987654321'),
('Marcelo Reis', 'Rua Q 1717', 'Bauru', '14991234567'),
('Isabela Lopes', 'Av Azul 1818', 'Londrina', '43987654321'),
('Daniel Monteiro', 'Rua R 1919', 'Maringa', '44999887766'),
('Natalia Neves', 'Rua S 2020', 'Joao Monlevade', '31991235678');