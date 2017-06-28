<?php get_header(); ?>



<div class="row row-eq-height blog-page-container">
		<div class="col-lg-3 col-md-3 col-sm-3 blog-sidebar">

		</div>

		<div class="col-lg-9 col-md-9 col-sm-9 blog-posts">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

			<header class="entry-header article-header">
					<p class="byline entry-meta vcard">
							<span class="posted-date"><?php echo get_the_date('F j, Y');?></span>

								<?php
										$show_categories = true;
										$categories = wp_get_post_categories( $post->ID );
										// We don't want to show the categories if there is a single category and it is "uncategorized"
										if ( count( $categories ) == 1 && in_array( 1, $categories ) ) :
										 $show_categories = false;
										endif;
										if ( has_category( null, $post->ID ) && $show_categories ) :
										echo '<span class="dot"> &middot; </span>' . strip_tags( get_the_category_list(', '));
										endif;
								?>
					</p>

					<h1 class="h1 entry-title"><?php the_title(); ?></h1>
			</header>


			<section class="entry-content cf" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <?php // end article section ?>

			<hr>


			<footer class="single-article-footer">

					<p class="byline">Written By</p>
					<h3><?php the_author_meta( 'display_name'); ?> </h3>

					<!-- Uncomment this if you want to bio of the author (entered on the Users section of WP admin portal) to show up. -->
					<!-- <p class="bio">
						<?php the_author_meta( 'description'); ?>
				  </p> -->
			</footer> <?php // end article footer ?>

			<hr>

			<div class="cta">
				<h4>Have any questions?</h4>
				<p>Contact us at <a href="mailto:info@monarchmgmtllc.com">info@monarchmgmtllc.com</a></p>
			</div>

		</article> <?php // end article ?>

		<?php endwhile; ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
					</footer>
			</article>

		<?php endif; ?>
		</div>


</div>


<?php get_footer(); ?>
