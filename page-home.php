<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

			<div class="banner"></div>

			<div class="container galleries">
				<ul class="col-lg-8 gallery">
					<h2>Vermont</h2>
						<?php
								$query = new WP_Query( array( 'post_type' => 'trails' ) );
								if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
											<div class="gallery-card">
													<h2><?php the_title(); ?></h2>
													<div class="gallery-content">

														<!-- ACF Query for Placeholder Images -->
														<?php
														$image = get_field('placeholder_image');
														if( !empty($image) ): ?>
															<img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
														<?php endif; ?>


													</div>




											</div>






									<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
							<!-- show 404 error here -->
						<?php endif; ?>


			</div>







<?php get_footer(); ?>
