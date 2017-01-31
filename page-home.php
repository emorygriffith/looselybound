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
									<a href="<?php the_permalink() ?>">
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
									</a><!--a href for card -->
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
								<a href="<?php the_permalink() ?>">
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
								</a><!--a href for card -->
							</div> <!--col-md-4 -->
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
						<!-- show 404 error here -->
						<?php endif; ?>
						</div><!--gallery -->



			</div><!--galleries -->



			<div class="container lists">
					<div class="col-lg-9 gallery row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3>List Number One</h3>

							<div class="media list-card">
							    <div class="media-left">
							      <img src="http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg" class="media-object card-photo" alt="Sample Image">
							    </div>
							    <div class="media-body media-middle">
							        <h4 class="media-heading">Red Tail Trail</h4>
							        <ul>
							        	<li>North Conway, NH</li>
												<li>Rating: 95</li>
												<li>Distance: 3mi</li>
												<li>Ascent: 1200</li>
												<li>Descent: 1100</li>
							        </ul>
							    </div>
							</div>

						</div>
						<!-- <div class="col-lg-6 col-md-6 col-sm-6">

						</div> -->
					</div>
		</div>









<?php get_footer(); ?>
