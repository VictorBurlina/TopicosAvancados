#!/bin/bash
set -e

echo "Rodando script adicional de inicialização..."

# Executa o arquivo init.sql usando o cliente mariadb
mariadb -u root -p"root" "app_db" < /docker-entrypoint-initdb.d/init.sql

echo "Script adicional executado."