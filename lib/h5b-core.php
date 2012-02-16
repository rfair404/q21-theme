<?php 

function q21(){    
    
        if ( defined( 'Q21_SHORT' ) && Q21_SHORT === true ) return;
        
        
/*this is where the magic happens, leaving it in functins for now till I find a better place for q21 to live - a class perhaps? */
get_header(); 
	do_action ( 'q21_content_start' ); 
	do_action ( 'q21_content_end' ); 
get_footer(); 
}