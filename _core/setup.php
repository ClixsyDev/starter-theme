<?php

if ( ! function_exists( 'starter_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function starter_setup() {
        /**
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on starter, use a find and replace
         * to change 'starter' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'starter', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to head.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /**
         * Enable support for Post Thumbnails on posts and pages.
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /**
         * Add theme support for selective refresh for widgets.
         */
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        
        /**
         * Remove emojis
         */
	
        // Prevent Emoji from loading on the front-end
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
        // Remove from admin area also
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
    
        // Remove from RSS feeds also
        remove_filter( 'the_content_feed', 'wp_staticize_emoji');
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji');
    
        // Remove from Embeds
        remove_filter( 'embed_head', 'print_emoji_detection_script' );
    
        // Remove from emails
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    
        // Disable from TinyMCE editor. Currently disabled in block editor by default
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    
        /**
         * Finally, prevent character conversion too
         * without this, emojis still work 
         * if it is available on the user's device
         */
        add_filter( 'option_use_smilies', '__return_false' );

        function disable_emojis_tinymce( $plugins ) {
            if( is_array($plugins) ) {
                $plugins = array_diff( $plugins, array( 'wpemoji' ) );
            }
            return $plugins;
        }
    
    }
endif;
add_action( 'after_setup_theme', 'starter_setup' );
