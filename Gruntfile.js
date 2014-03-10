module.exports = function(grunt) {
 
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: '_/js/scripts_dev.js',
        dest: 'js/scripts.js'
      }
    },
    concat: {
      options: {
      },
      dist: {
        src: [
          '_/js/modernizer.js',
          '_/js/picturefill.js',
          '_/js/instafeed.js',
          '_/js/plugins.js',
          '_/js/_myscripts.js'
        ],
        dest: '_/js/scripts_dev.js'
      }
    },
    less: {
      development: {
        options: {
          paths: ['_/less'],
          yuicompress: false
        },
        files: {
          '_/less/style_dev.css':'_/less/_mystyle.less'
        }
      }
    },
    cssmin: {
      compress: {
        files: {
          'style.css': ['_/less/style_dev.css']
        }
      }
    },
    watch: {
      scripts: {
        files: ['Gruntfile.js','_/js/*.js'],
        tasks: ['concat','uglify'],
      },
      less: {
        files: '_/less/*.less',
        tasks: ['less','cssmin'],
      },
      options: {
        livereload: true,
      }
    }
  });
 
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
 
  grunt.registerTask('default', ['concat','uglify','less','cssmin','watch']);
 
};