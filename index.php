<?php get_header(); ?>

<!-- Head Section -->
<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">

        <div class="row">
            <div class="col-md-12 content-title">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php echo bloginfo( 'blog_name' ) . ' BLOG'; ?></h1>
            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->

<!-- Section -->
<section class="page-section">
    <div class="container relative">

        <div class="row">

			<?php get_template_part( 'template-parts/content', 'list' ); ?>

			<?php get_sidebar(); ?>

        </div>

    </div>
</section>
<!-- End Section -->

<?php get_footer(); ?>
