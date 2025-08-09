# Clientes - Banco de Dados e Aplicação PHP

Este repositório contém:

- Script SQL para criação do banco de dados **Clientes** e a tabela **Clientes** com 30 registros fictícios.
- Código PHP para listar os clientes da base.

---

## Como configurar o banco de dados na Azure

1. **Criar uma instância do Banco de Dados SQL no Azure:**

   - Acesse o portal do [Microsoft Azure](https://portal.azure.com).
   - No menu, clique em **Criar um recurso** > **Banco de dados** > **Banco de dados SQL**.
   - Preencha as informações básicas:
     - Nome do banco de dados: `Clientes`
     - Servidor: crie um novo servidor ou selecione um existente.
     - Configurações de preço: escolha de acordo com sua necessidade (exemplo: Básico).
   - Clique em **Revisar + criar** e depois em **Criar**.

2. **Configurar firewall para permitir acesso:**

   - No portal Azure, vá para o recurso do servidor do banco de dados.
   - Em **Configurações** > **Regras de firewall e redes virtuais**, adicione seu IP para permitir conexão externa.
   - Salve as configurações.

3. **Conectar-se ao banco de dados e executar o script SQL:**

   - Use o **SQL Server Management Studio (SSMS)** ou Azure Data Studio para se conectar.
   - Use o nome do servidor, login e senha configurados na criação do banco.
   - Execute o script SQL fornecido (`script.sql`) para criar a tabela `Clientes` e inserir os registros. ***É NECESSÁRIO TER A BASE DE DADOS CRIADA: " CREATE DATABASE 'Clientes'; "

---

## Como executar a aplicação PHP

1. **Pré-requisitos:**

   - Servidor web com suporte PHP (exemplo: XAMPP, WAMP, Laragon ou servidor Linux com Apache/Nginx e PHP).
   - Extensão `mysqli` habilitada no PHP.

2. **Configurar a conexão com o banco:**

   - No arquivo `config.php`, configure as variáveis de conexão com os dados do seu banco na Azure:

   ```php
   $servername = "seu_servidor_azure.database.windows.net";
   $username = "seu_usuario";
   $password = "sua_senha";
   $dbname = "Clientes";
