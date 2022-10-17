<?php 

// Silence is golden.

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

require_once plugin_dir_path( __FILE__ ) .'classes/setup.class.php';

if(class_exists('CSF')){


    // Set a unique slug-like ID
    $prefix = 'theme_options';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => __('Theme Options'),
        'menu_slug'  =>'theme-options',
        'framework_title' => __('Meal Theme Options', 'meal'),
        'theme'=> 'dark',
    ));

    //Create Header Section
    CSF::createSection( $prefix, array(
        'id'     => 'header_section',
        'title'  => __('Header Section', 'meal'),
        'icon'   => 'fas fa-server'
    ));

    CSF::createSection($prefix, array(
        'parent'=>'header_section',
        'title' => __('Header Option', 'meal'),
        'icon'  => 'fa fa-pencil',
        'fields'=> array(
            array(
                'id'=> 'header_logo',
                'title'=> __('Header Logo', 'meal'),
                'type'=> 'media',
                'url' => false,
                'library' => 'image',
                'button_title' => __('Upload Your Logo')
            ),

            array(
                'id'=> 'header_logo_color',
                'title'=> __('Header Logo Color', 'meal'),
                'type'=> 'color',
                'placeholder' => __('Logo Color', 'meal'),
            ),
        )
    ));


    CSF::createSection( $prefix, array(
        'id' => 'footer_section',
        'title'=> __('Footer Section', 'meal'),
        'icon' => 'fas fa-server',
    ));

    CSF::createSection($prefix, array(
        'parent'=>'footer_section',
        'title' => __('Footer Options', 'meal'),
        'icon'  => 'fa fa-pencil',
        'fields'=> array(
            array(
                'id'=> 'footer_title',
                'title'=> __('Footer Title', 'meal'),
                'type'=> 'text',
            ),

            array(
                'id'=> 'footer_des',
                'title'=> __('Footer Description', 'meal'),
                'type'=> 'textarea',
            ),
            array(
                'id'=> 'booking_title_one',
                'title'=> __('Booking Title One', 'meal'),
                'type'=> 'text',
            ),

            array(
                'id'=> 'booking_text_one',
                'title'=> __('Booking Text One', 'meal'),
                'type'=> 'text',
            ),

            array(
                'id'=> 'booking_title_two',
                'title'=> __('Booking Title Two', 'meal'),
                'type'=> 'text',
            ),
            
            array(
                'id'=> 'booking_text_two',
                'title'=> __('Booking Text two', 'meal'),
                'type'=> 'text',
            ),
            array(
                'id'=> 'social_title',
                'title'=> __('Social Title', 'meal'),
                'type'=> 'text',
            ),
            array(
                'id'=> 'footer_socials',
                'title'=> __('Footer Socials ', 'meal'),
                'type'=> 'repeater',
                'fields' => array(
                    array(
                        'id' => 'icon',
                        'title' => __('Social Icon', 'meal'),
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'link',
                        'title' => __('Social url', 'meal'),
                        'type' => 'text'
                    ),
                )
            ),

            array(
                'id'=> 'copyright',
                'title'=> __('Copy Right Text', 'meal'),
                'type'=> 'wp_editor',
            ),
            array(
                'id'=> 'newsletter',
                'title'=> __('Newsletter title', 'meal'),
                'type'=> 'text',
            ),
        )
    ));







}

