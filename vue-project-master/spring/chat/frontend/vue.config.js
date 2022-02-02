const webpackDevConfig = require('./webpack-dev-config')
const webpackProConfig = require('./webpack-pro-config')

const HOST = 'localhost'
const PORT = 8080

const baseConfig = process.env.NODE_ENV === 'production' ? webpackProConfig.baseConfig : webpackDevConfig.baseConfig
const configureWebpack = process.env.NODE_ENV === 'production' ? webpackProConfig.configureWebpack : webpackDevConfig.configureWebpack

module.exports = {
  ...baseConfig,
  configureWebpack: {
    ...configureWebpack
  },
  devServer: {
    clientLogLevel: 'warning',
    historyApiFallback: {
      rewrites: [
        {
          from: {},
          to: '/index.html'
        }
      ]
    },
    host: HOST,
    port: PORT,
    open: false,
    overlay: {
      warnings: false,
      errors: true
    },
    https: false
  },
  transpileDependencies: [
    'vuetify'
  ]
}
