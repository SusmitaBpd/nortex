<?php 

/** Template Name: Product */



get_header();

?>
<section class="main-banner">


<div class="banner">
<h2><?php the_title();?></h2>


</div>

</section>


<section class="products-daly">

<div class="container">

    <div class="col-md-12">
<div class="row">
    
        <?php
        global $paged;
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 8,
            'paged' => $paged,
            'orderby' => 'ID',
            'order' => 'ASC'
              );
    // $args = array( 'post_type' => 'product', 'posts_per_page' => 4  ,'orderby' => 'ID','order' => 'ASC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  
    $product = wc_get_product(get_the_ID());

    $myimage = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $product_price = $product->get_price();
    ?>
<div class="col-md-3">
            <div class="element">

                    <a href="<?php the_permalink() ?>">

                        <div class="fig-wapper">

                            <figure style="background-image: url(<?php echo $myimage[0];?>);"></figure>

                        </div>

                        <div class="text">

                            <h3><?php the_title(); ?></h3>

                            <div class="price">

                                <span class="rate"><?php echo wc_price($product_price); ?></span>
                               <!-- <a href="<?php echo $product->add_to_cart_url(); ?>"><span style="display: block" class="icon"></span><?php do_action( 'woocommerce_after_shop_loop_item' );?></a>  -->
                         <?php do_action( 'woocommerce_after_shop_loop_item' );?>
                       <?php  echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                            </div>

                        </div>

                    </a>

                </div>
</div>

    <?php
   
   
    endwhile;
    ?>
    <nav>
        <ul class="pagination">
            <li><?php previous_posts_link( '&laquo; PREV', $loop->max_num_pages) ?></li> 
            <li><?php next_posts_link( 'NEXT &raquo;', $loop->max_num_pages) ?></li>
        </ul>
    </nav>
    <?php
    wp_reset_query();
?>
    </div>
</div>
</div>

</section>

<?php get_footer(); ?>