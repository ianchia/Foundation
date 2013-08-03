<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="large-8 columns main-content" role="main">
        <h1 class="page-title">
            <?php
            if ( is_category() ) {
                printf( __( 'Category Archives: %s', '_s' ), '<span>' . single_cat_title( '', false ) . '</span>' );

            } elseif ( is_tag() ) {
                printf( __( 'Tag Archives: %s', '_s' ), '<span>' . single_tag_title( '', false ) . '</span>' );

            } elseif ( is_author() ) {
                /* Queue the first post, that way we know
                 * what author we're dealing with (if that is the case).
                */
                the_post();
                printf( __( 'Author Archives: %s', '_s' ), '<span class="author"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();

            } elseif ( is_day() ) {
                printf( __( 'Daily Archives: %s', '_s' ), '<span>' . get_the_date() . '</span>' );

            } elseif ( is_month() ) {
                printf( __( 'Monthly Archives: %s', '_s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

            } elseif ( is_year() ) {
                printf( __( 'Yearly Archives: %s', '_s' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

            } else {
                _e( 'Archives', '_s' );

            }
            ?>
        </h1>
        <hr/>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>

			<h2><?php _e('No posts.', 'foundation' ); ?></h2>
			<p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'foundation' ); ?></p>

		<?php endif; ?>

		<?php foundation_pagination(); ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
