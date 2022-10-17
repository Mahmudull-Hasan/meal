<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework --> 


<div class="section bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3"><?php echo $options['review_title'];?></h2>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false">

                    <?php
                        $reviews = $options['review_content'];
                        foreach ($reviews as $review) {
                    ?>
                        <div class="item">
                            <blockquote class="testimonial">
                                <p><?php echo $review['review_des'];?></p>
                                <div class="author">
                                    <img src="<?php echo $review['review_img']['url'];?>" alt="Image placeholder" class="mb-3">
                                    <h4><?php echo $review['review_name'];?></h4>
                                    <p><?php echo $review['review_designation'];?></p>
                                </div>
                            </blockquote>
                        </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->