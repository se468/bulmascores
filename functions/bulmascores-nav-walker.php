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

        $output .= '<a href="' . $url . '" class="navbar-item">' . $item->title . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '';
    }
}