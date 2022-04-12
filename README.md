# Docker Cheatsheet

Listagem de comandos docker úteis para o dia a dia.

---

- Listar as imagens existentes no host:

```bash
docker image ls
```

- Verificar os containeres em execução no momento:

```bash
docker container ls
```

Com a flag `-a` é possível visualizar todos os containeres.

- Inicializar um container:

```bash
docker container run <imagem>
```

Caso a imagem não exista ela será baixada e inicializada. É possível adicionar flags ao comando run como `-i -t` que possibilitam a interação com o container e `-d` que inicializa o container em modo daemon (sem interação).
> Para sair da interação com um container sem finalizá-lo usar `ctrl + p + q`.

- ...
