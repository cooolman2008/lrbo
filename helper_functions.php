<?php
function clean_custom_menu( $menu_name ) {
    if ( ($menu_name) ) {
        $menu_items = wp_get_nav_menu_items($menu_name);

        $menu_list .= '<ul class="lrbo-menu">' ."\n";
 
        $count = 0;
        $submenu = false;
         
        foreach( $menu_items as $menu_item ) {
             
            $link = $menu_item->url;
            $title = $menu_item->title;
             
            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                 
                $menu_list .= '<li class="item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
            }
 
            if ( $parent_id == $menu_item->menu_item_parent ) {
 
                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<ul class="sub-menu">' ."\n";
                }
 
                $menu_list .= '<li class="item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
                $menu_list .= '</li>' ."\n";
                     
 
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</ul>' ."\n";
                    $submenu = false;
                }
 
            }
 
            if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
                $menu_list .= '</li>' ."\n";      
                $submenu = false;
            }
 
            $count++;
        }
         
        $menu_list .= '</ul>' ."\n";
 
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
    echo $menu_list;
}

function reference_slider() {
    ob_start();
    include(locate_template('reference.php'));
    $output = ob_get_clean();
    return $output;
}

if (!is_admin()) {
    add_shortcode('reference-slider', 'reference_slider' );
}

/**
 * Returns via ACF if ACF is installed, else uses get_post_meta();
 *
 * @param int     $post_id  The post ID.
 * @param string  $meta_key The meta key name.
 * @param boolean $single   Returns as string instead of array if set to true.
 *
 * @since 1.0
 *
 * @return string
 */
function get_meta_field_value( $post_id, $meta_key, $single = false ) {

	if ( ! is_integer( $post_id ) || $post_id <= 0 ) {
		return new \WP_Error(
			'invalid-id',
			__( 'Error: Post ID should be a positive integer greater than 0.', 'lrbo' )
		);
	}

	if ( ! is_string( $meta_key ) ) {
		return new \WP_Error(
			'invalid-meta-key',
			__( 'Error: Meta Key should be a string.', 'lrbo' )
		);
	}

	/**
	 * If ACF if installed, get value through ACF.
	 * This is to provide backward compatibility.
	 */
	if ( function_exists( 'get_field' ) ) {
		return get_field( $meta_key, $post_id );
	}

	/**
	 * If ACF is not installed, then use WordPress Core functions to retrieve
	 * the value.
	 */
	$post_meta = get_post_meta( $post_id, $meta_key, $single );

	/**
	 * If meta_key is not found, then return false.
	 */
	if ( ( is_string( $post_meta ) || is_array( $post_meta ) ) && empty( $post_meta ) ) {
		return false;
	}

	return $post_meta;
}

function register_site_config_page() {

    if( !function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    $option_page = acf_add_options_page(
        array(
            'page_title' => 'Site Configurations',
            'menu_title' => 'Site Configurations',
            'menu_slug'  => 'theme-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ));
}

add_action( 'acf/init', 'register_site_config_page' );
