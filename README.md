# Grunt WP #

## Descrição do projeto

Grunt WP foi construido para que você inicie rapidamente o desenvolvimento de temas para Wordpress já integrando o *task runner* [Grunt](http://gruntjs.com/) para automatizar tarefas repetitivas como compilar Compass/SCSS, minificar CSS, testar, concatenar e minificar arquivos de JavaScript, otimizar imagens e fazer deployment dos arquivos para seu servidor.

## Instalação

Caso não tenha trabalhado com o Grunt antes, siga os passos descritos no [Getting started](http://gruntjs.com/getting-started) oficial, e/ou leia [este artigo](http://blog.henriquesilverio.com/javascript-e-jquery/grunt-js-automatize-tarefas-e-otimize-o-seu-workflow/) que escrevi sobre como trabalhar com o Grunt.

Com o Grunt já instalado em sua máquina, basta seguir esses passos:

* Clone o Grunt WP:

``` bash
$ git clone https://github.com/HenriqueSilverio/grunt-wp.git
```

* Entre no diretório `src/`:

``` bash
$ cd grunt-wp/src
```

* Instale as dependências:

``` bash
$ npm install
```

## Instruções de uso

1. Personalize o arquivo `package.json`.
2. Crie um arquivo `.ftppass` e configure a task `ftp-deploy`. ([Maiores informações](https://github.com/zonak/grunt-ftp-deploy)).

### Assistir alterações no projeto

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

1. Dê um Fork no repositório
2. Crie um branch para adicionar suas novas features: `git checkout -b my-new-feature`
3. Commit suas alterações: `git commit -am 'Add some feature'`
4. Push para o branch: `git push origin my-new-feature`
5. Envie um pull request

## Changelog

#### Versão 1.0

* Primeira versão lançada

## Créditos

* [@RikeSilverio](http://www.twitter.com/RikeSilverio/)

## Referências

* [Sass ~ SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org/)
* [Grunt](http://gruntjs.com/)
* [Normalize CSS](http://necolas.github.io/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com/)
* [HTML5 Shiv](https://github.com/aFarkas/html5shiv)
