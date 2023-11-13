# Biblioteca-Web

Projeto de uma biblioteca online feita utilizando os frameworks VueJS (frontend) e Laravel (Backend). o projeto consiste em um sistema para aluguel e devolução de livros de maneira remota, onde você também possa avaliar os livros lidos e comentar sobre.

# Project Setup

É necessario fazer a preparação de ambas as pastas para que ela funcione em perfeito estado em sua máquina, aqui vai um passo-a-passo de como faze-lo:

### Fazer o clone do repositório:

```sh
git clone https://github.com/Lueasyx/Biblioteca-web.git
```

## Frontend
### 1- dirija-se a pasta "Backend" e rode os seguintes comandos:

```sh
npm install
```
ou
```sh
npm i
```

### 2- Faça utilização do comando a seguir para vizualizar o front

```sh
npm run dev
```

## Backend
### 3- dirija-se a pasta "Backend" e rode os seguintes comandos:

```sh
composer install
```

### 4- Copie o arquivo .env.example

```sh
cp .env.example .env
```

### 5- Crie uma nova chave para a aplicação

```sh
php artisan key:generate
```

### 7- Rode as migrations para criar o Database:

```sh
php artisan migrate --seed
```

# Imagens do Projeto

Por enquanto possuimos apenas as seguintes telas:

## 1- Pagina Inicial:
## 2- Tela de cadastro de livros e autores:
## 3- Área de verificação de alugueis:
## 4- Área de devolução:
