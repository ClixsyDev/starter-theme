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

## Fonts

Fonts should be downloaded and served from the `_assets/public/fonts` folder.

Add these code snippets to the header:

```
<link rel="preload" as="font" type="font/woff2" crossorigin href="<?= site_url(); ?>/wp-content/themes/twentytwenty-child/fonts/montserrat-v15-latin-regular.woff2"/>
```

```
<style>
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: optional;
        src: url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.eot'); /* IE9 Compat Modes */
        src: local(''),
            url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.eot?#iefix') format('embedded-opentype'),
            url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.woff2') format('woff2'),
            url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.woff') format('woff'),
            url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.ttf') format('truetype'),
            url('/wp-content/themes/starter-theme/_assets/public/fonts/montserrat-v15-latin-regular.svg#Montserrat') format('svg');
    }
</style>
```

## Lazy Load

This lib has been added for lazy loading: https://apoorv.pro/lozad.js/

Image example:

```
<div style="max-width: 360px">
    <picture class="lozad" data-iesrc="/images/thumbs/picture-01.jpg">
        <source srcset="/images/thumbs/picture-01.webp" media="(min-width: 1280px)">
        <source srcset="/images/thumbs/picture-02.webp" media="(min-width: 980px)">
        <source srcset="/images/thumbs/picture-03.webp" media="(min-width: 320px)">
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

Slider example:

```
<div style="height: 100vh">
    <div class="glide" style="max-width: 360px; margin: 0 auto">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide"><img src="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-01.jpg"></li>
                <li class="glide__slide"><img src="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-02.jpg"></li>
                <li class="glide__slide"><img src="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-03.jpg"></li>
            </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
    </div>
</div>
```

```
import lozad from 'lozad';

const mySliderObserver = lozad('.glide', {
  load: async (el) => {
    const { default: Glide } = await import('@glidejs/glide');
    new Glide(el, { autoplay: 2000, dragThreshold: 1 }).mount();
  },
});
mySliderObserver.observe();
```

```
@import "~@glidejs/glide/dist/css/glide.core.css";
@import "~@glidejs/glide/dist/css/glide.theme.css";
```
