module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                files: {
                    'www/assets/css/style.css': 'www/assets/css/src/style.scss'
                }
            }
        },
        autoprefixer: {
            development: {
                browsers: ['last 2 version', 'ie 9'],
                expand: true,
                flatten: true,
                src: 'www/assets/css/style.css',
                dest: 'www/assets/css'
            }
        },
        cssmin: {
            options: {
                keepSpecialComments: 0
            },
            my_target: {
                options: {
                    keepSpecialComments: 1
                },
                src: 'www/assets/css/style.css',
                dest: 'www/assets/css/style.css'
            }
        },uglify: {
            my_target: {
                files: {
                    'www/assets/js/main.min.js': ['www/assets/js/main.js']
                }
            }
        },

        express: {
            all: {
                options: {
                    port: 8080,
                    hostname: 'localhost',
                    bases:['.'],
                    livereload:true
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-express');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-css');

    grunt.registerTask('default', ['sass', 'autoprefixer', 'cssmin', 'uglify', 'watch']);

};