<?php
/**
 * Template Name: Home (modelo Carlos Matuck)
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(	'matuck' );
?>
	<?php if ( apply_filters( 'xango_carlos_matuck_show_about_home', false ) ) : ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 about-bar carlos-matuck">
				<div class="about-bar-container">
					<?php $show = apply_filters( 'xango_carlos_matuck_about_home_title', null );?>
					<?php if ( ! empty ( $show ) ) : ?>
						<?php $txt = apply_filters( 'xango_carlos_matuck_about_home_title', null );?>
						<h2 class="about-title"><?php echo apply_filters( 'the_title', $txt );?></h2><!-- .about-title -->
					<?php endif;?>
					<?php $show = apply_filters( 'xango_carlos_matuck_about_home_content', null );?>
					<?php if ( ! empty ( $show ) ) : ?>
						<?php $txt = apply_filters( 'xango_carlos_matuck_about_home_content', null );?>
						<div class="col-md-12 about-content">
							<?php echo apply_filters( 'the_content', $txt );?>
						</div><!-- .col-md-12 about-content -->
					<?php endif;?>
					<div class="col-md-12 text-center about-link-container">
						<?php $show = apply_filters( 'xango_carlos_matuck_about_home_link', null );?>
						<?php if ( ! empty ( $show ) ) : ?>
							<?php $link = apply_filters( 'xango_carlos_matuck_about_home_link', null );?>
							<?php $show = apply_filters( 'xango_carlos_matuck_about_home_link_text', null );?>

							<?php $txt = ( ! empty ( $show ) ? $show : __( 'Read More', 'odin' ) ); ?>
							<a href="<?php echo esc_url( $link );?>" class="btn btn-primary about-more">
								<?php echo apply_filters( 'the_title', $txt );?>
							</a>
						<?php endif;?>
					</div><!-- .col-md-12 text-center -->
				</div><!-- .about-bar-container -->
			</div><!-- .col-md-12 about-bar -->
			<div class="clear"></div><!-- .clear -->
		</div><!-- .row -->
	</div><!-- .container -->
	<?php endif;?>
	<?php do_action( 'xango_carlos_matuck_after_about_home');?>

<?php
get_footer();
