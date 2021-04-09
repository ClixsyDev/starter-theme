<?php

/**
 * Dump and die
 * @param $var
 */
if (!function_exists( 'dd' )) :
    function dd($var)
    {
        echo highlight_string("<?php \n\n" . var_export($var, true) . ";\n\n?>", true);
        die;
    }
endif;


/**
 * Generate dynamic css
 * Function parses theme options and generates css code dynamically
 * @return string Generated css code
 * @since  1.0
 */
if (!function_exists( 'deploy_generate_dynamic_css' )) :
    function deploy_generate_dynamic_css()
    {
        ob_start();
        get_template_part( '_assets/css/dynamic-css' );
        $output = ob_get_contents();
        ob_end_clean();
        return deploy_compress_css_code( $output );
    }
endif;


/**
 * Compress CSS Code
 * @param string  $code Uncompressed css code
 * @return string Compressed css code
 * @since  1.0
 */
if (!function_exists( 'deploy_compress_css_code' )) :
    function deploy_compress_css_code($code)
    {

        // Remove Comments
        $code = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code );

        // Remove tabs, spaces, newlines, etc.
        $code = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $code );

        return $code;
    }
endif;
