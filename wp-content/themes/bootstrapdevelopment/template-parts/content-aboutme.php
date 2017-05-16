<?php

// Advanced Custom Fields Variables //

$about_me_section_title                     = get_field('about_me_section_title');
$about_me_section_subtitle                  = get_field('about_me_section_subtitle');
$about_me_section_abstract                  = get_field('about_me_section_abstract');
$about_me_section_text                      = get_field('about_me_section_text');
$about_me_section_twitter_url	              = get_field('about_me_section_twitter_url	');
$about_me_section_facebook_url              = get_field('about_me_section_facebook_url');
$about_me_section_google_plus_url           = get_field('about_me_section_google_plus_url');
$about_me_numbers_section_title             = get_field('about_me_numbers_section_title');
$about_me_numbers_section_subtitle          = get_field('about_me_numbers_section_subtitle');
$about_me_numbers_section_bubble_1_title    = get_field('about_me_numbers_section_bubble_1_title');
$about_me_numbers_section_bubble_1_subtitle = get_field('about_me_numbers_section_bubble_1_subtitle');
$about_me_numbers_section_bubble_2_title	  = get_field('about_me_numbers_section_bubble_2_title');
$about_me_numbers_section_bubble_2_subtitle = get_field('about_me_numbers_section_bubble_2_subtitle');
$about_me_numbers_section_bubble_3_title	  = get_field('about_me_numbers_section_bubble_3_title');
$about_me_numbers_section_bubble_3_subtitle = get_field('about_me_numbers_section_bubble_3_subtitle');

?>

<!-- INSTRUCTOR ================================================== -->
<section id="instructor">
 <div class="container">
   <div class="row">
     <div class="col-sm-8 col-md-6">
       <div class="row">
         <div class="col-lg-8">
           <h2><?php echo $about_me_section_title; ?> <small><?php echo $about_me_section_subtitle; ?></small></h2>
         </div><!-- /.col-lg-8 -->
         <div class="col-lg-4">
           <a href="<?php echo $about_me_section_twitter_url; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
           <a href="<?php echo $about_me_section_facebook_url; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a href="<?php echo $about_me_section_google_plus_url; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
         </div><!-- /.col-lg-4 -->
       </div><!-- /.row -->
       <p class="lead"><?php echo $about_me_section_abstract; ?></p>
       <p><?php echo $about_me_section_text; ?></p>

       <hr />

       <h3><?php echo $about_me_numbers_section_title; ?> <small><?php echo $about_me_numbers_section_subtitle; ?></small></h3>

       <div class="row">
         <div class="col-xs-4">
           <div class="num">
             <div class="num-content">
               <?php echo $about_me_numbers_section_bubble_1_title; ?> <span><?php echo $about_me_numbers_section_bubble_1_subtitle; ?></span>
             </div><!-- /.num-content -->
           </div><!-- /.num -->
         </div><!-- /.col-xs-4 -->
         <div class="col-xs-4">
           <div class="num">
             <div class="num-content">
               <?php echo $about_me_numbers_section_bubble_2_title; ?> <span><?php echo $about_me_numbers_section_bubble_2_subtitle; ?></span>
             </div><!-- /.num-content -->
           </div><!-- /.num -->
         </div><!-- /.col-xs-4 -->
         <div class="col-xs-4">
           <div class="num">
             <div class="num-content">
               <?php echo $about_me_numbers_section_bubble_3_title; ?> <span><?php echo $about_me_numbers_section_bubble_3_subtitle; ?></span>
             </div><!-- /.num-content -->
           </div><!-- /.num -->
         </div><!-- /.col-xs-4 -->
       </div><!-- /.row -->
     </div><!-- /.col-sm-8 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section>
