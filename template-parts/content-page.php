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

<?php if ( get_post_type( get_the_ID() ) == 'post' &&  !empty(get_field( 'title' ))): ?>
<!-- Modal -->
<div id="buyModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align: center;">
					<a href="<?php the_field( 'link' ); ?>"><?php the_field( 'title' ); ?></a>
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<a href="<?php the_field( 'link' ); ?>" target="_blank"><img src="<?php the_field( 'image' ); ?>" class="img-responsive" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal End -->
<?php endif; ?>
