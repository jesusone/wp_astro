<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="pr-shop-tabs pr-woocommerce-tabs pr-panel-group" id="oscitas-accordion-<?php echo get_the_ID(); ?>">
        <?php $tab = $tabs['reviews'] ; ?>
            <div class="panel pr-panel-tab">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                           data-parent="#oscitas-accordion-<?php echo get_the_ID(); ?>"
                           href="#woocommerce_product_<?php echo ''.$key; ?>">
                               <?php echo esc_attr($tab['title']); ?>
                        </a>
                    </h4>
                </div>
                <div id="woocommerce_product_<?php echo ''.$key; ?>" class="panel-collapse collapse">
                    <div class="panel-body"><?php call_user_func($tab['callback'], $key, $tab); ?></div>
                </div>
            </div>
        <?php  ?>
    </div>

<?php endif; ?>
