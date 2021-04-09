<?php

// Setup Composer Autoload
require_once ( 'vendor/autoload.php' );

// Advanced Custom Fields Plugin
require_once ( '_inc/acf-include/acf-include.php' );

// Helper Functions
require_once ( '_core/helpers/helper-functions.php' );

// Template Functions
require_once ( '_core/helpers/template-functions.php' );

// Admin
require_once ( '_core/admin/_init.php' );

// Setup
require_once ( '_core/setup.php' );

// Enqueue
require_once ( '_core/enqueue.php' );

// Actions
require_once ( '_core/hooks/actions.php' );

// Filters
require_once ( '_core/hooks/filters.php' );

// Menus
require_once ( '_core/menus.php' );

// Sidebars
require_once ( '_core/sidebars.php' );

// Image Sizes
require_once ( '_core/image-sizes.php' );

// Widgets
require_once ( '_core/widgets/_init.php' );

// Shortcodes
require_once ( '_core/shortcodes/_init.php' );

// Plugins
require_once ( '_core/plugins/_init.php' );

// AJAX
require_once ( '_core/ajax/_init.php' );
