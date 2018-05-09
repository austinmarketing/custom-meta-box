<?php
/**
 * Displays call to action navigation at the bottom of page contents
 * Requires plugin to enter and save contents - Custom Meta Box Template by Austin Marketing
 *
 */

// THIS FILE NEEDS TO BE ADDED IN YOUR TEMPLATE USING get_template_part( '/template-parts/meta-box' )

?>

									<?php
 
										// Retrieves the stored values from the database
										$meta_value_1_url = get_post_meta( get_the_ID(), 'meta-text-1-url', true );
									    $meta_value_1_1 = get_post_meta( get_the_ID(), 'meta-text-1-1', true );
									    $meta_value_1_2 = get_post_meta( get_the_ID(), 'meta-text-1-2', true );
									    $meta_value_1_act = get_post_meta( get_the_ID(), 'meta-text-1-action', true );
									    $meta_value_color_1 = get_post_meta( get_the_ID(), 'meta-color-1', true ); 
										    
										$meta_value_2_url = get_post_meta( get_the_ID(), 'meta-text-2-url', true );
									    $meta_value_2_1 = get_post_meta( get_the_ID(), 'meta-text-2-1', true );
									    $meta_value_2_2 = get_post_meta( get_the_ID(), 'meta-text-2-2', true );
									    $meta_value_2_act = get_post_meta( get_the_ID(), 'meta-text-2-action', true );
									    $meta_value_color_2 = get_post_meta( get_the_ID(), 'meta-color-2', true );
										    
									    $meta_value_3_url = get_post_meta( get_the_ID(), 'meta-text-3-url', true );
									    $meta_value_3_1 = get_post_meta( get_the_ID(), 'meta-text-3-1', true );
									    $meta_value_3_2 = get_post_meta( get_the_ID(), 'meta-text-3-2', true );
									    $meta_value_3_act = get_post_meta( get_the_ID(), 'meta-text-3-action', true );
									    $meta_value_color_3 = get_post_meta( get_the_ID(), 'meta-color-3', true );
										    
									?>
										
									<nav class="call-to-action">
										<?php // Checks and displays the retrieved value; ?>
										
		<?php // if( !empty( $meta_value_1_url || $meta_value_1_1 || $meta_value_1_2 || $meta_value_1_act ) ) : ?>
				<a href="<?php if( !empty( $meta_value_1_url ) ) { echo $meta_value_1_url; } ?>" class="grid-33">
						<p class="meta-description"><?php if( !empty( $meta_value_1_1 ) ) { echo $meta_value_1_1; } ?></p>
						<p class="meta-text"><?php if( !empty( $meta_value_1_2 ) ) { echo $meta_value_1_2; } ?></p>
						<p class="meta-action"><?php if( !empty( $meta_value_1_act ) ) { echo $meta_value_1_act; } ?></p>
				</a>
		<?php // endif; ?>
																			
										
		<?php // if( !empty( $meta_value_2_url || $meta_value_2_1 || $meta_value_2_2 || $meta_value_2_act ) ) : ?>
				<a href="<?php if( !empty( $meta_value_2_url ) ) { echo $meta_value_2_url; } ?>" class="grid-33">
						<p class="meta-description"><?php if( !empty( $meta_value_2_1 ) ) { echo $meta_value_2_1; } ?></p>
						<p class="meta-text"><?php if( !empty( $meta_value_2_2 ) ) { echo $meta_value_2_2; } ?></p>
						<p class="meta-action"><?php if( !empty( $meta_value_2_act ) ) { echo $meta_value_2_act; } ?></p>
				</a>
		<?php // endif; ?>
										
		<?php // if( !empty( $meta_value_3_url || $meta_value_3_1 || $meta_value_3_2 || $meta_value_3_act ) ) : ?>
				<a href="<?php if( !empty( $meta_value_3_url ) ) { echo $meta_value_3_url; } ?>" class="grid-33">
						<p class="meta-description"><?php if( !empty( $meta_value_3_1 ) ) { echo $meta_value_3_1; } ?></p>
						<p class="meta-text"><?php if( !empty( $meta_value_3_2 ) ) { echo $meta_value_3_2; } ?></p>
						<p class="meta-action"><?php if( !empty( $meta_value_3_act ) ) { echo $meta_value_3_act; } ?></p>
				</a>
		<?php // endif; ?>					
										
									</nav>
									
									
