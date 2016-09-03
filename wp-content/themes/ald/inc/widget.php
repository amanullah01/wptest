<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function shellbd_widgets_init() {

	register_sidebar( array(
		'name'          => 'Share Sidebar',
		'id'            => 'share_sidebar_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'shellbd_widgets_init' );
?>