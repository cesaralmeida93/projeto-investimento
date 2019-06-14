# Projeto-Investimento
- Sistema de gestão de grupos de investimentos financeiros
- Projeto para a disciplina de Laboratório de Banco de dados IV
- Faculdade FATEC SJC

## Integrantes
- César Augusto Santos de Almeida
- Caio Campos Martinelli
- José Roberto Alves Junior

## Pacotes de terceiros utilizados
- l5-Repository - andersao/l5-repository -versão: ^2.6

## Project setup
- Clonar através do comando:

```
git clone https://github.com/cesaralmeida93/projeto-investimento.git
```

- Instalar a stack apache, php, mysql(LAMP ou XAMPP, para ese sistema, foi utilizado o XAMPP)

Se necessário edite o arquivo *.env* e ajuste os seguintes parâmetros
DB_DATABASE=test
DB_USER=root
DB_PASSWORD=

*OBS:* Não se esqueça de criar o banco de dados no SGBD MySQL.

- Iniciar o servidor
- Iniciar o banco de dados
- Realizar os comandos:

```
composer install
php artisan key:generate
php artisan migrate:fresh
php artisan db:seed
php artisan serve
```

- acessar a rota **127.0.0.1:8000/login**

- login admin: joaozinho@sistema.com
- senha admin: 123456

- abaixo seguem prints de cada funcionalidade do sistema

### Tela de Login
![Login](bd4-1.png)

### Tela de Usuário
![Login](bd4-2.png)

### Cadastro de Usuário
![Login](bd4-3.png)

### Usuário Cadastrado
![Login](bd4-4.png)

### Tela de Instituição
![Login](bd4-5.png)

### Cadastro de Instituição
![Login](bd4-6.png)

### Instituição Cadastrada
![Login](bd4-7.png)

### Tela de Grupos de Investimento
![Login](bd4-8.png)

### Criando novo Grupo de Investimento
![Login](bd4-9.png)

### Grupo de Investimento Cadastrado
![Login](bd4-10.png)

### Relacionando Usuário a Grupo de Investimento
![Login](bd4-11.png)

### Listando Usuários Relacionados a Grupo de INvestimento
![Login](bd4-12.png)

### Cadastrando novo produto
![Login](bd4-13.png)

### Produto cadastrado
![Login](bd4-14.png)

### Realizando Investimento
![Login](bd4-15.png)

### Investimento Realizado
![Login](bd4-16.png)

### Listando Investimentos de cada Grupo
![Login](bd4-17.png)

### Mostrando extrato do Usuário
![Login](bd4-18.png)
