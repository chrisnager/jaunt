'use strict';
 

var LIVERELOAD_PORT = 35729,
    lrSnippet = require('connect-livereload')({ port: LIVERELOAD_PORT }),
    mountFolder = function( connect, dir ) {
        return connect.static(require('path').resolve(dir));
    };

module.exports = function( grunt ) {
   
   require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks); 
   
   grunt.initConfig({
    
    watch: {
      livereload: {
        files: [
          'app/{,*/}*.html',
          'app/{,*/}*.{scss,js,png,jpg,gif,svg}'
        ],
        tasks: ['sass'],
        options: {
          livereload: LIVERELOAD_PORT
        }
      }
    },
    
    sass: { 
        dist: {
            options: {
                style: 'expanded'
            },
            files: [{
                expand: true,
                cwd: 'app/css',
                src: ['**/*.scss'],
                dest: 'app/css',
                ext: '.css'
            }]
        }
    },

    connect: {
      options: {
        port: 9000,
        hostname: '0.0.0.0'
      },
      livereload: {
        options: {
          middleware: function( connect ) {
            return [
              lrSnippet,
              mountFolder(connect, 'app')
            ];
          }
        }
      }
    },

    open: {
      server: {
        url: 'http://localhost:<%= connect.options.port %>'
      }
    }
    
  });
 
  grunt.registerTask('server', function() {
    grunt.task.run([
      'connect:livereload',
      'open',
      'watch'
    ]);
  });
 
  grunt.registerTask('default', [ 'server' ]);
};