<?php
/**
 * Displays header site branding
 */

$site_title = get_bloginfo( 'name' );
$site_url   = get_site_url();

?>

<a class="site-title pt-lg-4 mb-0" href="<?php echo $site_url ?>"><?php echo $site_title ?></a>
