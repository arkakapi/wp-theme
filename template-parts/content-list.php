<!-- Content -->
<div class="col-sm-8">

    <!-- Text -->
    <div class="blog-item-body">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <!-- Post -->
                <div class="blog-item">

                    <!-- Post Title -->
					<?php the_title( sprintf( '<h2 class="blog-item-title font-alt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    <!-- Author, Categories, Comments -->
                    <div class="blog-item-data">
                        <i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
                        <span class="separator">&nbsp;</span>
                        <i class="fa fa-user"></i> <?php the_field( 'author_name' ); ?>
                        <span class="separator">&nbsp;</span>
                    </div>

                    <!-- Text Intro -->
                    <div class="blog-item-body">
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>

                    <!-- Read More Link -->
                    <div class="blog-item-foot">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-mod btn-round  btn-small"><?php echo __( 'READ MORE', 'arkakapi' ); ?> <i class="fa fa-angle-right"></i></a>
                    </div>

                </div>
                <hr>
                <!-- End Post -->
			<?php endwhile; ?>
		<?php else : ?>
            <!-- Post -->
            <div class="blog-item">
                <!-- Post Title -->
                <h2 class="blog-item-title font-alt"><?php echo __( "Sorry, we don't found any post.", 'arkakapi' ); ?></h2>
            </div>
            <!-- End Post -->
		<?php endif; ?>

        <!-- Pagination -->
        <div class="pagination">
			<?php
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'arkakapi' ),
				'next_text'          => __( 'Next page', 'arkakapi' ),
				'screen_reader_text' => ' '
			) );
			?>
        </div>
        <!-- End Pagination -->

    </div>
    <!-- End Text -->

</div>
<!-- End Content -->