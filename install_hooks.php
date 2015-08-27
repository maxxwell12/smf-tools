<?php
/**
 * This file is used to run database queries when installing
 * a modification
 *
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2015 Simple Machines and individual contributors
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.1 Beta 2
 */

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	die('<strong>Error:</strong> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

// Define the hooks
$hook_functions = array(
	'integrate_pre_include' => 'Sources/Subs-Downloads.php',
	'integrate_actions' => 'downloads_createActionHook',
	'integrate_menu_buttons' => 'downloads_createMenuHook',
);

// Are we uninstalling?
if ($context['uninstall'])
    $call = 'remove_integration_function';
else
    $call = 'add_integration_function';

// Do the deed
foreach ($hook_functions as $hook => $function)
	$call($hook, $function);