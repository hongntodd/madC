<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>



<?php /*?><div class="cart-collaterals"><!-- cart subtotal-->

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

</div><?php */?>

<?php do_action( 'woocommerce_after_cart' ); ?>
