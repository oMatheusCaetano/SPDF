<hr>
<h1 align=center>SPDF</h1>
<hr>

## Sobre SPDF
SPDF é uma aplicação desenvolvida a partir de uma prova feita pela [Soluti](https://www.soluti.com.br/) em uma de suas vagas disponíveis para desenvolvedor Full Stack.
A aplicação busca permitir o upload de contratos sociais e vinculá-los a um usuário, uma empresa e outras pessoas.
Esta é minha primeira aplicação desenvolvida com o framework [Laravel](https://laravel.com/).

## Como executar a alicação?
Esta aplicação já vem preparada para executar localmente. Quando o clone for feito, pode ser executada com ou sem [Docker](https://www.docker.com/).

### Executando com o Docker
Para este caso é preciso que o [Docker](https://www.docker.com/) e [Docker Compose](https://docs.docker.com/compose/install/) estejam previamente instalados na máquina.

Na pasta raiz do projeto, basta rodar o comando:
```sh
docker-compose up -d
```
Após executar este comando, as imagens serão construidas, e os containers criados.
Além disso, outras coisas que a apicação precisa pra funcionar como criação de banco de dados, execução de migrations, criação de algumas variáveis de ambiente etc serão todos feitos automaticamente.
Caso queira um retorno do que está sendo feito basta remover a flag ``` -d ``` do comando acima.

Após executar este comando, basta acessar a aplicação. Por padrão, quando estiver executando com [Docker](https://www.docker.com/), a aplicação irá rodar no endpoint: ``` http://localhost:3000 ```.
