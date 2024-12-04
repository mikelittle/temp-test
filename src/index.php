<?php

function add_filter( string $hook, callable $function, int $priority = 10, int $accepted_args = 1 ) {
	//return add_action( $hook, $function, $priority, $accepted_args );
	return $hook;
}

echo 'Hello World!';
syntax_error;
$test = 'testing';
echo $test ?? 'nothing';

add_filter('get_the_guid', fn() => '');
