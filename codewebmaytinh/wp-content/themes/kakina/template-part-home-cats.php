<div class="top-area row">       
  <div id="slider" class="flexslider homepage-slider col-md-push-3">
    <ul class="slides">
      <?php $entries = get_post_meta( get_the_ID(), 'kakina_home_slider', true );
        foreach ( (array) $entries as $key => $entry ) {
          $img = $title = $desc = $button = $button_url = '';
          if ( isset( $entry['kakina_title'] ) )
            $title = esc_html( $entry['kakina_title'] );
          if ( isset( $entry['kakina_desc'] ) )
            $desc = wpautop( $entry['kakina_desc'] );
          if ( isset( $entry['kakina_button_text'] ) )
            $button = esc_html( $entry['kakina_button_text'] );
          if ( isset( $entry['kakina_url'] ) )
            $button_url = esc_url( $entry['kakina_url'] );    
          if ( isset( $entry['kakina_image_id'] ) ) {
            $img = wp_get_attachment_image( $entry['kakina_image_id'], 'kakina-slider' );
          } ?>
            <li class="homepage-slider col-md-9"> 
              <a href="<?php echo $button_url; ?>">
                <?php echo $img; ?>
              </a>
                <?php if ( $title != '' || $desc != '' || $button != '' && $button_url != '' ) { ?>
                  <div class="flex-caption">
										<div class="home-content">
                      <?php if ( $title != '' ) { ?>
                        <header>		
                      		<h2 class="title">
                      			<?php echo $title; ?>    
                      		</h2>
                      	</header><!--.header-->
                      <?php } ?>	
                    	<?php if ( $desc != '' ) { ?>
                      	<div class="slider-description hidden-xs">
                          <?php echo $desc; ?>       
                        </div>
                      <?php } ?> 
                    </div>
                  <?php if ( $button_url != '' && $button != '' ) { ?> 
                    <a class="btn btn-primary btn-md outline" href="<?php echo $button_url; ?>"><?php echo $button; ?></a>
                  <?php } ?>        
                </div>
              <?php } ?>                           
          </li> 
      <?php } ?> 
    </ul>
	</div>   
</div>