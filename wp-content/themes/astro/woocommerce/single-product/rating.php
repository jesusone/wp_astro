<?php
/**
 * Single Product Rating
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
	return;
}
$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
?>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 rating-price clearfix"><!-- end in price.php -->
<?php if ( $rating_count > 0 ) : ?>
	<div class="woocommerce-product-rating right" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'woocommerce' ), $average ); ?>">
			<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
				<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'woocommerce' ), '<span itemprop="bestRating">', '</span>' ); ?>
				<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'woocommerce' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
			</span>
		</div>
	</div>
</div>
<?php endif; ?>

<?php 

if ( ! empty( $tabs ) ) : ?>

	<div class="pr-shop-tabs pr-woocommerce-tabs pr-panel-group" >
        <?php $tab = $tabs['description'] ; ?>
            <div class="pr-desctiption">
                <div class="pr-content"><?php call_user_func($tab['callback'], $key, $tab); ?></div>
            </div>
        <?php  ?>
    </div>

<?php endif; ?>