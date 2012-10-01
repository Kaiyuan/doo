<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			sidebar.inc.php
* @Package:		Kaiyuan
* @Action:		Doo theme for GetSimple CMS
*
*****************************************************/
?><aside id="sidebar">
	<!-- wrap each sidebar section like this -->
	<div class="section">
		<div class="border-top" style="padding: 0 0 60px 0">
			<?php get_component('sidebar');	?>
		</div>
	</div>
</aside>