# WordPress starter theme

This is a starter theme focused on page speed optimized aproach to web development with strict coding styles and clean, flexible and 
easily maintainable code.

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
- For development you should run `npm run watch` or you can setup browser sync: 
    - https://laravel-mix.com/docs/6.0/browsersync
- Before pushing to git you need to compile assets for production with: `npm run build`

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

## Lazy Load

This lib has been added for lazy loading: https://apoorv.pro/lozad.js/

Image example:

```
<div style="max-width: 360px">
    <picture class="lozad" data-iesrc="/images/thumbs/picture-01.jpg">
        <source srcset="/images/thumbs/picture-01.webp">
        <source srcset="/images/thumbs/picture-01.jpg" media="(min-width: 1280px)">
        <source srcset="/images/thumbs/picture-02.jpg" media="(min-width: 980px)">
        <source srcset="/images/thumbs/picture-03.jpg" media="(min-width: 320px)">
        <noscript><img src="/images/thumbs/picture-01.jpg"></noscript>
        <div class="placeholder" style="padding-top: 68.61%"></div>
    </picture>
</div>
```

Background image example:

```
<div
    class="lozad"
    data-background-image="https://apoorv.pro/lozad.js/demo/images/backgrounds/background-single.jpg"
    style="
        min-height: 12rem;
        min-width: 240px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50% 50%;
    "
></div>
```

Iframe example:

```
<iframe
    class="lozad"
    width="560"
    height="315"
    data-src="https://www.youtube.com/embed/L3HQMbQAWRc"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
></iframe>
```
