<?php
/**
 * The template for displaying the front page.
 *
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<!-- generate_before_main_content -->

<?php
function trick_front_add_bkgd_img() {
echo '<div class="custom-text">doyou</div>';
};
add_action('generate_before_page_header', 'trick_front_add_bkgd_img');
?>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>
			<?php do_action('generate_before_main_content'); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) : ?>
					<div class="comments-area">
						<?php comments_template(); ?>
					</div>
				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>
			<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action('generate_sidebars');
get_footer();
