#Aplicação de Teste

Aplicação feita em php para fins do teste de receiv. É necessário que a versão do php seja maior ou igual a 7.0.

O banco de dados utilizado na aplicação foi o mysql 5.7.

Será necessário também o aplicativo composer, para poder gerar o autoload e instalar as dependências de teste.

O servidor de aplicação deve suportar o mod rewrite, o mesmo é utilizado para a gestão de rotas e urls amigáveis.
#Intruções

Rodar o sql que consta na pasta database, o mesmo irá criar a tabela e o banco de dados.

Configurar a conexão com o banco de dados no arquivo **configs.php**, localizado na pasta configs.

Configurar o path público (constante PATH) da aplicação no arquivo **configs.php**, localizado na pasta configs.

Executar na pasta do projeto os seguintes comandos:

- composer install
- composer dump-autoload

# Acesso a aplicação

Para acessar a aplicação entrar na pasta public, essa pasta é o ponto de entrada para a aplicação.
