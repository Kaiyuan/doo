<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		Kaiyuan
* @Action:		Doo theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="zh" > <!--<![endif]-->
<head>
<meta charset="utf-8">

  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" /><!--缩放-->
	<link href="<?php get_theme_url(); ?>/webfont.css" rel="stylesheet" media="screen, print" >
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet" media="screen, print" >
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/highlight/styles/default.css">
	<script src="<?php get_theme_url(); ?>/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
	<script src="<?php get_theme_url(); ?>/jquery.pjax.js"></script>
	<script src="<?php get_theme_url(); ?>/script.js"></script>
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >
	
	<!-- site header -->
	<header>
		<div class="header">
			<div class="wrapper">
				
				<!-- logo/sitename -->
				<a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
				
				<!-- main navigation -->
				<nav id="main-nav">
					<ul>
						<?php get_navigation(get_page_slug(FALSE)); ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<!-- breadcrumbs: only show when NOT on homepage 
		<div class="breadcrumbs" >
			<div class="wrapper">
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</div>
		</div>-->
		
  </header>