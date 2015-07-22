<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<ul class="cart_list product_list_widget <?php echo $args['list_class']; ?>">
   
	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>
		<?php $my_array = array(); ?>
		<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

					$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
					$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					?>
					<li>
                    <!--small Remove item x button on the left side on mini cart -->
						<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key ); ?>
                        
						<?php if ( ! $_product->is_visible() ) : ?>
							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
						<?php else : ?>
							<p>
								<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
							</p>
						<?php endif; ?>
                       
                     <!--   <input type="text" id="productname" name="productname" value="<?php echo $product_name; ?>"><br/>
                        <input type="text" id="product_price" name="product_price" value="<?php echo $cart_item['quantity']; ?>"><br/>-->
                        
						
						<?php ?>	
						<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
					</a></li>
					<?php
				}
				
			}
		?>

	<?php else : ?>

		<li class="empty"><?php _e( 'Please add a Strain to Start', 'woocommerce' ); ?></li>

	<?php endif; ?>

</ul><!-- end product list -->

<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

	<p class="total"><strong><?php _e( 'Subtotal', 'woocommerce' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
    <?php endif; ?>
    
<?php if ( sizeof( WC()->cart->get_cart() ) == 1) : ?>
	
    <p><a href="<?php echo get_page_link(264); ?>" class="next button"><?php _e( 'Next Step', 'woocommerce' ); ?></a></p>
<?php endif; ?>

<?php if ( sizeof( WC()->cart->get_cart() ) == 2) : ?>

 <p><a href="<?php echo get_page_link(273); ?>" class="next button"><?php _e( 'Next Step', 'woocommerce' ); ?></a> </p>

<?php endif; ?>    

 

<?php if ( sizeof( WC()->cart->get_cart() ) >= 3 ) : ?> 
	
	<form action="" method="POST">
    <!--<p>
    	<label for="mix_name">Mix Name: </label>
        <input type="text" id="mix_name" name="mix_name" value="Mix 1"><br/>
    </p>
  
    <p><input type="submit" value="Mix" name="mix"></p>-->
   
    <!--<br/>-->
	<!-- Checkout button -->
	<!--<p class="buttons">
		<a href="<?php echo WC()->cart->get_cart_url(); ?>" class="button next wc-forward"><?php _e( 'View Cart', 'woocommerce' ); ?></a>  </p>-->
		<p><a href="<?php echo WC()->cart->get_checkout_url(); ?>" class="button checkout wc-forward"><?php _e( 'Checkout', 'woocommerce' ); ?></a>
        
	</p>
    <input type="submit" class="button" name="clear-cart" value="<?php _e('Empty Cart', 'woocommerce'); ?>" />
</form>

<?php do_action( 'woocommerce_after_mini_cart' ); 

endif; ?>

