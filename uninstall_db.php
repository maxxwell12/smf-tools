<?php
/**
 * This file is used to run database queries when uninstalling
 * a modification
 *
 * (c) Jason Clemons <jason@simplemachines.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF')) {
   require_once(dirname(__FILE__) . '/SSI.php');
   db_extend('packages');
} elseif(!defined('SMF')) {
   die('<strong>Error:</strong> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');
}

/**
 * Remove any tables we created
 *
 * Example:
 * $smcFunc['db_query']('', 'DROP TABLE {db_prefix}modification', array());
 */


/**
 * Remove any columns we may have created too
 *
 * Example:
 * $smcFunc['db_query']('', 'DELETE mod_column FROM {db_prefix}modification', array());
 */


/**
 * Checks if we're done
 */
if (SMF == 'SSI')
   echo 'Database changes are complete!';
