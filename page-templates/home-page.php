<?php
/**
 * Template Name: Home Page
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

<div class="home-banner">
	<div class="hero">	
        <img class="bg-image" src="https://katesembroidery.com/wp-content/uploads/2026/01/banner.webp" alt="Hero Image">
	</div>
	<div class="desc-box">
		<div>
			<div class="headers-text-orders">
				<div data-aos="slide-up" class="aos-init aos-animate">
					<h1 class="m-h-item header1 header-300    header-modules-header-font" style="" data-old-bold="true" data-custom-font="" data-is-italic-supported="" data-line-height="">Elevate Your Style</h1>
				</div>
			</div>
			<div class="line-headers-text-separator">
				
			</div>
			<div data-aos="slide-up" class="aos-init aos-animate" style="transition-duration: .2s;">
				<h2 class="m-h-item header2 text-120   header-modules-header-font" style="" data-custom-font="" data-is-italic-supported="" data-line-height="">Embroidery that speaks for itself</h2></div>
		</div>
	</div>
</div>    

<section id="categories-top" class="s123-module s123-module-eCommerce layout-1 bg-primary">
  <div data-aos="fade-up" class="container-fluid page_header_style noBackground aos-init aos-animate">
    <div class="row">
      <div class="container moduleTitleContainer">
        <div class="row modulesTitle text-center">
          <div class="col-xs-12">
            <div class="page-header-wrap">
              <h2 id="section-112-hs-5be7ea0308ac6-title" class="s123-page-header">Hot Categories</h2>
              <hr class="small">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  



  <div id="category" class="container homepage-section aos-init aos-animate" data-aos="fade-up">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="collection-container">
            
            <!-- Women Category -->
            <div class="woman-category">
                <?php
                    // Ensure WooCommerce is active
                    if (class_exists('WooCommerce')) {

                        // Define the categories to display
                        $categories = array('women');

                        foreach ($categories as $category_slug) {
                            // Get the category object
                            $category = get_term_by('slug', $category_slug, 'product_cat');
                            
                            // Check if the category exists
                            if ($category) {
                                // Get the category name
                                $category_name = $category->name;
                                
                                // Get the number of products in the category
                                $product_count = $category->count;
                                
                                // Get the category thumbnail ID
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                
                                // Get the category image URL
                                $image_url = wp_get_attachment_url($thumbnail_id);
                                ?>
                                
                                <div class="e-c-box show-counter" data-unique-id="<?php echo esc_attr($category->term_id); ?>" data-module-type-num="113">
                                    <div class="preview-highlighter">
                                        <div class="box c-box-layout-5">
                                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="image-container s123-fast-page-load" data-pjax-state="">
                                                <div class="collection-image" data-bg="<?php echo esc_url($image_url); ?>" style="background-position: center center; background-image: url('<?php echo esc_url($image_url); ?>');" role="img" aria-label="<?php echo esc_attr($category_name); ?>"></div>
                                                <div class="title-container t-c-opacity">
                                                    <span class="title box-text-primary"><?php echo esc_html($category_name); ?></span>
                                                    <span class="count counters-loaded"><span class="count-amount"><?php echo esc_html($product_count); ?></span> Products</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            } else {
                                // Handle the case where the category does not exist
                                echo '<div class="e-c-box show-counter" data-module-type-num="113"><div class="preview-highlighter"><div class="box c-box-layout-5"><p>Category not found: ' . esc_html($category_slug) . '</p></div></div></div>';
                            }
                        }
                    }
                ?>
            </div>
            
            <!-- Men Category -->
            <div class="man-category">
                <?php
                    // Ensure WooCommerce is active
                    if (class_exists('WooCommerce')) {

                        // Define the categories to display
                        $categories = array('men');

                        foreach ($categories as $category_slug) {
                            // Get the category object
                            $category = get_term_by('slug', $category_slug, 'product_cat');
                            
                            // Check if the category exists
                            if ($category) {
                                // Get the category name
                                $category_name = $category->name;
                                
                                // Get the number of products in the category
                                $product_count = $category->count;
                                
                                // Get the category thumbnail ID
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                
                                // Get the category image URL
                                $image_url = wp_get_attachment_url($thumbnail_id);
                                ?>
                                
                                <div class="e-c-box show-counter" data-unique-id="<?php echo esc_attr($category->term_id); ?>" data-module-type-num="113">
                                    <div class="preview-highlighter">
                                        <div class="box c-box-layout-5">
                                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="image-container s123-fast-page-load" data-pjax-state="">
                                                <div class="collection-image s123-image-ratio-1-1 bgLazyload entered loaded" data-bg="<?php echo esc_url($image_url); ?>" style="background-position: center center; background-image: url('<?php echo esc_url($image_url); ?>');" role="img" aria-label="<?php echo esc_attr($category_name); ?>"></div>
                                                <div class="title-container t-c-opacity">
                                                    <span class="title box-text-primary"><?php echo esc_html($category_name); ?></span>
                                                    <span class="count counters-loaded"><span class="count-amount"><?php echo esc_html($product_count); ?></span> Products</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            } else {
                                // Handle the case where the category does not exist
                                echo '<div class="e-c-box show-counter" data-module-type-num="113"><div class="preview-highlighter"><div class="box c-box-layout-5"><p>Category not found: ' . esc_html($category_slug) . '</p></div></div></div>';
                            }
                        }
                    }
                ?>
            </div>
            
            <!-- Bags Category -->
            <div class="bags-category">
                <?php
                    // Ensure WooCommerce is active
                    if (class_exists('WooCommerce')) {

                        // Define the categories to display
                        $categories = array('Bags');

                        foreach ($categories as $category_slug) {
                            // Get the category object
                            $category = get_term_by('slug', $category_slug, 'product_cat');
                            
                            // Check if the category exists
                            if ($category) {
                                // Get the category name
                                $category_name = $category->name;
                                
                                // Get the number of products in the category
                                $product_count = $category->count;
                                
                                // Get the category thumbnail ID
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                
                                // Get the category image URL
                                $image_url = wp_get_attachment_url($thumbnail_id);
                                ?>
                                
                                <div class="e-c-box show-counter" data-unique-id="<?php echo esc_attr($category->term_id); ?>" data-module-type-num="113">
                                    <div class="preview-highlighter">
                                        <div class="box c-box-layout-5">
                                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="image-container s123-fast-page-load" data-pjax-state="">
                                                <div class="collection-image s123-image-ratio-1-1 bgLazyload entered loaded" data-bg="<?php echo esc_url($image_url); ?>" style="background-position: center center; background-image: url('<?php echo esc_url($image_url); ?>');" role="img" aria-label="<?php echo esc_attr($category_name); ?>"></div>
                                                <div class="title-container t-c-opacity">
                                                    <span class="title box-text-primary"><?php echo esc_html($category_name); ?></span>
                                                    <span class="count counters-loaded"><span class="count-amount"><?php echo esc_html($product_count); ?></span> Products</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            } else {
                                // Handle the case where the category does not exist
                                echo '<div class="e-c-box show-counter" data-module-type-num="113"><div class="preview-highlighter"><div class="box c-box-layout-5"><p>Category not found: ' . esc_html($category_slug) . '</p></div></div></div>';
                            }
                        }
                    }
                ?>
            </div>
            
            <!-- Accessories Category -->
            <div class="accessories-category">
                <?php
                    // Ensure WooCommerce is active
                    if (class_exists('WooCommerce')) {

                        // Define the categories to display
                        $categories = array('Accessories');

                        foreach ($categories as $category_slug) {
                            // Get the category object
                            $category = get_term_by('slug', $category_slug, 'product_cat');
                            
                            // Check if the category exists
                            if ($category) {
                                // Get the category name
                                $category_name = $category->name;
                                
                                // Get the number of products in the category
                                $product_count = $category->count;
                                
                                // Get the category thumbnail ID
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                
                                // Get the category image URL
                                $image_url = wp_get_attachment_url($thumbnail_id);
                                ?>
                                
                                <div class="e-c-box show-counter" data-unique-id="<?php echo esc_attr($category->term_id); ?>" data-module-type-num="113">
                                    <div class="preview-highlighter">
                                        <div class="box c-box-layout-5">
                                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="image-container s123-fast-page-load" data-pjax-state="">
                                                <div class="collection-image s123-image-ratio-1-1 bgLazyload entered loaded" data-bg="<?php echo esc_url($image_url); ?>" style="background-position: center center; background-image: url('<?php echo esc_url($image_url); ?>');" role="img" aria-label="<?php echo esc_attr($category_name); ?>"></div>
                                                <div class="title-container t-c-opacity">
                                                    <span class="title box-text-primary"><?php echo esc_html($category_name); ?></span>
                                                    <span class="count counters-loaded"><span class="count-amount"><?php echo esc_html($product_count); ?></span> Products</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            } else {
                                // Handle the case where the category does not exist
                                echo '<div class="e-c-box show-counter" data-module-type-num="113"><div class="preview-highlighter"><div class="box c-box-layout-5"><p>Category not found: ' . esc_html($category_slug) . '</p></div></div></div>';
                            }
                        }
                    }
                ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div data-aos="fade-up" class="container-fluid page_header_style noBackground aos-init">
    <div class="row">
      <div class="container moduleTitleContainer">
        <div class="row modulesTitle text-center">
          <div class="col-xs-12">
            <div class="page-header-wrap">
              <h2 id="section-112-hs-5bd1acd98cfe6-title" class="s123-page-header">New Arrival</h2>
              <hr class="small">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="new-arvals">
    
    <?php
        // Check if WooCommerce is active
        if (class_exists('WooCommerce')) : ?>

        <div class="container" style="text-align: -webkit-center;">
            <div class="row">

                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        global $product;
                        ?>

                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="badge bg-danger"><?php echo esc_html__('Sale!', 'woocommerce'); ?></span>
                                    <?php endif; ?>
                                    <?php woocommerce_show_product_sale_flash(); ?>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo woocommerce_placeholder_img_src(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" data-rel="popupScreen" class="btn btn-primary">Quick View</a>
                                </a>
                                <div class="card-body">
                                    
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php echo $product->get_price_html(); ?></p>
                                    
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                else :
                    echo __('No products found');
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>

        <?php else :
            echo __('WooCommerce plugin is not activated. Please activate it to use this template.');
        endif;
?>
    
</div>



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

<section class="home-testimonial">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Testimonials</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore the clients experience</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</section>


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






<?php
get_footer();
?>

