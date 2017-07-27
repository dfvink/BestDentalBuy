<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->


<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-center show-for-large">
		<?php joints_top_nav(); ?>	
	</div>
</div>


<ul class="bdb_logo">
	<li><a href="<?php echo home_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bdb_logo.svg" alt="<?php bloginfo('name'); ?>">
	</a></li>
</ul>

<ul class="menu hamburger hide-for-large">
	<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
	<!--<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
</ul>

<div class="show-for-large">
	<ul class="leden_inlog">
		<li><a href="/inloggen"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_leden.svg" style="margin-right: 1rem;"> ledenpagina		
		</a></li>
	</ul>
</div>