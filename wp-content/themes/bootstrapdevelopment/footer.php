<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress_Development
 */

?>



<?php wp_footer(); ?>

<!-- SIGNUP ================================================== -->
<section id="signup" data-type="background" data-speed="4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>Du willst immer über neue <strong>Artikel und Angebote</strong> informiert werden?</h2>
        <p><a href="#" class="btn btn-lg btn-block btn-success">Ja klar, los geht's!</a></p>
      </div><!-- /.col-sm-6 col-sm-offset-3 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<!-- FOOTER ================================================== -->
<footer>
  <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
      <?php
        wp_nav_menu( array(
          'theme_location'	=> 'footer',
          'container'			=> 'nav',
          'menu_class'		=> 'list-unstyled list-inline'
        ) );
      ?>
    </div><!-- /.col-sm-6 -->
    <div class="col-sm-3">
      <p class="pull-right">&copy; <?php echo date('Y'); ?> - Ruben Winkler</p>
    </div><!-- /.col-sm-3 -->
  </div><!-- /.container -->
</footer>

<!-- MODAL ================================================== -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="myModalLable"><i class="fa fa-envelope" aria-hidden="true"></i> Subscribe to our mailing list</h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
        <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-stelling courses, <em> for free!</em></p>
        <form class="form-inline" role="form">
          <div class="form-group">
            <lable class="sr-only" for="subscribe-name">Your first name</lable>
            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
          </div><!-- /.form-group -->
          <div class="form-group">
            <lable class="sr-only" for="subscribe-email">and your email</lable>
            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
          </div><!-- /.form-group -->
          <input type="submit" class="btn btn-danger" value="Subscribe!">
        </from>
        <hr />
        <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br /> No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal fade -->
</div><!-- /.modal-dialog -->

<!-- BOOTSTRAP CORE JAVASCRIPT (Placed at the end of the page so it loads faster!) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/main.js"></script>

</body>
</html>
