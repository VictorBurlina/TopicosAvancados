# Projeto PHP com MySQL e Docker

Este projeto demonstra uma aplicação simples em PHP conectada a um banco de dados MySQL (MariaDB), rodando dentro de contêineres Docker. Ele contém uma aplicação PHP que exibe dados de uma tabela de clientes a partir do banco de dados, além de fornecer um acesso ao phpMyAdmin para gerenciamento do banco.

---

## 📁 Estrutura do Projeto

```bash
Aula12-09-2025/
│
├── app/
│   ├── config.php
│   └── index.php
│
├── sql/
│   └── init.sql
│
├── docker-compose.yml
└── README.md
```
## ⚙️ Pré-requisitos

Antes de executar o projeto, você precisa ter instalado:

- [Docker](https://www.docker.com/) - (versão 20.10 ou superior)
- [Docker Compose](https://docs.docker.com/compose/) - (versão 1.27 ou superior)
- (Recomendado) Git Bash ou terminal do VS Code (para evitar problemas com montagem de volumes no Windows)

---

## 🚀 Como Executar o Projeto

1.  Clonar o Repositório

Primeiro, clone o repositório em seu diretório de trabalho local:

```bash
git clone https://github.com/VictorBurlina/Aula12-09-2025
```

2. Execute os seguintes comandos para iniciar os contêineres:

```bash
docker-compose up --build
```

Aguarde a inicialização dos contêineres.

⚠️ O script init.sql será executado apenas na primeira vez, quando o volume ainda estiver vazio. Caso altere o script e queira reexecutá-lo, será necessário remover os volumes com docker-compose down -v.

## 🌐 Acessando a aplicação

Após subir os contêineres, acesse os serviços nos endereços abaixo:

#### 🔸 Aplicação PHP

http://localhost:8080

Você verá a mensagem de conexão e uma tabela com os dados dos clientes carregados do banco.

#### 🔸 phpMyAdmin

http://localhost:8081

Use as credenciais:

Usuário: root  /  Senha: root

Banco de dados: app_db

Você poderá visualizar a tabela Clientes e verificar os dados carregados via init.sql.

## 🐳 Contêineres criados
| Serviço      | Imagem                     | Porta Local | Função                       |
| ------------ | -------------------------- | ----------- | ---------------------------- |
| `apachephp`  | `webdevops/php-apache:8.2` | `8080`      | Servidor Apache com PHP      |
| `mariadb`    | `mariadb:11`               | Interna     | Banco de dados MySQL/MariaDB |
| `phpmyadmin` | `phpmyadmin/phpmyadmin`    | `8081`      | Interface web para o banco   |

## Comandos Úteis

#### Para parar os contêineres:
```bash
docker-compose down
```

#### Para parar os contêineres e remover volumes (isso apagará os dados no banco):
```bash
docker-compose down -v
```

## 🛠️ Observações

A aplicação PHP está dentro da pasta ./app e aponta para /app no contêiner.

O banco de dados é criado a partir do script init.sql, localizado em ./sql/init.sql.

A rede app-network permite a comunicação entre os contêineres.

Volume db_data garante persistência dos dados do banco entre reinicializações.
