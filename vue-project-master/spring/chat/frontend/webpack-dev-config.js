const path = require('path')

module.exports = {
  baseConfig: {},
  configureWebpack: {
    entry: {
      app: [path.join(__dirname, 'src', 'main')]
    },
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.esm.js',
        '@': path.resolve('./src')
      }
    }
  }
}
