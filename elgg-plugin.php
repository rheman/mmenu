<?php

$composer_path = '';
if (is_dir(__DIR__ . '/vendor')) {
	$composer_path = __DIR__ . '/';
}

return [
	'bootstrap' => \ColdTrick\Mmenu\Bootstrap::class,
	'settings' => [
		'topbar_to_site' => 0,
	],
	'views' => [
		'default' => [
			'jquery.mmenu/' => $composer_path . 'vendor/bower-asset/mmenu/dist',
		],
	],
	'actions' => [
		'mmenu/save_menu_state' => [],
	],
];
