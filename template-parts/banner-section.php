<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework -->
       
<div class="cover_1 overlay bg-slant-white bg-light">
    <div class="img_bg" style="background-image: url(<?php echo $options['banner_background_image']?>);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                    <h2 class="heading mb-5"><?php echo $options['banner_title'];?></h2>
                    <p class="sub-heading mb-5"><?php echo $options['banner_subtitle'];?></a>
                    </p>
                    <p><a href="<?php echo $options['banner_button']['url'];?>" class="smoothscroll btn btn-outline-white px-5 py-3"><?php echo $options['banner_button']['text'];?></a></p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .cover_1 -->