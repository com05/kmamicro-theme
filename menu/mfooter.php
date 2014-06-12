<?php if ( has_nav_menu( 'mfooter' ) ) : // Check if there's a menu assigned to the 'secondary' location. ?>

	<nav <?php hybrid_attr( 'menu', 'mfooter' ); ?>>

		<h3 class="menu-toggle">
			<span class="screen-reader-text"><?php _e( 'Navigation', 'stargazer' ); ?></span>
		</h3><!-- .menu-toggle -->

		<?php wp_nav_menu(
			array(
				'theme_location'  => 'mfooter',
				'container'       => '',
				'menu_id'         => 'menu-footer-items',
				'menu_class'      => 'menu-items',
				'fallback_cb'     => '',
				'items_wrap'      => '<div class="wrap"><ul id="%s" class="%s">%s</ul></div>'
			)
		); ?>

	</nav><!-- #menu-secondary -->

<?php endif; // End check for menu. ?>