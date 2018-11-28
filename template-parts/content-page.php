<?php the_post(); ?>

<!-- Head Section -->
<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">

        <div class="row">
            <div class="col-md-12 content-title">
				<?php the_title( '<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">', '</h1>' ); ?>
				<?php if ( get_post_type( get_the_ID() ) == 'post' ): ?>
                    <div class="hs-line-4 font-alt black"><?php the_field( 'author_name' ); ?></div>
				<?php endif; ?>
            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->

<!-- Section -->
<section class="page-section">
    <div class="container relative">

        <div class="row">

            <!-- Content -->
            <div class="col-sm-12">

                <!-- Text -->
                <div class="blog-item-body">
					<?php the_content(); ?>
                </div>
                <!-- End Text -->

                <div class="sharethis-inline-share-buttons"></div>

            </div>
            <!-- End Content -->

        </div>
</section>
<!-- End Section -->