<!-- Get options	
    <?php $post_metabox = get_post_meta( get_the_ID(), '_prefix_post_options', true );?>
unique id of the framework -->



<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="portfolio-filter text-center">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        <?php
                            $cats = get_terms('portfolio_category');
                            foreach ($cats as $cat) {
                        ?>
                            <li><a href="<?php echo $cat->slug;?>" data-filter=".<?php echo $cat->slug;?>"><?php echo $cat->name;?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>

                <div class="portfolio-grid portfolio-gallery grid-4 gutter">
                    <?php 
                        $args = array(
                            'post_type'=> 'portfolio',
                            'posts_per_page' => 8,
                        );
                        $query = new WP_Query($args);
                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                    ?>
                        <div class="portfolio-item <?php
                                $port_cat = get_the_terms(get_the_ID(), 'portfolio_category');
                                foreach ($port_cat as $cat) {
                                    echo $cat->slug.' ';
                                }
                            ?>
                        
                        ">
                            <a href="<?php the_post_thumbnail_url();?>" class="portfolio-image popup-gallery" title="<?php the_title();?>">
                                <img src="<?php the_post_thumbnail_url();?>" alt=""/>
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4><?php the_title();?></h4>
                                        <div class="portfolio-category">
                                            <span><?php echo $cat->name;?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>                   
                    <?php
                            }
                        wp_reset_postdata( );
                        }                        
                    ?>

                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->