<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework -->


<div class="section bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 section-heading text-center">
                <h2 class="heading mb-5"><?php echo $options['chefs_title'];?></h2>
                <p><?php echo $options['chefs_subtitle'];?></p>
            </div>
        </div>
        <div class="row">
            <?php 

                $chefs_infos = $options['chefs_info'];
                foreach ($chefs_infos as $info) {
            ?>
                <div class="<?php echo $options['column_select'];?> pl-md-5 text-center mb-5">
                    <div class="ftco-38">
                        <div class="ftco-38-img">
                            <div class="ftco-38-header">
                                <img src="<?php echo $info['chefs_img']['url'];?>"
                                    alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3 class="ftco-38-heading"><?php echo $info['chefs_name'];?></h3>
                                <p class="ftco-38-subheading"><?php echo $info['chefs_designation'];?></p>
                            </div>
                            <div class="ftco-38-body">
                                <p><?php echo $info['chefs_description'];?></p>

                                <p>
                                
                                   <?php if($info['chefs_social_icons']['facebook']){?>
                                        <a href="<?php echo esc_url($info['chefs_social_icons']['facebook']);?>"  class="p-2"><span class="fa fa-facebook"></span></a>
                                    <?php }?>

                                    <?php if($info['chefs_social_icons']['twitter']){?>
                                        <a href="<?php echo esc_url($info['chefs_social_icons']['twitter']);?>"  class="p-2"><span class="fa fa-twitter"></span></a>
                                    <?php }?>

                                    <?php if($info['chefs_social_icons']['instagram']){?>
                                        <a href="<?php echo esc_url($info['chefs_social_icons']['instagram']);?>"  class="p-2"><span class="fa fa-instagram"></span></a>
                                    <?php }?> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                };
            ?>
            
        </div>
    </div>
</div> <!-- .section -->