# Themoviedb-php

- [Themoviedb-php]
    - [Link](#link)
    - [Resumo](#resumo)
    - [Wireframe](#wireframe)
    - [Recursos utilizados](#recursos-utilizados)
    - [Telas](#telas)

## Link

<a href="https://vbeloti.xyz/projects/themoviedb-web">https://vbeloti.xyz/projects/themoviedb-web</a>

## Resumo

Esta aplicação foi desenvolvida em PHP utilizando a api <a href="https://developers.themoviedb.org/3/">themoviedb.org</a>, através dessa api foi desenvolvido um site de filmes e series, como nessa api não existem os trailer para cada filme ou série, foi utiliza a api do youtube para trazer os trailer.

## Wireframe

<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/wireframe.png?raw=true" alt="Wireframe">


## Recursos utilizados

| recursos                   | descrição                                                             |
|:--------------             |:----------------------------------------------------------------------|
| `/GET /movie/popular`      | returna uma lista dos filmes mais populares                           |
| `/GET /tv/popular`         | returna uma lista das série mais populares                            |
| `GET /movie/{movie_id}`    | retorna um filme específico pelo ID                                   |
| `GET /tv/{serie_id}`       | retorna uma série específico pelo ID                                  |
| `GET /search/multi`        | retorna uma lista de filmes e séries baseado no parametro de pesquisa |
| `GET /genre/movie/list`    | retorna uma lista de gêneros de filmes                                |
| `GET /genre/tv/list`       | retorna uma lista de gêneros de séries                                |
| `GET /youtube/v3/search?q` | retorna uma lista de vídeo base baseado no parametro de pesquisa      |

## Telas

### Home
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-1.jpg?raw=true" alt="Themoviedb" />

### Filme específico
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-2-1.jpg?raw=true" alt="Themoviedb" />

### Filme em alta
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-3.jpg?raw=true" alt="Themoviedb" />

### Séries em alta
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-4.jpg?raw=true" alt="Themoviedb" />

### Gêneros
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-5.jpg?raw=true" alt="Themoviedb" />

### Busca
<img src="https://github.com/vbeloti/themoviedb-web/blob/master/.github/themoviedb-php-6.jpg?raw=true" alt="Themoviedb" />
