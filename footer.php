<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<!-- Footer -->
			<footer class="main-footer">
        <div class="container">
            <div class="main-wapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="logo-wapper">
                            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/main-logo.svg" alt=""></a>
                        </div>
                        <?php  dynamic_sidebar('footer_text'); ?>
                        <div class="follow">
                            <h5>Follow us</h5>
                            <ul>
                                <li>
                                    <a href="<?php  dynamic_sidebar('social_facebook'); ?>" class="facebook" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="<?php  dynamic_sidebar('social_twitter'); ?>" class="twitter" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="<?php  dynamic_sidebar('social_instagram'); ?>" class="insagram" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end">
                        <div class="quick-links">
                            <h3>Quick Links</h3>
                            <?php wp_nav_menu(array("theme_location"=>"footer-menu")); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="contact-us-footer">
                            <h3>Contact</h3>
                            <ul>
                                <li>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-home.svg" alt=""></span>
                                    <?php  dynamic_sidebar('footer_address'); ?>
                                </li>
                                <li>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-call-footer.svg" alt=""></span>
                                    <a href="#"> <?php  dynamic_sidebar('footer_phone'); ?></a>
                                </li>
                                <li>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-email-footer.svg" alt=""></span>
                                    <a href="#"><?php  dynamic_sidebar('contact_email'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-footer">
            <div class="container text-center">
                <p>Copyright © nortex All Rights Reserved. Design & Development <a href="<?php  dynamic_sidebar('copyright'); ?>">Business Pro Digital</a></p>
            </div>
        </div>
    </footer>
    <!-- Footer -->





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/placeholder.min.js"></script>



    <!-- main Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/coustom.js"></script>

<script>
$('#search_form').submit(function(event){
   event.preventDefault();
    $('#result_msg').html('');
    var link="<?php echo admin_url('admin-ajax.php')?>";
    var form=$('#search_form').serialize();
    var formData = new FormData;
    formData.append('action','search_product');
    formData.append('search_product',form);
    $('#submit').attr('disabled',true);
    $.ajax({
        url:link,
        data:formData,
        processData:false,
        contentType:false,
        type:'post',
        success:function(result){
            $('#submit').attr('disabled',false);
            if(result.success==true){
                $('#search_form')[0].reset();
            }
            $('#result_msg').html('<a href="'+result.data.url+'">'+result.data.title+'</a>')
            // $('#p_img').html(result.data.thumb)  
            $('#p_price').html(result.data.price)   
            $('#p_img').html('<img src="'+result.data.thumb+'"></img>')     
            //result.success
            //result.data
            //alert(result.data.title)
        }
    });
});    
</script>
<?php wp_footer(); ?>

</body>
</html>
