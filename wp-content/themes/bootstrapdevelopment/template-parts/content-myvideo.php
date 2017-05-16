<?php

// Advanced Custom Fields Variables //

$my_video_section_title              = get_field('my_video_section_title');
$my_video_section_youtube_embed_code = get_field('my_video_section_youtube_embed_code');

?>

<!-- VIDEO FEATURETTE ================================================== -->
<section id="featurette">
 <div class="container">
   <div class="row">
     <div class="col-sm-8 col-sm-offset-2">
       <?php if (!empty($my_video_section_title)) : ?>
         <h2><?php echo $my_video_section_title; ?></h2>
       <?php endif; ?>
       <?php if (!empty($my_video_section_youtube_embed_code)) : ?>
         <?php echo $my_video_section_youtube_embed_code; ?></h2>
       <?php endif; ?>
     </div><!-- /.col-sm-8 col-sm-offset-2 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section>
