<?php

/**
 * @file
 * Example implementation of ACSF pre-settings-php hook.
 *
 * @see https://docs.acquia.com/site-factory/tiers/paas/workflow/hooks
 */

/**
*  Set vcs and sync dirs to writable directories above docroot. 
*/
$config_directories['vcs'] = '../config/default';
$config_directories['sync'] = '../config/default';


$settings['install_profile'] = 'thunder';

$site = $_ENV['AH_SITE_GROUP'];

$config['config_split.config_split.blog']['status'] = TRUE;
$config['config_split.config_split.press_room']['status'] = TRUE;

// Which config splits do we enable on each site? 
if ($site == "blue") {
	$config['config_split.config_split.blue']['status'] = TRUE;
	$config['config_split.config_split.blog']['status'] = TRUE;
	$config['config_split.config_split.press_room']['status'] = TRUE;
}

if ($site == "green") {
	$config['config_split.config_split.green']['status'] = TRUE;
	$config['config_split.config_split.blog']['status'] = TRUE;
	$config['config_split.config_split.press_room']['status'] = FALSE;
}

if ($site == "red") {
	$config['config_split.config_split.red']['status'] = TRUE;
	$config['config_split.config_split.blog']['status'] = FALSE;
	$config['config_split.config_split.press_room']['status'] = TRUE;
}

if ($site == "yellow") {
	$config['config_split.config_split.yellow']['status'] = TRUE;
	$config['config_split.config_split.blog']['status'] = FALSE;
	$config['config_split.config_split.press_room']['status'] = FALSE;
}