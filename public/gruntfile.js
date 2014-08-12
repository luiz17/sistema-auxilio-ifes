module.exports = function(grunt) {

  // Libs JS
  var bootstrap = 'build/js/lib/bootstrap.min.js';
  var jquery = 'build/js/lib/jquery.min.js';
  var slider = 'build/js/lib/owl.carousel.min.js';

  // Main JS
  var mainjs = 'build/js/main.js';

  // Libs CSS
  var bootstrap_css = 'build/css/bootstrap.min.css';
  var slider_css = 'build/css/owl.carousel.css';
  

  // Project configuration
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    watch: {
      build: {
        files: ['**/*.js', '**/*.scss', '**/*.html', '**/*.php'],
        tasks: ['concat', 'uglify', 'sass', 'concat_css', 'cssmin', 'clean_sass'],
        options: {
          spawn: false,
          livereload: true 
        },
      },
      sass: {
        files: ['**/*.scss', '**/*.html', '**/*.php'],
        tasks: ['sass', 'concat_css', 'cssmin', 'clean_sass'],
        options: {
          spawn: false,
          livereload: true 
        },
      },
      js: {
        files: ['**/*.js', '**/*.html', '**/*.php'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false,
          livereload: true 
        },
      },
    }, // Watch

    concat: {
      options: {
        separator: '\n\n\n'
      },
      js: {
        src: [jquery, bootstrap, slider, mainjs],
        dest: 'js/main.js'
      },
      css: {
        src: [bootstrap_css, slider_css, 'css/cache-style.css'],
        dest: 'css/style.css'
      }
    }, // concat

    uglify: {
      options: {
        banner: '/*! Want to know more about it? Access the file js/main.js ;) */\n'
      },
      build: {
        src: 'js/main.js',
        dest: 'js/main.min.js'
      }
    }, // uglify

    sass: {                            
      dist: {               
        options: {                    
          style: 'expanded'
        },
        files: {                  
          'css/cache-style.css': 'build/scss/style.scss'
        }
      }
    }, // sass

    cssmin: {
      add_banner: {
        options: {
          banner: '/* Want to know more about it? Access the file css/style.css ;) */'
        },
        files: {
          'css/style.min.css': ['css/style.css']
        }
      }
    }, // cssmin

    copy: {
      main: {
        src: 'src/*',
        dest: 'dest/',
      },
    }, // copy

    clean: {
      // Deletes files generated in the project construction
      project: {
        src: ['js/main.js', 'js/main.min.js', 'css/style.css', 'css/style.min.css']
      },
      // Deletes css files generated in the project construction
      sass: {
        src: ['css/cache-style.css', '.sass-cache']
      }
    } // clean

  });


  // Load the plugin(s).
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['concat_js', 'uglify', 'sass', 'concat_css', 'cssmin', 'clean_sass']);
  grunt.registerTask('concat_js', ['concat:js']);
  grunt.registerTask('concat_css', ['concat:css']);
  grunt.registerTask('clean_sass', ['clean:sass']);
  grunt.registerTask('clean_project', ['clean:project']);
  grunt.registerTask('wsass', ['watch:sass']);
  grunt.registerTask('wjs', ['watch:js']);

};