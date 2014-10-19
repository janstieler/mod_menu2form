<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu2form
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list		= ModMenuHelper::getList($params);
$base		= ModMenuHelper::getBase($params);
$active		= ModMenuHelper::getActive($params);
$active_id 	= $active->id;
$path		= $base->tree;

$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));

$formtype	= $params->get('formtype');
$chosen		= $params->get('chosen');

if ($chosen) {
	$doc->addscript('http://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js');
	$doc->addStyleSheet('http://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css');
}

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_menu2form', $params->get('layout', 'default'));
}
