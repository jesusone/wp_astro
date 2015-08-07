<?php
    /**
    * The Header template.
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="author" content="TheThemeLab">
    <title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo PR_THEME_URL; ?>assets/images/ico/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo PR_THEME_URL; ?>assets/images/ico/ico-57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="<?php echo PR_THEME_URL; ?>assets/images/ico/ico-72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="<?php echo PR_THEME_URL; ?>assets/images/ico/ico-114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="<?php echo PR_THEME_URL; ?>assets/images/ico/ico-144.png" sizes="144x144">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Pre-loader -->
	<div class="preloader">
		<div id="loaderImage"></div>
	</div>
	<?php pr_load_hearder();//Show header in promsu.?>
<!-- End Pre-loader -->
<!--/#navigation--> 

