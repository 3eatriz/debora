<?php

// Include
require get_template_directory() . '/include/setup.php';
require get_template_directory() . '/include/customizer/theme-customizer.php';



//Hooks

add_action("wp_enqueue_scripts", "rt_theme_styles");
add_action("after_setup_theme", "rt_after_setup");
add_action("customize_register", "rt_customize_register");


// teste

/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x('Depoiments', 'Post Type General Name', 'Wae'),
    'singular_name'       => _x('Depoiments', 'Post Type Singular Name', 'Wae'),
    'menu_name'           => __('Depoiments', 'Wae'),
    'parent_item_colon'   => __('Parent Depoiments', 'Wae'),
    'all_items'           => __('All Depoiments', 'Wae'),
    'view_item'           => __('View Depoiments', 'Wae'),
    'add_new_item'        => __('Add New Depoiments', 'Wae'),
    'add_new'             => __('Add New', 'Wae'),
    'edit_item'           => __('Edit Depoiments', 'Wae'),
    'update_item'         => __('Update Depoiments', 'Wae'),
    'search_items'        => __('Search Depoiments', 'Wae'),
    'not_found'           => __('Not Found', 'Wae'),
    'not_found_in_trash'  => __('Not found in Trash', 'Wae'),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __('Depoiments', 'Wae'),
    'description'         => __('Depoiments news and reviews', 'Wae'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array('genres'),
    /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,

  );

  // Registering your Custom Post Type
  register_post_type('Depoiments', $args);
}

/* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */

add_action('init', 'custom_post_type', 0);


function custom_post_type2()
{
  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x('Canal Distribuição', 'Post Type General Name', 'Wae'),
    'singular_name'       => _x('Canal Distribuição', 'Post Type Singular Name', 'Wae'),
    'menu_name'           => __('Canal Distribuição', 'Wae'),
    'parent_item_colon'   => __('Parent Canal Distribuição', 'Wae'),
    'all_items'           => __('All Canal Distribuição', 'Wae'),
    'view_item'           => __('View Canal Distribuição', 'Wae'),
    'add_new_item'        => __('Add New Canal Distribuição', 'Wae'),
    'add_new'             => __('Add New', 'Wae'),
    'edit_item'           => __('Edit Canal Distribuição', 'Wae'),
    'update_item'         => __('Update Canal Distribuição', 'Wae'),
    'search_items'        => __('Search Canal Distribuição', 'Wae'),
    'not_found'           => __('Not Found', 'Wae'),
    'not_found_in_trash'  => __('Not found in Trash', 'Wae'),
  );
  // Set other options for Custom Post Type
  $args = array(
    'label'               => __('Canal Distribuição', 'Wae'),
    'description'         => __('Canal Distribuição news and reviews', 'Wae'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array('genres'),
    /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,
  );
  // Registering your Custom Post Type
  register_post_type('canal_distribuicao', $args);
}
/* Hook into the 'init' action so that the function
  * Containing our post type registration is not
  * unnecessarily executed.
  */
add_action('init', 'custom_post_type2', 1);
