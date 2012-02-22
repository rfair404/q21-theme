<?php 
/*
*Sets up the navigation menus
* @package q21
* includes our 'descriptions' custom walker allowing menus to display item descriptions - e.g. <?php q21_menu('header_primary', 'header-primary', 'descriptions'); ?>
*/ 

/*make our top nav menu */
register_nav_menus( array(
'header_primary' => __( 'Header Primary', 'header-primary' ), )
);

register_nav_menus( array(
'header_secondary' => __( 'Header Secondary', 'header-secondary' ), )
);

/*register_nav_menus( array(
'sidebar_primary' => __( 'Sidebar Primary', 'sidebar-primary' ), )
);

register_nav_menus( array(
'sidebar_secondary' => __( 'Siedbar Secondary', 'sidebar-secondary' ), )
);*/

register_nav_menus( array(
'footer_primary' => __( 'Footer Primary', 'footer-primary' ), )
);

register_nav_menus( array(
'footer_secondary' => __( 'Footer Secondary', 'footer-secondary' ), )
);

function q21_menu($menuid, $menuclass, $walker = null) {

if ( function_exists('wp_nav_menu') ) {
			if ( $walker == 'descriptions' ) $walker = new Show_Desc_Walker(); else $walker = null; 
			$nav = wp_nav_menu(array(
				'theme_location' => $menuid,
				'container' => '',
				'menu_class' => $menuclass,
				'walker' => $walker,
				'fallback_cb'     => 	false,
				'echo' => 0
			));
			echo '<nav class="'.$menuclass.'">' . $nav . '</nav>';
			
		}

}

class Show_Desc_Walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = 'class="';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		//$class_names = '';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'">';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .' class="' .$class_names .'">';
	
		$item_output .= $args->link_before .'<span class="item-title">'. apply_filters( 'the_title', $item->title, $item->ID ) . '</span>' . $args->link_after;
	
		$item_output .= ! empty( $item->description )     ? '<span class="item-description">'.$item->description.'</span>' : '<span class="item-description empty-description">&nbsp;</span>';
		$item_output .= '</a>';
	
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}
}
