<?php

function add_filter( string $hook, callable $function, int $priority = 10, int $accepted_args = 1 ) {
	//return add_action( $hook, $function, $priority, $accepted_args );
	return $hook;
}

echo 'Hello World!';

$test = 'testing';
echo esc_html( $test ?? 'nothing' );

add_filter('get_the_guid', fn() => '');
