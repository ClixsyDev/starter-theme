let mix = require('laravel-mix');

mix.js('src/js/script.js', 'public/js')
   .css('src/css/style.css', 'public/css', [
        require("tailwindcss"),
   ]);
