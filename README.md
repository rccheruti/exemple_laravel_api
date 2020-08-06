<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## About Exemple Laravel API

PORT-BR > Este projeto foi criado para aprimorar minhas habilidades no framework Laravel.

ENG     > This project was create to improve my skills in the Laravel framework.

- Um backend de um sistema simples de cadastro, fornecendo uma API, com objetos em Json, tanto as inserções de dados quanto as respostas.



## Instação

- Instalação padrão Laravel
- Configurar o .env com informações do DB e um SMTP de email.
- Instalar o passport no laravel.

## Modulos

Cadastro usuário:
> Utilizando uma requisição POST para enviar um JSON.
> 
>{
>
> "nome" : " ",
>
> "email" : " ",
>
> "password" : " ",
>
>  "password_confirmation" : " "
>
>}
>
> - Nome do usuário (pode ser nome completo)
> - Email (usar um email valido)
> - Password
> - Confirmar Password
>
> O usuário irá receber em seu email uma mensagem para confirmação do cadastro,
>somente será possível o login após confirmação.
 
 Login:
> Utilizando uma requisição POST para enviar um JSON.
>
>{
>
> "email" : " ",
>
> "password" : " "
>
>}
>
> - Email cadastrado
> - Password cadastrado

- Após logado poderá cadastrar categorias e produtos.

 Cadastro de categorias:
 
>
>{
>
>nome:
>
>}
> - Nome da categoria ( Ex.: Eletro)

 Cadastro de produtos:
 
>
>{
>
>"nome" : " ",
>
> "categorias_id" : " ",
>
>"estoque" : " ",
>
>"valor" : " "
>
>}
>
> - Nome do produto
> - Categoria do produto
> - Estoque
> - Valor do produto

Enviando um GET para produtos ou categorias recebe todos já cadastrados.

## Comentários

* Projeto para demonstrar meu conhecimento no framework e na linguagem, aguardo feedbacks!

Email para contato : rccheruti@gmail.com

Fone: (48) 99171-9504

- Podem tirar tudo de um homem, menos seu conhecimento adquirido!
 
