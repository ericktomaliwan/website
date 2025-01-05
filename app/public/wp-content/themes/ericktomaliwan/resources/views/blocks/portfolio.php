<?php
/**
 * Block Name: Portfolio
 */

use function Roots\asset;

// Enqueue styles
if ( ! wp_style_is( 'portfolio', 'enqueued' ) ) {
  bundle('portfolio')->enqueue();
}

// Create id attribute allowing for custom "anchor" value.
$id = 'portfolio-' . $block['id'];
if ( ! empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" value.
$className = 'portfolios';
if ( ! empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}


$portfolio_terms = get_terms(
    array(
        'taxonomy' => 'portfolios_cat'
    ) 
);