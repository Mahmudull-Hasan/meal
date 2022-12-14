


<div class="section bg-light" id="section-menu" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Menu</h2>
                <p class="sub-heading mb-5">Free Website Template For Restaurants Made by <a href="#">Free-Template.co</a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="nav site-tab-nav" id="pills-tab" role="tablist">

                    <?php
                        $meal_counter         = 0;
                        $meal_feat_categories = get_terms( array(
                            'taxonomy'   => 'category',
                            'meta_key'   => 'featured',
                            'meta_value' => 'a:1:{s:8:"featured";s:1:"1";}'
                        ) );
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill"
                            href="#pills-breakfast" role="tab" aria-controls="pills-breakfast"
                            aria-selected="true">Breakfast</a>
                    </li>
                    
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel"
                            aria-labelledby="pills-breakfast-tab">
                        <div class="d-block d-md-flex menu-food-item">

                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Warm Spinach Dip &amp; Chips</a></h3>
                                <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                    salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$10.49</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Key Wast Machos</a></h3>
                                <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                    melted cheese, pickled jalape??os, guacamole, sour cream and salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$11.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Crispy Onions Rings</a></h3>
                                <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                    coconut flakes.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$11.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Lobster &amp; Shrimp Quesadilla</a></h3>
                                <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                    cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$13.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->


                    </div>
                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel"
                            aria-labelledby="pills-lunch-tab">

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Jumbo Lump Crab Stack</a></h3>
                                <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                    salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$12.49</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Jamaican Chicken Wings</a></h3>
                                <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                    melted cheese, pickled jalape??os, guacamole, sour cream and salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$15.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Bahamian Seafood Chowder</a></h3>
                                <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                    coconut flakes.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$10.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Grilled Chicken &amp; Tropical Fruit on Mixed Greens</a></h3>
                                <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                    cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$12.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                    </div>
                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel"
                            aria-labelledby="pills-dinner-tab">

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Grilled Top Sirlion Steak</a></h3>
                                <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                    salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$18.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Steak Oscar</a></h3>
                                <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                    melted cheese, pickled jalape??os, guacamole, sour cream and salsa.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$23.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Skirt Steak Churrasco</a></h3>
                                <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                    coconut flakes.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$20.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                        <div class="d-block d-md-flex menu-food-item">
                            <div class="text order-1 mb-3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                        alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3><a href="#">Grilled Beef Steak</a></h3>
                                <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                    cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                            </div>
                            <div class="price order-2">
                                <strong>$20.99</strong>
                            </div>
                        </div> <!-- .menu-food-item -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .section -->