<?php
/**
 * Displays the site navigation.
 */

$site_url = get_site_url();
$logo_src = ( trailingslashit( get_template_directory_uri() ) . 'assets/images/logo.png' );

if ( has_custom_logo() ) {

	$logo_src = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) )[0];

}

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

<nav class="navbar navbar-expand-lg navbar-dark" >
        
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="navigation" class="collapse navbar-collapse flex-column" >

		<div class="site-logo"><a href="<?php echo $site_url ?>"><img class="mb-3 mx-auto logo" src="<?php echo $logo_src ?>" alt="logo" ></a></div>

		<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => 'navbar-nav flex-column text-sm-center text-md-left',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
		?>
		<hr>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</div>

</nav>

<?php endif; ?>
