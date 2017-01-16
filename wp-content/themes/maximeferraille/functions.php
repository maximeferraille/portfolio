<?php

add_theme_support('post-thumbnails');

function wpmf_theme_styles(){ //wpmf => prefix for my function, wp for wordpress & mf for maxime ferraille

  wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css');
  wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Raleway:700|Roboto');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'wpmf_theme_styles');


function wpmf_theme_js() {

  wp_enqueue_script('icon_js','https://use.fontawesome.com/1a31d9257d.js' ,'' ,'' ,true);
  wp_enqueue_script( 'top_js', get_template_directory_uri() . '/js/top.js', array('jquery'), '', true  );
  wp_enqueue_script('menu_js', get_template_directory_uri() . '/js/menu.js', array('jquery') ,'' ,true);
}
add_action( 'wp_enqueue_scripts', 'wpmf_theme_js' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu('header', 'Header Menu');
}

add_filter( 'rwmb_meta_boxes', 'index_meta_boxes' );
function index_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'For the Index', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
              'id' => 'main_title',
              'name' => __('Main Title', 'textdomain'),
              'type' => 'text',
            ),
            array(
                'id'   => 'about_title',
                'name' => __( 'Title About', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id' => 'about_description',
                'name' => __('Description About', 'textdomain'),
                'type' => 'wysiwyg',
              ),
            array(
              'id' => 'quote_content',
              'name' => __('Quote content','textdomain'),
              'type' => 'wysiwyg',
            ),
            array(
              'id' => 'quote_author',
              'name' => __('Quote author','textdomain'),
              'type' => 'text',
            ),
            array(
              'id' => 'skills_title',
              'name' => __('Skills title','textdomain'),
              'type' => 'text',
            ),
            array(
              'id' => 'skills_subtitle',
              'name' => __('Skills subtitle','textdomain'),
              'type' => 'text',
            ),
            array(
                'id' => 'skills_description',
                'name' => __('Skills description', 'textdomain'),
                'type' => 'wysiwyg',
              ),
            array(
                'id' => 'download_cv',
                'name' => __('Download Curriculum Vitae', 'textdomain'),
                'type' => 'file',
                ),
        ),
    );
    return $meta_boxes;
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('thumbnail','title')
    )
  );
}

add_filter( 'rwmb_meta_boxes', 'project_meta_boxes' );
function project_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Project', 'textdomain' ),
        'post_types' => 'project',
        'fields'     => array(
          array(
              'id'   => 'project_title',
              'name' => __( 'Project Title', 'textdomain' ),
              'type' => 'text',
          ),
          array(
            'id'   => 'project_type',
            'name' => __( 'Project Type', 'textdomain' ),
            'type' => 'text',
          ),
          array(
              'id'   => 'project_description',
              'name' => __( 'Project description', 'textdomain' ),
              'type' => 'wysiwyg',
          ),
            array(
                'id'   => 'project_link',
                'name' => __( 'Project Link', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'project_link_name',
                'name' => __( 'Project Link Name', 'textdomain' ),
                'type' => 'text',
            ),
            array(
              'id' => 'project_picture',
              'name'=> __('Project picture(s)','texdomain'),
              'type' => 'file_upload',
            ),
        ),
    );
    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'portfolio_meta_boxes' );
function portfolio_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'For the Portfolio', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
              'id' => 'portfolio_description',
              'name' => __('Portfolio Description', 'textdomain'),
              'type' => 'wysiwyg',
            ),
          ),
    );
    return $meta_boxes;
}
 ?>
