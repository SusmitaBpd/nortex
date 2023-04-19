<?php 

/** Template Name: Home */



get_header();

?>



<!-- banner -->

<section class="main-banner">
<div class="banner-slick-slider">
<?php
if( have_rows('banner_slider') ):
 while( have_rows('banner_slider') ) : the_row(); ?>

<div class="element">

<div class="fig-holder">

    <figure style="background-image: url(<?php the_sub_field('banner_bg'); ?>);"></figure>

    <div class="banner-text">

        <div class="container">

           <?php the_sub_field('banner_title'); ?>

           <?php the_sub_field('banner_content'); ?>

            <a href="<?php the_sub_field('banner_link'); ?>" class="read-info">More Info</a>

        </div>

    </div>

</div>

</div>

       
<?php
    endwhile;
   endif;
?>
       </div>

    </section>

    <!-- banner -->

    <!-- filter section -->

    <section class="filter-upper">

        <div class="container">

            <div class="filter-wapper">

                <div class="row justify-content-center">

                    <div class="col-lg-4">

                        <div class="main-holder">

                            <div class="img-holder">

                                <span><img src="<?php bloginfo('template_url'); ?>/img/Icon-On-time.svg" alt=""></span>

                            </div>

                            <div class="text-wapper">

                                <?php the_field('filter_ontime__text'); ?>
                            </div>

                            <span class="line"></span>

                        </div>

                    </div>
              
                    <!--  -->

                    <div class="col-lg-4">

                        <div class="main-holder">

                            <div class="img-holder">

                                <span><img src="<?php bloginfo('template_url'); ?>/img/icon-chat.svg" alt=""></span>

                            </div>

                            <div class="text-wapper">
                            <?php the_field('filter_customer_review'); ?>

                            </div>

                            <span class="line"></span>

                        </div>

                    </div>

                    <!--  -->

                    <div class="col-lg-4">

                        <div class="main-holder">

                            <div class="img-holder">

                                <span><img src="<?php bloginfo('template_url'); ?>/img/icon-payment-filter.svg" alt=""></span>

                            </div>

                            <div class="text-wapper">

                            <?php the_field('filter_payment'); ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- filter section -->

    <!-- products-list -->

    <section class="product_list">

        <div class="container">

            <div class="main-wapper">

                <div class="row">

                    <div class="col-lg-4">

                        <div class="list-item">
                            

                            <h3>Top Rated Products</h3>
                          
                            <ul>

                                <li class="active">

                                <div class="list-item-wapper">
                                    <?php
                                    $category = get_field('select_category');
                                    $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' =>  $category, 'orderby' => 'rand' );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    ?>
                                        <div class="wapper">
                                       
                                     
                                            <div class="img-holder">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $product_image[0]; ?>" alt=""></a>

                                            </div>

                                            <div class="text">

                                            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>

                                                <!-- <div class="reating">

                                                 <span class="price">(65-760)</span>

                                                    <ul>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                    </ul> 

                                                </div> -->

                                                <div class="old-to-new">

                                                    <!-- <span class="old-price">$250.00</span> -->

                                                    <span class="new-price"><?php echo $product->get_price_html(); ?></span>

                                                </div>

                                            </div>

                                        </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_query(); ?>
                                        <!--  -->

                                        <!-- <div class="wapper">

                                            <div class="img-holder">

                                                <img src="<?php bloginfo('template_url'); ?>/img/2-battry.jpg" alt="">

                                            </div>

                                            <div class="text">

                                                <h5>Commercial - 4</h5>

                                                <div class="reating">

                                                    <span class="price">(65-760)</span>

                                                    <ul>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                    </ul>

                                                </div>

                                                <div class="old-to-new">

                                                    <span class="old-price">$250.00</span>

                                                    <span class="new-price">$201.00</span>

                                                </div>

                                            </div>

                                        </div>

                                    

                                        <div class="wapper">

                                            <div class="img-holder">

                                                <img src="<?php bloginfo('template_url'); ?>/img/3-battry.png" alt="">

                                            </div>

                                            <div class="text">

                                                <h5>Charger - EZGO</h5>

                                                <div class="reating">

                                                    <span class="price">(65-760)</span>

                                                    <ul>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                    </ul>

                                                </div>

                                                <div class="old-to-new">

                                                    <span class="old-price">$250.00</span>

                                                    <span class="new-price">$201.00</span>

                                                </div>

                                            </div>

                                        </div>

                                        

                                      <div class="wapper">

                                            <div class="img-holder">

                                                <img src="<?php bloginfo('template_url'); ?>/img/4-battry.png" alt="">

                                            </div>

                                            <div class="text">

                                                <h5>Automotive</h5>

                                                <div class="reating">

                                                    <span class="price">(65-760)</span>

                                                    <ul>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                        <li><span><img src="<?php bloginfo('template_url'); ?>/img/star-icon.svg" alt=""></span></li>

                                                    </ul>

                                                </div>

                                                <div class="old-to-new">

                                                    <span class="old-price">$250.00</span>

                                                    <span class="new-price">$201.00</span>

                                                </div>

                                            </div>

                                        </div> 

                                    </div> -->

                                </li>

                            </ul>

                        </div>

                    </div>

                    <!--  -->

                    <div class="col-lg-8">

                        <div class="main-wapper-content">
                        <?php
                                    $category = get_field('select_category');
                                    $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' =>  $category, 'order' => 'DESC' );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    ?>

                            <h2><?php the_title() ; ?></h2>

                            <p><?php the_content() ; ?></p>

                            <a href="<?php the_permalink(); ?>" class="read-info">More Info</a>

                            <div class="img-holder">

                                <figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure>

                            </div>

                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- products-list -->

    <!-- products-daly -->

    <section class="products-daly">

        <div class="container">

            <h2>All Fresh Products Daily!</h2>

            <div class="daily-slick-slider">
        <?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 10  ,'orderby' => 'ID','order' => 'ASC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  
    $product = wc_get_product(get_the_ID());

    $myimage = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $product_price = $product->get_price();
    ?>

            <div class="element">

                    <a href="<?php the_permalink() ?>">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php echo $myimage[0];?>);"></figure>

                        </div>

                        <div class="text">

                            <h3><?php the_title(); ?></h3>

                            <div class="price">

                                <span class="rate"><?php echo wc_price($product_price); ?></span>

                                <a href="<?php echo $product->add_to_cart_url(); ?>"><span style="display: block" class="icon"></span></a>

                            </div>

                        </div>

                    </a>

                </div>

    <?php
   
   
    endwhile;
    wp_reset_query();
