# 13º BAEP — Site Intranet

Site institucional intranet do **13º Batalhão de Ações Especiais de Polícia (PMESP)**, desenvolvido pela Seção de Telemática.

---

## 🛠 Tecnologias

- [Laravel 12](https://laravel.com/)
- PHP 8.2
- MySQL
- Bootstrap 5
- [Filament 3](https://filamentphp.com/)
- Owl Carousel
- AOS (Animate On Scroll)
- Iconify

---

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- PHP >= 8.2
- Composer >= 2.8
- Node.js >= 22
- NPM >= 10
- MySQL (via XAMPP ou similar)

---

## 🚀 Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/13baep.git
cd 13baep
```

### 2. Instale as dependências PHP

```bash
composer install
```

### 3. Instale as dependências Node

```bash
npm install
```

### 4. Configure o ambiente

Copie o arquivo de exemplo e configure suas variáveis:

```bash
cp .env.example .env
```

> ⚠️ **Atenção:** Nunca sobrescreva o `.env` em produção. Cada ambiente possui sua própria configuração.

Edite o `.env` com suas configurações de banco de dados:

```env
APP_NAME="13º BAEP"
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=13baep
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 6. Execute as migrations

```bash
php artisan migrate
```

### 7. Crie o link de armazenamento

```bash
php artisan storage:link
```

### 8. Crie o usuário administrador do Filament

```bash
php artisan make:filament-user
```

### 9. Inicie o servidor

```bash
php artisan serve
```

Acesse em: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🔐 Painel Administrativo

Acesse o painel Filament em: [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)

O painel permite gerenciar:

- **Policial do Mês** — cadastro com foto, graduação, texto e assinatura
- **Ocorrência de Destaque** — cadastro com foto, título e texto
- **Galeria de Comandantes** — cadastro com foto, graduação e período de comando
- **Galeria de Heróis** — cadastro com foto e graduação

---

## 📁 Estrutura de Uploads

Os arquivos enviados pelo painel são armazenados em:

```
storage/app/public/policialmes/
storage/app/public/ocorrencias/
storage/app/public/comandantes/
storage/app/public/herois/
```

---

## 🌐 Acesso via Rede Interna (XAMPP)

Para acesso via IP interno, configure o VirtualHost no XAMPP apontando para a pasta `public/` do projeto e ajuste o `.env` com o IP e porta correspondentes.

---

## 📄 Licença

Este projeto é de uso interno da **Polícia Militar do Estado de São Paulo — 13º BAEP**.  
Todos os direitos reservados © 2026 13º BAEP.

---

Desenvolvido pela **Seção de Telemática do 13º BAEP**.
