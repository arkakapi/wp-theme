<?php
/**
 *
 * omer citak <@om3rcitak>
 *
 */

function arkakapi_setup() {

	load_theme_textdomain( 'arkakapi' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
	) );

	register_nav_menus( [
		'navigation'    => __( 'Navigation Menu', 'arkakapi' ),
		'footer_social' => __( 'Footer Social Icons Menu', 'arkakapi' ),
	] );

}

function arkakapi_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'arkakapi' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'arkakapi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="widget-title font-alt">',
		'after_title'   => '</h5><div class="widget-body">',
	) );

}

function get_current_url() {
	global $wp;

	return home_url( $wp->request );
}

function get_blogpage_url() {
	return get_permalink( get_option( 'page_for_posts' ) );
}

function get_page_type() {

	if ( isset( $_GET['s'] ) ) {
		return 'search';
	}

	return get_home_url() == get_current_url() ? "home" : "page";
}

function get_nav_class() {
	return get_page_type() == "home" ? "transparent stick-fixed" : "js-stick";
}

if ( ! function_exists( 'get_menu_by_location' ) ):
	function get_menu_by_location( $theme_location, $args = [] ) {
		$theme_locations = get_nav_menu_locations();
		$menu_obj        = get_term( $theme_locations[ $theme_location ], 'nav_menu' );
		if ( $menu_obj ) {
			return wp_get_nav_menu_items( $menu_obj->term_id, $args );
		} else {
			return $menu_obj;
		}
	}
endif;

add_action( 'after_setup_theme', 'arkakapi_setup' );
add_action( 'widgets_init', 'arkakapi_widgets_init' );