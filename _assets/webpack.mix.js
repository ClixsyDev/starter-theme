let mix = require('laravel-mix');

mix.webpackConfig({
        module: {
            rules: [
                {
                    enforce: 'pre',
                    test: /\.(js)$/,
                    loader: 'eslint-loader',
                    exclude: /node_modules/
                }
            ]
        }
    })
   .js('src/js/script.js', 'public/js')
   .css('src/css/style.css', 'public/css', [
        require("tailwindcss"),
   ]);
