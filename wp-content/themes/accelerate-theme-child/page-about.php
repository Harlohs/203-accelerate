
<?php
/**
 * Template Name: About Page
 *The template for displaying about page
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

<div id="primary" class="home-page hero-content">
  <div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post();
    $cover_text = get_field('cover_text');
        ?>
      <p id="about-page-cover-text"><?php echo $cover_text; ?></p>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content main-content-about-page" role="main">
			<?php while ( have_posts() ) : the_post();
        $size = "full";
        $image_1 = get_field('image_1');
        $title_1 = get_field('title_1');
        $text_1 = get_field('text_1');
        $image_2 = get_field('image_2');
        $title_2 = get_field('title_2');
        $text_2 = get_field('text_2');
        $image_3 = get_field('image_3');
        $title_3 = get_field('title_3');
        $text_3 = get_field('text_3');
        $image_4 = get_field('image_4');
        $title_4 = get_field('title_4');
        $text_4 = get_field('text_4');
        $end_text = get_field('end_text')
       ?>
				<h2 id="about-page-title"><?php the_title(); ?></h2>
				<p id="about-page-content"><?php the_content(); ?></p>
      <div class="content-section">
        <div class="section-img-left">
          <?php if($image_1) {
    			    echo wp_get_attachment_image( $image_1, $size ); ?>
    		   <?php } ?>
        </div>
          <h3 class="about-page-section-title"><?php echo $title_1; ?></h3>
          <p class="about-page-section-text"><?php echo $text_1; ?></p>
      </div>
      <div class="content-section">
        <div class="section-img-right">
          <?php if($image_2) {
    			    echo wp_get_attachment_image( $image_2, $size ); ?>
    		   <?php } ?>
        </div>
          <h3 class="about-page-section-title"><?php echo $title_2; ?></h3>
          <p class="about-page-section-text"><?php echo $text_2; ?></p>
      </div>
      <div class="content-section">
        <div class="section-img-left">
          <?php if($image_3) {
    			    echo wp_get_attachment_image( $image_3, $size ); ?>
    		   <?php } ?>
        </div>
          <h3 class="about-page-section-title"><?php echo $title_3; ?></h3>
          <p class="about-page-section-text"><?php echo $text_3; ?></p>
      </div>
      <div class="content-section">
        <div class="section-img-right">
          <?php if($image_4) {
    			    echo wp_get_attachment_image( $image_4, $size ); ?>
    		   <?php } ?>
        </div>
          <h3 class="about-page-section-title"><?php echo $title_4; ?></h3>
          <p class="about-page-section-text"><?php echo $text_4; ?></p>
      </div>
      <div id="about-us-page-bottom">
        <p id="about-us-end-text"><span> <?php echo $end_text; ?></span>
        <a class="button about-us-button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></p>
    </div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
