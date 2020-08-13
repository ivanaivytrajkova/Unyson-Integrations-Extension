<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Integrations', 'fw' );
$manifest['description'] = __(
	'This extension will add a fully fledged integrations module that will let you display your projects'
	.' using the built in integrations pages.',
	'fw'
);
$manifest['version'] = '1.0.1';
$manifest['display'] = true;
$manifest['standalone'] = true;

$manifest['github_update'] = 'ivanaivytrajkova/Unyson-Integrations-Extension';

$manifest['github_repo'] = 'https://github.com//ivanaivytrajkova/Unyson-Integrations-Extension';
// $manifest['uri'] = 'http://manual.unyson.io/en/latest/extension/portfolio/index.html#content';
$manifest['author'] = 'ivanaivytrajkova';
$manifest['author_uri'] = 'https://embedsocial.com/';
