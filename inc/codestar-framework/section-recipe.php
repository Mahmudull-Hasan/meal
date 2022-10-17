<?php


    //Recipe Section
    CSF::createSection( $prefix, array(
        'id'     => 'recipe_section',
        'title'  => __('Recipes Section', 'meal'),
        'icon'   => 'fas fa-layer-group'
    ));

    CSF::createSection( $prefix, array(
        'parent'=> 'recipe_section',
        'title' => __('Recipe Ttile & Subtitle', 'meal'),
        'icon' => 'fa fa-pencil',
        'fields'=> array(
            array(
                'id' => 'recipe_title',
                'title'=>__('Recipe Title'),
                'type'=> 'text',

            ),
            array(
                'id' => 'recipe_sub',
                'title'=>__('Recipe Subtitle'),
                'type'=> 'text',

            ),
            
        )
    ));

    CSF::createSection( $prefix, array(
        'parent'=> 'recipe_section',
        'title' => __('Recipe Images', 'meal'),
        'icon' => 'fa fa-pencil',
        'fields'=> array(
            array(
                'id' => 'first_recipe_img',
                'title'=>__('Recipe Image'),
                'type'=> 'media',

            ),
            array(
                'id' => 'second_recipe_img',
                'title'=>__('Second Recipe Image'),
                'type'=> 'media',

            ),
            array(
                'id' => 'third_recipe_img',
                'title'=>__('Third Recipe Image'),
                'type'=> 'media',

            ),
            
        )
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'recipe_section',
        'title'  => __('Recipe Titles'),
        'icon'  =>'fa fa-pencil',
        'fields' => array(
            array(
                'id' => 'first_recipe_title',
                'title'=>__('First Recipe Title'),
                'type'=> 'text',               
            ),
            array(
                'id' => 'second_recipe_title',
                'title'=>__('Second Recipe Title', 'meal'),
                'type'=> 'text',                    
            ),
            
            array(
                'id' => 'third_recipe_title',
                'title'=>__('Third Recipe Title'),
                'type'=> 'text',                    
            ),
        )

    ));

    CSF::createSection( $prefix, array(
        'parent' => 'recipe_section',
        'title'  => __('Recipe Description'),
        'icon'  =>'fa fa-pencil',
        'fields' => array(
            array(
                'id' => 'first_recipe_des',
                'title'=>__('First Recipe Description', 'meal'),
                'type'=> 'textarea',               
            ),
            array(
                'id' => 'second_recipe_des',
                'title'=>__('Second Recipe Description', 'meal'),
                'type'=> 'textarea',                    
            ),
            
            array(
                'id' => 'third_recipe_des',
                'title'=>__('Third Recipe Description', 'meal'),
                'type'=> 'textarea',                    
            ),
        )

    ));

    CSF::createSection( $prefix, array(
        'parent' => 'recipe_section',
        'title'  => __('Recipe Buttons'),
        'icon'  =>'fa fa-pencil',
        'fields' => array(
            array(
                'id' => 'first_recipe_btn',
                'title'=>__('First Recipe Button', 'meal'),
                'type'=> 'link',               
            ),
            array(
                'id' => 'second_recipe_btn',
                'title'=>__('Second Recipe Button', 'meal'),
                'type'=> 'link',                    
            ),
            
            array(
                'id' => 'third_recipe_btn',
                'title'=>__('Third Recipe Button', 'meal'),
                'type'=> 'link',                    
            ),
        )

    ));