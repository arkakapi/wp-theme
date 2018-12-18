<?php wp_footer(); ?>
<!-- Footer -->
<footer class="page-section bg-gray-lighter footer pb-60">
    <div class="container">

        <!-- Footer Logo -->
        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
            <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/site_black.png" width="78" height="36" alt=""/></a>
        </div>
        <!-- End Footer Logo -->

        <!-- Social Links -->
        <div class="footer-social-links mb-110 mb-xs-60">
			<?php
			$menu = get_menu_by_location( 'footer_social' );
			foreach ( $menu as $item ):
				echo '<a href="' . $item->url . '" title="' . $item->title . '" target="_blank"><i class="fa fa-' . strtolower( $item->title ) . '"></i></a>';
			endforeach;
			?>
        </div>
        <!-- End Social Links -->

        <!-- Footer Text -->
        <div class="footer-text">

            <!-- Copyright -->
            <div class="footer-copy font-alt">
                &copy; <?php echo bloginfo( 'blog_name' ) . ' ' . date( 'Y' ); ?>.
            </div>
            <!-- End Copyright -->

            <div class="footer-made">
				<?php echo __( 'The hacktivist was made by a group of people.', 'arkakapi' ); ?>
            </div>

        </div>
        <!-- End Footer Text -->

    </div>


    <!-- Top Link -->
    <div class="local-scroll">
        <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- End Top Link -->

</footer>
<!-- End Footer -->

</div>
<!-- End Page Wrap -->

<!-- JS -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.viewport.mini.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.simple-text-rotator.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contact-form.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ajaxchimp.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/placeholder.js"></script><![endif]-->

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bc64da80c55ed0011c0228a&product=inline-share-buttons' async='async'></script>

</body>
</html>
