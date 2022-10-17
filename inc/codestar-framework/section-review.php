<?php

    CSF::createSection( $prefix, array(
        'id' =>'review_section', 
        'title' => __('Review Section', 'meal'),
        'icon' => 'fa fa-layer-group'
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'review_section',
        'title' => __('Review Options', 'meal'),
        'icon' => 'fa fa-pencil', 
        'fields' => array(
            array(
                'id' => 'review_title',
                'title' => __('Review Section Title', 'meal'),
                'type' => 'text',
            ),
            array(
                'id' => 'review_content',
                'title' => __('Review Content', 'meal'),
                'type' => 'repeater',
                'fields' => array(

                    array(
                        'id' => 'review_des',
                        'title' => __('Review Description'),
                        'type'=> 'textarea',
                    ),
                    array(
                        'id' => 'review_img',
                        'title' => __('Review Image', 'meal'),
                        'type'=> 'media',
                    ),
                    array(
                        'id' => 'review_name',
                        'title' => __('Review Name', 'meal'),
                        'type'=> 'text',
                    ),
                    array(
                        'id' => 'review_designation',
                        'title' => __('Review Designation', 'meal'),
                        'type'=> 'text',
                    ),
                )
            )
        )
    ));