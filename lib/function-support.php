<?php

function q21_template_context() {
    return null;
}

function q21_taxonomy_csv($tax) {
    global $post; 
    $output = $tax;
	$taxes = wp_get_object_terms( $post->ID, $tax ); 
       	if(!empty($taxes)){
  		if(!is_wp_error( $taxes )){
    			$output .= '<ul class="term-list">';
    				foreach($taxes as $tax){
      					$output .= '<li><a href="'.get_term_link($tax->slug, $tax).'">'.$tax->name.'</a></li>'; 
    				}
    			$output .= '</ul>';
  		}
	} else {
            //celebrate! 
            $output = '';
        }
    return $output;
}