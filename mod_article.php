<?php
/**
 * @package     Module.Admin
 * @subpackage  mod_article
 *
 * @copyright   Copyright (C) 2020 Thomas Hunziker.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependencies.
JLoader::register('ModArticleHelper', __DIR__ . '/helper.php');

$item = ModArticleHelper::getItem($params);

require JModuleHelper::getLayoutPath('mod_article', $params->get('layout', 'default'));
