<?php


$medical_clinic_lite_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$medical_clinic_lite_text_transform = get_theme_mod( 'menu_text_transform_medical_clinic_lite','CAPITALISE');
    if($medical_clinic_lite_text_transform == 'CAPITALISE'){

		$medical_clinic_lite_custom_css .='#main-menu ul li a{';

			$medical_clinic_lite_custom_css .='text-transform: capitalize ; font-size: 15px !important;';

		$medical_clinic_lite_custom_css .='}';

	}else if($medical_clinic_lite_text_transform == 'UPPERCASE'){

		$medical_clinic_lite_custom_css .='#main-menu ul li a{';

			$medical_clinic_lite_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$medical_clinic_lite_custom_css .='}';

	}else if($medical_clinic_lite_text_transform == 'LOWERCASE'){

		$medical_clinic_lite_custom_css .='#main-menu ul li a{';

			$medical_clinic_lite_custom_css .='text-transform: lowercase ; font-size: 15px !important';

		$medical_clinic_lite_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

	$medical_clinic_lite_container_width = get_theme_mod('medical_clinic_lite_container_width');

			$medical_clinic_lite_custom_css .='body{';

				$medical_clinic_lite_custom_css .='width: '.esc_attr($medical_clinic_lite_container_width).'%; margin: auto';

			$medical_clinic_lite_custom_css .='}';
