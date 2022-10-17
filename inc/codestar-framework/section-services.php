<?php

    CSF::createSection( $prefix, array(
        'id' => 'services_section',
        'title' => __('Services Section', 'meal'),
        'icon' => 'fas fa-layer-group',
    ));


    CSF::createSection( $prefix, array(
        'parent' => 'services_section',
        'title' => __('Services Options', 'meal'),
        'icon' => 'fa fa-pencil',
        'fields' => array(

            array(
                'id' => 'service_heading',
                'title' => __('Service Heading', 'meal'),
                'type' => 'text',
                'label' => __('Service Heading', 'meal') 

            ),
            array(
                'id' => 'service_sub_heading',
                'title' => __('Service Sub Heading', 'meal'),
                'type' => 'text',
                'label' => __('Service Sub Heading', 'meal') 

            ),

            array(
                'id' =>'services_content',
                'title' => __('Services Content'),
                'type' =>'repeater',
                'fields' => array(
                    array(
                        'id'=> 'icon',
                        'title' => __('Select Icon', 'meal'),
                        'type' => 'select',
                        'options' =>array(
                            'flaticon-soup' => 'Soup Icon',
                            'flaticon-vegetables' => 'Vegetables Icon',
                            'flaticon-pancake' => 'Pancake Icon',
                            'flaticon-tray' => 'Tray Icon',
                            'flaticon-salad' => 'Salad Icon',
                            'flaticon-chicken' => 'Chicken Icon',
                        )
                    ),

                    array(
                        'id' => 'service_title',
                        'titlt'=> __('Services Title', 'meal'),
                        'type' => 'text',
                        'label' => __('Service Title', 'meal')
                    ),
                    array(
                        'id' => 'service_description',
                        'titlt'=> __('Services Description', 'meal'),
                        'type' => 'textarea',
                        'label' => __('Service Description', 'meal')
                    ),
                )
            )
        )
    ));


    CSF::createSection( $prefix, array(
        'parent'=> 'services_section',
        'title' => __('Services Style', 'meal'),
        'icon'  => 'fa fa-eye-dropper',
        'fields' => array(
            array(
                'id' => 'column_ani',
                'title' => __('Column Animation', 'meal'),
                'type' => 'select',
                'options' => array(
                    'fade-up' => __('Fade Up', 'meal'),
                    'fade-down' => __('Fade Down', 'meal'),
                    'fade-right' => __('Fade Right', 'meal'),
                    'fade-left' => __('Fade Left', 'meal'),
                    'flip-left' => __('Flip Left', 'meal'),
                    'flip-right' => __('Flip Right', 'meal'),
                    'flip-up' => __('Flip UP', 'meal'),
                    'flip-down' => __('Flip Down', 'meal'),
                    'zoom-in' => __('Zoom In', 'meal'),
                    'zoom-in-up' => __('Zoom In Up', 'meal'),
                )
            ),
            array(
                'id' => 'column_ani_delay',
                'title' => __('Column Animation Delay', 'meal'),
                'type' => 'select',
                'options' => array(
                    '100' => __('100', 'meal'),
                    '200' => __('200', 'meal'),
                    '300' => __('300', 'meal'),
                    '400' => __('400', 'meal'),
                    '500' => __('500', 'meal'),
                    '600' => __('600', 'meal'),
                    '700' => __('700', 'meal'),
                    '800' => __('800', 'meal'),
                    '900' => __('900', 'meal'),
                    '1000' => __('1000', 'meal'),
                )
            ),
        )
    ));