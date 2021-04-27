# WordPress starter theme

## PHP autoload and dependencies

PHP Composer is being used for autoloading and dependecies management and you need to run `composer install`.

These are the linting scripts:

- `composer run-script lint:php` will test if the code is valid
- `composer run-script lint:cs` will check the code styling against the PSR-12 coding style (https://www.php-fig.org/psr/psr-12/)
- `composer run-script lint:cs:fix` will automatically fix all coding style issues

### Template parts

Templates should be split into components and organized within the `_template-parts` folder.  

## Assets

Laravel mix is being used for asset build and compilation:

- https://laravel.com/docs/8.x/mix
- https://laravel-mix.com/docs/6.0/installation

These are the steps needed in order to start working on the project:

- Install NPM
- All commands should be run from the `_assets` folder
- Install all dependecies with `npm install`
- For development you should run `npx mix watch` or you can setup browser sync: 
    - https://laravel-mix.com/docs/6.0/browsersync
- Before pushing to git you need to compile assets for production with: `npx mix --production`

These are the linting scripts:

- `npm run lint` is for running javascript eslint
- `npm run stylelint` is for running the css stylelint

### CSS

The setup includes Tailwind CSS and that is what needs to be used for the styles:

- https://tailwindcss.com/docs/container

If there is need for writing custom CSS add it to `_assets/src/css/style.css` and it will get compiled into `_assets/public/css/style.css`.

### JavaScript

Write javascript into `_assets/src/js/script.js` and everything will get compiled into `_assets/public/js/script.js`.
jQuery has been disabled and a modern javascript compilation has been set for use of NPM packages and JS modules with vanilla javascript.

### Images

Images are optimized and moved from `_assets/src/images` to `_assets/public/images`
