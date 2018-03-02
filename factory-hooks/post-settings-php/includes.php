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