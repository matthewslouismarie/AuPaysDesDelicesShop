module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'apdd-shop.min.css': 'sass/apdd-shop.scss',
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
};