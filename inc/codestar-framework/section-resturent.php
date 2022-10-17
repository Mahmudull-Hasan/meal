<?php

    CSF::createSection( $prefix, array(
        'id' =>'resturent_section', 
        'title' => __('Resturent Section', 'meal'),
        'icon' => 'fa fa-layer-group'
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'resturent_section',
        'title'  => __('Resturent Details', 'meal'), 
        'icon'   => 'fa fa-pencil',
        'fields' => array(
            array(
                'id' => 'resturent_title', 
                'title' => __('Resturent Title', 'meal'),
                'type' => 'text',
            ),
            array(
                'id' => 'resturent_description', 
                'title' => __('Resturent Description', 'meal'),
                'type' => 'textarea',
            ),
        )
    ));