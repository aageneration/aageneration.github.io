<?php
/**
 * PA WooCommerce Products - Template.
 *
 * @package PA
 */

use PremiumAddons\Includes\Premium_Template_Tags;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // If this file is called directly, abort.
}

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php

$product_id = $product->get_id();
$class      = array();
$classes    = array();
$classes[]  = 'post-' . $product_id;
$wc_classes = esc_attr( implode( ' ', wc_product_post_class( $classes, $class, $product_id ) ) );

$sale_ribbon     = $this->get_option_value( 'sale' );
$featured_ribbon = $this->get_option_value( 'featured' );
$quick_view      = $this->get_option_value( 'quick_view' );

$out_of_stock        = get_post_meta( $product_id, '_stock_status', true );
$out_of_stock_string = apply_filters( 'pa_products_out_of_stock_string', __( 'Out of stock', 'premium-addons-for-elementor' ) );


?>
<li class=" <?php echo $wc_classes; ?>">
	<div class="premium-woo-product-wrapper">
		<?php

		echo '<div class="premium-woo-product-thumbnail">';

		if ( 'yes' === $sale_ribbon || 'yes' === $featured_ribbon ) {

			$double_flash = '';

			if ( 'yes' === $sale_ribbon && 'yes' === $featured_ribbon ) {

				if ( $product->is_on_sale() ) {
					$double_flash = 'double-flash';
				}
			}

			echo '<div class="premium-woo-ribbon-container ' . $double_flash . '">';


			if ( 'yes' === $sale_ribbon ) {
				include PREMIUM_ADDONS_PATH . 'modules/woocommerce/templates/loop/sale-ribbon.php';
			}

			if ( 'yes' === $featured_ribbon ) {
				include PREMIUM_ADDONS_PATH . 'modules/woocommerce/templates/loop/featured-ribbon.php';
			}

			echo '</div>';
		}

		woocommerce_template_loop_product_link_open();

		if ( 'yes' === $this->get_option_value( 'product_image' ) ) {
			echo '<img src="' . get_the_post_thumbnail_url( $product_id, 'large' ) . '">';
		}

		if ( 'swap' === $settings['hover_style'] ) {
			Premium_Template_Tags::get_current_product_swap_image();
		}

		woocommerce_template_loop_product_link_close();

		if ( 'yes' === $quick_view ) {

			echo '<div class="premium-woo-qv-btn" data-product-id="' . $product_id . '">';
				echo '<span class="premium-woo-qv-text">' . __( 'Quick View', 'premium-addons-for-elementor' ) . '</span>';
				echo '<i class="premium-woo-qv-icon fa fa-eye"></i>';
			echo '</div>';

		}

		echo '<div class="premium-woo-product-gallery-images">';
			Premium_Template_Tags::get_current_product_gallery_images();
		echo '</div>';

		echo '</div>';

		echo '<div class="premium-woo-products-details-wrap">';

		if ( 'yes' === $this->get_option_value( 'product_title' ) ) {
			echo '<a href="' . esc_url( apply_filters( 'premium_woo_product_title_link', get_the_permalink() ) ) . '" class="premium-woo-product__link">';
				woocommerce_template_loop_product_title();
			echo '</a>';
		}

		if ( 'yes' === $this->get_option_value( 'product_category' ) ) {
			Premium_Template_Tags::get_current_product_category();
		}

			echo '<div class="premium-woo-product-info">';

		if ( 'yes' === $this->get_option_value( 'product_price' ) ) {
			woocommerce_template_loop_price();
		}

		if ( 'yes' === $this->get_option_value( 'product_rating' ) ) {
			woocommerce_template_loop_rating();
		}

			echo '</div>';

		if ( 'yes' === $this->get_option_value( 'product_excerpt' ) ) {
			Premium_Template_Tags::get_product_excerpt();
		}

		if ( 'yes' === $this->get_option_value( 'product_cta' ) ) {
			echo '<div class="premium-woo-atc-button">';
				woocommerce_template_loop_add_to_cart();
			echo '</div>';
		}

		echo '</div>';


		/* Out of stock */
		if ( 'outofstock' === $out_of_stock ) {
			echo '<span class="pa-out-of-stock">' . esc_html( $out_of_stock_string ) . '</span>';
		}

		?>
	</div>
</li>
