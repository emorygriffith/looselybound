<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<div class="col-lg-9 single-trail-page row">

										<div class="col-lg-8 col-md-8">
											<h1><?php the_title(); ?></h1>
											<div class="videoWrapper" style="position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;">
												<iframe width="560" height="315" src="<?php	the_field('video_link'); ?>" frameborder="0" allowfullscreen style="position: absolute;	top: 0; left: 0; width: 100%; height: 100%;"></iframe>
											</div>

											<p class="single-trail-content"><?php the_content(); ?></p>

										</div>

										<div class="col-lg-4 col-md-4">
											<h1>Trail Rating: <?php echo get_field('rating') ?></h1>

											<div class="media list-card">
													<div class="media-left">
														<img src="<?php echo get_template_directory_uri(); ?>/library/images/placeholder.png" alt="">
													</div>
													<div class="media-body media-middle">
															<h5 class="media-heading">Distance:</h5>
															<h5 class="media-heading"><?php echo get_field('distance') ?> miles </h5>
													</div>
											</div>


										</div>

								</div> <!-- end article section -->

							</article>

							<?php endwhile; ?>



							<?php endif; ?>




<?php get_footer(); ?>
