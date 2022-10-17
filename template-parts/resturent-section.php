<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework -->


<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5 text-center"><?php echo $options['resturent_title'];?></h2>
                <p class="text-center"><?php echo $options['resturent_description'];?></p>
            </div>
        </div>
    </div>
</div> <!-- .section -->