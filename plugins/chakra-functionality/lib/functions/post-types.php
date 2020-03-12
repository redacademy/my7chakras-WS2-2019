<?php

/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

function create_articles()
{

    $labels = array(
        'name'                  => _x('Articles', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Article', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Articles', 'text_domain'),
        'name_admin_bar'        => __('Articles', 'text_domain'),
        'archives'              => __('Articles Archives', 'text_domain'),
        'attributes'            => __('Article Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Article:', 'text_domain'),
        'all_items'             => __('All Articles', 'text_domain'),
        'add_new_item'          => __('Add New Article', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Article', 'text_domain'),
        'edit_item'             => __('Edit Article', 'text_domain'),
        'update_item'           => __('Update Article', 'text_domain'),
        'view_item'             => __('View Article', 'text_domain'),
        'view_items'            => __('View Articles', 'text_domain'),
        'search_items'          => __('Search Article', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into Article', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this Article', 'text_domain'),
        'items_list'            => __('Articles list', 'text_domain'),
        'items_list_navigation' => __('Articles list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter Articles list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('article', 'text_domain'),
        'description'           => __('articles', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'template_lock'         => 'all',
    );
    register_post_type('articles', $args);
}
add_action('init', 'create_articles', 0);
