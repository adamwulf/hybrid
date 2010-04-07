<?php
/**
 * Primary Menu Template
 *
 * Displays the Primary Menu if it has active menu items.
 * @link http://themehybrid.com/themes/hybrid/menus
 *
 * @package Hybrid
 * @subpackage Template
 */

if ( is_nav_menu_active( 'primary-menu' ) ) : ?>

	<div id="primary-menu" class="menu-container">

		<?php hybrid_before_primary_menu(); // Before primary menu hook ?>

		<?php wp_nav_menu( array( 'menu' => 'primary-menu', 'container_class' => 'menu', 'menu_class' => '', 'fallback_cb' => '' ) ); ?>

		<?php hybrid_after_primary_menu(); // After primary menu hook ?>

	</div><!-- #primary-menu .menu-container -->

<?php endif; ?>