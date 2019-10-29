<?php
/**
 * chopovskyi carbon fields
 *
 * @package chopovskyi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if( class_exists( "\\Carbon_Fields\\Field\\Field" ) ){
	Container::make( 'theme_options', __( 'Murren' ) )->add_fields(
		array(
			Field::make( 'text', 'mr_phone', __( 'Номер телефона' ) ),
			Field::make( 'text', 'mr_address', __( 'Адрес' ) ),
			Field::make( 'text', 'mr_email', __( 'E-mail' ) ),
			Field::make( 'text', 'mr_copywrite', __( 'Копирайт' ) ),
		) 
		)->add_fields(
			array(
				Field::make( 'text', 'mr_instagram', __( 'Instagram' ) )->set_help_text( 'Введіть ссилку на ваш Instagram' ),
				Field::make( 'text', 'mr_facebook', __( 'Facebook' ) )->set_help_text( 'Введіть ссилку на ваш Facebook' ),
			) 
		)->add_fields(
			array(
				Field::make( 'complex', 'gallery-10', __( 'Фото для слайдера') )->add_fields(array(
					Field::make( 'image', 'gallery-9', __( 'Фотографія' ) ),
				)),
			)
		);
	    
};


