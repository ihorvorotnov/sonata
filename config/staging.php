<?php
/**
 * The base configuration for testing/staging environment.
 *
 * @package WordPress
 */

define( 'WP_DEBUG',                 true );
define( 'WP_DEBUG_DISPLAY',         false );
define( 'WP_DEBUG_LOG',             true );
define( 'SAVEQUERIES',              true );
define( 'SCRIPT_DEBUG',             false );
define( 'JETPACK_DEV_DEBUG',        true );
define( 'QM_HIDE_SELF',             true );
define( 'DEBUG_WP_REDIRECT',        true );
define( 'DEBUG_WP_REDIRECT_ADMIN',  true );
define( 'WP_ALLOW_REPAIR',          true ); // {$your_site}/wp-admin/maint/repair.php

define( 'AUTOSAVE_INTERVAL',        300 );
define( 'WP_POST_REVISIONS',        false );
define( 'EMPTY_TRASH_DAYS',         0 ); // Disable trash

define( 'WP_CRON_LOCK_TIMEOUT',     60 );
define( 'DISABLE_WP_CRON',          false );
define( 'ALTERNATE_WP_CRON',        false );
