<?php
function diviruchild7_scripts() {
	// FontAwesome
wp_enqueue_style('diviruchild7_fontawesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	
//wp_enqueue_script( 'toggle-search.js', get_stylesheet_directory_uri() . 'js/toggle-search.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'diviruchild7_scripts' );

add_shortcode("summarize-options", "summarizeOptions");

function summarizeOptions ( $atts, $content="" ) {
  $values = explode("</option>",$content);
  $frequencies = array_count_values($values);
  $options = array_keys($frequencies);
  $mapFn = function($e,$t) {
    return $e ." ($t)";
  };
  $values = array_map($mapFn,array_keys($frequencies),array_values($frequencies));
  print_r ($values);
  return implode("</option>",$values);
}
?>
