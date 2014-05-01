module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
//      js: {
//        files: ['www/**/*.js'],
//        tasks: ['browserify']
//      },
      css: {
        files: ['css/**/*.less'],
        tasks: ['less']
      }
    },
//    browserify: {
//      js: {
//        src: './www/app.js',
//        dest: './www/bundle.js'
//      }
//    },
    less: {
      development: {
        files: {'./css/test.css': './css/test.less'}
      }
    }
  })

  grunt.loadNpmTasks('grunt-contrib-watch')
//  grunt.loadNpmTasks('grunt-browserify')
  grunt.loadNpmTasks('grunt-contrib-less')
//  grunt.registerTask('default', ['watch', 'browserify', 'less'])
  grunt.registerTask('default', ['watch', 'less'])
}