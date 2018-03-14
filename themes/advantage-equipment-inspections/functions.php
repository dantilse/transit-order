<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}


// -----------------------------------------------------------------------------
// Custom Functions, move to a plugin?
// -----------------------------------------------------------------------------

/**
 * Go Directly to Checkout
 */
// add_filter('add_to_cart_redirect', 'understrap_add_to_cart_redirect');
//   function understrap_add_to_cart_redirect() {
//     global $woocommerce;
//     $checkout_url = $woocommerce->cart->get_checkout_url();
//     return $checkout_url;
//   }


/*
 * Deregister Checkout Fields
  */
add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
  unset($fields['order']['order_comments']);
  return $fields;
}

/**
 * Add the field to the checkout
 */
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field', 1 );

function my_custom_checkout_field( $checkout ) {

    // echo '<div id="my_custom_checkout_field"><h2>' . __('Equipment Details') . '</h2>';

    woocommerce_form_field( 'unit_number', array(
        'type'          => 'text',
        'class'         => array('form-row-wide validate-required validate-number'),
        'label'         => __('Number of Units'),
        // 'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'unit_number' ));

    woocommerce_form_field( 'unit_location', array(
        'type'          => 'text',
        'class'         => array('form-row-wide'),
        'label'         => __('Location of Units'),
        // 'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'unit_location' ));

    woocommerce_form_field( 'unit_description', array(
        'type'          => 'textarea',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Lot Number'),
        // 'placeholder'   => __('Enter something'),
      ), $checkout->get_value( 'unit_description' ));

    // echo '</div>';

}

/**
 * Update the order meta with field value
 */
// add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

// function my_custom_checkout_field_update_order_meta( $order_id ) {
//     if ( ! empty( $_POST['my_field_name'] ) ) {
//         update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['my_field_name'] ) );
//     }
// }


/*
 * Remove WooCommerce Tabs on Product Page
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

/**
* Place a cart icon with number of items and total cost in the menu bar.
*
* Source: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
*/
add_filter('wp_nav_menu_items','sk_wcmenucart', 10, 2);
function sk_wcmenucart($menu, $args) {

	// Check if WooCommerce is active and add a new item to a menu assigned to Primary Navigation Menu location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'primary' !== $args->theme_location )
		return $menu;

	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'advantage');
		$start_shopping = __('Start shopping', 'advantage');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
	// 	$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'advantage'),
  $cart_contents = sprintf(_n('<span class="wcmenucart-count">%d</span>', '<span class="wcmenucart-count">%d</span>', $cart_contents_count, 'advantage'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		if ( $cart_contents_count > 0 ) {
			if ($cart_contents_count == 0) {
			$menu_item = '<li class="main-menu-item active right"><a class="wcmenucart-contents nav-link" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			} else {
				$menu_item = '<li class="main-menu-item active right"><a class="wcmenucart-contents nav-link" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			}

			$menu_item .= '<i class="fa fa-shopping-cart"></i> ';

		// 	$menu_item .= $cart_contents.' - '. $cart_total;
    $menu_item .= $cart_contents;
			$menu_item .= '</a></li>';

    echo $menu_item;
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		}

	$social = ob_get_clean();
	return $menu . $social;

}
