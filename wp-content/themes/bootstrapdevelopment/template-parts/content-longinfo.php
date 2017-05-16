<?php

// Advanced Custom Fields Variables //

$long_info_section_feature_image = get_field('long_info_section_feature_image');
$long_info_section_title         = get_field('long_info_section_title');
$long_info_section_text          = get_field('long_info_section_text');

?>

<!-- WHO BENEFITS ================================================== -->
<section id="who-benefits">
 <div class="container">
   <div class="section-header">
     <?php if (!empty($long_info_section_feature_image)) : ?>
       <img src="<?php echo $long_info_section_feature_image['url']; ?>" alt="<?php echo $long_info_section_feature_image['alt']; ?>" class="logo">
     <?php endif; ?>
     <h2><?php echo $long_info_section_title; ?></h2>
   </div><!-- /.section-header -->
   <div class="row">
     <div class="col-sm-8 col-sm-offset-2">
       <?php echo $long_info_section_text; ?>
     </div><!-- /.col-sm-8 col-sm-offset-2 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section><!-- /.who-benefits -->
