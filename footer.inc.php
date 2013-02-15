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
	 		<div style="padding: 20px 0 40px 0">
				<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
				<div class="right">Theme by <a href="https://github.com/Kaiyuan/doo" >Kaiyuan</a> &middot; <?php get_site_credits(); ?></div>
			</div>
		</div>
	</footer>
	 
</body>
</html>