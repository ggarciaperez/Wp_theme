<?php
/**Error page for MyFirstTheme*/

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'MyFirstTheme' ); ?></h1>
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/404.gif" class="404">
		<div class="intro-text"><p><?php _e( 'What are u doing do you wanna sink the ship?', 'MyFirstTheme' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'MyFirstTheme' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
