<?php
//
// A unique slug-like ID

  $prefix_page_opts = '_prefix_post_options';

  CSF::createMetabox( $prefix_page_opts, array(
    'title'        => __('Post Designation', 'meal'),
    'post_type'    => 'portfolio',
    'post_formats' => 'default', // Spesific post format
    
  ) );

  // CSF::createSection( $prefix_page_opts, array(
  //   'title'  => __('Designation', 'meal'),
  //   'fields' => array(

  //     array(
  //       'id'    => 'portfolio_designation',
  //       'title' => __('Portfolio Designation', 'meal'),
  //       'type'  => 'text',
  //     ),
  //   )
  // ));

  CSF::createSection( $prefix_page_opts, array(
    'title' => __('Featured', 'meal'),
    'icon' => 'fa fa-rocket',
    'taxonomy' => 'category',
    'fields'=>array(
        array(
          'id' =>'featured',
          'title' => __('Feateured', 'meal'),
          'type'=> 'switcher'
        )
      )
    ));
