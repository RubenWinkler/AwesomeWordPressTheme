<?php
/**
 * Template Name: Home Page
 */

// Advanced Custom Fields Variables //

// Hero Section

$badge_1_title                        = get_field("badge_1_title");
$badge_1_subtitle                     = get_field("badge_1_subtitle");
$badge_1_circle                       = get_field("badge_1_circle");
$badge_2_title                        = get_field("badge_2_title");
$badge_2_subtitle                     = get_field("badge_2_subtitle");
$badge_2_circle                       = get_field("badge_2_circle");
$badge_3_title                        = get_field("badge_3_title");
$badge_3_subtitle                     = get_field("badge_3_subtitle");
$badge_3_circle                       = get_field("badge_3_circle");
$hero_interaction_button_link         = get_field("hero_interaction_button_link");
$hero_interaction_button_text         = get_field("hero_interaction_button_text");
$subscribe_to_newsletter_text         = get_field("subscribe_to_newsletter_text");
$subscribe_to_newsletter_button_text  = get_field("subscribe_to_newsletter_button_text");


// Brand Short Info Section

$brand_logo                           = get_field("brand_logo");
$brand_info_section_title             = get_field("brand_info_section_title");
$brand_info_section_short_description = get_field("brand_info_section_short_description");
$brand_info_1_title                   = get_field("brand_info_1_title");
$brand_info_1_text                    = get_field("brand_info_1_text");
$brand_info_2_title                   = get_field("brand_info_2_title");
$brand_info_2_text                    = get_field("brand_info_2_text");

get_header(); ?>

<!-- HERO ================================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-5">
          <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo-badge.png" alt="WordPress Development" class="logo">
        </div><!-- /.col-sm-5 -->
        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo("name"); ?></h1>
          <p class="lead"><?php bloginfo("description"); ?></p>
          <div id="price-timeline">
            <div class="price active">
              <h4><?php echo $badge_1_title; ?> <small><?php echo $badge_1_subtitle; ?></small></h4>
              <span><?php echo $badge_1_circle; ?></span>
            </div><!-- /.price active -->
            <div class="price">
              <h4><?php echo $badge_2_title; ?> <small><?php echo $badge_2_subtitle; ?></small></h4>
              <span><?php echo $badge_2_circle; ?></span>
            </div><!-- /.price -->
            <div class="price">
              <h4><?php echo $badge_3_title; ?> <small><?php echo $badge_3_subtitle; ?></small></h4>
              <span><?php echo $badge_3_circle; ?></span>
            </div><!-- /.price -->
          </div><!-- /#price-timeline -->
          <p><a class="btn btn-lg btn-danger" href="<?php echo $hero_interaction_button_link; ?>" role="button"><?php echo $hero_interaction_button_text; ?></a></p>
        </div><!-- /.col-sm-7 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </article>
</section><!-- /#hero -->

<!-- OPT IN SECTION ================================================== -->
<section id="optin">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p class="lead"><?php echo $subscribe_to_newsletter_text; ?></p>
      </div><!-- /.col-sm-8 -->
      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $subscribe_to_newsletter_button_text; ?></button>
      </div><!-- /.col-sm-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#optin -->

<!-- BOOST YOUR INCOME SECTION ================================================== -->
<section id="boost-income">
  <div class="container">
    <div class="section-header">

      <?php if (!empty($brand_logo)) : ?>
        <img src="<?php echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>">
      <?php endif; ?>
      <h2><?php echo $brand_info_section_title; ?></h2>
    </div><!-- /.section-header -->
    <p class="lead"><?php echo $brand_info_section_short_description; ?></p>
    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $brand_info_1_title; ?></h3>
        <p><?php echo $brand_info_1_text; ?></p>
      </div><!-- /.col-sm-6 -->
      <div class="col-sm-6">
        <h3><?php echo $brand_info_2_title; ?></h3>
        <p><?php echo $brand_info_2_text; ?></p>
      </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#boost-income -->

