module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    cssmin: {
      target: {
        files: {
          'wp-content/themes/theordervescompany/style.css': ['css/*.css']
        }
      }
    },
    sass: {
      gb3: {
        files: [{
          expand: true,
          cwd: 'sass/',
          src: ['*.scss'],
          dest: 'wp-content/themes/theordervescompany/',
          ext: '.css',
          extDot: 'last'
        }]
      }
    },
    watch: {
      css_desktop: {
        files: ['sass/*.scss','sass/**/*.scss'],
        tasks: ['sass:gb3', 'cssmin']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('gb3-css', ['sass:gb3', 'cssmin']);
  grunt.registerTask('default', ['sass:gb3', 'cssmin']);

};
