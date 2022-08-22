// List categories
function display_cats() {

   $html .= '<div class="cats-main owl-catego owl-carousel owl-theme">';
   $categories = get_categories('taxonomy=product_cat&post_type=products');
foreach($categories as $category): {

	$imgca = z_taxonomy_image_url($category->term_id);
	$catlink = get_term_link( $category );
	
	$html .= '<div class="cat-listing item"><a href="'.$catlink.'">';
	$html .= '<img src="'. $imgca . '">';
	$html .= '<h4>'. $category->name . '</h4>';
	$html .= '</a></div>';
 }

	endforeach;
$html .= '</div>';
     return $html;
}
add_shortcode("cats", "display_cats");
