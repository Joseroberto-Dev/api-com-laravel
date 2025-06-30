# 📦 API RESTful para Gestão de Produtos com Laravel 12

Este é um projeto de API RESTful desenvolvida do zero utilizando o framework **Laravel 12.x**. O objetivo foi construir uma estrutura básica, segura e escalável para gestão de produtos, utilizando as boas práticas do Laravel, incluindo rotas RESTful, migrations, validação, e conexão com banco de dados MySQL.

---

## 🚀 Tecnologias Utilizadas

- PHP 8.2.12
- Laravel 12.19.3
- MySQL
- Composer
- Postman (para testes)
- Git & GitHub

---

## ⚙️ Funcionalidades

- [x] Cadastro de produtos
- [x] Listagem de todos os produtos
- [x] Consulta de produto por ID
- [x] Atualização de produto
- [x] Remoção de produto

---

## 🔧 Instalação e Execução

### Pré-requisitos

- PHP 8.1+
- Composer
- MySQL
- Git
- Postman ou Insomnia para testes

### Passos para rodar o projeto localmente

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/api-laravel.git
cd api-laravel

# Instale as dependências
composer install

# Copie o arquivo de exemplo e configure o ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no arquivo .env

# Execute as migrations
php artisan migrate

# Inicie o servidor local
php artisan serve
```
🛠️ Rotas da API

GET	/api/produtos     Listar todos os produtos
GET	/api/produtos/{id} Buscar produto por ID
POST /api/produtos    Cadastrar novo produto
PUT	/api/produtos/{id} Atualizar produto
DELETE /api/produtos/{id} Deletar produto

Todas as respostas são no formato JSON.

🧪 Exemplo de corpo JSON para POST/PUT
{
  "nome": "Mouse Gamer",
  "preco": 299.90,
  "estoque": 15
}

✅ Segurança
Arquivo .env está protegido via .gitignore

Regras de validação foram aplicadas para evitar dados inválidos

Apenas campos permitidos são aceitos via fillable

📄 Licença
Este projeto está sob a licença MIT.

✍️ Autor
Feito com 💻 e ☕ por Jose Roberto Santos Oliveira
