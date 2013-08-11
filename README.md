# Grunt WP Start

## Descrição do projeto

**Grunt WP Start** foi construído para que você inicie rapidamente o desenvolvimento de temas para WordPress já integrando o *task runner* [Grunt](http://gruntjs.com/) para automatizar tarefas repetitivas como: compilação de arquivos Sass/Scss para CSS, concatenação e minificação de arquivos, validações de scripts, otimização de imagens e *deploy* de arquivos para o seu servidor.

## Instalação

Caso não tenha trabalhado com o Grunt antes, siga os passos descritos no [Getting started](http://gruntjs.com/getting-started) oficial, e/ou leia [este artigo](http://blog.henriquesilverio.com/javascript-e-jquery/grunt-js-automatize-tarefas-e-otimize-o-seu-workflow/) para saber como trabalhar com o Grunt.

Com o Grunt já instalado em sua máquina, siga os passos abaixo:

- Clone o repositório:

``` bash
$ git clone https://github.com/HenriqueSilverio/grunt-wp.git
```

- Vá até o diretório `src/`:

``` bash
$ cd grunt-wp/src
```

- Por fim, instale as dependências com o comando:

``` bash
$ npm install
```
> **Observação:** aguarde até que as dependências sejam instaladas e siga para "Instruções de Uso".

## Instruções de Uso

1. Modifique as informações no arquivo `package.json` de acordo com o seu projeto.
2. Crie um arquivo `.ftppass` e configure a task `ftp-deploy`. [Clique aqui](https://github.com/zonak/grunt-ftp-deploy) para mais informações.

## Tarefas Disponíveis

### Observar alterações no projeto

``` bash
$ grunt
```

### Copiar scripts de terceiros para build

``` bash
$ grunt copy
```

### Gerar imagens otimizadas para build

``` bash
$ grunt imagemin
```

### Fazer deploy via FTP

``` bash
$ grunt deploy
```

## Contribua com o projeto

1. Dê um *Fork* no repositório
2. Crie um *branch* para adicionar os novos recursos: `git checkout -b meu-novo-recurso`
3. *Commit* suas alterações: `git commit -am 'Adicionado recurso ABC'`
4. *Push* para o *branch*: `git push origin meu-novo-recurso`
5. Envie um *pull request*


## Changelog

* Versão 1.0.0 - Primeira versão lançada


## Autor

* [@RikeSilverio](http://www.twitter.com/RikeSilverio/)


## Referências

* [Sass](http://sass-lang.com/)
* [Compass](http://compass-style.org/)
* [Grunt](http://gruntjs.com/)
* [Normalize CSS](http://necolas.github.io/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com/)
* [HTML5 Shiv](https://github.com/aFarkas/html5shiv)
