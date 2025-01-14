<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

<section id="contact">
    <div class="container">
        <h2 class="section-title">CONTACT</h2>
        <hr class="small-contact">
        <?php the_content();?>
        <div class="row contact-details">
    <div class="col-xs-12 col-md-4">
      <ul class="list-unstyled contact-info">
        <li>София Люлин , Sofia, Bulgaria</li>
        <li>
          <a href="tel:087 839 6842">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>087 839 6842</span>
          </a>
        </li>
        <li>
          <a href="mailto:katq_83.r@abv.bg">
            <i class="fa fa-envelope" aria-hidden="true"></i>
                katq_83.r@abv.bg
          </a>
        </li>
        <li>
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          Mon-Fri - 08:00-19:00
        </li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-8">
      <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2931.6781644871585!2d23.24749908419858!3d42.710534938546715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa9a8de7ce3e01%3A0xcc9b3ab3fc3f2a18!2z0LYu0LouINCb0Y7Qu9C40L0gNiwg0YPQuy4g4oCeNjIxLdCy0LDigJwsIDEzMzYg0KHQvtGE0LjRjw!5e0!3m2!1sbg!2sbg!4v1719967616257!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
    </div>
    
</section>


</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
