<?php

    //Create Banner Section
    CSF::createSection( $prefix, array(
        'id'     => 'banner_section',
        'title'  => __('Banner Section', 'meal'),
        'icon'   => 'fas fa-layer-group'
    ));

    CSF::createSection( $prefix, array(
        'parent' =>'banner_section',
        'title'  => __('Banner Options', 'meal'),
        'icon'   => 'fas fa-pencil-alt',
        'fields'=> array(
            array(
                'id' => 'banner_background_image',
                'title'=> __('Banner Background Image', 'meal'),
                'type'=> 'background',
                'output'=>'.cover_1',
                'label' => __('Banner Background Image', 'meal'),
                'background_color'=>false,
            ),
            array(
                'id' => 'banner_title',
                'title'=> __('Banner Title', 'meal'),
                'type'=> 'text',
                'label' => __('Banner Title', 'meal'),
            ),
            array(
                'id' => 'banner_subtitle',
                'title'=> __('Banner textarea', 'meal'),
                'type'=> 'textarea',
                'label' => __('Banner Description', 'meal'),
            ),
            
            array(
                'id'=>'banner_button',
                'title'=>__('Banner Button', 'meal'),
                'type' =>'link',
                'add_title' => __('Add Button', 'meal'),
                'edit_title' => __('Edit Button', 'meal'),
                'remove_title' => __('Remove Button', 'meal'),
                
                
            ),
        )
    ));

