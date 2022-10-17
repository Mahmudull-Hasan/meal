<!-- Get options	
    <?php $options = get_option( 'theme_options' );?>
unique id of the framework -->


<footer class="ftco-footer">
        <div class="container">

            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="footer-widget">
                        <h3 class="mb-4"><?php echo $options['footer_title'];?></h3>
                        <p><?php echo $options['footer_des'];?></p>
                        <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                        <p><a href="https://free-template.co" target="_blank"
                              class="btn btn-primary btn-outline-primary">More Templates</a></p>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="footer-widget">
                        <h3 class="mb-4"><?php echo $options['booking_title_one'];?></h3>
                        <p><?php echo $options['booking_text_one'];?></p>
                        <h3 class="mb-4"><?php echo $options['booking_title_two'];?></h3>
                        <p><?php echo $options['booking_text_two'];?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3 class="mb-4"><?php echo $options['social_title'];?></h3>
                        <ul class="list-unstyled social">
                            <?php
                                $socials = $options['footer_socials'];
                                foreach($socials as $social){
                            ?>
                                <li><a href="<?php echo $social['link'];?>"><span class="<?php echo $social['icon'];?>"></span></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="footer-widget">
                        <h3 class="mb-4"><?php echo $options['newsletter'];?></h3>
                        <form action="#" class="ftco-footer-newsletter">
                            <?php echo do_shortcode('[contact-form-7 id="90" title="Newsletter form"]' );?>
                        </form>
                    </div>
                </div>

            </div>

            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <p><?php echo $options['copyright'];?></p>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff7a5c"/>
    </svg>
</div>

<?php wp_footer(); ?>
</body>
</html>