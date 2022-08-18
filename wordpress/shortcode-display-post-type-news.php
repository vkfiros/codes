// Sortcode for display news
function create_shortcode_news_post_type(){
  
    $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => '10',
                    'publish_status' => 'published',
                 );
  
    $query = new WP_Query($args);
  $result .= '<div class="post-row row">';
    if($query->have_posts()) :
  
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .= '<div class="post-item col-3">';
        $result .= '<div class="post-poster">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="post-name">' . get_the_title() . '</div>';
        $result .= '<div class="post-desc">' . get_the_content() . '</div>'; 
        $result .= '</div>';
  
        endwhile;
  
        wp_reset_postdata();
  
    endif;    
  $result .= '</div>';
    return $result;            
}
  
add_shortcode( 'package-list', 'create_shortcode_Package_post_type' ); 
