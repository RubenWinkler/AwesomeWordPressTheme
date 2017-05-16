<?php

// Advanced Custom Fields Variables //

$testimonials_section_title = get_field('testimonials_section_title');

?>

<!-- TESTIMONIALS ================================================== -->
<section id="kudos">
 <div class="container">
   <div class="row">
     <div class="col-sm-8 col-sm-offset-2">
       <h2><?php echo $testimonials_section_title; ?></h2>
       <?php $loop = new WP_Query(array('post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
       <?php while ($loop->have_posts()) : $loop->the_post(); ?>
         <!-- TESTIMONIAL -->
         <div class="row testimonial">
           <div class="col-sm-4">
             <?php if (has_post_thumbnail()) { the_post_thumbnail(array(200, 200)); } ?>
           </div><!-- /.col-sm-4 -->
           <div class="col-sm-8">
             <blockquote>
               <?php the_content(); ?>
               <cite>&mdash; <?php the_title(); ?></cite>
             </blockquote>
           </div><!-- /.col-sm-8 -->
         </div><!-- /.row testimonial-->
       <?php endwhile; wp_reset_query(); ?>
     </div><!-- /.col-sm-8 col-sm-offset-2 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section>
