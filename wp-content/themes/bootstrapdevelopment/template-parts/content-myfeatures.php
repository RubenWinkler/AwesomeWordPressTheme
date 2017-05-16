<?php

// Advanced Custom Fields Variables //

$my_features_section_feature_image = get_field('my_features_section_feature_image');
$my_features_section_title         = get_field('my_features_section_title');
$my_features_section_text          = get_field('my_features_section_text');

?>

<!-- COURSE FEATURES ================================================== -->
<section id="course-features">
 <div class="container">
   <div class="section-header">
     <?php if (!empty($my_features_section_feature_image)) : ?>
       <img src="<?php echo $my_features_section_feature_image['url']; ?>" alt="<?php echo $my_features_section_feature_image['alt']; ?>" class="logo">
     <?php endif; ?>
     <h2><?php echo $my_features_section_title; ?></h2>
     <?php if(!empty($my_features_section_text)) : ?>
       <p class="lead"><?php echo $my_features_section_text; ?></p>
     <?php endif; ?>
   </div><!-- /.section-header -->
   <div class="row">

     <?php $loop = new WP_Query(array('post_type' => 'my_features', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
     <?php while ($loop->have_posts()) : $loop->the_post(); ?>
       <div class="col-sm-2">
         <i class="<?php the_field('my_features_icon'); ?>"></i>
         <h4><?php the_title(); ?></h4>
       </div><!-- /.col-sm-2 -->
     <?php endwhile; wp_reset_query(); ?>
   </div><!-- /.row -->
 </div><!-- /.container -->
</section><!-- /.course-features -->
