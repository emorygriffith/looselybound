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
								$args = array( 'post_type' => 'trails', 'posts_per_page' => 3 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								<div class="gallery-card">
								<h3 class="gallery-title">'
									the_title();
									echo '</h3>';

									echo '<div class="gallery-content">';


											$image = get_field('placeholder_image');
											echo '<img src=' echo $image['url']; echo '/>'

									echo '</div>';




								echo '</div>';
								endwhile;
						?>
					</ul>


					<?php

					$image = get_field('image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>


			</div>





<?php get_footer(); ?>
