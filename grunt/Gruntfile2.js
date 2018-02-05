module.exports = function(grunt) {



  // Project configuration.

  require('load-grunt-tasks')(grunt);



  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    sass: {

      option: {

        sourcemap: '**/*.scss',

        style:'compressed'

        }
    },

    build: {

        src:'scss/**/*.scss',

        dest:'../',

        expand:true,

        ext:'css/.css',

        flatten:true

      },

    concat: {

      options: {

        separator: ';',

      },

      dist: {

        src: ['js/originals/**/*.js'],

        dest: 'js/compiled/main.js',

      }

    },

    uglify: {

      options: {},

      my_target: {

        files: {

          'js/compiledmain.min.js': ['js/compiled/main.js']

        }

      }

    },

    imagemin: {

      dynamic: {

        files: [{

          expand: true,

          cwd: '../img/origin/',

          src: ['**/*.{png,jpg,gif}'],

          dest: '../img/opt/'

        }]

      }

    }

  });





  // Default task(s).

  //grunt.registerTask('default', ['sass','build', 'concat', 'uglify', 'imagemin']);
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default', ['sass']);


};