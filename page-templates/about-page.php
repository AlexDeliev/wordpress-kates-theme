<?php
/**
 * Template Name: About Us Page
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

<section id="about-home-pg" class="d-flex justify-content-center align-items-center py-5">
    <div class="container" data-aos="fade-up">
        
        <div class="row">
            <div id="title-header" class="col-md-8 mx-auto bg-white p-4 shadow">
                <div id="desc-box">
                    <h2>Crafted with Precision</h2>
                    
                        <hr class="my-4 left-aligned">
                    
                    
                    <p>
                    Нашият екип от квалифицирани занаятчии е специализиран в създаването на индивидуални бродирани дизайни, които издигат вашето ежедневно облекло. С внимание към детайла и качествена изработка, ние вдъхваме живот на вашата визия върху плат.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom-embroidery-section" class="d-flex align-items-center py-5">
    <div class="custom-banner"></div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-4 bg-white p-4 shadow">
                <div id="desc-box">
                    <h2>Personalized Embroidery</h2>
                    <hr class="my-4 left-aligned" style="white-space: pre-wrap !important, word-wrap: break-word;">
                    <p>Dress it up with your own style</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="services">
    <div class="container">
        <h2 class="section-title">Services</h2>
        <hr class="small-services">
        <div class="services-row">
            <div class="service-item">
                <div class="service-img" style="background-image: url('https://static1.s123-cdn-static-a.com/ready_uploads/media/8951515/400_6375d537b154f.jpg');"></div>
                <h4>Custom Embroidery</h4>
                <p>Personalize your clothing and accessories with custom embroidery designs tailored to your preferences.</p>
            </div>
            <div class="service-item">
                <div class="service-img" style="background-image: url('https://static1.s123-cdn-static-a.com/ready_uploads/media/26656/400_5cdd2d5c928ff.jpg');"></div>
                <h4>Logo Embroidery</h4>
                <p>Promote your business or brand with professional logo embroidery services that leave a lasting impression.</p>
            </div>
            <div class="service-item">
                <div class="service-img" style="background-image: url('https://static1.s123-cdn-static-a.com/ready_uploads/media/13393315/400_65a6ceb347090.jpg');"></div>
                <h4>Monogramming</h4>
                <p>Add a personalized touch to gifts or personal items with elegant monogram embroidery.</p>
            </div>
        </div>
    </div>
</section>

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