<!-- WHO BENEFITS ================================================== -->
<section id="who-benefits">
  <div class="container">
    <div class="section-header">
      <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/icon-pad.png" alt="Paper and pencil">
      <h2>Who should take this course?</h2>
    </div><!-- /.section-header -->
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>Graphic &amp; Web Designers</h3>
        <p>Graphic designers are extremely talented, but ask them to code their designs and they'll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.</p>
        <p>If you&rsquo;re a designer, learning to code your own WordPress websites can change your business entirely! Now, not only are you a great designer, but you're a skillful developer, too! This puts you in a position to <strong>make an extra $1,000 - $5,000 per project.</strong></p>

        <h3>Entrepreneurs</h3>
        <p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the cut-throat world of the Startup company, it&rsquo;s a necessity to have a world-class website.  However, world-class websites come with a large price tag.</p>
        <p>If you can learn how to build a high-quality startup website by yourself, then you&rsquo;ve just saved yourself a lot of cash, <strong>tens of thousands of dollars in many cases.</strong></p>

        <h3>Employees</h3>
        <p>Any company knows the education &amp; training of their employees is key to a thriving team.</p>
        <p>Depending on the type of company you work for, if you understand how to code, and can develop CMS driven websites, that gives you <strong>negotiating power for a better position, or a higher salary.</strong></p>

        <h3>Code Hobbyists</h3>
        <p>It&rsquo;s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal of tools to play with &mdash; you can even <strong>sell WordPress themes and plugins for cash!</strong> The possibilities are truly endless.</p>

        <h3>People Looking for a New Career</h3>
        <p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work almost anywhere in the world? Becoming a Web Developer might be the answer for you.</p>
        <p><strong>Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</strong> They get to work at amazing companies that are changing the world, or they enjoy the ability to start their own companies, become location-independent and work from home, from coffee shops, in an airplane, on the beach, or wherever they want!</p>
      </div><!-- /.col-sm-8 col-sm-offset-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.who-benefits -->

<!-- COURSE FEATURES ================================================== -->
<section id="course-features">
  <div class="container">
    <div class="section-header">
      <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/icon-rocket.png" alt="Rocket">
      <h2>Course Features</h2>
    </div><!-- /.section-header -->
    <div class="row">
      <div class="col-sm-2">
        <i class="ci ci-computer"></i>
        <h4>Lifetime access to 80+ lectures</h4>
      </div><!-- /.col-sm-2 -->
      <div class="col-sm-2">
        <i class="ci ci-watch"></i>
        <h4>10+ hours of HD video content</h4>
      </div><!-- /.col-sm-2 -->
      <div class="col-sm-2">
        <i class="ci ci-calender"></i>
        <h4>30-day money back guaratee</h4>
      </div><!-- /.col-sm-2 -->
      <div class="col-sm-2">
        <i class="ci ci-community"></i>
        <h4>Access to a community of like-minded students</h4>
      </div><!-- /.col-sm-2 -->
      <div class="col-sm-2">
        <i class="ci ci-instructor"></i>
        <h4>Direct access to the instructor</h4>
      </div><!-- /.col-sm-2 -->
      <div class="col-sm-2">
        <i class="ci ci-device"></i>
        <h4>Accessible content on your mobile devices</h4>
      </div><!-- /.col-sm-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.course-features -->

<!-- PROJECT FEATURES ================================================== -->
<section id="project-features">
  <div class="container">
    <h2>Final Project Features</h2>
    <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website you are going to build? You're looking at it! The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
    <div class="row">
      <div class="col-sm-4">
        <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/icon-design.png" alt="Design">
        <h3>Sexy &amp; Modern Design</h3>
        <p>You get to work with a modern, professional quality design &amp; layout.</p>
      </div><!-- /.col-sm-4 -->
      <div class="col-sm-4">
        <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/icon-code.png" alt="Design">
        <h3>Quality HTML5 &amp; CSS3</h3>
        <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
      </div><!-- /.col-sm-4 -->
      <div class="col-sm-4">
        <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/icon-cms.png" alt="Design">
        <h3>Easy-to-use CMS</h3>
        <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
      </div><!-- /.col-sm-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.project-features -->

<!-- VIDEO FEATURETTE ================================================== -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Watch the Course Introduction</h2>
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
      </div><!-- /.col-sm-8 col-sm-offset-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->

</section>

<!-- INSTRUCTOR ================================================== -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2>Your Instructor <small>Brad Hussey</small></h2>
          </div><!-- /.col-lg-8 -->
          <div class="col-lg-4">
            <a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</p>
        <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code. </p>
        <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
        <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>

        <hr />

        <h3>The Numbers <small>They Don't Lie</small></h3>

        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                41.000+ <span>students</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4 -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                568 <span>reviews</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4 -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                8 <span>courses</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4 -->
        </div><!-- /.row -->
      </div><!-- /.col-sm-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<!-- TESTIMONIALS ================================================== -->
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>What People Are Saying About Brad</h2>
          <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/brennan.jpg" alt="Brennan">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
              <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row testimonial-->
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
              <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row testimonial-->
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
              <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row testimonial-->
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
              <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row testimonial-->
      </div><!-- /.col-sm-8 col-sm-offset-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<?php
get_footer();
