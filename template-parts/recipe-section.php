<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework -->    
    
    
<div class="section" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3"><?php echo $options['recipe_title'];?></h2>
                <p class="sub-heading mb-5"><?php echo $options['recipe_sub'];?>
                </p>
            </div>
        </div>
        <div class="row">

            <div class="ftco-46">
                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                    <div class="ftco-46-image" style="background-image: url(<?php echo $options['first_recipe_img']['url'];?>);"></div>
                    <div class="ftco-46-text ftco-46-arrow-left">
                        <h4 class="ftco-46-subheading">Vegies</h4>
                        <h3 class="ftco-46-heading"><?php echo $options['first_recipe_title'];?></h3>
                        <p class="mb-5"><?php echo $options['first_recipe_des'];?></p>
                        <p><a href="<?php echo $options['first_recipe_btn']['url'];?>" class="btn-link"><?php echo $options['first_recipe_btn']['text'];?> <span
                                        class="ion-android-arrow-forward"></span></a></p>
                    </div>
                    <div class="ftco-46-image" style="background-image: url(<?php echo $options['third_recipe_img']['url'];?>);"></div>
                </div>

                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                    <div class="ftco-46-text ftco-46-arrow-right">
                        <h4 class="ftco-46-subheading">Food</h4>
                        <h3 class="ftco-46-heading"><?php echo $options['second_recipe_title'];?></h3>
                        <p class="mb-5"><?php echo $options['second_recipe_des'];?></p>
                        <p><a href="<?php echo $options['second_recipe_btn']['url'];?>" class="btn-link"><?php echo $options['second_recipe_btn']['text'];?><span
                                        class="ion-android-arrow-forward"></span></a></p>
                    </div>

                    <div class="ftco-46-image" style="background-image: url(<?php echo $options['second_recipe_img']['url'];?>);"></div>
                    <div class="ftco-46-text ftco-46-arrow-up">
                        <h4 class="ftco-46-subheading">Food</h4>
                        <h3 class="ftco-46-heading"><?php echo $options['third_recipe_title'];?></h3>
                        <p class="mb-5"><?php echo $options['third_recipe_des'];?></p>
                        <p><a href="<?php echo $options['third_recipe_btn']['url'];?>" class="btn-link"><?php echo $options['third_recipe_btn']['text'];?><span
                                        class="ion-android-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .section -->