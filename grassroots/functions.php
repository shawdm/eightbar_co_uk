<?php
function eb_posts_by_year() {
  // array to use for results
  $years = array();

  // get posts from WP
  $posts = get_posts(array(
    'posts_per_page' => -1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
  ));

  // loop through posts, populating $years arrays
  foreach($posts as $post) {
    $years[date('Y', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by year
  krsort($years);

  return $years;
}


function eb_excerpt(){
    $charcters_length = 100;
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    
    $shortened_excerpt = $excerpt;
    
    if( $excerpt != null && strlen($excerpt) > $charcters_length){
        $shortened_excerpt = substr($excerpt, 0, $charcters_length) . "...";
    }
    
    return $shortened_excerpt;
}



?>