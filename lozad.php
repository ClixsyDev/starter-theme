<?php /* Template Name: Lozad */ ?>

<?php get_header(); ?>

<h1>Lozad</h1>

<div style="background: gray; height: 100vh"></div>
<div style="background: gray; height: 100vh"></div>

<?php while (have_posts()) : the_post(); ?>

    <div style="height: 100vh">
        <div style="max-width: 360px">
            <picture class="lozad" data-iesrc="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-01.jpg">
                <!-- <source srcset="<?php the_post_thumbnail_url(); ?>"> -->
                <source srcset="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-01.jpg" media="(min-width: 1280px)">
                <source srcset="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-02.jpg" media="(min-width: 980px)">
                <source srcset="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-03.jpg" media="(min-width: 320px)">
                <noscript><img src="https://apoorv.pro/lozad.js/demo/images/thumbs/picture-01.jpg"></noscript>
                <div class="placeholder" style="padding-top: 68.61%"></div>
            </picture>
        </div>
    </div>

    <div style="height: 100vh">
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
    </div>

    <div style="height: 100vh">
        <div
            class="lozad"
            data-background-image-set="
                url('https://apoorv.pro/lozad.js/demo/images/thumbs/picture-01.jpg') 1x, 
                url('https://apoorv.pro/lozad.js/demo/images/thumbs/picture-02.jpg') 2x, 
                url('https://apoorv.pro/lozad.js/demo/images/thumbs/picture-03.jpg') 3x"
            style="
                min-width: 360px;
                min-height: 247px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: 50% 50%;
            "
        ></div>
    </div>

<?php endwhile; ?>

<div style="height: 100vh">
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
</div>

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

<?php get_footer(); ?>
