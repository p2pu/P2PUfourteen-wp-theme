var path = require('path');

module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    loadPath: 'node_modules'
                },
                files: {
                    'css/style.css': 'css/p2pustrap-custom.scss'
                }
            }
        },
        watch: {
            css: {
                files: [
                    'css/*.scss',
                    'css/sass/*.scss',
                    'css/sass/**/*.scss'
                ],
                tasks: ['sass'],
                options: {
                    spawn: false
                }
            },
            php: {
                files: ['../**/*.php'],
                options: {
                    livereload: true
                }
            },
            options: {
                livereload: true
            },
            livereload: {
                files: ['css/p2pustrap-custom.scss']
            }
        }
    });
    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Default task(s).
    grunt.registerTask('default', ['watch']);

};