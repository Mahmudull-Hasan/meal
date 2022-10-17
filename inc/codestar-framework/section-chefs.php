<?php

    //Chefs Section

    CSF::createSection( $prefix, array(
        'id'     => 'chefs_section',
        'title'  => __('Chefs Section', 'meal'),
        'icon'   => 'fas fa-server'
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'chefs_section',
        'title' => __('Chefs Title & Subtitle'),
        'icon'=> 'fa fa-pencil',
        'fields'=> array(
            array(
                'id' => 'chefs_title',
                'title' => __('Chefs Title', 'meal'),
                'type' => 'text'

            ),
            array(
                'id' => 'chefs_subtitle',
                'title' => __('Chefs Subtitle', 'meal'),
                'type' => 'text'

            ),
        ), 
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'chefs_section',
        'title'  => __('Chefs Information', 'meal'),
        'icon'  => 'fa fa-pencil',
        'fields' => array(
            array(
                'id'        => 'chefs_info',
                'title'     => __('Chefs Information', 'meal'),
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'=>'chefs_img',
                        'title' => __('Chef Image', 'meal'),
                        'type' => 'media',
                    ),
                    array(
                        'id'=>'chefs_name',
                        'title' => __('Chef Name', 'meal'),
                        'type' => 'text',
                    ),
                    array(
                        'id'=>'chefs_designation',
                        'title' => __('Chef Designation', 'meal'),
                        'type' => 'text',
                    ),
                    array(
                        'id'=>'chefs_description',
                        'title' => __('Chef Description', 'meal'),
                        'type' => 'textarea',
                    ),
                    array(
                        'id'=>'chefs_social_icons',
                        'title' => __('Social Profiles', 'meal'),
                        'type' => 'fieldset',
                        'fields'=> array(
                            array(
                                'id'=> 'facebook',
                                'title' =>__('Facebook', 'meal'),
                                'type' => 'text'
                            ),
                            array(
                                'id'=> 'twitter',
                                'title' =>__('Twitter', 'meal'),
                                'type' => 'text'
                            ),
                            array(
                                'id'=> 'instagram',
                                'title' =>__('Instagram', 'meal'),
                                'type' => 'text'
                            ),
                        )
                    ),
                    
                )

            ),
        )
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'chefs_section',
        'title' => __('Chefs Section Style', 'meal'),
        'icon' => 'fa fa-eye-dropper',
        'fields'=> array(
            array(
                'id'=> 'column_select',
                'title' => __('Column Select'),
                'type'  => 'select', 
                'class' =>'.col-md-6',
                'placeholder' => 'Select an option',
                'options'=> array(
                        'col-md-3'  =>  __('4 Column', 'meal'),
                        'col-md-4'  =>  __('3 Column', 'meal'),
                        'col-md-6'  =>  __('2 Column', 'meal'),
                    ),
                    'default'     => 'col-md-6'

            )
        ),
    ));
