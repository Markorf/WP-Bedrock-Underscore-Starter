<?php get_header(); ?>

<div class="woocommerce-page vw-container">
	<?php
	if ( is_archive() ) :
		?>
		<div id="products-page" class="products-page">
			<?php
				get_template_part( 'woocommerce/archive', 'product' );
			?>
		</div>

	<?php elseif ( is_product() ) : ?>
		<div class="single-product-page">
			<?php
				get_template_part( 'woocommerce/single', 'product' );
			?>
		</div>
	<?php else : ?>
		<?php woocommerce_content(); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
