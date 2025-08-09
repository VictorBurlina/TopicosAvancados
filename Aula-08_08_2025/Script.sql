-- Antes de executar o scrip é necessário ter a base de dados criada: " CREATE DATABASE 'Clientes'; "

-- 1. Usar o banco de dados
USE Clientes;
GO

-- 2. Criar a tabela Clientes
CREATE TABLE Clientes (
    Id_Cliente INT IDENTITY(1,1) PRIMARY KEY,
    Nome NVARCHAR(100),
    Endereço NVARCHAR(150),
    Cidade NVARCHAR(100),
    Telefone NVARCHAR(20)
);
GO

-- 3. Inserir 30 registros fictícios
INSERT INTO Clientes (Nome, Endereço, Cidade, Telefone) VALUES
(N'Ana Paula Silva', N'Rua das Flores, 123', N'São Paulo', N'(11) 98877-1122'),
(N'Carlos Henrique', N'Avenida Brasil, 456', N'Rio de Janeiro', N'(21) 99765-4321'),
(N'Fernanda Oliveira', N'Rua das Acácias, 789', N'Belo Horizonte', N'(31) 98541-1234'),
(N'José da Costa', N'Rua Amazonas, 321', N'Manaus', N'(92) 99321-9988'),
(N'Mariana Souza', N'Av. Paulista, 1000', N'São Paulo', N'(11) 91234-5678'),
(N'Lucas Pereira', N'Rua Curitiba, 55', N'Curitiba', N'(41) 98765-4321'),
(N'Juliana Rocha', N'Rua Sete de Setembro, 888', N'Porto Alegre', N'(51) 99887-1122'),
(N'Bruno Lima', N'Avenida das Nações, 200', N'Brasília', N'(61) 99999-0000'),
(N'Amanda Torres', N'Rua do Comércio, 12', N'Recife', N'(81) 99876-5432'),
(N'Gustavo Almeida', N'Rua Boa Vista, 90', N'Salvador', N'(71) 98765-1234'),
(N'Patrícia Fernandes', N'Avenida Independência, 300', N'Fortaleza', N'(85) 99123-4567'),
(N'Rafael Martins', N'Rua José Bonifácio, 77', N'Campinas', N'(19) 99812-3344'),
(N'Larissa Gomes', N'Rua das Palmeiras, 500', N'Natal', N'(84) 99711-2233'),
(N'Mateus Ribeiro', N'Rua Rio Branco, 200', N'Joinville', N'(47) 99666-7788'),
(N'Camila Nogueira', N'Rua XV de Novembro, 65', N'Londrina', N'(43) 99444-5566'),
(N'André Cardoso', N'Avenida Central, 99', N'Campo Grande', N'(67) 99333-2211'),
(N'Bianca Melo', N'Rua São João, 101', N'Teresina', N'(86) 99800-1122'),
(N'Felipe Azevedo', N'Rua Projetada, 13', N'Florianópolis', N'(48) 98777-6655'),
(N'Thays Cunha', N'Rua da Paz, 60', N'João Pessoa', N'(83) 99654-3210'),
(N'Vinícius Barreto', N'Avenida das Américas, 5000', N'Rio de Janeiro', N'(21) 98555-6677'),
(N'Isabela Castro', N'Rua Afonso Pena, 110', N'Belo Horizonte', N'(31) 99988-7766'),
(N'Rodrigo Lemos', N'Rua Dr. Arnaldo, 789', N'São Paulo', N'(11) 98222-3344'),
(N'Eliane Moraes', N'Rua Independência, 222', N'Porto Velho', N'(69) 99111-2233'),
(N'Luciana Farias', N'Avenida Getúlio Vargas, 330', N'São Luís', N'(98) 99700-8899'),
(N'Pedro Cunha', N'Rua das Laranjeiras, 150', N'Aracaju', N'(79) 99321-4433'),
(N'Natália Teixeira', N'Avenida Atlântica, 3000', N'Rio de Janeiro', N'(21) 99666-7788'),
(N'Alan Souza', N'Rua Maracatu, 55', N'Olinda', N'(81) 99234-5566'),
(N'Rebeca Andrade', N'Rua das Pedras, 20', N'Gramado', N'(54) 99900-3344'),
(N'Caio Dias', N'Rua Dom Pedro I, 10', N'Vitória', N'(27) 99111-3322'),
(N'Sandra Lima', N'Rua Aurora, 121', N'Belém', N'(91) 99888-2233');
GO
