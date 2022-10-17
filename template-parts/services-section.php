<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework --> 


<div class="section bg-white services-section" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3"><?php echo $options['service_heading'];?></h2>
                <p class="sub-heading mb-5"><?php echo $options['service_sub_heading'];?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php 
                $services_contents = $options['services_content'];
                foreach ($services_contents as $content) {
            ?>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="<?php echo $options['column_ani'];?>" data-aos-delay="<?php echo $options['column_ani_delay'];?>" data-aos-duration="1000">
                    <div class="media feature-icon d-block text-center">
                        <div class="icon">
                            <span class="<?php echo $content['icon'];?>"></span>
                        </div>
                        <div class="media-body">
                            <h3><?php echo $content['service_title'];?></h3>
                            <p><?php echo $content['service_description'];?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

        </div>
    </div>
</div> <!-- .section -->