?>
   

                <!-- <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/daly-01.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>Advert Duel Color</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/best-products-battery-02.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>36V 105AH</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/best-products-battery-03.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>Battery 65 name</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/best-products-battery-04.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>Advert Duel Color</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/daly-01.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>Advert Duel Color</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="element">

                    <a href="#">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/daly-01.png);"></figure>

                        </div>

                        <div class="text">

                            <h3>Advert Duel Color</h3>

                            <div class="price">

                                <span class="rate">$44.00 – $60.00</span>

                                <span class="icon"></span>

                            </div>

                        </div>

                    </a>

                </div>    -->

            </div>

        </div>

    </section>

    <!-- products-daly -->



    <!-- Best Products  -->

    <section class="best-products">

        <div class="container">

            <h2>Best Products </h2>

            <div class="video-wapper">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="main-wapper">

                            <div class="fig-wapper">

                                <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/img-video-01.jpg);"></figure>

                            </div>

                            <span class="play-button"></span>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="main-wapper">

                            <div class="fig-wapper">

                                <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/img-video-02.jpg);"></figure>

                            </div>

                            <span class="play-button"></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--  -->

    <section class="bg-update">

        <div class="container">

            <div class="main-wapper">

                <div class="text">

                    <h2>Best Products BG</h2>
                    <?php
                                    $category = 'best-products';
                                    $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' =>  $category, 'order' => 'rand' );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                                    $best_product_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>

                    <a href="<?php the_permalink(); ?>" class="read-info">More Info</a>

                </div>

                <div class="img-div">

                    <div class="img-wapper">

                        <figure style="background-image: url(<?php echo $best_product_img[0];?>);"></figure>

                    </div>

                </div>
                <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
            </div>

        </div>

    </section>

    <!-- Best Products  -->



    <!-- Subcription -->

    <section class="subscribe">

        <div class="container">

            <div class="main-wapper-holder">

                <div class="row">

                    <div class="col-lg-5 p-0">

                        <div class="main-img-wapper">

                            <div class="fig-holder">

                                <figure style="background-image: url(<?php the_field('subscription_bg');?>);"></figure>

                            </div>

                            <div class="text">

                                <p>Submit your details to Book yourself an Online</p>

                                <a href="#">Consultation Now</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7 p-0">
                        <div id="last-form-home">
                        <?php  echo do_shortcode('[contact-form-7 id="49" title="Last form home"]'); ?> 
                        </div>
                        <!-- <form action="#" id="last-form-home" name="fast-form">

                            <div class="row">

                                <div class="col-lg-6 col-md-12">

                                    <div class="form-wapper">

                                        <input type="text" name="Fast name" id="name" placeholder="First Name*">

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-12">

                                    <div class="form-wapper">

                                        <input type="text" name="last name" id="name" placeholder="Last Name*">

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-12">

                                    <div class="form-wapper">

                                        <input type="number" name="Number" id="number" placeholder="Phone Number*">

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-12">

                                    <div class="form-wapper">

                                        <input type="email" name="email" id="email" placeholder="Email Address*">

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-wapper">

                                        <label for="" class="select-box">

                                            <select class="form-select" aria-label="Default select example">

                                                <option selected>Pick up Program*</option>

                                                <option value="1">One</option>

                                                <option value="2">Two</option>

                                                <option value="3">Three</option>

                                              </select>

                                        </label>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="form-wapper">

                                        <label for="" class="select-box">

                                            <select class="form-select" aria-label="Default select example">

                                                <option selected>Booking For*</option>

                                                <option value="1">One</option>

                                                <option value="2">Two</option>

                                                <option value="3">Three</option>

                                              </select>

                                        </label>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="form-wapper">

                                        <label for="" class="date-lable">

                                            <input type="date" name="date" id="date" placeholder="Pick a Date*" min="20.05.2023">

                                        </label>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-wapper">

                                        <textarea name="message" id="" placeholder="Write something ..."></textarea>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="btn-wapper">

                                        <button>Book Online</button>

                                    </div>

                                </div>

                            </div>

                        </form> -->

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Subcription -->



<?php get_footer(); ?>