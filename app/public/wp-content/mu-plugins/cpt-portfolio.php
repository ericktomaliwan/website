<?php
/**
 * Plugin Name: Portfolio CPT
 * Author: Erick Tomaliwan
 * Description: Manages the portfolio custom post type on the website
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Registers Portfolio custom post type
 */
function ewt_portfolio_cpt() {
  register_post_type(
    'portfolio',
    array(
      'labels'        => array(
        'name'               => __( 'Portfolio',                   'ewt_textdomain' ),
        'singular_name'      => __( 'Portfolio',                   'ewt_textdomain' ),
        'menu_name'          => __( 'Portfolio',                   'ewt_textdomain' ),
        'name_admin_bar'     => __( 'Portfolio',                   'ewt_textdomain' ),
        'add_new'            => __( 'Add New',                   'ewt_textdomain' ),
        'add_new_item'       => __( 'Add New Portfolio',           'ewt_textdomain' ),
        'edit_item'          => __( 'Edit Portfolio',              'ewt_textdomain' ),
        'new_item'           => __( 'New Portfolio',               'ewt_textdomain' ),
        'view_item'          => __( 'View Portfolio',              'ewt_textdomain' ),
        'search_items'       => __( 'Search Portfolio',            'ewt_textdomain' ),
        'not_found'          => __( 'No Portfolio found',          'ewt_textdomain' ),
        'not_found_in_trash' => __( 'No Portfolio found in trash', 'ewt_textdomain' ),
        'all_items'          => __( 'All Portfolio',               'ewt_textdomain' ),
      ),
      'public'        => true,
      'show_in_rest'  => true,
      'menu_position' => 22,
      'menu_icon'     => 'dashicons-portfolio',
      'supports'      => array('title', 'editor', 'thumbnail', 'revisions'),
      'rewrite'       => array(
        'slug'          => 'portfolios/Portfolio',
        'with_front'    => false,
      ),
    )
  );

  register_taxonomy_for_object_type('category', 'portfolios_cat');

  register_taxonomy( 'portfolios_cat', 
    array('portfolios'), 
    array('hierarchical' => true,             
        'labels' => array(
            'name' => __( 'Portfolio Categories', 'ewt_textdomain' ), 
            'singular_name' => __( 'Portfolio Category', 'ewt_textdomain' ), 
            'search_items' =>  __( 'Search Portfolio Categories', 'ewt_textdomain' ), 
            'all_items' => __( 'Manage Custom Categories', 'ewt_textdomain' ), 
            'parent_item' => __( 'Parent Portfolio Category', 'ewt_textdomain' ), 
            'parent_item_colon' => __( 'Parent Portfolio Category:', 'ewt_textdomain' ), 
            'edit_item' => __( 'Edit Portfolio Category', 'ewt_textdomain' ), 
            'update_item' => __( 'Update Portfolio Category', 'ewt_textdomain' ), 
            'add_new_item' => __( 'Add New Portfolio Category', 'ewt_textdomain' ),
            'new_item_name' => __( 'New Custom Portfolio Name', 'ewt_textdomain' )
        ),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolios' ),
    )
);   

}
add_action('init', 'ewt_portfolio_cpt');

