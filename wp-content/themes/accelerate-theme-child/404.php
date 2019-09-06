<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
  get_header(); ?>
  <div id="missing-page-container">
    <div id="missing-page-pic">

    </div>
    <div id="missing-page-text">
      <h1> Whoops, Took a Wrong Turn... </h1>
        <p> Sorry, this page no longer exists never existed or has been moved. We
        feel like complete jerks for totally misleading you. </p>
        <p>Feel free to take a look around our <span><a href="<?php echo site_url('/blog/')?>">blog</a></span>
          or some of our featured <span><a href="<?php echo site_url('/case-studies/')?>">work.</a></span></p>
    </div>
  </div>








<?php get_footer();?>
