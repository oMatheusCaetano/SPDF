<hr>
<h1 align=center>SPDF</h1>
<hr>

## Sobre SPDF
SPDF é uma aplicação desenvolvida a partir de uma prova feita pela [Soluti](https://www.soluti.com.br/) em uma de suas vagas disponíveis para desenvolvedor Full Stack.
A aplicação busca permitir o upload de contratos sociais e vinculá-los a um usuário, uma empresa e outras pessoas.
Esta é minha primeira aplicação desenvolvida com o framework [Laravel](https://laravel.com/).


## Executando com  Docker
Para este caso é preciso que o [Docker](https://www.docker.com/) e [Docker Compose](https://docs.docker.com/compose/install/) estejam previamente instalados na máquina.

Na pasta raiz do projeto, basta rodar o comando:
```sh
docker-compose up -d
```
Após executar este comando, as imagens serão construidas, e os containers criados.
Além disso, outras coisas que a aplicação precisa pra funcionar como criação de banco de dados, execução de migrations, criação de algumas variáveis de ambiente etc, serão todos feitos automaticamente.
Caso queira um retorno do que está sendo feito basta remover a flag ``` -d ``` do comando acima.

#### Gerando uma nova chave
Após executar o comando acima, será preciso criar uma nova chave para que a aplicação possa ser executada. 
Na pasta raiz do projeto, existe um arquivo chamado ``` .env.example ``` e é nele que o valor da chave ficará armazenado. Este arquivo deve ser renomeado para ``` .env ``` apenas.
Depois de renomear o arquivo para ``` .env ```, será preciso rodar um comando do laravel dentro do terminal do container da aplicaçação.
Para isso, basta rodar o comando abaixo:
```sh
docker-compose exec spdf-laravel php artisan key:generate
```
<small>**obs:** Caso o comando ```docker-compose up -d ``` tenha sido executado sem a flag ``` -d ```, recomendo que o terminal do container seja acessado em uma nova aba do terminal da máquina host para não parar a execução da aplicação. </small>

#### Link Simbólico
Por último, será preciso criar um link simbólico entre algumas pastas da aplicação para que a rederização de arquivos funcione. Para isso execute o seguinde comando.
```sh
docker-compose exec spdf-laravel php artisan storage:link
```

Após executar este comando, basta acessar a aplicação. Por padrão, quando estiver executando com [Docker](https://www.docker.com/), a aplicação irá rodar no endpoint: ``` http://localhost:3000 ```.

## Executando sem Docker
#### Requisitos
Para executar esta aplicação em uma máquina sem o docker, será preciso que a máquina antenda ao requisitos abaixo.

- [PHP](https://www.php.net/) 7.1 ou Superior
- [Composer](https://getcomposer.org/)

#### Baixando dependências
Na pasta raiz do projeto, execute o comando abaixo. Este irá baixar todas as dependencias do projeto.
```sh
composer install
```

#### Gerando uma nova chave
Após executar o comando acima, será preciso criar uma nova chave para que a aplicação possa ser executada. 
Na pasta raiz do projeto, existe um arquivo chamado ``` .env.example ``` e é nele que o valor da chave ficará armazenado. Este arquivo deve ser renomeado para ``` .env ``` apenas.
Depois de renomear o arquivo para ``` .env ```, será preciso rodar o comando abaixo para gerar a chave:
```sh
php artisan key:generate
```

#### Link Simbólico
Agora será preciso criar um link simbólico entre algumas pastas da aplicação para que a rederização de arquivos funcione. Para isso execute o seguinde comando.
```sh
php artisan storage:link
```

### Configuração do Banco de dados
Esta aplicação utilizará por padrão um banco de dados [Mysql](https://www.mysql.com/).
No arquivo ``` .env ``` alguns dados deverão ser configurados para que a aplicação consiga acessar o banco de dados corretamente.
```sh
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Na variável ``` DB_DATABASE ```, o nome do banco de dados deverá ser informado. É importante que este banco tenha sido previamente criado. Por padão ele tentará o banco de dados **spdf**.
Na variável ``` DB_USERNAME ```, o nome do usuário de acesso ao mysql deverá ser informado. Por padão ele tentará acessar o usuário **root**.
Na variável ``` DB_PASSWORD ```, a senha de acesso ao mysql deverá ser informada. Por padrão ele tentará logar sem senha.

### Criando as tabelas no banco de dados.
Após realizar as configurações de acesso ao banco no arquivo ``` .env ```, será preciso criar as tabelas que a aplicação precisa par funcionar.
Esta parte será feita inteiramente pelo [Laravel](https://laravel.com/) com o comando:
```sh
php artisan migrate
```

### Rodando a aplicação
Finalmente, para rodar a aplicação:
```sh
php artisan serve
```

Por padrão, a aplicação será executada no endpoint: 
```sh
http://localhost:8000/
```
