<?php
/**
 * Plugin Name: Kato Policy
 * Plugin URI: https://github.com/katomedia/kato-policy
 * Git URI: https://github.com/katomedia/kato-policy
 * Description: Special functions for Kato Poicy
 * Version: 0.0.1
 * Author: Leo J.
 * Author URI: http://lji.me
 */
 
function kato_policy_print_type(){
	if(function_exists('the_field')){
		$type = get_field('type');
		$field = get_field_object('type');
		$label = $field['choices'][ $type ];
		print '<li class="meta-type type-' . $type . '">';
		print $label;
		print '</li>';
	}
}

add_action('kato_policy_recommend', 'kato_policy_print_type');




function kato_policy_type_styles(){
	wp_register_style('types', plugins_url("kato-policy/types.css"));
	wp_enqueue_style('types');
}

add_action( 'wp_enqueue_scripts', 'kato_policy_type_styles' );
