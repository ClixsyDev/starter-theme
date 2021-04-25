/* eslint-disable import/no-extraneous-dependencies */
/* eslint-disable global-require */
const mix = require('laravel-mix');

mix.webpackConfig({
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
