<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js lt-ie9 lt-ie8 ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js lt-ie9 ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<?php wp_head(); // wp_head ?>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
	
	<header class="menu-container navbar navbar-default" <?php hybrid_attr( 'header' ); ?>>

		<div class="container position-initial">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div id="site-branding" class="site-navbar-brand pull-left">
				<?php $logo = get_opt('site_logo'); ?>
				<?php if ( isset($logo) ): ?>
					<a href="<?php echo site_url(); ?>" class="site-branding-link">
						<?php echo wdb_responsive_img($logo); ?>
					</a>
				<?php endif ?>
			</div><!-- #branding -->

			<?php wdb_use_menu_hover_dropdown(); ?>
			<?php get_template_part( 'menu', 'primary' ); /* Loads the menu-primary.php template */ ?>

		</div><!-- .container -->

	</header><!-- #header -->

	<main <?php hybrid_attr( 'content' ); ?>>
