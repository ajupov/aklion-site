<?
/*
 * @package aklion
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="mailru-domain" content="CBZhQSD2cRr8E7s7" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?= bloginfo('template_directory'); ?>/assets/images/favicon.png ?>">
		<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/vendors/awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/vendors/materialize/css/materialize.min.css"/>
		<link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/style.css"/>
		<title><? wp_title(); ?></title>
		<? wp_head(); ?>
	</head>
	<body>
		<header>
			<? get_template_part('partials/header'); ?>
			<? get_template_part('/partials/back-call'); ?>
			<? get_template_part('/partials/info-modal'); ?>
		</header>