<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<?php the_title( '<h1 class="heading">', '</h1>' ); ?>
		</header>
		<section class="content px-3 py-5 p-md-5">
		    <div class="container">
