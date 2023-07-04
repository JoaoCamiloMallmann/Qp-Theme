<?php

function get_assets()
{

  return get_template_directory_uri() . '/assets';
}

add_action('init', 'get_assets');



add_action('init', 'your_prefix_register_post_type');
function your_prefix_register_post_type()
{
  $args = [
    'label'  => esc_html__('gfeg', 'text-domain'),
    'labels' => [
      'menu_name'          => esc_html__('gfeg', 'your-textdomain'),
      'name_admin_bar'     => esc_html__('fdgfg', 'your-textdomain'),
      'add_new'            => esc_html__('Add fdgfg', 'your-textdomain'),
      'add_new_item'       => esc_html__('Add new fdgfg', 'your-textdomain'),
      'new_item'           => esc_html__('New fdgfg', 'your-textdomain'),
      'edit_item'          => esc_html__('Edit fdgfg', 'your-textdomain'),
      'view_item'          => esc_html__('View fdgfg', 'your-textdomain'),
      'update_item'        => esc_html__('View fdgfg', 'your-textdomain'),
      'all_items'          => esc_html__('All gfeg', 'your-textdomain'),
      'search_items'       => esc_html__('Search gfeg', 'your-textdomain'),
      'parent_item_colon'  => esc_html__('Parent fdgfg', 'your-textdomain'),
      'not_found'          => esc_html__('No gfeg found', 'your-textdomain'),
      'not_found_in_trash' => esc_html__('No gfeg found in Trash', 'your-textdomain'),
      'name'               => esc_html__('gfeg', 'your-textdomain'),
      'singular_name'      => esc_html__('fdgfg', 'your-textdomain'),
    ],
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'has_archive'         => true,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite_no_front'    => false,
    'show_in_menu'        => false,
    'supports' => [
      'title',
      'editor',
      'thumbnail',
    ],
    'taxonomies' => [
      'category',
      'tag',
    ],
    'rewrite' => true
  ];

  register_post_type('fdgfggdfg', $args);
}
