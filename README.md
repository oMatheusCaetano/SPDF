<hr>
<h1 align=center>SPDF</h1>
<hr>

## Sobre SPDF
SPDF é uma aplicação desenvolvida a partir de uma prova feita pela [Soluti](https://www.soluti.com.br/) em uma de suas vagas disponíveis para desenvolvedor Full Stack.
A aplicação busca permitir o upload de contratos sociais e vinculá-los a um usuário, uma empresa e outras pessoas.
Esta é minha primeira aplicação desenvolvida com o framework [Laravel](https://laravel.com/).


## Executando com o Docker
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

Por último, será preciso criar um link simbólico entre algumas pastas da aplicação para que a rederização de arquivos funcione. Para isso execute o seguinde comando.
```sh
docker-compose exec spdf-laravel php artisan storage:link
```

Após executar este comando, basta acessar a aplicação. Por padrão, quando estiver executando com [Docker](https://www.docker.com/), a aplicação irá rodar no endpoint: ``` http://localhost:3000 ```.

