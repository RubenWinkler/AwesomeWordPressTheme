<?php
/* Template Name: Resource Page*/

get_header();

$thumbnail_url	= wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

	<!-- FEATURE IMAGE ================================================== -->
	<?php if(has_post_thumbnail()) {  ?>

	<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

	<?php } else { ?>

	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

	<?php } ?>

    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
		    <div id="content" class="col-sm-12">
			    <section class="main-content">
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <?php $loop = new WP_Query(array('post_type' => 'my_resources', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
			    	<hr>
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
                  <?php the_content(); ?>
                  <?php if (!empty($my_resources_button_text)) : ?>
			    	        <a href="<?php echo $my_resources_url; ?>" class="btn btn-success"><?php echo $my_resources_button_text; ?></a>
                  <?php endif; ?>
  				    	</div>
              <?php endwhile; ?>
			    	</div>
			    </section>
		    </div><!-- content -->
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>
