<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		Kaiyuan
* @Action:		Doo theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->
	<footer class="clearfix" >
		
		<?php get_footer(); ?>
		
		<!-- 
			Theme Credits
			Please consider keeping the links to the developer and GetSimple if you use this theme
		-->
	 	<div class="wrapper">
			<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">Theme by <a href="http://boxks.com" >Kaiyuan</a> &middot; <?php get_site_credits(); ?></div>
		</div>
	</footer>
	 
</body>
</html>