<?php

/**
 * Helper
 */

namespace App;

if ( ! function_exists( 'blog_posted_on' ) ) :
    function blog_posted_on() {
        $time_string = '';

        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
          $time_desc = _x( 'Updated: ', 'date prefix', 'regiondo' );
          $time_string = '<time class="updated entry-updated" datetime="%3$s">%4$s</time>';
        } else {
          $time_desc = _x( 'Posted: ', 'date prefix', 'regiondo' );
          $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        }
    
        $time_string = sprintf(
          $time_string,
          esc_attr( get_the_date( DATE_W3C ) ),
          esc_html( get_the_date() ),
          esc_attr( get_the_modified_date( DATE_W3C ) ),
          esc_html( get_the_modified_date() )
        );
    
        $posted_on = sprintf(
        /* translators: %s: post date. */
          esc_html_x( '%s', 'post date', 'et_textdomain' ),
          /* language for Posted and Updated */
    
          '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );
    
        echo '<span class="posted-on">' . $time_desc  . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;