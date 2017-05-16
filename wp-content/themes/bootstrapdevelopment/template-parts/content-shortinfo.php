<?php

// Advanced Custom Fields Variables //

$short_info_section_feature_image      = get_field('short_info_section_feature_image');
$short_info_section_main_info_title    = get_field('short_info_section_main_info_title');
$short_info_section_main_info          = get_field('short_info_section_main_info');
$short_info_section_short_info_1_title = get_field('short_info_section_short_info_1_title');
$short_info_section_short_info_1_text  = get_field('short_info_section_short_info_1_text');
$short_info_section_short_info_2_title = get_field('short_info_section_short_info_1_title');
$short_info_section_short_info_2_text  = get_field('short_info_section_short_info_2_text');

?>

<!-- BOOST YOUR INCOME SECTION ================================================== -->
<section id="boost-income">
 <div class="container">
   <div class="section-header">
     <?php if (!empty($short_info_section_feature_image)) : ?>
       <img src="<?php echo $short_info_section_feature_image['url']; ?>" alt="<?php echo $short_info_section_feature_image['alt']; ?>" class="logo">
     <?php endif; ?>
     <h2><?php echo $short_info_section_main_info_title; ?></h2>
   </div><!-- /.section-header -->
   <p class="lead"><?php echo $short_info_section_main_info; ?></p>
   <div class="row">
     <div class="col-sm-6">
       <h3><?php echo $short_info_section_short_info_1_title; ?></h3>
       <p><?php echo $short_info_section_short_info_1_text; ?></p>
     </div><!-- /.col-sm-6 -->
     <div class="col-sm-6">
       <h3><?php echo $short_info_section_short_info_2_title; ?></h3>
       <p><?php echo $short_info_section_short_info_2_text; ?></p>
     </div><!-- /.col-sm-6 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section><!-- /#boost-income -->
