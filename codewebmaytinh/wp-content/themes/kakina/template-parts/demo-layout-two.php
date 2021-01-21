<h2 class="clear demo-categories">
  <?php esc_html_e( 'Our categories', 'kakina' ); ?>
</h2>								
<?php echo do_shortcode( '[product_categories number="4" parent="0"]' ); ?>								
<h2 class="clear demo-products">
  <?php esc_html_e( 'Sale products', 'kakina' ); ?>
</h2>								
<?php echo do_shortcode( '[sale_products per_page="3" columns="3"]' ); ?>								
<h2 class="clear demo-products">
  <?php esc_html_e( 'Recent products', 'kakina' ); ?>
</h2>								
<?php echo do_shortcode( '[recent_products per_page="8" columns="4"]' ); ?>
