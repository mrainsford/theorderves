<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url') ?>/custom-styles.css">
<script src="https://use.typekit.net/ik/nSfiRyegor4OAsCvF1bU_qBxH5v6soSzc7kmi9ZKodIfe7jffO2bhbIPH2wuFR9hwQZLweZKFeJX52SXFQsRFDqhjh4cwDyqZewXF2quZRqXZeJ-XMI7O1sGZANkZemkicmDjhNlSeB0pPoRdhXC-AoKScNaShmkZAsTie80ZkoyZeNKZPoRdhXC-AoKScNaShmkZAsTie80ZkoliWF8SY48ScmCZABDZPoRdhXCiey8da4qZW4hZWFRdhu3jAooOcFzdPUaiaS0-AoKScNaShmkZAsTie80ZkoyZeNKZPoRdhXCiaiaOc80j14ziaF8Scmq-WsTdcS0dWmDZWgkZW48demySh90jhNlOYiaikoX-emzScs8S1Z8ShFzdWgyd1q0jhNlJ6TKdhszdcqliW4aH6qJ6B6bMg6VJM4HgIuuShAbML7RUFwB.js" type="text/javascript"></script>
<!-- Other scripts -->
<script type="text/javascript">
	try {Typekit.load();} catch(e) {}
</script>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">
			<!-- @TODO SOCIAL LINKS -->
			<!-- @TODO HEADER IMAGE*/ -->
			<!-- @TODO TOP NAVIGATION*/ -->
			<div class="navigation">
				<a href="/index.php/store">the menu</a>
				<a href="index.php/how-it-works/">how it works</a>
				<a href="/index.php/meet-the-chef">meet the chef</a>
				<a href="/index.php/products">products</a>
				<a href="/index.php/get-in-touch">get in touch</a>
			</div>
			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
