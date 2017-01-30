<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

			<div class="banner"></div>

			<div class="container galleries">

						<!-- Gallery #1 -->
						<div class="col-lg-9 gallery row">
						<h2>Vermont</h2>
						<?php
						$query = new WP_Query( array( 'post_type' => 'trails' ) );
						if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-4">
									<div class="gallery-card">
										<div class="gallery-content">
											<!-- ACF Query for Placeholder Images -->
											<?php
											$image = get_field('placeholder_image');
											if( !empty($image) ): ?>
											<img class="gallery-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php endif; ?>
										</div><!--gallery content -->
									</div><!--gallery card -->
								</div> <!--col-md-4 -->
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
						<!-- show 404 error here -->
						<?php endif; ?>
						</div><!--gallery -->


						<!-- Gallery #2 -->
						<div class="col-lg-9 gallery row">
						<h2>New Hampshire</h2>
						<?php
						$query = new WP_Query( array( 'post_type' => 'trails' ) );
						if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-4">
									<div class="gallery-card">
										<div class="gallery-content">
											<!-- ACF Query for Placeholder Images -->
											<?php
											$image = get_field('placeholder_image');
											if( !empty($image) ): ?>
											<img class="gallery-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php endif; ?>
										</div><!--gallery content -->
									</div><!--gallery card -->
								</div> <!--col-md-4 -->
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
						<!-- show 404 error here -->
						<?php endif; ?>
						</div><!--gallery -->



			</div><!--galleries -->









<?php get_footer(); ?>
