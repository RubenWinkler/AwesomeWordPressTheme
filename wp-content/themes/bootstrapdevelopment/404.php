<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress_Development
 */

get_header(); ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title">Ooops... That page can't be found!</h1>
</section>

<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-8" id="content">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>But don't panic. Let's get you back on track.</h2>

					<!-- RESOURCES ================================================== -->
					<h3>Resources</h3>
					<p>Perhaps you were looking for a specific resource?</p>
					<?php $loop = new WP_Query(array('post_type' => 'my_resources', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
					<div class="resource-row clearfix">
						<?php
							while ($loop->have_posts()) : $loop->the_post();
							$my_resources_image           = get_field('my_resources_image');
							$my_resources_url             = get_field('my_resources_url');
							$my_resources_button_text     = get_field('my_resources_button_text');
						?>
							<div class="resource">
								<img src="<?php echo $my_resources_image['url']; ?>" alt"<?php echo $my_resources_image['alt']; ?>">
								<h3><a href="<?php echo $my_resources_url; ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
								<?php if (!empty($my_resources_button_text)) : ?>
									<a href="<?php echo $my_resources_url; ?>" class="btn btn-success"><?php echo $my_resources_button_text; ?></a>
								<?php endif; ?>
							</div><!-- /.resource -->
						<?php endwhile; ?>
					</div><!-- /.resource-row clearfix -->

					<!-- RESOURCES ================================================== -->
					<h3>Categories</h3>
					<p>... or maybe a popular category?</p>

					<div class="widget widget_categories">
						<h4 class="widget-title">Most used Categories</h4>
						<ul>
							<?php
							wp_list_categories( array (
								'orderby' => 'count',
								'order' => 'DESC',
								'show_count' => 1,
								'title_li' => '',
								'number' => 10
								) );
							?>
						</ul>
					</div>

					<!-- ARCHIVES ================================================== -->
					<h3>Archives</h3>
					<p>You can allways sort through our archives...</p>
					<?php the_widget('WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widgettitle">&after_title=</h4>'); ?>

					<p>... or just head back to the <a href="<?php echo esc_url(home_url('/')); ?>">home page</a>.</p>

				</div><!-- /.page-content -->
			</div><!-- /.error-404 not-found -->
		</main><!-- /.col-sm-8 -->

		<!-- SIDEBAR ================================================== -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>

	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
