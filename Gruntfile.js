module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    path: 'styles/',
    sass_import: {
      dist: {
        files: {
          '<%= path %>styles.scss': [
            '<%= path %>sass/variables/*.scss',
            '<%= path %>sass/mixins/*.scss',
            '<%= path %>sass/base/*.scss',
            '<%= path %>sass/helpers/*.scss',
            '<%= path %>sass/components/**/*.scss',
          ]
        }
      }
    },
    sass: {
      dist: {
        options: {
          sourceMap: true,
          outputStyle: 'expanded'
        },
        files: {
          'style.css': '<%= path %>styles.scss'
        }
      }
    },
    autoprefixer: {
      dist: {
        files: {
          'style.css': 'style.css'
        }
      }
    },
    watch: {
      sass: {
        files: '<%= path %>**/*.scss',
        tasks: ['sass_import', 'sass', 'autoprefixer'],
        options: {
          spawn: false,
        }
      }
    }

  });

  require('load-grunt-tasks')(grunt);
  grunt.registerTask('default', ['sass_import','sass', 'autoprefixer']);
};
