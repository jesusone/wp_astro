<?php
    class My_Walker_Nav_Menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown-menu uppercase gray-border clearfix\">\n";
        }
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
            $item_html = '';
            parent::start_el($item_html, $item, $depth, $args);

            if ( $item->is_dropdown && $depth === 0 ) {
                $item_html = str_replace( '<a', '<a class="scroll"', $item_html );
                $item_html = str_replace( '</a>', ' <b data-toggle="dropdown"></b></a>', $item_html );
            }

            $output .= $item_html;
        }
        function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
            if ( $element->current )
                $element->classes[] = 'active';

            $element->is_dropdown = !empty( $children_elements[$element->ID] );

            if ( $element->is_dropdown ) {
                if ( $depth === 0 ) {
                    $element->classes[] = 'dropdown-toggle nav-toggle';
                } elseif ( $depth === 1 ) {
                    // Extra level of dropdown menu, 
                    // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
                    $element->classes[] = 'dropdown-submenu';
                }
            }

            parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
        }
    }    
