<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

			<div class="banner"></div>

			<div class="container galleries">


					<ul class="col-lg-8 gallery">
						<?php
								$args = array( 'post_type' => 'trails', 'posts_per_page' => 10 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								echo '<div class="gallery-card">';
									echo '<h3 class="gallery-title">';
									the_title();
									echo '</h3>';

									echo '<div class="gallery-content">';
									the_content();
									echo '</div>';

								echo '</div>';
								endwhile;
						?>
					</ul>


			</div>





<?php get_footer(); ?>
