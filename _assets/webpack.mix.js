/* eslint-disable import/no-extraneous-dependencies */
/* eslint-disable global-require */
const mix = require('laravel-mix');
const StylelintPlugin = require('stylelint-webpack-plugin');

mix.webpackConfig({
  plugins: [new StylelintPlugin({
    configFile: './.stylelintrc.json',
    files: './src/css/*.css',
  })],
  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.(js)$/,
        loader: 'eslint-loader',
        exclude: /node_modules/,
      },
    ],
  },
});

mix.js('src/js/script.js', 'public/js')
  .css('src/css/style.css', 'public/css');
