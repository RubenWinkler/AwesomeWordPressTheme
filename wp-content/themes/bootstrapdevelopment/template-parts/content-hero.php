<?php

// Advanced Custom Fields Variables //

$hero_brand_logo          = get_field('hero_brand_logo');
$hero_box_1_heading       = get_field('hero_box_1_heading');
$hero_box_1_subheading    = get_field('hero_box_1_subheading');
$hero_box_1_bubble        = get_field('hero_box_1_bubble');
$hero_box_2_heading       = get_field('hero_box_2_heading');
$hero_box_2_subheading    = get_field('hero_box_2_subheading');
$hero_box_2_bubble        = get_field('hero_box_2_bubble');
$hero_box_3_heading       = get_field('hero_box_3_heading');
$hero_box_3_subheading    = get_field('hero_box_3_subheading');
$hero_box_3_bubble        = get_field('hero_box_3_bubble');
$hero_section_button_text	= get_field('hero_section_button_text');
$hero_section_button_url	= get_field('hero_section_button_url');

?>

<!-- HERO ================================================== -->
<section id="hero" data-type="background" data-speed="5">
 <article>
   <div class="container clearfix">
     <div class="row">
       <div class="col-sm-5">
         <?php if (!empty($hero_brand_logo)) : ?>
           <img src="<?php echo $hero_brand_logo['url']; ?>" alt="<?php echo $hero_brand_logo['alt']; ?>" class="logo">
         <?php endif; ?>
       </div><!-- /.col-sm-5 -->
       <div class="col-sm-7 hero-text">
         <h1><?php bloginfo('name'); ?></h1>
         <p class="lead"><?php bloginfo('description'); ?></p>
         <div id="price-timeline">
           <div class="price active">
             <h4><?php echo $hero_box_1_heading; ?><?php if (!empty($hero_box_1_subheading)) : ?><small><?php echo $hero_box_1_subheading; ?></small><?php endif; ?></h4>
             <span><?php echo $hero_box_1_bubble; ?></span>
           </div><!-- /.price active -->
           <div class="price">
             <h4><?php echo $hero_box_2_heading; ?><?php if (!empty($hero_box_2_subheading)) : ?><small><?php echo $hero_box_2_subheading; ?></small><?php endif; ?></h4>
             <span><?php echo $hero_box_2_bubble; ?></span>
           </div><!-- /.price -->
           <div class="price">
             <h4><?php echo $hero_box_3_heading; ?><?php if (!empty($hero_box_3_subheading)) : ?><small><?php echo $hero_box_3_subheading; ?></small><?php endif; ?></h4>
             <span><?php echo $hero_box_3_bubble; ?></span>
           </div><!-- /.price -->
         </div><!-- /#price-timeline -->
         <p><a class="btn btn-lg btn-danger" href="<?php echo $hero_section_button_url; ?>" role="button"><?php echo $hero_section_button_text; ?></a></p>
       </div><!-- /.col-sm-7 -->
     </div><!-- /.row -->
   </div><!-- /.container -->
 </article>
</section><!-- /#hero -->
