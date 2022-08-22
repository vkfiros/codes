function wpc_vc_shortcode( $atts ) {
    echo '<center><div class="bread">';
	echo get_breadcrumb();
	echo '</div></center>';
}
add_shortcode( 'my_vc_php_output', 'wpc_vc_shortcode');
