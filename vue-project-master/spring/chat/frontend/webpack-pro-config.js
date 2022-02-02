const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
  baseConfig: {
    productionSourceMap: false,
    outputDir: path.resolve(__dirname, '../src/main/resources/static'),
    publicPath: '/api'
    // assetsDir: 'static'
  },
  configureWebpack: {
    output: {
      filename: 'js/[name].[contenthash].js',
      chunkFilename: 'js/[name].[contenthash].js'
    },

    plugins: [
      /*
      new HtmlWebpackPlugin({
        filename: 'index.html',
        template: 'index.html',
        favicon: 'public/favicon.ico',
        inject: true
      }),
       */
      new MiniCssExtractPlugin({
        filename: 'css/[name].[contenthash].css',
        chunkFilename: 'css/[name].[contenthash].css'
      })
      // new VuetifyLoaderPlugin()
    ]
  }

}
