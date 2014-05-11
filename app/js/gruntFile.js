module.exports = function(grunt) {
    grunt.initConfig({
            less: {
                production: {
                    options: {
                            yuicompress: true
                        },
                    files: {
                        "public/assets/stylesheets/style.css": "public/assets/stylesheets/style.less"
                    }
                }
            },
            watch: {
                options: {
                    livereload: true,
                },
                css: {
                    files: ['public/assets/stylesheets/*.less'],
                    tasks: ['less']
                },
                src: {
                    files: ['public/*.{php,html}', 'public/assets/javascripts/*.js', 'public/assets/images/*.{png,jpg,jpeg,webp,svg}'],
                    options: {
                        livereload: true,
                    },
                },
            }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', [ 'watch', 'less' ]);
};