<?php 
/* Template Name: Landing page */
?>
<?php get_header();?>


	<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
	unique id of the framework -->

<div class="main-wrap " id="section-home">

    <!-- Banner Section -->
    <?php get_template_part('template-parts/banner-section' );?>

    <!-- Recipe Section -->
    <?php get_template_part('template-parts/recipe-section' );?>

    <!-- Recipe Section -->
    <?php get_template_part('template-parts/resturent-section' );?>


    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/portfolio-section' );?>

    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/chefs-section' );?>

    <!-- Menu Section -->
    <?php get_template_part('template-parts/menu-section' );?>

    <!-- Services Section -->
    <?php get_template_part('template-parts/services-section' );?>

    <!-- Reservation Section -->
    <?php get_template_part('template-parts/reservation-section' );?>

    <!-- Review Section -->
    <?php get_template_part('template-parts/review-section' );?>

    <!-- Contact Section -->
    <?php get_template_part('template-parts/contact-section' );?>






    <div class="map-wrap" id="map" data-aos="fade"></div>


    
<?php get_footer();?>