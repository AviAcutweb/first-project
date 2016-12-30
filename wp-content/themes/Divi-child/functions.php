<?php

	function et_widgets_init1() {
	register_sidebar( array(
		'name' => esc_html__( 'Top Header', 'Divi' ),
		'id' => 'top-header',
		'before_widget' => '<div id="%1$s" class="et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .et_pb_widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

}
add_action( 'widgets_init', 'et_widgets_init1' );			
