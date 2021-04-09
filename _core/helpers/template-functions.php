<?php

/**
 * Get post date in time ago format
 */
if (!function_exists( 'the_time_ago' )) :
    function the_time_ago()
    {
        echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
    }
endif;


/**
 * Print the excerpt
 * @param $limit
 */
if (!function_exists( 'the_starter_excerpt' )) :
    function the_starter_excerpt($limit)
    {
        $text  = get_the_content( '' );
        $text  = strip_shortcodes( $text );
        $text  = apply_filters( 'the_content', $text );
        $text  = str_replace( ']]>', ']]>', $text );
        $text  = strip_tags( $text );
        $text  = preg_replace('#\[[^\]]+\]#', '', $text);
        $words = explode( ' ', $text, $limit + 1 );
        if ( count( $words ) > $limit ) {
            array_pop( $words );
            array_push( $words, '' );
            $text = trim(implode( ' ', $words )).'...';
        }

        echo $text;
    }
endif;
