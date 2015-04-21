 module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/app.css': 'scss/app.scss',
          'css/corporate.css': 'scss/corporate.scss',
          'css/personal.css': 'scss/personal.scss'
        }        
      }
    },

    copy: {
      scripts: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.js',
        dest: 'js'
      },

      maps: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.map',
        dest: 'js'
      }
    },

    uglify: {
      dist: {
        files: {
          'js/modernizr/modernizr.min.js': ['js/modernizr/modernizr.js'],
          'js/app.min.js': ['js/app.js']

        }
      }
    },



    concat: {
      options: {
        separator: ';',
        outputStyle: 'condensed'
      },
      dist: {
        src: [
          'js/foundation/js/foundation.min.js',
          'js/custom/*.js',
          'js/custom/jquery.cookie.js'
        ],

        dest: 'js/app.js'
      }

    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });


  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat'); // if this isn't working automaticaly, run the command 'grunt watch'
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass', 'copy', 'concat', 'uglify' ]);
  grunt.registerTask('default', ['watch']);
}