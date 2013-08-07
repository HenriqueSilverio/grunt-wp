"use strict";

module.exports = function(grunt) {

	// Load all tasks
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

		// Watch for changes
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

		// Compile scss
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

		// Copy vendor scripts to build
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

		// Linting javascripts
		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'../assets/js/*.js'
			]
		},

		// Concat and minify javascripts
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

		// Image optimization
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

		// FTP deployment
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

	// Default task
	grunt.registerTask( 'default', [ 'watch' ] );

	// Deploy
	grunt.registerTask( 'deploy', [ 'ftp-deploy' ] );

};
