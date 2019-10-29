<?php

class Header_Select_Walker extends Walker_Nav_Menu {
    /*
     * Позволяет перезаписать <ul class="sub-menu">
     */
    function start_lvl(&$output, $depth = 0, $args = array()) {
        /*
         * $depth – уровень вложенности, например 2,3 и т д
         */

        $output .= '<ul class="lang-select__list--children">';
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        /*
         * $depth – уровень вложенности, например 2,3 и т д
         */

        $output .= '</ul>';

    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;


        /*
         * Некоторые из параметров объекта $item
         * ID - ID самого элемента меню, а не объекта на который он ссылается
         * menu_item_parent - ID родительского элемента меню
         * classes - массив классов элемента меню
         * post_date - дата добавления
         * post_modified - дата последнего изменения
         * post_author - ID пользователя, добавившего этот элемент меню
         * title - заголовок элемента меню
         * url - ссылка
         * attr_title - HTML-атрибут title ссылки
         * xfn - атрибут rel
         * target - атрибут target
         * current - равен 1, если является текущим элементом
         * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
         * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
         * menu_order - порядок в меню
         * object_id - ID объекта меню
         * type - тип объекта меню (таксономия, пост, произвольно)
         * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
         * type_label - название данного типа с локализацией (Рубрика, Страница)
         * post_parent - ID родительского поста / категории
         * post_title - заголовок, который был у поста, когда он был добавлен в меню
         * post_name - ярлык, который был у поста при его добавлении в меню
         */
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
         * Генерируем строку с CSS-классами элемента меню
         */

        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'lang-select_menu_css_class', array_filter( $classes ), $item, $args ) );
        if( $depth > 0 ) {
            $class_names = ' class="' . esc_attr( $class_names ) . ' lang-select__item--children"';
        } else {
            $class_names = ' class="' . esc_attr( $class_names ) . ' lang-select__item"';
        }

        /*
         * Генерируем элемент меню
         */

        $output .= $indent . '<li' . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

        $linkClass = '';
        if( $item->current == 1 && $depth == 0) {
            $linkClass .= 'lang-select__link lang-select__link--active';
        } else if( $depth > 0) {
            $linkClass .= 'lang-select__link--children';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        } else if( $item->current == 1 && $depth > 0 ) {
            echo 'active';
            $linkClass .= 'lang-select__link--children lang-select__link--active';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        } else {
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $linkClass .= 'lang-select__link';
        }

        $attributes .=  ' class="' . $linkClass . '"';

        // ссылка и околоссылочный текст
        $item_output = $args->before;

        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        if( $args->walker->has_children == 1 ) {
            $item_output .= '<a class="lang-select__toggle-children"></a>';
        }
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_lang-select_menu_start_el', $item_output, $item, $depth, $args );
    }
}
