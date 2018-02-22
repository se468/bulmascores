<?php 

class Bulmascores_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '';
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '';
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $url = '';
        if( !empty( $item->url ) ) {
            $url = $item->url;
        }
        $classes     = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = '';
        if ( in_array( 'current-menu-item', $classes ) ) {
            $class_names .= 'is-active';
        }

        $output .= '<a href="' . $url . '" class="navbar-item '.$class_names.'">' . $item->title . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '';
    }
}
