<?php

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb', 150, 150, true ); // Normal thumbnail size
add_image_size( 'large-thumb', 300, 300, true ); // Large thumbnail size 
add_image_size( 'featured-img', 740, 420, true ); // Featured Image size 

// Registering menu
register_nav_menus( array('primary' => 'Primary Menu',
	'about' => 'About Menu',
	'services' => 'Services Menu') );

// Registering CSS
function theme_styles() {
	wp_enqueue_style('fonts', get_template_directory_uri() . '/styles/MyFontsWebfontsKit.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
	wp_register_style('bxslider', get_template_directory_uri() . '/styles/jquery.bxslider.css');

	if(is_front_page()) {
		wp_enqueue_style('bxslider');
	}

	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'theme_styles');

// Registering scripts
function theme_js() {
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), '', true);
	wp_register_script('bxslider', get_template_directory_uri() . '/scripts/jquery.bxslider.min.js', array('jquery'), '', true);
	wp_enqueue_script('classie', get_template_directory_uri() . '/scripts/classie.js', array('jquery'), '', true);
	wp_enqueue_script('uisearch', get_template_directory_uri() . '/scripts/uisearch.js', array('jquery'), '', true);
	//jquery.raty
	wp_register_script('rating', get_template_directory_uri() . '/scripts/jquery.raty.min.js', array('jquery', 'bootstrap'), '', true);

	if(is_front_page()) {
		wp_enqueue_script('bxslider');
	}

	wp_enqueue_script('custom', get_template_directory_uri() . '/scripts/custom.js', array('jquery', 'bootstrap'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

// add text to the featured image metabox
if ( get_post_type($_REQUEST['post']) == 'work' && is_admin() ){
	add_filter( 'admin_post_thumbnail_html', 'change_post_image_metabox_work' );
} elseif (get_post_type($_REQUEST['post']) == 'team' && is_admin()) {
	add_filter( 'admin_post_thumbnail_html', 'change_post_image_metabox_team' );
}

function change_post_image_metabox_work( $content ) {
  return $content.'<p>Please ensure that image is 800px x 533px (landscape ratio of 3:2)</p>';
}

function change_post_image_metabox_team( $content ) {
  return $content.'<p>Please ensure that image is 800px x 800px (landscape ratio of 4:4)</p>';
}

function codex_work_init() {
	$labels = array(
	'name' => 'Work',
	'singular_name' => 'Work',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Work',
	'edit_item' => 'Edit Work',
	'new_item' => 'New Work',
	'all_items' => 'All Works',
	'view_item' => 'View Work',
	'search_items' => 'Search Works',
	'not_found' =>  'No Work found',
	'not_found_in_trash' => 'No Work found in Trash', 
	'parent_item_colon' => '',
	'menu_name' => 'Work'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'menu_icon' => 'dashicons-portfolio',
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true,
	'rewrite' => array( 'slug' => 'work', 'with_front' => true ),
	'capability_type' => 'post',
	'has_archive' => true, 
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	); 

  	register_post_type( 'work', $args );
  	flush_rewrite_rules();
}
add_action( 'init', 'codex_work_init' );

function codex_client_init() {
	$labels = array(
	'name' => 'Clients',
	'singular_name' => 'Client',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Client',
	'edit_item' => 'Edit Client',
	'new_item' => 'New Client',
	'all_items' => 'All Clients',
	'view_item' => 'View Client',
	'search_items' => 'Search Clients',
	'not_found' =>  'No Client found',
	'not_found_in_trash' => 'No Client found in Trash', 
	'parent_item_colon' => '',
	'menu_name' => 'Clients'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'menu_icon' => 'dashicons-businessman',
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true,
	'rewrite' => array( 'slug' => 'client', 'with_front' => true ),
	'capability_type' => 'post',
	'has_archive' => true, 
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	); 

  	register_post_type( 'client', $args );
  	flush_rewrite_rules();
}
add_action( 'init', 'codex_client_init' );

function codex_team_init() {
	$labels = array(
	'name' => 'Team',
	'singular_name' => 'Team',
	'add_new' => 'Add New Member',
	'add_new_item' => 'Add New Member',
	'edit_item' => 'Edit Team',
	'new_item' => 'New Team',
	'all_items' => 'All Members',
	'view_item' => 'View Team',
	'search_items' => 'Search Members',
	'not_found' =>  'No Member found',
	'not_found_in_trash' => 'No Member found in Trash', 
	'parent_item_colon' => '',
	'menu_name' => 'Team'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'menu_icon' => 'dashicons-groups',
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true,
	'rewrite' => array( 'slug' => 'team', 'with_front' => true ),
	'capability_type' => 'post',
	'has_archive' => true, 
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	); 

  	register_post_type( 'team', $args );
  	flush_rewrite_rules();
}
add_action( 'init', 'codex_team_init' );

function create_services_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Services', 'taxonomy general name' ),
		'singular_name'     => _x( 'Service', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Services' ),
		'all_items'         => __( 'All Services' ),
		'parent_item'       => __( 'Parent Service' ),
		'parent_item_colon' => __( 'Parent Service:' ),
		'edit_item'         => __( 'Edit Service' ),
		'update_item'       => __( 'Update Service' ),
		'add_new_item'      => __( 'Add New Service' ),
		'new_item_name'     => __( 'New Service Name' ),
		'menu_name'         => __( 'Services' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'service' ),
	);

	register_taxonomy( 'service', array( 'work' ), $args );
}
add_action( 'init', 'create_services_taxonomies', 0 );

// registering testimonials custom post type
function testimonials_custom_post_type() {
  $labels = array(
    'name' => 'Testimonials',
    'singular_name' => 'Testimony',
    'add_new' => 'Add New Testimony',
    'add_new_item' => 'Add New Testimony',
    'edit_item' => 'Edit Testimony',
    'new_item' => 'New Testimony',
    'all_items' => 'All Testimonials',
    'view_item' => 'View Testimony',
    'search_items' => 'Search Testimonials',
    'not_found' =>  'No Testimony found',
    'not_found_in_trash' => 'No Testimony found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-testimonial',
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail')
  ); 

  register_post_type( 'testimonials', $args );
  flush_rewrite_rules();
}
add_action( 'init', 'testimonials_custom_post_type' );

// Edit password form
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "<h3>Please write the given password first.</h3>" ) . '
    <label for="' . $label . '" style="padding-right: 15px; font-size: 20px;">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" style="font-size: 20px;" /><input class="black-button" type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" style="margin-left: 15px;" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );
?>