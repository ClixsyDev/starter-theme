/* eslint-disable import/no-extraneous-dependencies */
/* eslint-disable global-require */
const mix = require('laravel-mix');
const StylelintPlugin = require('stylelint-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;

const developmentPlugins = [
  new StylelintPlugin({
    configFile: './.stylelintrc.json',
    files: './src/css/*.css',
  }),
];

const productionPlugins = [
  new CopyPlugin({
    patterns: [
      { from: './src/images', to: './public/images' },
    ],
  }),
  new ImageminPlugin({
    disable: !mix.inProduction(),
    test: /\.(jpe?g|png|gif|svg)$/i,
  }),
];

const plugins = mix.inProduction() ? productionPlugins : developmentPlugins;

mix.webpackConfig({
  plugins,
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
  .css('src/css/style.css', 'public/css').options({
    processCssUrls: false,
  });
