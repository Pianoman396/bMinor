module.exports = function(grunt){

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
     pkg: grunt.file.readJSON('package.json'),
      sass: {
         dist: {
           options: {
            style: 'compressed'
           },
           files: {
               'css/main.css':'scss/styles.scss'
      }
    }
  }
});

//grunt.loadNpmTasks('grunt-contrib-watch');
grunt.registerTask('default',['sass']);
};