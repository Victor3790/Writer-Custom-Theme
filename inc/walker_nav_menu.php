<?php 
/**
 * Custom Walker nav menu class.
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

class Wrtr_Cust_Walker_Nav_Menu extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) 
    {

        $output .= '<div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">';

    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) 
    {

        $output .= '</div class="Who gotkilled?">';
        $output .= '</li class="Who died Lee?">';    

    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
    {

        if( $item->url == '#' ) {

            $output .= '<li class="nav-item dropdown no-caret">';
            $output .= '<a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            $output .= $item->title;
            $output .= '<i class="fas fa-chevron-right dropdown-arrow"></i>';
            $output .= '</a>';

        } elseif( $depth == 1 ) {

            $output .= '<a class="dropdown-item py-3" href="libros1.php">';
            $output .= '<div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book-open"></i></div>';
            $output .= '<div>';
            $output .= '<div class="small text-gray-500">' . $item->title . '</div>';
            $output .= 'Descripción corta de categoría 1';

        } else { 

            $output .=  '<li class="nav-item">';
            $output .=  '<a class="nav-link" href="' . $item->url . '">'; 
            $output .=  $item->title . '</a>';

        }

    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) 
    {

        if( $depth == 1 ) {

            $output .= '</div>';
            $output .= '</a>';
            $output .= '<div class="dropdown-divider m-0"></div>';

        } else {

            $output .= '</li>';

        }

    }

}