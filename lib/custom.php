<?php

define( 'UPLOADS', ''.'assets' );

//Manual excerpt scripts
add_post_type_support('page','excerpt');

//[about] shortcode
function about_page () {
  $page_id = 16;  //Page ID
  $page_data = get_page( $page_id );
  global $more;
  $more = 0;
  $content = apply_filters('the_content', $page_data->post_excerpt);
  echo $content;
}

add_shortcode( 'about', 'about_page' );

?>
