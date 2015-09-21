<?php
/**
 * This file is used to run database queries when installing
 * a modification
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
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
 * Create any database tables you may need here. Remember to set your indexes!
 *
 * Example:
 * $db_table_name[] = array(
 *     'name' => 'id_member',
 *     'auto' => false,
 *     'default' => '',
 *     'type' => 'int',
 *     'size' => 11,
 *     'null' => false
 * );
 *
 * name:    name of the column you're creating
 * auto:    boolean value, indicates if column is AUTO_INCREMENT
 * default: set a default value, set false if not needed
 * type:    type of value (int, varchar, text, etc.)
 * size:    value size, in integer form
 * null:    boolean value, indicates if column is null
 */
$db_table_name[] = array();

/**
 * Set your table indexes here.
 *
 * Example:
 * $db_table_name_indexes[] = array(
 *     'columns' => array('id_member'),
 *     'type' => 'primary'
 * );
 *
 * columns: array of columns to set as indexes
 * type:    type of index (primary, index, fulltext, etc.)
 */
$db_table_name_indexes[] = array();

/**
 * Create the table using $smcFunc
 */
$smcFunc['db_create_table']('{db_prefix}table_name', $db_table_name, $db_table_name_indexes, array(), 'update');


/**
 * Run any extra queries you may need here
 * 
 * Example:
 * $smcFunc['db_query']('', '
 *    SELECT {db_prefix}members
 *    SET real_name = {string:realname}
 *    WHERE id_member = {int:id_member}',
 *    array(
 *       'real_name' => $context['member_name'],
 *       'id_member' => $context['id_member']
 *    )
 * );
 */


/**
 * Checks if we're done
 */
if (SMF == 'SSI')
   echo 'Database changes are complete!';
