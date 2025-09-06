# Aplicação PHP + Apache + MySQL com Docker

Este projeto cria um ambiente completo em **Docker** contendo:  

- **Apache + PHP 8.1** para rodar a aplicação web.  
- **MySQL 5.7** configurado com volume para persistência dos dados.  
- Script `init.sql` que cria automaticamente o banco de dados e popula a tabela **Clientes** com registros de exemplo.  
- Aplicação PHP que lista os clientes cadastrados no banco.  

---

## Estrutura do projeto
├── app/ 

│ ├── config.php

│ └── index.php

├── docker-compose.yml 

├── Dockerfile # Configura PHP + Apache

└── init.sql # Script inicial do banco de dados


## Como executar o contêiner

1. **Clone este repositório:**
   ```bash
   git clone https://github.com/victorburlina/php-mysql-app.git
   cd php-mysql-app
   Construa e suba os serviços com Docker Compose:

2. **Construa e suba os serviços com Docker Compose:**
   ```bash
   docker-compose up -d --build 
-d → roda em segundo plano

--build → garante que a imagem do PHP + Apache seja construída

3. **Verifique se os contêineres estão rodando:**
   ```bash
   docker ps  
Você deve ver algo como:
   ```bash
   php_apache     running
   mysql_server   running
   ```
4. **Acesse a aplicação no navegador:** http://localhost:8080
   
Isso exibirá a lista de clientes cadastrados no banco.

## Configuração do banco de dados MySQL
 -- Host: db (nome do serviço no docker-compose)
 
 -- Porta: 3306
 
 -- Usuário: root
 
 -- Senha: root
 
 -- Banco: Clientes

Os dados são persistidos no volume mysql_data.

📦 Imagem no Docker Hub

A imagem está publicada no Docker Hub:
👉 [https://hub.docker.com/r/victorburlina/php-mysql-app](https://hub.docker.com/repository/docker/victorburlina/php_apache/general)


