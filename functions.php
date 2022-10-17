<?php

if ( site_url() == "http://localhost/meal" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function meal_theme_setup() {
    load_theme_textdomain( 'meal', get_template_directory() . "/languages" );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tags' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
        'comment-list'
    ) );
    add_theme_support( 'custom-logo' );

    //register menus
    register_nav_menus( array(
        'primary_menu' => __('Primary Menu', 'meal')
    ));
}

add_action( 'after_setup_theme', 'meal_theme_setup' );

function meal_theme_assets() {

    wp_enqueue_style( 'bootstrap', get_theme_file_uri() . '/assets/css/bootstrap.css',false,'1.0.0','all');

    wp_enqueue_style( 'animation', get_theme_file_uri() . '/assets/css/animate.css',false,'1.0.0','all');

    wp_enqueue_style( 'carousel', get_theme_file_uri() . '/assets/css/owl.carousel.min.css',false,'1.0.0','all');

    wp_enqueue_style( 'magnific-popup', get_theme_file_uri() . '/assets/css/magnific-popup.css',false,'1.0.0','all');

    wp_enqueue_style( 'aos', get_theme_file_uri() . '/assets/css/aos.css',false,'1.0.0','all');

    wp_enqueue_style( 'bootstrap-datepicker', get_theme_file_uri() . '/assets/css/bootstrap-datepicker.css',false,'1.0.0','all');

    wp_enqueue_style( 'jquery-datepicker', get_theme_file_uri() . '/assets/css/jquery.timepicker.css',false,'1.0.0','all');

    wp_enqueue_style( 'ionicons-css', get_theme_file_uri() . '/assets/fonts/ionicons/css/ionicons.min.css',false,'1.0.0','all');

    //wp_enqueue_style( 'fontawesome-css', get_theme_file_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css',array(),'1.0.0','all');

    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
	
	wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );

    wp_enqueue_style( 'flaticon', get_theme_file_uri() . '/assets/fonts/flaticon/font/flaticon.css',false,'1.0.0','all');

    wp_enqueue_style( 'portfolio', get_theme_file_uri() . '/assets/css/portfolio.css',false,'1.0.0','all');

    wp_enqueue_style( 'style-template', get_theme_file_uri() . '/assets/css/style.css',array(),VERSION,'all');

    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), VERSION, null );
    

    // Meal Js load

    wp_enqueue_script( 'jquery-min', get_theme_file_uri() . '/assets/js/jquery-3.2.1.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'jquery-migrate-js', get_theme_file_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'popper-js', get_theme_file_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'carousel-js', get_theme_file_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'waypoints-js', get_theme_file_uri() . '/assets/js/jquery.waypoints.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'magnific-popup-js', get_theme_file_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'bootstrap-datepicker-js', get_theme_file_uri() . '/assets/js/bootstrap-datepicker.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'jquery-timepicker-js', get_theme_file_uri() . '/assets/js/jquery.timepicker.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'jquery-stellar-js', get_theme_file_uri() . '/assets/js/jquery.stellar.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'jquery-easing-js', get_theme_file_uri() . '/assets/js/jquery.easing.1.3.js', array ( 'jquery' ), '1.0.0', 'true');
    
    wp_enqueue_script( 'aos-js', get_theme_file_uri() . '/assets/js/aos.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'imagesloaded-js', get_theme_file_uri() . '/assets/js/imagesloaded.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script( 'isotope-js', get_theme_file_uri() . '/assets/js/isotope.pkgd.min.js', array ( 'jquery' ), '1.0.0', 'true');

    wp_enqueue_script('google-map-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s', null, '1.0', true);

    wp_enqueue_script( 'portfolio-js', get_theme_file_uri() . '/assets/js/portfolio.js', array ( 'jquery' ), '1.0.0', 'true');
    
    wp_enqueue_script( 'main-js', get_theme_file_uri() . '/assets/js/main.js', array ( 'jquery' ), '1.0.0', true);

    if ( is_page_template( 'page-template/landing-page.php' ) ) {
		wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'jquery' ), VERSION, true );
		wp_enqueue_script( 'meal-contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
		wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
		wp_localize_script( 'meal-contact-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
	}
}
add_action( 'wp_enqueue_scripts', 'meal_theme_assets' );




function meal_process_reservation() {

	if ( check_ajax_referer( 'reservation', 'rn' ) ) {
		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_text_field( $_POST['email'] );
		$persons = sanitize_text_field( $_POST['persons'] );
		$phone   = sanitize_text_field( $_POST['phone'] );
		$date    = sanitize_text_field( $_POST['date'] );
		$time    = sanitize_text_field( $_POST['time'] );

		$data = array(
			'name'    => $name,
			'email'   => $email,
			'phone'   => $phone,
			'persons' => $persons,
			'date'    => $date,
			'time'    => $time
		);
		//print_r( $data );

		$reservation_arguments = array(
			'post_type'   => 'reservation',
			'post_author' => 1,
			'post_date'   => date( 'Y-m-d H:i:s' ),
			'post_status' => 'publish',
			'post_title'  => sprintf( '%s - Reservation for %s persons on %s - %s', $name, $persons, $date . " : " . $time, $email ),
			'meta_input'  => $data
		);

		$reservations = new WP_Query( array(
			'post_type'   => 'reservation',
			'post_status' => 'publish',
			'meta_query'  => array(
				'relation'    => 'AND',
				'email_check' => array(
					'key'   => 'email',
					'value' => $email
				),
				'date_check'  => array(
					'key'   => 'date',
					'value' => $date
				),
				'time_check'  => array(
					'key'   => 'time',
					'value' => $time
				),
			)
		) );
		if ( $reservations->found_posts > 0 ) {
			echo 'Duplicate';
		} else {
			$wp_error = '';
			wp_insert_post( $reservation_arguments, $wp_error );
			if ( ! $wp_error ) {
				echo "Successful";
			}
		}

	} else {
		echo 'Not allowed';
	}
	die();
}

add_action( 'wp_ajax_reservation', 'meal_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_process_reservation' );


// Contact Form Dynamic//

function meal_contact_email(){
	if(check_ajax_referer('contact','cn')) {
		$name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
		$admin_email = get_option( 'admin_email' );

		//postfix

		wp_mail( 'mahmudullhasan1133@gmail.com', __( 'Someone tried to contact you', 'meal' ), $_message, "From: mahmudullhind3333@gmail.com\r\n" );
		die( 'successful' );
	}
	die('error');
}
add_action('wp_ajax_contact','meal_contact_email');
add_action('wp_ajax_nopriv_contact','meal_contact_email');




// Our custom post type function
function meal_create_post_type() {
  
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolios', 'meal' ),
                'singular_name' => __( 'portfolio', 'meal' ),
            ),
            'public' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'thumbnail', 'custom-field'),
			"show_in_nav_menus"   => false,
  
        )
    );

    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels'=> array(
            'name'=> __('Categories', 'meal'),
            'singular_name'=> __('Category', 'meal'),
        ),
        'hierarchical' =>true,
        'show_admin_column' => true
    ));
}
add_action( 'init', 'meal_create_post_type' );


/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */

// Theme Options
require_once get_theme_file_path('/inc/codestar-framework/theme-options.php');

//section banner
require_once get_theme_file_path('/inc/codestar-framework/section-banner.php');

//section recipe
require_once get_theme_file_path('/inc/codestar-framework/section-recipe.php');

//section Resturent
require_once get_theme_file_path('/inc/codestar-framework/section-resturent.php');

//section chefs
require_once get_theme_file_path('/inc/codestar-framework/section-chefs.php');

//section chefs
require_once get_theme_file_path('/inc/codestar-framework/section-menu.php');

//portfolio options
require_once get_theme_file_path('/inc/codestar-framework/section-services.php');

//portfolio options
require_once get_theme_file_path('/inc/codestar-framework/section-review.php');

//portfolio options
require_once get_theme_file_path('/inc/codestar-framework/post-portfolio.php');


