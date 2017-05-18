<?php
/* Template Name: Home Page */

get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'optin'); ?>
<?php get_template_part('template-parts/content', 'shortinfo'); ?>
<?php get_template_part('template-parts/content', 'longinfo'); ?>
<?php get_template_part('template-parts/content', 'myfeatures'); ?>
<?php get_template_part('template-parts/content', 'myskills'); ?>
<?php get_template_part('template-parts/content', 'myvideo'); ?>
<?php get_template_part('template-parts/content', 'aboutme'); ?>

<?php
get_footer();
