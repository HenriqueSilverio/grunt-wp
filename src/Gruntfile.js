"use strict";

module.exports = function(grunt) {

	// Carrega todas as tarefas
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({

		// Meta
		pkg: grunt.file.readJSON("package.json"),

		// Banner
		banner:
		"/** \n" +
		"* Theme Name: <%= pkg.title %> \n" +
		"* Theme URI: <%= pkg.homepage %> \n" +
		"* Description: <%= pkg.description %> \n" +
		"* Author: <%= pkg.author.name %> \n" +
		"* Author URI: <%= pkg.author.url %> \n" +
		"* Version: 1.0 \n" +
		"**/" +
		"\n",

		// Observa as mundaças nos arquivos
		watch: {
			css: {
				files: ['../assets/scss/**/*'],
				tasks: ['compass', 'cssmin']
			},
			js: {
				files: '<%= jshint.all %>',
				tasks: ['jshint', 'uglify']
			}
		},

		// Compila os arquivos para CSS
		compass: {
			dist: {
				options: {
					force: true,
					config: 'config.rb'
				}
			}
		},

		cssmin: {
			options: {
				banner: '<%= banner %>'
			},
			build: {
				src: '../style.css',
				dest: '../style.css'
			}
		},

		// Copia os vendors para o diretório build
		copy: {
			dist: {
				files: [ {
					expand: true,
					cwd: '../assets/js/vendor/',
					src: [ '**/*' ],
					dest: '../build/js/vendor/'
				} ]
			}
		},

		// Validação dos scripts
		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'../assets/js/*.js'
			]
		},

		// Concatena e minifica os scripts
		uglify: {
			options: {
				mangle: false,
				banner: '<%= banner %>'
			},
			dist: {
				files: {
					'../build/js/app.min.js': [
						'../assets/js/app.js'
					]
				}
			}
		},

		// Otimização de imagens
		imagemin: {
			dist: {
				options: {
					optimizationLevel: 7,
					progressive: true
				},
				files: [ {
					expand: true,
					cwd: '../assets/img/',
					src: '**/*',
					dest: '../build/img/'
				} ]
			}
		},

		// Executa deploy via FTP
		'ftp-deploy': {
			build: {
				auth: {
					host: 'ftp.yoursite.com',
					port: 21,
					authKey: 'key1'
				},
				src: '../',
				dest: '/www/path/wp-content/themes/grunt-wp/',
				exclusions: [
					'../**.DS_Store',
					'../**Thumbs.db',
					'../**README.md',
					'../.git',
					'../.gitignore',
					'../assets',
					'../src'
				]
			}
		}

	});

	// Tarefa padrão
	grunt.registerTask( 'default', [ 'watch' ] );

	// Tarefa para Deploy
	grunt.registerTask( 'deploy', [ 'ftp-deploy' ] );

};
