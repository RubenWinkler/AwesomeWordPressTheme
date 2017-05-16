<?php

// Advanced Custom Fields Variables //

$hero_interaction_area_text        = get_field('hero_interaction_area_text');
$hero_interaction_area_button_text = get_field('hero_interaction_area_button_text');

?>

<!-- OPT IN SECTION ================================================== -->
<section id="optin">
 <div class="container">
   <div class="row">
     <div class="col-sm-8">
       <p class="lead"><?php echo $hero_interaction_area_text; ?></p>
     </div><!-- /.col-sm-8 -->
     <div class="col-sm-4">
       <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $hero_interaction_area_button_text; ?></button>
     </div><!-- /.col-sm-4 -->
   </div><!-- /.row -->
 </div><!-- /.container -->
</section><!-- /#optin -->
