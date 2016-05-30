    <footer class="main_footer bg_dark">
        <div class="container">
            <div class="col-md-12">
                &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>
                <div class="social_wrap">
                    <ul>
                        <?php if ( have_posts() ) : query_posts('cat=3');
                        while (have_posts()) : the_post(); ?>
                        <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true) ?>" target="blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true); ?>"></i></a></li>
                                        
                            <?php the_content(); ?>
                            <?php the_post_thumbnail(array(100, 100)); ?>

                        <?php endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
           
    
            
	
	<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/parallax.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<!--	<script src="libs/sliphover/jquery.sliphover.min.js"></script>не раьботает в chrome-->
	<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
    <?php wp_footer(); ?>
</body>
</html>

