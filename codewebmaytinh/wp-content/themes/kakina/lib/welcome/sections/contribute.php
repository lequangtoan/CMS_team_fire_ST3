<?php
/**
 * Contribute
 */
?>

<div id="contribute" class="kakina-tab-pane">

	<h1><?php esc_html_e( 'How can I contribute?', 'kakina' ); ?></h1>

	<hr/>

	<div class="kakina-tab-pane-half kakina-tab-pane-first-half">

		<p><strong><?php esc_html_e( 'Found a bug? Want to contribute with a fix?','kakina'); ?></strong></p>

		<p><?php esc_html_e( 'Contact form is the place to go!','kakina' ); ?></p>

		<p>
			<a href="<?php echo esc_url( 'http://themes4wp.com/contact/' ); ?>" class="contribute-button button button-primary"><?php printf( esc_html__( '%s contact form', 'kakina' ), 'Kakina' ); ?></a>
		</p>

		<hr>

	</div>
	<div class="kakina-tab-pane-half">

		<p><strong><?php printf( esc_html__( 'Are you a polyglot? Want to translate %s into your own language?', 'kakina' ), 'Kakina' ); ?></strong></p>

		<p><?php esc_html_e( 'Get involved at WordPress.org.', 'kakina' ); ?></p>

		<p>
			<a href="<?php echo esc_url( 'https://translate.wordpress.org/projects/wp-themes/kakina/' ); ?>" class="translate-button button button-primary"><?php printf( esc_html__( 'Translate %s', 'kakina' ), 'Kakina' ); ?></a>
		</p>

	</div>

	<div>

		<h4><?php printf( esc_html__( 'Are you enjoying %s?', 'kakina' ), 'Kakina' ); ?></h4>

		<p class="review-link"><?php printf( esc_html__( 'Rate our theme on %s. We\'d really appreciate it!', 'kakina' ), '<a href="https://wordpress.org/support/view/theme-reviews/kakina?filter=5">' . esc_html( 'WordPress.org', 'kakina' ) . '</a>' ); ?></p>

		<p><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span></p>

	</div>

</div>
