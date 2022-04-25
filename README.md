# Docker Cheatsheet

Lista de comandos Docker úteis e de uso diário.

---

- Fazer login via terminal:

```bash
docker login
```

- Fazer logout via terminal:

```bash
docker logout
```

## Imagens e Containers

- Criar um container:

```bash
docker container create -ti <imagem>
```

- Iniciar o container criado (o comando run cria um novo container, o start inicia um ja criado):

```bash
docker container start <id container ou nome>
```

- Reniniciar um container:

```bash
docker container restart <id container ou nome>
```

- Pausar um container:

```bash
docker container pause <id container ou nome>
```

- Retomar um container pausado:

```bash
docker container unpause <id container ou nome>
```

- Parar um container em execução:

```bash
docker container stop <id container ou nome>
```

> Dessa forma o container será criado, mas nãos erá executado automaticamente.

- Remover um container:

```bash
docker container rm <id container ou nome>
```

- Remover uma imagem:

```bash
docker image rmi <id container ou nome>
```

> Para remover um container ou imagem em execução use a flag `-f`.

- Listar as imagens existentes no host:

```bash
docker image ls
```

- Verificar os containeres em execução no momento:

```bash
docker container ls || docker ps
```

Com a flag `-a` é possível visualizar todos os containeres.

- Inicializar um container:

```bash
docker container run <imagem>
```

Caso a imagem não exista ela será baixada e inicializada. É possível adicionar flags ao comando run como `-i -t` que possibilitam a interação com o container e `-d` que inicializa o container em modo daemon (sem interação).
> Para sair da interação com um container sem finalizá-lo usar `ctrl + p + q`.

- Expor uma porta do container:

```bash
docker run -p <porta dispositivo:porta container> <imagem>
```

> Para adicionar um nome a um container basta adicionar a flag `--name <nome_container>`

- Retornar a um container em execução:

```bash
docker container <id container ou nome>
```

- Visualização de consumo dos containers:

```bash
docker container stats
```

> Para visualizar o consumo de um container em especidfico basta adicionar o `id do container` após o stats, no comando acima.

- Verificar os processos de um container em execução:

```bash
docker container top <id container ou nome>
```

- Visualizar Logs de um container:

```bash
docker container logs <id container ou nome>
```

> Para  visualizar os logs à medida em que aparecem utilize a flag `-f` no comando acima.

- Criar uma imagem a partir de um Dockerfile:

```bash
docker build -t <nome>:<tag> <caminho para o Dockerfile acompanhado do ponto>
```

- Subir uma imagem do repositório do docker (deve ter o mesmo nome do repositório online):

```bash
docker push <nome da imagem> 
```

- Baixar uma imagem do repositório do docker:

```bash
docker pull <nome da imagem> 
```

- Nomeando uma imagem docker (quando tag não é informado é atribuído "latest"):

```bash
docker tag <nome>:<tag>
```

- Removendo imagens e containers:

```bash
docker system prune
```

- Remover um container após a parada:

```bash
docker run --rm <nome da imagem>
```

- Copiar arquivos do container para o dispositivo:

```bash
docker cp <id container ou nome>:<caminho do arquivo no container> <caminho para onde a cópia vai no dispositivo>
```

- Analise de processamento de um container:

```bash
docker top <id container ou nome>
```

- Verificando dados de um container:

```bash
docker inspect <id container ou nome>
```

- Verificando os processos dos containers:

```bash
docker stats
```

## Volumes

- Determinar um volume de persistencia de dados (será removido junto com o container):

```bash
docker run ... -v/diretorio ...
```

- Criar um volume nomeado (terá persistência, diretorio nesse caso tem que ser o mesmo de workdir):

```bash
docker run ... -v nomeVolume:/diretorio ...
```

- Listar volumes:

```bash
docker volume ls
```

- Utilizando Bind Mounts (Dados serão persistidos na máquina onde o docker está executando):

```bash
docker run ... -v <caminho do diretorio do host>:<diretorio no container> ...
```

- Criando um named volume no docker manualmente:

```bash
docker volume crate <nome do volume>
```

- Inspecionar um volume:

```bash
docker volume inspect <nome do volume>
```

- Removendo um volume (todos os dados serão removidos também):

```bash
docker volume rm <nome do volume>
```

- Removendo volumes não utilizados:

```bash
docker volume prune
```

- Criar volumes apenas de leitura (Read Only):

```bash
docker run ... -v volume:/data:ro ...
```

## Networks

- Listar as redes disponiveis no docker:

```bash
docker network ls
```

- Criando uma rede docker (por padrão o tipo sera bridge):

```bash
docker network create <nome da rede>
```

- Criando uma rede com um driver especifico:

```bash
docker network create -d macvlan <nome da rede>
```

- Removendo redes (cuidado com containers já conectados):

```bash
docker network rm <nome da network>
```

- Removendo redes não utilizadas (as redes criadas por padrão só serão removidas manualmente):

```bash
docker network prune
```

- Conectando um container a uma network:

```bash
docker run ... --network <id ou nome network> ...
```

- Conectar um container a uma network pós run:

```bash
docker network connect <id ou nome network> <id ou nome container>
```

- Removendo um container de uma rede especifica:

```bash
docker network disconnect <id ou nome network> <id ou nome container>
```

- Inspecionando as redes:

```bash
docker network inspect <id ou nome network>
```
